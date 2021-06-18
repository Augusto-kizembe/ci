<?php
defined('BASEPATH') or exit('No Direct Script is Allowed');

class IdiomaController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('RequestModel','request');
    }

    //Funçao que guarda automaticamente o tipo de idioma na sessão
    public function idiomaCheng($idioma)
    {
        
        $this->session->set_userdata([
            'idioma' => [
                'designacao' => $idioma
            ]
        ]); 
        
        echo json_encode("bom"); 
    }

}