<!DOCTYPE html>
<html lang="en">

<head>
    
  <title>Eduiba Projectos</title>
  <meta charset="utf-8">
  <!-- CSRF Token -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="<?= base_url() ?>public/images/eduiba3.png">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
    rel="stylesheet">

  <script src="<?= base_url() ?>public/js/app.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/animate.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/fontawesome/css/all.css">

  <link rel="stylesheet" href="<?= base_url() ?>public/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/magnific-popup.css">

  <link rel="stylesheet" href="<?= base_url() ?>public/css/aos.css">

  <link rel="stylesheet" href="<?= base_url() ?>public/css/ionicons.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>public/css/flaticon.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/icomoon.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css">
</head>

<body>
  <div class="bg-top navbar-light">
    <div class="container">
      <div class="row no-gutters d-flex align-items-center align-items-stretch">
        <div class="col-md-4 d-flex align-items-center py-4">
          <a class="navbar-brand" href="#">
            <img src="<?= base_url() ?>public/images/eduiba3.png" alt="" style="width:30%;heigth:10%">
          </a>
        </div>
        <div class="col-lg-8 d-block">
          <div class="row d-flex">
            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
              <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span>
              </div>
              <div class="text">
                <span>Email</span>
                <span>suport@eduiba.com</span>
              </div>
            </div>
            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
              <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
              <div class="text">
                <span>Telefone</span>
                <span>Ligue-nos: (+244) 921625653 / 995151782</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="col-md topper d-flex align-items-center justify-content-end order-lg-last">
        <?php if(isset($this->session->userdata()['eduiba'])): ?>
        <p>
          <ul style="list-style: none;">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
              aria-haspopup="true" v-pre>
              <strong style="color:white"><?= $this->session->userdata('eduiba')['name'] ?> <span class="caret"></span></strong>
            </a>

            <ul class="dropdown-menu">
              <li><a href="#" style="color:white">
                <a href="<?= base_url() ?>alterar_senha" class="dropdown-item"> <i class="fa fa-lock"></i> Alterar Senha</a>
              </li>
              <li>
                <a href="#" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();" class="dropdown-item">
                  <i class="fa fa-sign-out-alt"></i> Sair
                </a>

                <form id="logout-form" action="<?= base_url() ?>/logout" method="POST" style="display: none;">
                  
                </form>
              </li>
            </ul>
          </li>
        </ul>
        </p>
        <?php else: ?>
          <p class="mb-0">
          <a href="<?= base_url() ?>login" class="btn btn-primary">
            <span>Entrar</span>
          </a>
          </p>
        <?php endif; ?>
        <p class="mb-0">
          <a href="<?= base_url() ?>login" class="btn btn-primary">
            <span><?= lang('menu_home') ?></span>
          </a>
          </p>
      </div>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= ($this->uri->segment(1) == '')?'active':''?>"><a href="<?= base_url() ?>" class="nav-link pl-0"><?= (lang('menu_home')) ?></a></li>
          <li class="nav-item <?= ($this->uri->segment(1) == 'sobre')?'active':''?>"><a href="<?= base_url() ?>sobre" class="nav-link">Sobre Nós</a></li>
          <li class="nav-item <?= ($this->uri->segment(1) == 'servicos')?'active':''?>"><a href="<?= base_url() ?>servicos" class="nav-link">Serviços</a></li>
          <li class="nav-item <?= ($this->uri->segment(1) == 'projectos')?'active':''?>"><a href="<?= base_url() ?>projectos" class="nav-link">Projetos</a></li>
          <li class="nav-item <?= ($this->uri->segment(1) == 'contactos')?'active':''?>"><a href="<?= base_url() ?>contactos" class="nav-link">Contacto</a></li>
          <?php if(isset($this->session->userdata()['eduiba'])): ?>
            <li class="nav-item <?= ($this->uri->segment(1) == 'solicitacoes')?'active':''?>"><a href="<?= base_url() ?>solicitacoes" class="nav-link">Solicitações</a></li>
            <?php if($this->session->userdata('eduiba')['isAdmin']): ?>
              <li class="nav-item <?= ($this->uri->segment(1) == 'funcionarios')?'active':''?>"><a href="<?= base_url() ?>funcionarios" class="nav-link">Funcionários</a></li>
            <?php endif ?>
          <?php endif ?>
          
        </ul>
      </div>
    </div>
  </nav>













