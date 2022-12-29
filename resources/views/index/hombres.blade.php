<?php $page = 'Hombres'; ?>

@extends('layout.mainlayout')
@section('content')
    <section class="hero">
        <img src="{{ asset('assets/img/index/hombres/portada.jpg') }}" class="back-video" alt="Hombres">
        <div class="content">
            <h1 data-aos="fade-up">Hombres Valientes</h1>
            <p data-aos="fade-up">Pero yo y mi casa, serviremos al Señor.<strong> Josué 24:15, LBLA</strong></p>
        </div>
    </section>
    <!--- Matrimonios --->
    <section class="inner-page-hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="sticky-top mt-4">
                        <h3>COURAGEOUS</h3>
                    </div>
                </div>
                <div class="col-sm-7">
                    <p class="pl-4">Antes de tener nuestro último campamento de hombres en 2014 en un tiempo devocional,
                        Dios me hablo que la clave para que la iglesia se levante con poder es comenzar con las cabezas de
                        hogar ya que allí se originan muchas de las fugas y fracturas en la familia.</p>
                    <p class="pl-4">Vino a mis manos el libro “La Resolución y después de haberlo leído y volver a ver la
                        película “Reto de Valientes” la vi desde otra perspectiva y decidí comenzar un proyecto donde
                        periódicamente me reúno con un grupo base de hombres con quienes estudio cada lección de este libro
                        y ha sido poderoso abrir mi corazón a este grupo de hombres a los cuales bendigo por su
                        responsabilidad en venir a cada reunión que convocamos.
                    </p>
                    <p class="pl-4">El objetivo es que cada uno de ellos me ayudara a llevar en oración a mínimo 4 a 5
                        hombres de nuestra
                        iglesia. Dios me mostro que si los hombres oran la iglesia llegara a otra dimensión y las familias
                        serán
                        protegidas y sanadas.</p>
                    <p class="pl-4">Hemos emprendido esta jornada y estoy emocionado y bendigo a Dios por darme esta
                        estrategia sencilla
                        pero poderosa para bendecir esta casa apostólica. Te invito a que te unas a este proyecto y formes
                        parte de uno de los grupo s de oración de este
                        proyecto:
                    </p>
                    <p class="pl-4"> “LA RESOLUCIÓN DEL MINISTERIO DE HOMBRES DE AMOR Y RESTAURACIÓN”</p>
                    <p class="float-right"><strong>- Pastor Pedro Cantú</strong></p>
                </div>
            </div>
        </div>

    </section>
    <!--- /Matrimonios --->

    <!--- Image - Text --->
    <section class="image-text-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="sticky-top mt-4">
                        <h3>Pedro Cantú</h3>
                        <p>Pastor</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem Ipsum.</p>
                        <a class="btn" data-aos="fade-up" href="#">Ver Perfil <i class="fas fa-user"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 img-back">
                    <img data-aos="fade-down" src="{{ asset('assets/img/index/hombres/pedro_cantu.png') }}"
                        alt="Pastor Pedro Cantú ICARM">
                </div>
            </div>
        </div>

    </section>
    <!--- /Text - Image --->


    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="p-4"><strong>Entradas del blog</strong></h2>
                    <div class="blog-carousel" data-aos="fade-up">
                        <div class="blog-slider owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 10200px;">
                                    <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                        <a href="{{ asset('assets/img/index/hombres/blog1.jpg') }}">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Blog ICARM"
                                                    src="{{ asset('assets/img/index/hombres/blog1.jpg') }}">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> Nueva Entrada</span>
                                                    </h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 16 nov 2022
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-user"></i> Pedro Cantú
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                        <a href="{{ asset('assets/img/index/hombres/blog2.jpg') }}">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Blog icarm"
                                                    src="{{ asset('assets/img/index/hombres/blog2.jpg') }}">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> Nueva Entrada</span></h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 19 nov 2022
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-user"></i> Pedro Cantú
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                        <a href="{{ asset('assets/img/index/hombres/blog3.jpg') }}">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Blog icarm"
                                                    src="{{ asset('assets/img/index/hombres/blog3.jpg') }}">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> Nueva Entrada</span>
                                                    </h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 16 nov 2022
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-user"></i> Pedro Cantú
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                        <a href="{{ asset('assets/img/index/hombres/blog4.jpg') }}">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Blog icarm"
                                                    src="{{ asset('assets/img/index/hombres/blog4.jpg') }}">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> Nueva Entrada</span></h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 19 nov 2022
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-user"></i> Pedro Cantú
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
    </div>
@endsection
