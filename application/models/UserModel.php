<?php
defined('BASEPATH') or exit('No Direct Script is Allowed');

class UserModel extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }

    public function all(){
        $query =  $this->db->get('users');
        return $query->result();
    }

    public function find($id){
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where("id",$id);
        return $this->db->get()->result()[0];
    }

    public function findByEmail($email)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where("email",$email);
        $cliente = $this->db->get()->result();
        if(count($cliente) > 0){
            return $cliente[0];
        }
        return null;
    }

    public function create($dados){
        if($this->db->insert('users',$dados)){
            return true;
        }
        return false;
    }

    public function update($dados, $id){
        $this->db->where("id",$id);
        $this->db->update('users',$dados);
    }

    public function alterarEstado($id){
        $this->db->select('id,isactivo');
        $this->db->from('users');
        $this->db->where("id = $id");
        $user = $this->db->get()->result()[0];
        if($user->isactivo == 1){
            $this->db->where("id",$id);
            $this->db->update('users',['isactivo' => 0]);
        }else{
            $this->db->where("id",$id); 
            $this->db->update('users',['isactivo' => 1]);
        }
    }

    public function alterarEstadoActividade($id){
        $this->db->select('id,online');
        $this->db->from('users');
        $this->db->where("id = $id");
        $user = $this->db->get()->result()[0];
        if($user->online == 1){
            $this->db->where("id",$id);
            $this->db->update('users',['online' => 0]);
        }else{
            $this->db->where("id",$id); 
            $this->db->update('users',['online' => 1]);
        }
    }

}