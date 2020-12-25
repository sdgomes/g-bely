<style>
    <?php if (get_the_post_thumbnail()) : ?>.root {
        background: linear-gradient(to left, rgb(255 255 255 / 0.89) 0, rgb(255 255 255 / 0.89) 100%, rgb(255, 255, 255) 90%), url(<?php the_post_thumbnail_url(); ?>);
    }

    <?php else : ?>.root {
        background: linear-gradient(to left, rgb(255 255 255 / 0.89) 0, rgb(255 255 255 / 0.89) 100%, rgb(255, 255, 255) 90%), url(<?php bloginfo('template_url'); ?>/images/background-half-page.png);
    }

    <?php endif; ?>
</style>

<div class="root">
    <section class="first">
        <div class="header">
            <div class="bg-golden"></div>
            <div class="box">
                <h1 class="title">
                    <img draggable="false" class="butterfly-animation" src="<?php bloginfo('template_url') ?>/images/white-butterfly-logo.png" alt="Logo_de_borboleta_branca/png">
                    <div class="title-words-content">
                        <small>Centro Estético</small>
                        <span class="text-uppercase">G'BELY</span>
                    </div>
                </h1>

                <h1 class="subtitle">Protocolos <span class="fw-normal">Exclusivos para</span> Seu Momento </h1>
                <h5 class="title-one">Venha Conhecer a Técnica <b>Metaformosa</b></h5>
            </div>
        </div>
    </section>

    <section class="half">
        <div class="container">
            <div class="row">
                <div class="break-poition col-lg-4 col-md-6">
                    <div class="mt-xxl-5 pt-1">
                        <div data-aos="zoom-in" class="firt-section">
                            <h1 class="fw-bold">Use Máscara</h1>
                            <h4 class="fw-normal m-0">Higienize as mãos</h4>
                            <h5 class="fw-normal">Juntos Contra <br>o vírus</h5>
                        </div>
                        <div class="blonde-woman">
                            <img draggable="false" src="<?php bloginfo('template_url') ?>/images/circle.png" alt="Fundo_redondo/png">
                            <img draggable="false" class="w-100" src="<?php bloginfo('template_url') ?>/images/woman.png" alt="Mulher_loira/png">
                        </div>
                    </div>
                    <div class="text-end second-section">
                        <div data-aos="fade-up">
                            <h2 class="fw-normal whois">
                                Quem é <b class="fw-bold">G'Bely?</b></h2>
                        </div>
                        <div class="whois-body">
                            <p data-aos="fade-up" class="fs-4">
                                É um <b>Centro Clínico</b> que presa pela <b>experiência do cliente.</b> Desde de o
                                agendamento do procedimento, acomodação e transparência na realização dos
                                tratamentos.
                            </p>
                            <p data-aos="fade-up" class="fs-4">Nossos
                                <b>protocolos</b> fogem dos padrões do mercado, acreditamos que não existe uma
                                fórmula a ser seguida, cada <b>paciente é único.</b>
                            </p>
                            <p data-aos="fade-up" class="fs-4">Sendo assim, convidamos você para vir se
                                <b>Inpressionar com os seus
                                    resultados.</b>
                            </p>
                            <h5 data-aos="fade-up">
                                Graziela Carvalho <br> CEO G’Bely
                            </h5>
                        </div>
                    </div>
                    <div class="text-end third-section">
                        <h1 data-aos="fade-up" class="fw-bold">Para Quem <span class="fw-normal">São Os</span>
                            Nossos Serviços
                        </h1>
                        <p data-aos="fade-up" class="fs-5 ps-sm-5">
                            São para todos que se comprometem em alinhar a <b>estética</b> com <b>autoestima.</b>
                            Para quem <b>foge dos padrões</b> das clínicas de estética para busca de
                            <b>exclusividade</b> e <b>resuldados pautados</b> na <b>ciência.</b>
                        </p>
                    </div>
                </div>

                <div class="break-center-poition col-lg-4 col-md-6">
                    <div class="spine">
                        <div class="iframe-video-one">
                            <iframe src="https://www.youtube.com/embed/bQO7FYftNh8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="row link-group">
                            <a class="text-white" href="https://www.instagram.com/gbely_" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                            <a class="text-white" href="https://www.youtube.com/channel/UCMu3zkZ5vkavvnbh6XBST7Q" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                            <a class="text-white" href="https://www.facebook.com/esteticagrazielacarvalho" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="second-section-ceo">
                            <div data-aos="fade-up" data-aos-duration="1000" class="ceo-image">
                                <img draggable="false" src="<?php bloginfo('template_url') ?>/images/white-butterfly-logo.png" alt="Logo_de_borboleta_branca/png">
                                <img draggable="false" src="<?php bloginfo('template_url') ?>/images/ceo-image-center.png" alt="CEO_image/png">
                            </div>
                        </div>
                        <div class="spine-foot third-section-ceo">
                            <div data-aos="zoom-in" class="d-flex">
                                <img draggable="false" class="butterfly-animation" src="<?php bloginfo('template_url') ?>/images/white-butterfly-logo.png" alt="Logo_de_borboleta_branca/png">
                                <h1>Avaliação</h1>
                            </div>
                            <div data-aos="zoom-in" class="align-items-center justify-content-center d-flex">
                                <h1>R$</h1><span class="display">150</span>
                                <h1 class="align-self-end mb-4">,00</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row my-4">
                <div class="col-lg-4 col-md-6 left-info">
                    <div class="text-end">
                        <h1 data-aos="zoom-in" class="fw-bold">Faça Sua Avaliação!</h1>
                        <h2 data-aos="fade-up" class="text-primary">R. Borges Lagoa, 1065</h2>
                        <h5 data-aos="fade-up" class="text-primary fw-normal">5 Min do Metrô Hospital São Paulo <br>
                            falecomigo@gbelyestetica.com
                        </h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 px-0">
                    <div class="iframe-video-two">
                        <iframe src="https://www.youtube.com/embed/bQO7FYftNh8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="last">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-lg-4 col-md-6 spine-footer">
                        <div class="row link-group">
                            <a class="text-white" href="https://www.instagram.com/gbely_" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                            <a class="text-white" href="https://www.youtube.com/channel/UCMu3zkZ5vkavvnbh6XBST7Q" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                            <a class="text-white" href="https://www.facebook.com/esteticagrazielacarvalho" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>
</div>