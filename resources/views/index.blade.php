<?php $page = 'Inicio'; ?>

@extends('layout.mainlayout')
@section('content')
    <section class="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="{{ asset('assets/video/index/hero_section.mp4') }}" type="video/mp4">
        </video>
        <div class="content">
            <h1 data-aos="fade-up">Amor & Restauración</h1>
            <a data-aos="fade-right" href="#donaciones">Donaciones</a>
            <a data-aos="fade-up" href="#ubicaciones">Ubicaciones</a>
            <a data-aos="fade-left" href="#contacto">Contácto</a>
        </div>
    </section>
    <?php $hoy = date('Y-m-d');
    $fechaAxios = '2023-11-05'; ?>
    {{-- Eventos section --}}
    <?php if ($hoy <= $fechaAxios){ ?>
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
                                    <div class="owl-item active" style="margin-right: 30px;">
                                        <a href="{{ route('index.mtm23') }}">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="MtM 2023"
                                                    src="{{ asset('assets/img/index/events/mtm23.png') }}">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> A&R Central</span></h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> Nov 01-03 2023
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
        </div>
    </section>
    <?php } ?>

    <section class="popular-services" id="eventos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading">
                                <h2>Escucha nuestro Podcast</h2>
                                <span>Explora nuestros episodios</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="viewall">
                                <span>Podcast</span>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <iframe title="Pastor Pedro Cantu Podcast" allowtransparency="true" height="315" width="100%"
                            style="border: none; min-width: min(100%, 430px);" scrolling="no" data-name="pb-iframe-player"
                            src="https://www.podbean.com/player-v2/?i=bnxay-f457dc-pbblog-playlist&share=1&download=1&rtl=0&fonts=Arial&skin=1&font-color=&logo_link=episode_page&order=episodic&limit=10&filter=all&ss=a713390a017602015775e868a2cf26b0&btn-skin=1b1b1b&size=315"
                            allowfullscreen=""></iframe>
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
                                <a href="{{ route('index.estrategia') }}">
                                    <i class="fa fa-lightbulb" style="color:var(--white);"></i> Estrategia </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /quienes-somos -->
    <!--- Cobertura --->
    <section class="cobertura">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="sticky-top mt-4">
                        <h3>Cobertura</h3>
                        <p>Dios tiene un plan, una estructura y una estrategia para que el cuerpo de Cristo, la Iglesia,
                            funcione, se edifique, crezca con sentido de destino y cumpla el plan en la tierra a través de:
                            Apóstoles, profetas, evangelistas, pastores y maestros.
                        </p>
                        <a class="btn" data-aos="fade-up" href="https://eric3r1c.wixsite.com/mtm-">Más información</a>
                    </div>
                </div>
                <div class="col-sm-7 img-back">
                    <img data-aos="fade-down" src="{{ asset('assets/img/index/cobertura.png') }}" alt="Donaciones ICARM">
                </div>
            </div>
        </div>

    </section>
    <!--- /Cobertura --->

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
                            <p data-aos="fade-down">En Julio de 1990, el Pastor Pedro Cantú y su esposa Leticia, junto con
                                sus dos hijas pequeñas, Rocío y Perla llegaron a Houston, TX, desde Monterrey, México con
                                nada más que dos maletas y corazones llenos de fe. Más tarde ese año, la pastora Leticia dio
                                a luz a su hija menor, Sarahí y su familia de cinco miembros estaba completa.
                            </p>
                            <p data-aos="fade-down">El pastor Pedro llevaba un año trabajando como maquinista y sintió el
                                llamado de Dios sobre
                                su vida para compartir el amor de Cristo con otras familias. En 1991 él y su esposa abrieron
                                las puertas de su pequeño departamento para reunirse con otras dos familias para adorar a
                                Dios y estudiar la Biblia.</p>
                            <p data-aos="fade-down">Ese pequeño grupo pronto comenzó a multiplicarse y las familias
                                decidieron que era hora de expandir sus horizontes. Hicieron un esfuerzo de colaboración
                                para alquilar un pequeño lugar donde pudieran crear un espacio para adorar a Dios y sin
                                darse cuenta, eran ya una pequeña congregación.
                            <p>
                            <p data-aos="fade-down">Desde la apertura de Amor y Restauración en 1991 nos hemos mudado tres
                                veces, cada vez expandiendonos en crecimiento y en oportunidades para servir no sólamente a
                                la comunidad local, sino también a la red de iglesias que están bajo la cobertura de este
                                ministerio.
                            </p>
                            <p data-aos="fade-down">En este caminar hemos enfrentado retos al igual que victorias, siempre
                                conscientes de que la voluntad y el favor de Dios van al frente de todo lo que hacemos. ¡Es
                                por su gracia y amor que hoy seguimos de pie para su gloria y para que su reino se siga
                                expandiendo!</p>
                            <p data-aos="fade-down">Es para nosotros un honor poder ser los pies y manos de Jesús a través
                                de la obra que Él nos ha confiado y te invitamos a que tú también seas parte de lo que Dios
                                está haciendo a través de Amor y Restauración.</p>
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

    <section class="edificacion">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <img data-aos="zoom-in" src="{{ asset('assets/img/index/edificacion.png') }}" class="img-fluid"
                        alt="Edificación">
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works -->
    <section class="how-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading howitworks">
                        <h2 data-aos="fade-down">Nuestro <strong class="text-primary">Compromiso</strong></h2>
                        <p data-aos="fade-down"><span><small>37.</small> Jesús le dijo: Amarás al Señor tu Dios con todo tu
                                corazón, y con toda tu alma, y con toda tu mente.</span></p>
                        <p data-aos="fade-down"><span><small>38.</small> Este es el primero y grande mandamiento.
                                <small>39.</small> Y el segundo es semejante: Amarás a tu prójimo como a ti mismo.</span>
                        </p>
                        <p data-aos="fade-down"><span><small>40.</small> De estos dos mandamientos depende toda la ley y
                                los profetas.</span></p>
                    </div>
                    <div class="howworksec">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="howwork">
                                    <div data-aos="flip-down" class="iconround">
                                        <div class="steps"><i class="fa fa-bookmark"></i></div>
                                        <img class="mt-2" width="60px" src="assets/img/icons/libro.png"
                                            alt="Cuentanos">
                                    </div>
                                    <h3 data-aos="fade-down"> Mateo 22:37-40</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /How It Works -->
    <!-- como-funciona -->
    <section class="como-funciona">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="heading">
                                <h2 data-aos="fade-down" class="text-white">¿Necesitas Oración?</h2>
                            </div>
                        </div>
                    </div>
                    <div data-aos="zoom-in" class="row">
                        <div class="col-lg-12 text-center mb-4">
                            <div class="image">
                                <div class="oracion-carousel owl-carousel owl-theme owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 10200px;">
                                            <div class="owl-item active">
                                                <a href="{{ asset('assets/img/index/oracion1.png') }}">
                                                    <div class="cate-widget">
                                                        <img class="img-fluid serv-img" alt="Carousel oracion"
                                                            src="{{ asset('assets/img/index/oracion1.png') }}">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="owl-item">
                                                <a href="{{ asset('assets/img/index/oracion2.png') }}">
                                                    <div class="cate-widget">
                                                        <img class="img-fluid serv-img" alt="Carousel oracion"
                                                            src="{{ asset('assets/img/index/oracion2.png') }}">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="owl-item">
                                                <a href="{{ asset('assets/img/index/oracion3.png') }}">
                                                    <div class="cate-widget">
                                                        <img class="img-fluid serv-img" alt="Carousel oracion"
                                                            src="{{ asset('assets/img/index/oracion3.png') }}">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <img class="mb-2" width="40px" src="assets/img/icons/sillon.png"
                                    alt="Sillo ICARM"><br>
                                <span><strong></strong></span>
                                <p>La oración es esencial para nuestro crecimiento espiritual. Queremos estar cerca de ti y
                                    caminar contigo. Haznos saber cómo podemos orar por ti.</p>
                                <a class="btn" data-aos="fade-up" href="#contacto">Peticiones de oración</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /como-funciona -->
    <!-- Visitanos -->
    <section class="visitanos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading howitworks">
                        <h2 data-aos="fade-down">Visitanos <img class="img-fluid mb-2" width="30px"
                                src="assets/img/icons/ubicacion.png" alt="Visitanos">
                        </h2>
                        <p data-aos="fade-down"><span>Nos encantaría tener la bendición de recibirte en alguno de nuestros
                                servicios. Si tienes alguna duda, siéntete en la libertad de contactarnos.</span></p>
                    </div>
                    <div class="row">
                        <div data-aos="fade-right" class="col-lg-6">
                            <a href="{{ asset('assets/img/index/iglesia/central.png') }}" style="height: 50%">
                                <div class="cate-widget">
                                    <img class="img-fluid serv-img" alt="Marca Audi"
                                        src="{{ asset('assets/img/index/iglesia/central.png') }}">
                                    <div class="cate-title">
                                        <h3><span><i class="fas fa-circle"></i> A&R Central</span></h3>
                                    </div>
                                    <div class="cate-title-center">
                                        <h3> A&R Central</h3>
                                    </div>
                                    <div class="cate-count">
                                        <i class="fa fa-map-marker"></i> 10707 Haddington Dr Houston Texas 77043
                                    </div>
                                    <div class="cate-hour">

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div data-aos="fade-left" class="col-lg-6">
                            <a href="https://static.wixstatic.com/media/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg"
                                style="height: 50%">
                                <div class="cate-widget">
                                    <img class="img-fluid serv-img" alt="Marca BMW"
                                        src="https://static.wixstatic.com/media/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg/v1/fill/w_734,h_958,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bf53c1_b1ec9ae91b954d629cca1c5c0b6d80e4~mv2.jpg">
                                    <div class="cate-title">
                                        <h3><span><i class="fas fa-circle"></i> A&R Norte</span></h3>
                                    </div>
                                    <div class="cate-title-center">
                                        <h3> A&R Norte</h3>
                                    </div>
                                    <div class="cate-count">
                                        <i class="fa fa-map-marker"></i> 16800 Imperial Valley Dr. Houston TX. 77060
                                    </div>
                                    <div class="cate-hour">

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Visitanos -->
    <!-- Mapas -->
    <section class="map-section" id="ubicaciones">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1267.260141429269!2d-95.5606772995278!3d29.799118900600217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c4cd45ca6bf7%3A0x4915a605e36217c1!2s10707%20Haddington%20Dr%2C%20Houston%2C%20TX%2077043%2C%20EE.%20UU.!5e0!3m2!1ses-419!2smx!4v1680749350196!5m2!1ses-419!2smx"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- /Mapas -->
    <!--- Donaciones --->
    <section class="donaciones" id="donaciones">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="sticky-top mt-4">
                        <h3>Donaciones</h3>
                        <p>Gracias por hacer posible que la iglesia siga avanzando. Tu apoyo nos ayuda a llevar el evangelio
                            alrededor del mundo.
                        </p>
                        <a class="btn" data-aos="fade-up" target="_blank"
                            href="https://pushpay.com/g/amoryrestauracion?fnd=-pn9NDeQptfw-DoqbI0iVg&r=No&lang=es&src=qrcode">Realizar
                            Donación</a>
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
                    <form method="POST" action="{{ route('send.contacto') }}">
                        {{ csrf_field() }}
                        <input data-aos="fade-down" type="text" class="form-control" required name="name"
                            placeholder="Nombre">
                        <input data-aos="fade-down" type="text" class="form-control" required name="asunto"
                            placeholder="Asunto">
                        <input data-aos="fade-down" type="email" class="form-control" required name="email"
                            placeholder="Email">
                        <input data-aos="fade-down" type="text" class="form-control" required name="telefono"
                            placeholder="Teléfono">
                        <textarea data-aos="fade-down" class="form-control" name="mensaje" name="msj" required placeholder="Mensaje"
                            id="" cols="30" rows="10"></textarea>
                        <button type="submit" class="btn btn-sm btn-primary" data-aos="fade-up">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!--- /Contactanos --->

    </div>
@endsection
