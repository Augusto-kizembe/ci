<?php
defined('BASEPATH') or exit('No Direct Script is Allowed');

class ServicoModel extends CI_Model
{

    public function __construct(){
        parent::__construct();
    }

    public function all(){
        $query =  $this->db->get('services');
        return $query->result();
    }

    public function find($id)
    {
        $this->db->select("*");
        $this->db->from('services');
        $this->db->where("services.id = $id");
        return $this->db->get()->result()[0];
    }
}