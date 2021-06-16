<?php
defined('BASEPATH') or die('No direct script allowed');

class LoginController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('UserModel','user');
    }

    public function showLoginForm()
    {
        $this->load->view('admin/login');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->user->findByEmail($email);
        if($user != NULL && sha1($password) == $user->password){
            if(!$user->isactivo){
                $this->session->set_flashdata([
                    'message' => "A sua conta está desativada"
                ]);
                redirect('login');
            }
            $this->user->alterarEstadoActividade($user->id);
            $this->session->set_userdata([
                'eduiba' => [
                    'name' => $user->name,
                    'id' => $user->id,
                    'isAdmin' => $user->isadmin
                ]
            ]);
            redirect('/');
        }else{
            $this->session->set_flashdata([
                'message' => "Credênciais Inválidas"
            ]);
            redirect('login');
        }
    }

    public function logout()
    {
        $this->user->alterarEstadoActividade($this->session->userdata('eduiba')['id']);
        $this->session->unset_userdata('eduiba');
        redirect('/');
    }

    public function showChangePasswordForm()
    {
        $this->load->view('includes/header');
        $this->load->view('admin/change_password');
        $this->load->view('includes/footer');
    }

    public function changePassword()
    {
        $user_id = $this->session->userdata('eduiba')['id'];
        $user = $this->user->find($user_id);
        if($user->password == sha1($this->input->post('old_password')))
        {
            $new_password = $this->input->post('new_password');
            $new_password_confirme = $this->input->post('new_password_confirme');
            if($new_password == $new_password_confirme){
                $dados = array(
                    'password' => sha1($new_password)
                );
                $this->session->unset_userdata('eduiba');
                $this->user->update($dados,$user_id);
                $this->session->set_flashdata([
                    'message' => 'A sua palavra passe foi alterada com sucesso! Faça o login',
                    'type' => 'success'
                ]);
                redirect('login');
            }else{
                $this->session->set_flashdata([
                    'message' => 'As palavras passe não combinam'
                ]);
                redirect('alterar_senha');
            }
        }else{
            $this->session->set_flashdata([
                'message' => 'A sua antiga palavra passe está errada! tente novamente'
            ]);
            redirect('alterar_senha');
        }
    }
}