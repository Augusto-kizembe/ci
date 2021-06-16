<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->config('email');
    }

    function send() {
        $dados['nome'] = $this->input->post('nome');
        $msg = $this->load->view('site/email',$dados,true);
        $this->email->from('suport@eduiba.com', 'Suport Eduiba');
        $this->email->to($this->input->post('email')); 
        $this->email->subject($this->input->post('assunto'));
        $this->email->message($msg);  
        if($this->email->send()){
            $this->session->set_flashdata([
                'message' => 'Obrigado por nos contactar! Entraremos em contacto brevemente',
                'type' => 'success'
            ]);
            redirect('contactos');
        }else{
            $this->session->set_flashdata([
                'message' => 'Estamos com alguns problemas! Entraremos em contacto brevemente',
                'type' => 'error'
            ]);
            redirect('contactos');
        }
    }

    function teste(){
        $this->load->view('site/email');
    }
}