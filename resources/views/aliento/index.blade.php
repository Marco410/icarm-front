<?php $page = 'Aliento FM'; ?>

@extends('layout.mainlayout')
@section('content')
    <section class="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="{{ asset('assets/video/index/hero_section.mp4') }}" type="video/mp4">
        </video>
        <div class="content">
            <h1 data-aos="fade-up">Aliento FM</h1>
            <a data-aos="fade-up" href="#">Donaciones</a>
            <a data-aos="fade-right" href="#ubicaciones">Ubicaciones</a>
            <a data-aos="fade-left" href="#contacto">Contácto</a>
        </div>
    </section>
    {{-- Eventos section --}}
    <section class="popular-services" id="eventos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading">
                                <h2>Eventos</h2>
                                <span>Explora todos nuestros eventos</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="viewall">
                                <h4><a href="#">Ver Todos <i class="fas fa-angle-right"></i></a></h4>
                                <span>Nuestros Eventos</span>
                            </div>
                        </div>
                    </div>
                    <div class="service-carousel" data-aos="fade-up">
                        <div class="marca-slider owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 10200px;">
                                    <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                        <a
                                            href="https://static.wixstatic.com/media/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Marca Alfa Romeo"
                                                    src="https://static.wixstatic.com/media/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> A&R Central</span></h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 16 nov - 19 nov
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-clock"></i> 10:00pm
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                        <a
                                            href="https://static.wixstatic.com/media/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Marca Audi"
                                                    src="https://static.wixstatic.com/media/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> A&R Central</span></h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 16 nov - 19 nov
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-clock"></i> 10:00pm
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                        <a
                                            href="https://static.wixstatic.com/media/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Marca BMW"
                                                    src="https://static.wixstatic.com/media/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> A&R Norte</span></h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 16 nov - 19 nov
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-clock"></i> 10:00pm
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                        <a
                                            href="https://static.wixstatic.com/media/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Marca BUICK-GMC-Cadillac"
                                                    src="https://static.wixstatic.com/media/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> A&R Central</span></h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 16 nov - 19 nov
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-clock"></i> 10:00pm
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item" style="width: 270px; margin-right: 30px;">
                                        <a
                                            href="https://static.wixstatic.com/media/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Marca Cadillac"
                                                    src="https://static.wixstatic.com/media/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> A&R Norte</span></h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 16 nov - 19 nov
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-clock"></i> 10:00pm
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item" style="width: 270px; margin-right: 30px;">
                                        <a
                                            href="https://static.wixstatic.com/media/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Marca Chevrolet"
                                                    src="https://static.wixstatic.com/media/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_5e86b347672b41d0943027f8ee770a6f~mv2.jpg">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> A&R Central</span></h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 16 nov - 19 nov
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-clock"></i> 10:00pm
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- /Eventos Section -->
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="layer">
            <div class="home-banner"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-search">
                            <h3 data-aos="fade-up">Conquistar & <span>Transformar</span></h3>
                            <p data-aos="fade-up">Edificar con visión perfecta</p>
                            <p data-aos="fade-up">A TRAVÉS DE </p>
                            <p data-aos="fade-up"> <span> LA FE, LA ESPERANZA Y EL AMOR </span></p>
                            <p data-aos="fade-up">Para conquistar y transformar</p>
                            <p data-aos="fade-up">Los nuevos escenarios</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
    <!-- quienes-somos -->
    <section class="quienes-somos back-image">
        <div class="">
            <div class="container ">
                <div class="row  p-4">
                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <div class="col-sm-6" data-aos="fade-up">
                                <div class="video">
                                    <img src="{{ asset('assets/img/index/somos_iglesia.gif') }}" class="img-fluid"
                                        alt="Somos iglesia">
                                </div>
                            </div>
                            <div class="col-sm-6 " data-aos="fade-left">
                                <div class="text">
                                    <h3 data-aos="fade-left" class="text-white mb-4">Somos <strong> Iglesia</strong></h3>
                                    <p class="text-white">
                                        Nuestra misión es Amar a Dios, amar al prójimo y hacer discípulos.
                                    </p>
                                    <p class="text-white">
                                        Nuestra visión es Conquistar y Transformar.
                                    </p>
                                </div>
                                <a><i class="fa fa-lightbulb"></i> Estrategia </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /quienes-somos -->
    <!--- Donaciones --->
    <section class="donaciones">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="sticky-top mt-4">
                        <h3>Donaciones</h3>
                        <p>Gracias por hacer posible que la iglesia siga avanzando. Tu apoyo nos ayuda a llevar el evangelio
                            alrededor del mundo.
                        </p>
                        <a class="btn" data-aos="fade-up" href="#">Realizar Donación</a>
                    </div>
                </div>
                <div class="col-sm-8 img-back">
                    <img data-aos="fade-down" src="{{ asset('assets/img/index/donaciones.png') }}"
                        alt="Donaciones ICARM">
                </div>
            </div>
        </div>

    </section>
    <!--- /Donaciones --->

    <!--Nuestra historia -->
    <section class="our-history">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading howitworks">
                        <h3 data-aos="fade-down">Nuestra Historia </h3>
                        <p data-aos="fade-down"><img class="mt-2" width="60px"
                                src="assets/img/icons/desplazarse.png" alt="Cuentanos"></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 p-4">
                            <p data-aos="fade-down">La tercer Semana del mes de febrero de 1991, el Hno. Pedro Cantú Pastor
                                y apóstol de La Iglesia Cristiana Amor y Restauración, celebró con su esposa Leticia y sus
                                Hijas Rocío, Perla y Sarahí Cantú su primer servicio aproximadamente con unos 16 hermanos,
                                en un local situado en el 1106 de la calle Witte RD. 3 años después nos mudamos al 1131 de
                                la misma calle Witte, y en el mes de enero del 2001, al experimentar un hermoso crecimiento,
                                el Señor nos permitió regresar al 1106 de la Witte RD., donde se remodeló la propiedad,
                                haciendo un Santuario con capacidad para 500 personas para La Gloría de Dios.</p>
                            <p data-aos="fade-down">A fines del año 2002 el pastor y apóstol Pedro Cantú junto con su
                                esposa Leticia fueron visitados por el Señor en la ciudad de Guatemala, en un Congreso al
                                cuál fueron invitados y se habló sobre la Operación Multiplicación. Ahí recibieron las
                                estrategias para establecer La Visión Conquistando y Transformando, la cual ha traído un
                                crecimiento y fortalecimiento en nuestra Iglesia, y además está siendo de bendición a otros
                                ministerios e iglesias en Houston, también en otras ciudades de Estados Unidos, Canadá,
                                México y Centroamérica.</p>
                            <p data-aos="fade-down">Y en el mes de mayo del 2010 Dios nos sorprendio con una tremanda
                                transferncia ya que sobrenaturalmente la iglesia Amor y Restauracion compro la propiedad
                                ubicada en el 1610 Campbel Rd. Houston Texas 77055 a Spring Branch First Baptist Church una
                                propiedad con casi 6 acres de tierra y 65,000 pies cuadrados de construccion contando con un
                                hermoso Santuario con 728 butacas y con capacidad para expanderse a 350 mas y ademas con 70
                                aulas educativas y un hermoso Gimnasio.
                            <p>
                            <p data-aos="fade-down">Creemos que la unidad y el compromiso de las personas que estamos
                                trabajando en este equipo ministerial nos llevarán a alcanzar a Houston y los EUA para
                                Cristo, junto con aquellos pastores e iglesias que son parte del Cuerpo de Cristo aquí en
                                esta nación.</< /p>
                        </div>
                        <div class="col-sm-5">
                            <div class="sticky-top mt-4 mb-4">
                                <iframe width="100%" height="300" src="https://www.youtube.com/embed/_lVRBUrGc3c"
                                    title="Aniversario 28 Amor y Restauracion" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Nuestra historia -->
    <!--Descarga -->
    <section class="download-app">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <img data-aos="flip-left" src="{{ asset('assets/img/index/phone.png') }}"
                                alt="Descarga nuestra app">
                        </div>
                        <div class="col-sm-6 p-4">
                            <div class="sticky-top">
                                <h3 data-aos="fade-down">Descarga nuestra aplicación</h3>
                                <p data-aos="fade-down">Y recibe notificaciones de nuestra iglesia. Entérate de Eventos,
                                    Noticias, y más.</p>
                                <a target="_blank"
                                    href="https://apps.apple.com/us/app/amor-y-restauracion/id1134629946?ls=1"><img
                                        data-aos="flip-left" class="ios"
                                        src="{{ asset('assets/img/index/download-apple.png') }}"
                                        alt="Descarga nuestra app IOS"></a>
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.echurchapps.amoryrestaur&hl=en&pli=1"><img
                                        data-aos="flip-left" class="android"
                                        src="{{ asset('assets/img/index/download-android.png') }}"
                                        alt="Descarga nuestra app android"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Descarga -->

    <!--- Contactanos --->
    <section class="contactanos" id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 text-center">
                    <h3 class="mb-4" data-aos="fade-down">Contáctanos</h3>
                    <input data-aos="fade-down" type="text" class="form-control" placeholder="Nombre">
                    <input data-aos="fade-down" type="text" class="form-control" placeholder="Asunto">
                    <input data-aos="fade-down" type="text" class="form-control" placeholder="Email">
                    <input data-aos="fade-down" type="text" class="form-control" placeholder="Teléfono">
                    <textarea data-aos="fade-down" class="form-control" name="mensaje" placeholder="Mensaje" id=""
                        cols="30" rows="10"></textarea>
                    <a class="btn" data-aos="fade-up" href="#">Más información</a>
                </div>
            </div>
        </div>

    </section>
    <!--- /Contactanos --->

    </div>
@endsection
