<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Solicitação</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url() ?>">Principal <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Detalhes <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="mb-4 card-body">
            <div class="card">
                <div class="col-lg-11 d-block">
                    <div class="row d-flex">
                        <?php if($solicitacao[0]['servico_id'] == 1){ ?>
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="card-body">
                                    <h6>Nome do Cliente </h6>
                                    <h4><?= $solicitacao[0]['nome']?></h4> 
                                    <h6>Nº Telefone</h6>
                                    <h4><?= $solicitacao[0]['phone']?></h4> 
                                    <h6>Endereço de Email </h6>
                                    <h4><?= $solicitacao[0]['email']?></h4>
                                    
                                </div>
                            </div>
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="card-body">
                                    <h6>Tipo de Serviço </h6>
                                    <h4>Consultoria</h4> 
                                    <h6>Tipo de Negócio</h6>
                                    <h4><?= $solicitacao[0]['tipo_negocio']?></h4> 
                                    <h6>Pais </h6>
                                    <h4><?= $solicitacao[0]['pais']?></h4>
                                    
                                </div>
                            </div>
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="card-body">
                                    <h6>Objectivo do Negócio </h6>
                                    <h4><?= $solicitacao[0]['objectivo']?></h4> 
                                    <h6>Funcionario em Atendimento</h6>
                                    <h4><?= $solicitacao[0]['funcionario']?></h4> 
                                    <h6>Descricao </h6>
                                    <h4><?= $solicitacao[0]['objectivo']?></h4>
                                    
                                </div>
                            </div>
                            
                        <?php }elseif($solicitacao[0]['servico_id'] == 2 || $solicitacao[0]['servico_id'] == 3){ ?>
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="card-body">
                                    <h6>Nome do Cliente </h6>
                                    <h4><?= $solicitacao[0]['nome']?></h4> 
                                    <h6>Nº Telefone</h6>
                                    <h4><?= $solicitacao[0]['phone']?></h4> 
                                    <h6>Endereço de Email </h6>
                                    <h4><?= $solicitacao[0]['email']?></h4>
                                    
                                </div>
                            </div>
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="card-body">
                                    <h6>Tipo de Serviço </h6>
                                    <h4><?php ($solicitacao[0]['servico_id'] == 2)?'Exportação':'Importação' ?></h4> 
                                    <h6>Produto</h6>
                                    <h4><?= $solicitacao[0]['produto']?></h4> 
                                    <h6>Quantidade de Produto </h6>
                                    <h4><?= $solicitacao[0]['qtd_produto']?></h4>
                                    
                                </div>
                            </div>
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="card-body">
                                    <h6>Pais </h6>
                                    <h4><?= $solicitacao[0]['pais']?></h4> 
                                    <h6>Funcionario em Atendimento</h6>
                                    <h4><?= $solicitacao[0]['funcionario']?></h4> 
                                    <h6>Descricao </h6>
                                    <h4>sobre a Solicitação </h4>
                                    
                                </div>
                            </div>

                        <?php }elseif($solicitacao[0]['servico_id'] == 4){ ?>
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="card-body">
                                    <h6>Nome do Cliente </h6>
                                    <h4><?= $solicitacao[0]['nome']?></h4> 
                                    <h6>Nº Telefone</h6>
                                    <h4><?= $solicitacao[0]['phone']?></h4> 
                                    <h6>Endereço de Email </h6>
                                    <h4><?= $solicitacao[0]['email']?></h4>
                                    
                                </div>
                            </div>
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="card-body">
                                    <h6>Tipo de Serviço </h6>
                                    <h4>Escoamento</h4> 
                                    <h6>Produto</h6>
                                    <h4><?= $solicitacao[0]['produto']?></h4> 
                                    <h6>Quantidade de Produto </h6>
                                    <h4><?= $solicitacao[0]['qtd_produto']?></h4>
                                    <h6>Preço do Produto </h6>
                                    <h4><?= $solicitacao[0]['preco']?></h4>
                                    
                                    
                                </div>
                            </div>
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="card-body">
                                    <h6>Localização </h6>
                                    <h4><?= $solicitacao[0]['localizacao']?></h4>
                                    <h6>Fazenda ou Empresa </h6>
                                    <h4><?= $solicitacao[0]['fazenda_empresa']?></h4>
                                    <h6>Funcionario em Atendimento</h6>
                                    <h4><?= $solicitacao[0]['funcionario']?></h4> 
                                    <h6>Descricao </h6>
                                    <h4>sobre a Solicitação</h4>
                                    
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="card-body text-center ftco-animate">
                <div class="text media-body">
                    <a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 2;?>" class="btn btn-primary py-3 px-4 btn-s">Fechar Detalhe</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>


