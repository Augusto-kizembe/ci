<section class="ftco-section contact-section">
    <div class="container">
        <div class="row block-9 justify-content-center mb-5">
            <div class="col-md-12 mb-md-5 text-center">
                <span class="alert alert-success"></span>
            </div>
            <div class="col-md-12 mb-md-5">
                <h1 class="text-center">Edição de Funcionário</h1>
                <form action="<?= base_url()?>funcionario/update" method="POST"
                 class="bg-light p-5 contact-form">
                    <input type="hidden" name="id" value="<?= $user->id ?>">
                    <div class="form-group has-error">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="name"
                                value="<?= $user->name ?>" required autofocus>
                        </div>
                    </div>

                    <div class="form-group has-error">
                        <label for="email" class="col-md-4 control-label">E-Mail</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email"
                                value="<?= $user->email ?>" required>
                        </div>
                    </div>

                    <div class="form-group has-error'">
                        <label for="email" class="col-md-4 control-label">Telefone</label>

                        <div class="col-md-12">
                            <input id="email" type="phone" class="form-control" name="phone"
                                value="<?= $user->phone ?>" required>
                        </div>
                    </div> <br>

                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Editar
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>