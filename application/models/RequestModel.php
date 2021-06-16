<?php
defined('BASEPATH') or exit('No direct script allowed');

class RequestModel extends CI_Model
{
    public function save($dados){
        if($this->db->insert('requests',$dados)){
            return true;
        }
        return false;
    }

    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('requests');
        $this->db->where("id",$id);
        return $this->db->get()->result()[0];
    }

    public function all(){
        $query = $this->db->get('requests');
        return $query->result();
    }

    public function update($dados, $id){
        $this->db->where("id",$id);
        if($this->db->update('requests',$dados)){
            return true;
        }
        return false;
    }

    public function servico($id)
    {
        $this->db->select("*");
        $this->db->from('services');
        $this->db->where("services.id = $id");
        return $this->db->get()->result()[0];
    }

    public function cliente($id)
    {
        $this->db->select('*');
        $this->db->from('clients');
        $this->db->where("id",$id);
        return $this->db->get()->result()[0];
    }

    public function funcionario($id){
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where("id",$id);
        return $this->db->get()->result()[0];
    }

    //Busca uma determinada solicitacao no estado de atendimento
    public function solicitacao($id){
        $dado = $this->find($id);
        $dados = array();
        if($dado->estado == 1){
            $servico = $this->servico($dado->service_id);
            $cliente = $this->cliente($dado->client_id);
            $funcionario = $this->funcionario($dado->user_id);
            if($dado->service_id == 1){
                $solicitacao = ['solicitacao_id' => $dado->id, 'estado' => $dado->estado,'pais' => $dado->pais,
                'tipo_negocio' => $dado->tipo_negocio,'objectivo' => $dado->objectivo,'nome' => $cliente->name,
                'email' => $cliente->email, 'phone' => $cliente->phone, 'servico_id' => $servico->id, 'servico' => $servico->titulo, 'funcionario' => $funcionario->name];
                array_push($dados,$solicitacao);
            }elseif($dado->service_id == 2  || $dado->service_id == 3){
                $solicitacao = ['solicitacao_id' => $dado->id, 'estado' => $dado->estado,'pais' => $dado->pais,
                'produto' => $dado->produto,'qtd_produto' => $dado->qtd_produto,'nome' => $cliente->name, 'email' => $cliente->email,
                'phone' => $cliente->phone, 'servico_id' => $servico->id, 'servico' => $servico->titulo, 'funcionario' => $funcionario->name];
                array_push($dados,$solicitacao);
            }elseif($dado->service_id == 4){
                $solicitacao = ['solicitacao_id' => $dado->id, 'estado' => $dado->estado,'produto' => $dado->produto,
                'qtd_produto' => $dado->qtd_produto,'preco' => $dado->preco,'localizacao' => $dado->localizacao,'fazenda_empresa' => $dado->fazenda_empresa,
                'nome' => $cliente->name, 'email' => $cliente->email, 'phone' => $cliente->phone, 'servico_id' => $servico->id, 'servico' => $servico->titulo, 'funcionario' => $funcionario->name];
                array_push($dados,$solicitacao);
            }
            
            return  $dados;
        }

        return  null;
    }

    //Busca todas as solicitacoes de um determinado estado
    public function solicitacoes($control){
        $dados = $this->all();
        $solicitacoes = array();
        foreach($dados as $dado){
            $servico = $this->servico($dado->service_id);
            $cliente = $this->cliente($dado->client_id);
            if($control == 1 && $dado->estado == null){
                $solicitacao = ['solicitacao_id' => $dado->id, 'estado' => $dado->estado,'nome' => $cliente->name, 'email' => $cliente->email, 'phone' => $cliente->phone, 'servico' => $servico->titulo];
                array_push($solicitacoes,$solicitacao);
            }else if($control == 2 && $dado->estado == 1){
                $funcionario = $this->funcionario($dado->user_id);
                $solicitacao = ['solicitacao_id' => $dado->id, 'estado' => $dado->estado,'nome' => $cliente->name, 'email' => $cliente->email, 'phone' => $cliente->phone, 'servico' => $servico->titulo, 'funcionario' => $funcionario->name];
                array_push($solicitacoes,$solicitacao);
            }else if($control == 3 && $dado->estado == 2){
                $funcionario = $this->funcionario($dado->user_id);
                $solicitacao = ['solicitacao_id' => $dado->id, 'estado' => $dado->estado,'nome' => $cliente->name, 'email' => $cliente->email, 'phone' => $cliente->phone, 'servico' => $servico->titulo, 'funcionario' => $funcionario->name];
                array_push($solicitacoes,$solicitacao);
            }else if($control == 4){
                if(isset($dado->user_id)){
                    $funcionario = $this->funcionario($dado->user_id);
                    $solicitacao = ['solicitacao_id' => $dado->id, 'estado' => $dado->estado,'nome' => $cliente->name, 'email' => $cliente->email, 'phone' => $cliente->phone, 'servico' => $servico->titulo, 'funcionario_id' => $funcionario->id];
                    array_push($solicitacoes,$solicitacao);
                }
                
            }
        }
        return $solicitacoes;
    }
     
}