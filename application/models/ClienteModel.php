<?php
defined('BASEPATH') or exit('No direct script allowed');

class ClienteModel extends CI_Model
{
    public function all()
    {
        $query = $this->db->get('clients');
        return $query->result();
    }

    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('clients');
        $this->db->where("id",$id);
        return $this->db->get()->result()[0];
    }

    public function findByEmail($email)
    {
        $this->db->select('*');
        $this->db->from('clients');
        $this->db->where("email",$email);
        $cliente = $this->db->get()->result();
        if(count($cliente) > 0){
            return $cliente[0];
        }
        return null;
    }

    public function save($dados)
    {
        if($this->db->insert('clients',$dados)){
            return $this->db->insert_id();
        }
        return false;
    }
}