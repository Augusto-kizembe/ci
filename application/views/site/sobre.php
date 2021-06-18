<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread"><?= ($this->session->userdata('idioma') != NULL)?lang('menu_sobre'):" Sobre Nós"; ?></h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}"><?= ($this->session->userdata('idioma') != NULL)?lang('menu_home'):" Principal"; ?>Principal <i
                class="ion-ios-arrow-forward"></i></a></span> <span><?= ($this->session->userdata('idioma') != NULL)?lang('menu_sobre'):" Sobre nós"; ?> <i
              class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-5 order-md-last wrap-about align-items-stretch">
        <div class="wrap-about-border">
          <div class="img" style="background-image: url(images/about.jpg); border"></div>
          <div class="text">
            <h3><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_quem'):" Quem Somos"; ?></h3>
            <p>
              <?= ($this->session->userdata('idioma') != NULL)?lang('sobre_quem_conteudo'):" Somos uma empresa focada no desenvolvimento organizacional e gestão de projetos diversos, que atua no
              país inteiro atendendo a clientes dos mais diversos portes e atividades ."; ?>
            </p>
            <h3><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_misao'):" Misão"; ?></h3>
            <p>
              <?= ($this->session->userdata('idioma') != NULL)?lang('sobre_misao_conteudo'):" Contribuir direitamente para o crescimento e desenvolvimento de projetos."; ?>
            </p>
            <p><a href="#" class="btn btn-primary py-3 px-4">Contact us</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-7 wrap-about pr-md-4 ftco-animate">
        <h2 class="mb-4"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_titulo'):" Eduiba Projeto"; ?></h2>
        <p>
          <?= ($this->session->userdata('idioma') != NULL)?lang('sobre_titulo_cont1'):" A Eduiba Projeto é uma empresa séria na organização e desenvolvimento de projectos multifaceticos, provendo e
          realizando inspirações, ideias, projectos e torna-los prontos para o desenvolvimento sustentavel das
          organizações, grupos comerciais e particulares."; ?>
        </p>
        <p>
          <?= ($this->session->userdata('idioma') != NULL)?lang('sobre_titulo_cont2'):"Somos uma empresa focada no desenvolvimento organizacional e gestão de projetos diversos, que atua no país
          inteiro atendendo a clientes dos mais diversos portes e atividades."; ?>
        </p>
        <p>
          <?= ($this->session->userdata('idioma') != NULL)?lang('sobre_titulo_cont3'):" Sediada em Angola na capital Luanda, tem atuado junto às organizações, levando tecnologia modernas de gestão,
          mas também, toda a experiência acumulada por uma equipa de gestores e consultores de negócios ao longo dos
          últimos 10 anos."; ?>
        </p>
        <h2 class="mb-4"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_visao'):" Visão"; ?></h2>
        <p>
          <?= ($this->session->userdata('idioma') != NULL)?lang('sobre_visao_cote'):" Sermos reconhecidos pela competência profissional e pela decisiva contribuição para o sucesso dos nossos
          clientes e parceiros."; ?>
        </p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-counter">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2 d-flex">
      <div class="col-md-6 align-items-stretch d-flex">
        <div class="img img-video d-flex align-items-center" style="background-image: url(images/about.jpg);">
          <div class="video justify-content-center">
            <a href="https://vimeo.com/45830194"
              class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
              <span class="ion-ios-play"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 heading-section ftco-animate pl-lg-5 pt-md-0 pt-5">
        <h2 class="mb-4"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_valor'):" Valores"; ?></h2>
        <p>
          <?= ($this->session->userdata('idioma') != NULL)?lang('sobre_valor_cot1'):" Ética, sigilo, objetividade, sucesso do cliente, excelência e responsabilidade, bom relacionamento, network,
          qualificação técnica, rentabilidade."; ?>
        </p>
        <p>
        <?= ($this->session->userdata('idioma') != NULL)?lang('sobre_valor_cot2'):"  A representante do comandante na ponte, e responsável perante ele pelo exercício dos poderes que lhe tenham
          sido delegados. Em particular, é-lhe delegada a competência."; ?>
       </p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-0"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_produt'):" Produtividades mais frequente"; ?></h2>
      </div>
    </div>
  </div>
</section>
<section class="ftco-counter" id="section-counter">
  <div class="container">
    <div class="row d-md-flex align-items-center justify-content-center">
      <div class="wrapper">
        <div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" data-number="705">0</strong>
                <span><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_produt_tem1'):" Projectos Concluidos"; ?></span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" data-number="809">0</strong>
                <span><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_produt_tem2'):" Clientes Satisfeitos"; ?></span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" data-number="335">0</strong>
                <span><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_produt_tem3'):" Pedido Recebidos"; ?></span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" data-number="35">0</strong>
                <span><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_produt_tem4'):" Anos de Experiência"; ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro'):" Nossos Parceiros"; ?></h2>
        <p><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_cont'):" FadBack de Clientes gratos pelo uso dos nossos serviços."; ?></p>
      </div>
    </div>
    <div class="row ftco-animate justify-content-center">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url('<?= base_url() ?>public/images/1lg.png');">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment1'):" Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts."; ?></p>
                <p class="name"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment1_titulo'):" Eduiba Transporte"; ?></p>
                <span class="position"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment1_subtitulo'):" Pessoas e Bens"; ?></span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url('<?= base_url() ?>public/images/2lg.png');">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment1'):" Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts."; ?></p>
                <p class="name"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_titulo'):" Eduiba Projeto"; ?></p>
                <span class="position"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment2_subtitulo'):" Negócios e Investimentos"; ?></span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url('<?= base_url() ?>public/images/3lg.png');">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment1'):" Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts."; ?></p>
                <p class="name"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment3_titulo'):" Eduiba Construção"; ?></p>
                <span class="position"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment3_subtitulo'):" Construção Civil e Urbano"; ?></span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url('<?= base_url() ?>public/images/4lg.png');">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment1'):" Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts."; ?></p>
                <p class="name"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment4_titulo'):" Duiba Expess"; ?></p>
                <span class="position"><?= ($this->session->userdata('idioma') != NULL)?lang('sobre_parceiro_coment4_subtitulo'):" Logistica e Habitação"; ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>