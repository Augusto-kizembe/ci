<div class="container">
    <div class="row">
        <div class="mb-4 card-body">
        <?php if(isset($user_isAdmin) && $user_isAdmin == 1){
             if(isset($contro) && $contro == 1){ ?>
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 1;?>" class="btn btn-primary active">Solicitações Pendentes</a></h4>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 2; ?>" class="btn btn-primary">Solicitações em Atendimento</a></h4>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 3; ?>" class="btn btn-primary">Solicitações Concluidas</a></h4>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 4; ?>" class="btn btn-primary">Minhas Solicitações</a></h4>
                        </div>
                    </div>
                </div> 

        <?php }else if(isset($contro) && $contro == 2){ ?>
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 1;?>" class="btn btn-primary">Solicitações Pendentes</a></h4>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 2; ?>" class="btn btn-primary  active">Solicitações em Atendimento</a></h4>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 3; ?>" class="btn btn-primary">Solicitações Concluidas</a></h4>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 4; ?>" class="btn btn-primary">Minhas Solicitações</a></h4>
                    </div>
                </div>
            </div> 

        <?php }else if(isset($contro) && $contro == 3){ ?>
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 1;?>" class="btn btn-primary">Solicitações Pendentes</a></h4>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 2; ?>" class="btn btn-primary">Solicitações em Atendimento</a></h4>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 3; ?>" class="btn btn-primary active">Solicitações Concluidas</a></h4>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 4; ?>" class="btn btn-primary">Minhas Solicitações</a></h4>
                    </div>
                </div>
            </div> 

        <?php }else if(isset($contro) && $contro == 4){ ?>
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 1;?>" class="btn btn-primary">Solicitações Pendentes</a></h4>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 2; ?>" class="btn btn-primary">Solicitações em Atendimento</a></h4>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 3; ?>" class="btn btn-primary">Solicitações Concluidas</a></h4>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 4; ?>" class="btn btn-primary active">Minhas Solicitações</a></h4>
                    </div>
                </div>
            </div> 

        <?php } }else if(isset($user_isAdmin) && $user_isAdmin == 0){ 
            if(isset($contro) && $contro == 1){ ?>
            <div class="col-lg-6 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 1;?>" class="btn btn-primary active">Solicitações Pendentes</a></h4>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 4; ?>" class="btn btn-primary">Minhas Solicitações</a></h4>
                    </div>
                </div>
            </div>

        <?php }else if(isset($contro) && $contro == 4){ ?>
            <div class="col-lg-6 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 1;?>" class="btn btn-primary">Solicitações Pendentes</a></h4>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <h4 class="card-title"><a href="<?= base_url() ?>solicitacao/solicitacoes/<?= $control = 4; ?>" class="btn btn-primary active">Minhas Solicitações</a></h4>
                    </div>
                </div>
            </div>

        <?php } } ?>
            
        <?php if(isset($contro) && $contro == 1){ ?>
            
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Serviço</th>
                            <th>Estado</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($solicitacoes as $solicitacao): ?>
                            <tr>
                                <td><?= $solicitacao['nome']?></td>
                                <td><?= $solicitacao['email'] ?></td>
                                <td><?= $solicitacao['phone'] ?></td>
                                <td><?= $solicitacao['servico'] ?></td>
                                <td><?= ($solicitacao['estado'] == NULL)?'Em Espera':'' ?></td>
                                <td>                                  
                                <a href="#" data-id="<?= $solicitacao['solicitacao_id'] ?>" id="atender" 
                                    class="btn btn-success btn-sm"><i class="fa fa-eye"></i>  Atender</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        <?php }else if(isset($contro) && $contro == 2){ ?>

            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Serviço</th>
                            <th>Funcionario</th>
                            <th>Estado</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($solicitacoes as $solicitacao): ?>
                            <tr>
                                <td><?= $solicitacao['nome']?></td>
                                <td><?= $solicitacao['email'] ?></td>
                                <td><?= $solicitacao['phone'] ?></td>
                                <td><?= $solicitacao['servico'] ?></td>
                                <td><?= $solicitacao['funcionario'] ?></td>
                                <?php if($solicitacao['estado'] == 1){ ?>
                                <td>Em Atendimento</td>
                                <td>                                             
                                    <a href="<?= base_url() ?>solicitacao/visualizar/<?= $solicitacao['solicitacao_id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                    <a href="<?= base_url() ?>solicitacao/estado/<?= $solicitacao['solicitacao_id'] ?>" class="btn btn-success"><i class="fa fa-thumbs-up"></i></a>
                                    <a href="<?= base_url() ?>solicitacao/estado/<?= $solicitacao['solicitacao_id'] ?>" class="btn btn-danger"><i class="fa fa-thumbs-down"></i></a>
                                </td>
                                <?php } ?>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        <?php }else if(isset($contro) && $contro == 3){ ?>
                
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Serviço</th>
                            <th>Funcionario</th>
                            <th>Estado</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($solicitacoes as $solicitacao): ?>
                            <tr>
                                <td><?= $solicitacao['nome']?></td>
                                <td><?= $solicitacao['email'] ?></td>
                                <td><?= $solicitacao['phone'] ?></td>
                                <td><?= $solicitacao['servico'] ?></td>
                                <td><?= $solicitacao['funcionario'] ?></td>
                                <?php if($solicitacao['estado'] == 2){ ?>
                                <td>Concluida</td>
                                <td>                                             
                                    <a href="#" class="btn btn-info"><i class="fa fa-print"></i></a>
                                </td>
                                <?php } ?>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        <?php }else if(isset($contro) && $contro == 4){ ?>

            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Serviço</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($solicitacoes as $solicitacao): 
                            if($solicitacao['funcionario_id']  == $user_id){
                            ?>
                            <tr>
                                <td><?= $solicitacao['nome']?></td>
                                <td><?= $solicitacao['email'] ?></td>
                                <td><?= $solicitacao['phone'] ?></td>
                                <td><?= $solicitacao['servico'] ?></td>
                                <?php if($solicitacao['estado'] == NULL){  ?>
                                <td>Em Espera</td>
                                <?php }else if($solicitacao['estado'] == 1){  ?>
                                <td>Em Atendimento</td>
                                <?php }else if($solicitacao['estado'] == 2){  ?>
                                <td class="text-success">Concluida</td>
                                <?php } ?>
                            </tr>
                            <?php } endforeach ?>
                    </tbody>
                </table>
            </div>
        <?php  } ?>

        </div>
    </div>
</div>

<!-- sample modal content -->
<div id="processo-atendimento" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Atendimento</h4>
                <button type="button" class="close text-danger" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url() ?>solicitacao/estado">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Descrição da Solicitação</label>
                        <textarea name="objectivo" id="texto" cols="30" rows="7" class="form-control" placeholder="Descrição" value=""></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success waves-effect waves-light">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- sample modal Visualizar Solicitacao -->
<div id="visualizar-solicitacao" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Atendimento</h4>
                <button type="button" class="close text-danger" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url() ?>solicitacao/estado">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Descrição da Solicitação</label>
                        <textarea name="objectivo" id="texto" cols="30" rows="7" class="form-control" placeholder="Descrição" value=""></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success waves-effect waves-light">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

