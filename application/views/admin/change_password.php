<section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-12 mb-md-5 text-center">
                <?php if(count($this->session->flashdata()) > 0): ?>
                    <strong><div class="alert alert-danger text-center"><?= $this->session->flashdata('message') ?></div></strong>
                <?php endif ?>
          </div>
        <div class="col-md-12 mb-md-5">
            <h1 class="text-center">Alteração de Senha</h1>
        <form action="<?= base_url() ?>alterar_senha" method="POST" class="bg-light p-5 contact-form">
            <div class="form-group has-error">
                <label for="name" class="col-md-4 control-label">Antiga Senha</label>

                <div class="col-md-12">
                    <input id="name" type="text" class="form-control" name="old_password" value="" required autofocus placeholder="insira a sua antiga senha">
                </div>
            </div>

            <div class="form-group has-error">
                <label for="email" class="col-md-4 control-label">Nova Senha</label>

                <div class="col-md-12">
                    <input id="email" type="text" class="form-control" name="new_password" value="" required placeholder="insira a sua nova senha">
                </div>
            </div>
            <div class="form-group has-error">
                <label for="email" class="col-md-4 control-label">Confirmação de Senha</label>

                <div class="col-md-12">
                    <input id="email" type="text" class="form-control" name="new_password_confirme" value="" required placeholder="confirme a sua nova senha">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 col-md-offset-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Alterar
                    </button>
                </div>
            </div>

          </form>
        
        </div>
      </div>
    </div>
  </section>
