<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Fale-Conosco</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Principal <i
                class="ion-ios-arrow-forward"></i></a></span> <span>Contacto <i
              class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row d-flex mb-5 contact-info justify-content-center">
      <div class="col-md-8">
        <div class="row mb-5">
          <div class="col-md-4 text-center py-4">
            <div class="icon">
              <span class="icon-map-o"></span>
            </div>
            <p><span>Endereço:</span> Talatona Business Park</p>
          </div>
          <div class="col-md-4 text-center border-height py-4">
            <div class="icon">
              <span class="icon-mobile-phone"></span>
            </div>
            <p><span>Telefone:</span> <a href="tel://1234567920">(+244) 921625653 </a></p>
          </div>
          <div class="col-md-4 text-center py-4">
            <div class="icon">
              <span class="icon-envelope-o"></span>
            </div>
            <p><span>Email:</span> <a href="suport@eduiba.com">suport@eduiba.com</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 mb-md-5 text-center">
                <?php if(count($this->session->flashdata()) > 0): ?>
                  <?php if($this->session->flashdata('type') == 'success'): ?>
                      <strong><span class="alert alert-success"><?= $this->session->flashdata('message') ?></span></strong>
                  <?php else: ?>
                      <strong><span class="alert alert-danger"><?= $this->session->flashdata('message') ?></span></strong>
                  <?php endif ?>
                <?php endif ?>
            </div>
    <div class="row block-9 justify-content-center mb-5">
      <div class="col-md-8 mb-md-5">
        <h2 class="text-center">Conheça a Eduiba Projectos<br>Sobre questões envie-nos mensagens</h2>
        <form action="<?= base_url() ?>contactos/email" method="POST" class="bg-light p-5 contact-form">
          <div class="form-group">
            <input type="text" name="nome" class="form-control" placeholder="Nome Completo">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" name="assunto" class="form-control" placeholder="Assunto">
          </div>
          <div class="form-group">
            <textarea name="mensagem" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container-fluid px-0">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4527.65215632505!2d13.186226524066273!3d-8.921335079397412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f53ba2eeac33%3A0xa9444d7cc98dbf23!2sBelas%20Business%20Park!5e0!3m2!1spt-PT!2sao!4v1597657036483!5m2!1spt-PT!2sao"
          width="1350" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
          tabindex="0"></iframe>
      </div>
    </div>
  </div>
</section>