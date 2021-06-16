<?php
defined('BASEPATH') or exit('No Direct Script is Allowed');

class SiteController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('ServicoModel');
        $this->load->model('RequestModel','request');
    }

    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('site/home');
        $this->load->view('includes/footer');
    }


    public function sobre()
    {
        $this->load->view('includes/header');
        $this->load->view('site/sobre');
        $this->load->view('includes/footer');
    }

    public function servicos()
    {
        $dados['servicos'] = $this->ServicoModel->all();
        $this->load->view('includes/header');
        $this->load->view('site/servicos',$dados);
        $this->load->view('includes/footer');
    }

    public function projectos()
    {
        $this->load->view('includes/header');
        $this->load->view('site/projectos');
        $this->load->view('includes/footer');
    }

    public function contactos()
    {
        $this->load->view('includes/header');
        $this->load->view('site/contactos');
        $this->load->view('includes/footer');
    }
    
    public function solicitacoes()
    {
        $user_id =  $this->session->userdata('eduiba')['id'];
        $dados = ['solicitacoes' => $this->request->solicitacoes(1),'user_isAdmin' => $this->session->userdata('eduiba')['isAdmin'], 'contro' => 1,'user_id' => $user_id];
        $this->load->view('includes/header');
        $this->load->view('site/solicitacoes', $dados);
        $this->load->view('includes/footer');
    }

    public function funcionarios()
    {
        $this->load->view('includes/header');
        $this->load->view('site/funcionarios');
        $this->load->view('includes/footer');
    }
}