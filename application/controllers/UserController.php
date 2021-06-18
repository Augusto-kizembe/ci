<?php
defined('BASEPATH') or exit('No direct script is allowed');

class UserController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper('idioma_helper');
        if($this->session->userdata('idioma')['designacao'] == "fs"){

            $this->lang->load('frances', 'france');
        }else if($this->session->userdata('idioma')['designacao'] == "pt"){
            $this->session->unset_userdata('idioma');
        
        }else if($this->session->userdata('idioma')['designacao'] == "is"){
            $this->lang->load('english', 'english'); 
        }

        $this->load->model('UserModel','user');
    }

    public function index()
    {
        $dados['users'] = $this->user->all();
        $this->load->view('includes/header');
        $this->load->view('admin/users',$dados);
        $this->load->view('includes/footer');
    }

    public function create(){
        $this->load->view('includes/header');
        $this->load->view('admin/register');
        $this->load->view('includes/footer');
    }

    public function store(){
        $password = random_string('alnum',8);
        $dados = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'password' => sha1($password),
            'online' => 0,
            'isactivo' => 0
        ];
        if($this->user->create($dados)){
            $dados['password'] = $password; 
            $msg = $this->load->view('site/email_password',$dados,true);
            $this->email->from('suport@eduiba.com', 'Suport Eduiba');
            $this->email->to($this->input->post('email')); 
            $this->email->subject('Criação de Conta');
            $this->email->message($msg);  
            $this->email->send();
            return redirect('funcionarios');
        }else{
            return redirect('funcionario/novo');
        }
    }

    public function edit($id)
    {
        $dados['user'] = $this->user->find($id);
        $this->load->view('includes/header');
        $this->load->view('admin/edit',$dados);
        $this->load->view('includes/footer');
    }

    public function update(){
        $dados = array(
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "phone" => $this->input->post('phone'),
        );
        $this->user->update($dados,$this->input->post('id'));
        return redirect('/funcionarios');
    }

    public function alterarEstado($id){
        $this->user->alterarEstado($id);
        return redirect('funcionarios');
    }

}