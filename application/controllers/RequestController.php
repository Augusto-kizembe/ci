<?php
defined('BASEPATH') or exit('No direct script is allowed');

class RequestController extends CI_Controller
{
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('idioma')['designacao'] == "fs"){

            $this->lang->load('frances', 'france');
        }else if($this->session->userdata('idioma')['designacao'] == "pt"){
            $this->session->unset_userdata('idioma');
        
        }else if($this->session->userdata('idioma')['designacao'] == "is"){
            $this->lang->load('english', 'english'); 
        }

        $this->load->model('ServicoModel');
        $this->load->model('RequestModel','request');
        $this->load->model('ClienteModel','cliente');
    }

    public function showRequestForm($id)
    {
        $dados['servico'] = $this->ServicoModel->find($id);
        $this->load->view('includes/header');
        if($id == 1){
            $this->load->view('site/consultoria', $dados);
        }else if($id == 2){
            $this->load->view('site/exportacao', $dados);
        }else if($id == 3){
            $this->load->view('site/importacao', $dados);
        }else{
            $this->load->view('site/escoamento', $dados);
        }
        $this->load->view('includes/footer', $dados);
    }

    public function storeConsultoria(){
        $dados['servico'] = $this->ServicoModel->find($this->input->post('servico_id'));

        $this->form_validation->set_rules('nome_cliente','Nome do Cliente','trim|required|min_length[5]',array('min_length'	=>	'Informe o seu nome completo, por favor.' ));
        $this->form_validation->set_rules('email','Endereço de Email','trim|required|valid_email',array('valid_email'	=>	'Informe um email valido, por favor.' ));
        $this->form_validation->set_rules('telefone','Nº de Telefone','trim|required|min_length[9]|numeric',array('numeric'	=>	'Digite apenas numero, por favor.','min_length'	=>	'os seus digitos de contacto não estam correto, por favor introduz um contacto valido.' ));
        $this->form_validation->set_rules('pais','Sua Nacionalidade','trim|required|min_length[3]');
        $this->form_validation->set_rules('tipo_negocio','Tipo de Negocio','trim|required|min_length[2]');
        $this->form_validation->set_rules('objectivo','Objectivo de Negocio','trim|required|min_length[5]',array('min_length'	=>	'Informe uma frase longa, por favor.' ));
       
        if($this->form_validation->run()  == FALSE){
            $dados['sms_erro'] = validation_errors();
        }else{
            $cliente = $this->cliente->findByEmail($this->input->post('email'));
            if($cliente != null){
                $cliente_id = $cliente->id;
            }else{
                $dados_cliente = [
                    'name' => $this->input->post('nome_cliente'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('telefone')
                ];
                $cliente_id = $this->cliente->save($dados_cliente);
            }
            if($cliente_id != false){
                $dados_consultoria = [
                    'pais' => $this->input->post('pais'),
                    'tipo_negocio' => $this->input->post('tipo_negocio'),
                    'objectivo' => $this->input->post('objectivo'),
                    'service_id' => $this->input->post('servico_id'),
                    'client_id' => $cliente_id
                ];
                if($this->request->save($dados_consultoria)){
                    $this->session->set_flashdata([
                        'message' => "O seu pedido de consultoria foi enviado com sucesso! Entraremos em contacto brevemente"
                    ]);
                    return redirect('servicos');
                }
            }
           
        }
        $this->load->view('includes/header');
        $this->load->view('site/consultoria', $dados);
        $this->load->view('includes/footer');
    }

    public function storeExportacao(){
        $dados['servico'] = $this->ServicoModel->find($this->input->post('servico_id'));

        $this->form_validation->set_rules('nome_cliente','Nome do Cliente','trim|required|min_length[5]',array('min_length'	=>	'Informe o seu nome completo, por favor.' ));
        $this->form_validation->set_rules('email','Endereço de Email','trim|required|valid_email',array('valid_email'	=>	'Informe um email valido, por favor.' ));
        $this->form_validation->set_rules('telefone','Nº de Telefone','trim|required|min_length[9]|numeric',array('numeric'	=>	'Digite apenas numero, por favor.','min_length'	=>	'os seus digitos de contacto não estam correto, por favor introduz um contacto valido.' ));
        $this->form_validation->set_rules('pais','Sua Nacionalidade','trim|required|min_length[3]');
        $this->form_validation->set_rules('produto','Tipo de Produto','trim|required|min_length[2]');
        $this->form_validation->set_rules('qtd_produto','Quantidade de Produto','trim|required|min_length[1]|numeric',array('numeric' => 'Digite apenas numero, por favor.' ));
       
        if($this->form_validation->run()  == FALSE){
            $dados['sms_erro'] = validation_errors();
        }else{
            
            $cliente = $this->cliente->findByEmail($this->input->post('email'));
            if($cliente != null){
                $cliente_id = $cliente->id;
            }else{
                $dados_cliente = [
                    'name' => $this->input->post('nome_cliente'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('telefone')
                ];
                $cliente_id = $this->cliente->save($dados_cliente);
            }
            if($cliente_id != false){
                $dados_exportacao = [
                    'pais' => $this->input->post('pais'),
                    'produto' => $this->input->post('produto'),
                    'qtd_produto' => $this->input->post('qtd_produto'),
                    'service_id' => $this->input->post('servico_id'),
                    'client_id' => $cliente_id
                ];
                if($this->request->save($dados_exportacao)){
                    $this->session->set_flashdata([
                        'message' => "O seu pedido de exportacao foi enviado com sucesso! Entraremos em contacto brevemente"
                    ]);
                    return redirect('servicos');
                }
            }
        }
        $this->load->view('includes/header');
        $this->load->view('site/exportacao', $dados);
        $this->load->view('includes/footer');
    }

    public function storeImportacao(){
        $dados['servico'] = $this->ServicoModel->find($this->input->post('servico_id'));

        $this->form_validation->set_rules('nome_cliente','Nome do Cliente','trim|required|min_length[5]',array('min_length'	=>	'Informe o seu nome completo, por favor.' ));
        $this->form_validation->set_rules('email','Endereço de Email','trim|required|valid_email',array('valid_email'	=>	'Informe um email valido, por favor.' ));
        $this->form_validation->set_rules('telefone','Nº de Telefone','trim|required|min_length[9]|numeric',array('numeric'	=>	'Digite apenas numero, por favor.','min_length'	=>	'os seus digitos de contacto não estam correto, por favor introduz um contacto valido.' ));
        $this->form_validation->set_rules('pais','Sua Nacionalidade','trim|required|min_length[3]');
        $this->form_validation->set_rules('produto','Tipo de Produto','trim|required|min_length[2]');
        $this->form_validation->set_rules('qtd_produto','Quantidade de Produto','trim|required|min_length[1]|numeric',array('numeric' => 'Digite apenas numero, por favor.' ));
       
        if($this->form_validation->run()  == FALSE){
            $dados['sms_erro'] = validation_errors();
        }else{
            
            $cliente = $this->cliente->findByEmail($this->input->post('email'));
            if($cliente != null){
                $cliente_id = $cliente->id;
            }else{
                $dados_cliente = [
                    'name' => $this->input->post('nome_cliente'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('telefone')
                ];
                $cliente_id = $this->cliente->save($dados_cliente);
            }
            if($cliente_id != false){
                $dados_importacao = [
                    'pais' => $this->input->post('pais'),
                    'produto' => $this->input->post('produto'),
                    'qtd_produto' => $this->input->post('qtd_produto'),
                    'service_id' => $this->input->post('servico_id'),
                    'client_id' => $cliente_id
                ];
                if($this->request->save($dados_importacao)){
                    $this->session->set_flashdata([
                        'message' => "O seu pedido de inportação foi enviado com sucesso! Entraremos em contacto brevemente"
                    ]);
                    return redirect('servicos');
                }
            }
        }
        
        $this->load->view('includes/header');
        $this->load->view('site/importacao', $dados);
        $this->load->view('includes/footer');
    }

    public function storeEscoamento(){
        $dados['servico'] = $this->ServicoModel->find($this->input->post('servico_id'));

        $this->form_validation->set_rules('nome_cliente','Nome do Cliente','trim|required|min_length[5]',array('min_length'	=>	'Informe o seu nome completo, por favor.' ));
        $this->form_validation->set_rules('email','Endereço de Email','trim|required|valid_email',array('valid_email'	=>	'Informe um email valido, por favor.' ));
        $this->form_validation->set_rules('telefone','Nº de Telefone','trim|required|min_length[9]|numeric',array('numeric'	=>	'Digite apenas numero, por favor.','min_length'	=>	'os seus digitos de contacto não estam correto, por favor introduz um contacto valido.' ));
        $this->form_validation->set_rules('produto','Tipo de Produto','trim|required|min_length[2]');
        $this->form_validation->set_rules('qtd_produto','Quantidade de Produto','trim|required|min_length[1]|numeric',array('numeric' => 'Digite apenas numero, por favor.' ));
        $this->form_validation->set_rules('localizacao','Localização','trim|required|min_length[1]',array('min_length' => 'Informe a sua Localização, por favor.' ));
        $this->form_validation->set_rules('fazenda_empresa','Fazenda ou Empresa','trim|required|min_length[1]',array('numeric' => 'Infome a sua Fazenda ou Empresa, por favor.' ));
       
        if($this->form_validation->run()  == FALSE){
            $dados['sms_erro'] = validation_errors();
        }else{
       
            $cliente = $this->cliente->findByEmail($this->input->post('email'));
            if($cliente != null){
                $cliente_id = $cliente->id;
            }else{
                $dados_cliente = [
                    'name' => $this->input->post('nome_cliente'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('telefone')
                ];
                $cliente_id = $this->cliente->save($dados_cliente);
            }
            if($cliente_id != false){
                $dados_escoamento = [
                    'produto' => $this->input->post('produto'),
                    'qtd_produto' => $this->input->post('qtd_produto'),
                    'preco' => $this->input->post('preco'),
                    'localizacao' => $this->input->post('localizacao'),
                    'fazenda_empresa' => $this->input->post('fazenda_empresa'),
                    'service_id' => $this->input->post('servico_id'),
                    'client_id' => $cliente_id
                ];
                if($this->request->save($dados_escoamento)){
                    $this->session->set_flashdata([
                        'message' => "O seu pedido de escoamento foi enviado com sucesso! Entraremos em contacto brevemente"
                    ]);
                    return redirect('servicos');
                }
            }
        }     
        $this->load->view('includes/header');
        $this->load->view('site/escoamento', $dados);
        $this->load->view('includes/footer');
    }

   
    
    public function solicitacoes($control){
        $user_id =  $this->session->userdata('eduiba')['id'];
        $dados = ['solicitacoes' => $this->request->solicitacoes($control),'user_isAdmin' => $this->session->userdata('eduiba')['isAdmin'],'contro' => $control,'user_id' => $user_id];
        $this->load->view('includes/header');
        $this->load->view('site/solicitacoes', $dados);
        $this->load->view('includes/footer');
       
    }

    public function estado($solicitacao_id){
        
        $user_id =  $this->session->userdata('eduiba')['id'];
        $solicitacao = $this->request->find($solicitacao_id);
        $dados = ['user_isAdmin' => $this->session->userdata('eduiba')['isAdmin'],'user_id' => $user_id];
        if($solicitacao->estado == null){
            $dado = ['estado' => 1, 'user_id' => $user_id ];
           if($this->request->update($dado,$solicitacao->id)){
                return redirect('solicitacoes',$dados);
           }
        }elseif($solicitacao->estado == 1){
            $dado = ['estado' => 2];
           if($this->request->update($dado,$solicitacao->id)){
            return $this->solicitacoes(3);
           }
        } 
    }

    public function visualizar($solicitacao_id){
        $dado['solicitacao'] =  $this->request->solicitacao($solicitacao_id);
       
        if(count($dado) == 0){
            return $this->solicitacoes(2);
        }
        $this->load->view('includes/header');
        $this->load->view('site/solicitacao', $dado);
        $this->load->view('includes/footer');
    }
}