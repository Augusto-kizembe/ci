<div class="container">
    <div class="row">
        <div class="card-body">
            <h4 class="card-title"><a href="funcionario/novo" class="btn btn-primary">Novo
                    Funcionário</a></h4>
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Atendimentos</th>
                            <th>Estado</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user->name ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= $user->phone ?></td>
                                <td>61</td>
                                <?php if ($user->online == 1): ?>
                                    <td>Trabalhando</td>
                                <?php else: ?>
                                    <td>Em Repouso</td>
                                <?php endif ?>
                                <td>
                                    <a href="<?= base_url() ?>funcionario/edit/<?= $user->id ?>"
                                        class="btn btn-primary btn-sm">Editar</a>
                                    <?php if ($user->isactivo): ?>
                                    <a href="<?= base_url() ?>funcionario/alterar_estado/<?= $user->id ?>"
                                        class="btn btn-danger btn-sm">Desativar</a>
                                    <?php else: ?>
                                    <a href="<?= base_url() ?>funcionario/alterar_estado/<?= $user->id ?>"
                                        class="btn btn-success btn-sm">Activar</a>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>