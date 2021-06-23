<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread"><?= ($this->session->userdata('idioma') != NULL)?lang('menu_servico'):" Serviços"; ?></h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}"><?= ($this->session->userdata('idioma') != NULL)?lang('menu_home'):" Principal"; ?> <i
                class="ion-ios-arrow-forward"></i></a></span> <span><?= $servico->titulo ?> <i
              class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-5 order-md-last wrap-about align-items-stretch">
        <div class="wrap-about-border ftco-animate">
          <div class="img" style="background-image: url(images/about.jpg); border"></div>
          <div class="text">
            <h3><?= ($this->session->userdata('idioma') != NULL)?lang('solicitacao_glob'):" Sobre a Solicitação de"; ?> <?= $servico->titulo ?></h3>
            <p><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment1'):" Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
              ocean"; ?>.</p>
            <p><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment1'):" Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
              ocean"; ?>.</p>
            <p><a href="#" class="btn btn-primary py-3 px-4"><?= ($this->session->userdata('idioma') != NULL)?lang('servico_titulo_baxo_btn'):" Ver Mais"; ?> <span
                  class="ion-ios-arrow-round-forward"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-12 mb-md-5 text-center">
        <?php	if(isset($sms_erro)){?>
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                    aria-hidden="true">&times;</span> </button>
            <h3 class="text-danger"><i class="fa fa-exclamation-circle"></i> Erro</h3>
            <span><?=$sms_erro?></span>
          </div>               	
        <?php	}?>	
      </div>      
      <div class="col-md-7 wrap-about pr-md-4 ftco-animate">
        <h2 class="mb-4"><?= ($this->session->userdata('idioma') != NULL)?lang('solicitacao_glob_sol'):" Solicitação de"; ?> <?= $servico->titulo ?></h2>
        <p><?= $servico->descricao ?></p>
        <form action="<?= base_url()?>solicitacao/importacao" method="POST" class="bg-light p-5 contact-form">
          <input type="hidden" name="servico_id" class="form-control" value="<?= $servico->id ?>">
          <div class="form-group">
            <input type="text" name="nome_cliente" class="form-control" placeholder="<?= ($this->session->userdata('idioma') != NULL)?lang('serv_formCli'):" Informa do Cliente"; ?>" value="<?=set_value('nome_cliente')?>">
          </div>
          <div class="form-group">
            <input type="number" name="telefone" class="form-control" required placeholder="<?= ($this->session->userdata('idioma') != NULL)?lang('serv_formTel'):" Telefone Nº"; ?>" value="<?=set_value('telefone')?>">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" required placeholder="E-mail" value="<?=set_value('email')?>">
          </div>
          <div class="form-group">
            <label for=""><?= ($this->session->userdata('idioma') != NULL)?lang('serv_formPais'):" Pais"; ?></label>
            <select name="pais" class="form-control"  value="<?=set_value('pais')?>">
              <option value="Angola">Angola</option>
              <option value="França">França</option>
              <option value="Brazil">Brazil</option>
              <option value="Portugal">Portugal</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" name="produto" class="form-control" placeholder="<?= ($this->session->userdata('idioma') != NULL)?lang('serv_formProd'):" Informa o Produto"; ?>" value="<?=set_value('produto')?>">
          </div>
          <div class="form-group">
            <input type="number" name="qtd_produto" class="form-control" placeholder="<?= ($this->session->userdata('idioma') != NULL)?lang('serv_formQtd'):" Informa a Quantidade"; ?>" value="<?=set_value('qtd_produto')?>">
          </div>


          <div class="form-group">
            <input type="submit" value="<?= ($this->session->userdata('idioma') != NULL)?lang('contacto_inout_btn'):" Enviar"; ?>" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>
    </div>
</section>