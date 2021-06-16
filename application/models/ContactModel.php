<?php
defined('BASEPATH') or exit('No direct script allowed');

class ContactModel extends CI_Model
{
    public function all()
    {
        $query = $this->db->get('contacts');
        return $query->result();
    }

    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('contacts');
        $this->where('id',$id);
        return $this->db->get()->result();
    }

    public function findByEmail($email)
    {
        $this->db->select('*');
        $this->db->from('contacts');
        $this->where('email',$email);
        return $this->db->get()->result();
    }

    public function create($dados)
    {
        if($this->db->insert('contacts',$dados)){
            return true;
        }
        return false;
    }

    public function update($dados, $id)
    {
        $this->db->update('contacts',$dados);
        return $this->db->where('id',$id);
    }

    public function destroy($id)
    {
        $this->delete('contacts');
        return $this->where('id',$id);
    }
}