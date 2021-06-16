<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Serviços</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url() ?>">Principal <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Serviços <i
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
                        <h3>Sobre a Solicitação dos Serviços </h3>
                        <p>Fazer a Solicitação de um dos nossos serviços, é tam benefico e eficais em termo de seguranca
                            e produtividade em espandir o seu negocio dentro ou fora da sua localizaçõa.</p>
                        <p>representante do comandante na ponte, e responsável perante ele pelo exercício dos poderes
                            que lhe tenham sido delegados. Em particular, é-lhe delegada a competência.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Ver Mais <span
                                    class="ion-ios-arrow-round-forward"></span></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-md-5 text-center">
                <?php if($this->session->flashdata('message') != NULL): ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                                aria-hidden="true">&times;</span> </button>
                        <h5 class="text-success"><i class="fa fa-check-circle"></i> Sucesso</h5>
                        <span><?= $this->session->flashdata('message') ?></span>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-md-7 wrap-about pr-md-4 ftco-animate">
                <h2 class="mb-4">Serviços em Vigor</h2>
                <h3>Faça a diferença aderindo nossos serviços.</h3>
                <div class="row mt-5">
                    <?php foreach ($servicos as $servico): ?>
                        <?php if($servico->id == 1): ?>
                            <div class="col-lg-6">
                                <div class="services active text-center">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                            class="flaticon-analysis"></span></div>
                                    <div class="text media-body">
                                        <h3><?= $servico->titulo ?></h3>
                                        <p><?= $servico->descricao ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-lg-6">
                                <div class="services text-center">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                            class="flaticon-handshake"></span></div>
                                    <div class="text media-body">
                                        <h3><?= $servico->titulo ?></h3>
                                        <p><?= $servico->descricao ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Nossos Serviços</h2>
                <p>Faça a sua Solicitação de um dos nossos serviços para que o seu negocio ou produto espande dentro e
                    fora da sua comunidade. </p>
            </div>
        </div>
        <div class="row no-gutters">
            <?php foreach ($servicos as $servico): ?>
                <div class="col-lg-4 d-flex">
                    <div class="services-2 noborder-left text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                class="flaticon-analysis"></span></div>
                        <div class="text media-body">
                            <h3>Solicitação de <?= $servico->titulo ?></h3>
                            <p><?= $servico->descricao ?></p>
                            <p><a href="<?= base_url() ?>servicos/pedido/<?= $servico->id ?>"
                                    class="btn btn-info py-3 px-4 btn-s">Solicitar</a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>