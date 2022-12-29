<?php $page = 'Mujeres'; ?>

@extends('layout.mainlayout')
@section('content')
    <section class="hero">
        <img src="{{ asset('assets/img/index/mujeres/portada.jpg') }}" class="back-video" alt="Mujeres">
        <div class="content">
            <h1 data-aos="fade-up">Mujeres</h1>
            <p data-aos="fade-up">Bienvenida a nuestra sección de Mujeres<strong> Sabias y Valientes</strong></p>
        </div>
    </section>
    <!--- Matrimonios --->
    <section class="inner-page-hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="sticky-top mt-4">
                        <img src="{{ asset('assets/img/index/mujeres/guerreras.png') }}" alt="Mujeres Guerreras">
                    </div>
                </div>
                <div class="col-sm-7">
                    <p class="p-4">Recuerda que Dios te ha colocado a ti como esa mujer de influencia, de empuje, de
                        mucho valor y amor para los tuyos. Eres una columna muy fuerte entre los tuyos, y si es así es
                        solamente porque tenemos un Dios Fuerte y Magnifico, lleno de misericordia, bondad y amor. El dijo
                        que no nos dejaría solas, que estaría con nosotros hasta el fin del mundo. Si El va con nosotras yo
                        también quiero ir.! En esta sección encontraras mensajes para tu vida, que te van a desafiar y a
                        llevarte a reconocer la grandeza de Dios en medio nuestro.</p>
                    <p class="p-4">También quisiéramos apoyarte con guía bíblica en medio de los conflictos y luchas que
                        nosotras las mujeres pasamos, esperamos sea de ayuda para tu caminar en Cristo, y te invitamos a que
                        lo compartas con tus amistades y familia que no tienen a Cristo como su Salvador.
                    </p>
                    <p class="float-right"> <strong> - Pastora Leticia Cantú</strong></p>
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
                        <h3>Lety Cantú</h3>
                        <p>Pastora</p>
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
                    <img data-aos="fade-down" src="{{ asset('assets/img/index/mujeres/lety_cantu.png') }}"
                        alt="Pastora Leticia Cantú ICARM">
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
                                        <a href="{{ asset('assets/img/index/mujeres/cansada.png') }}">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Marca Alfa Romeo"
                                                    src="{{ asset('assets/img/index/mujeres/cansada.png') }}">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> ¿Cansada y desesperada?</span>
                                                    </h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 16 nov 2022
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-user"></i> Lety Cantú
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                        <a href="{{ asset('assets/img/index/mujeres/consagracion.png') }}">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Marca Audi"
                                                    src="{{ asset('assets/img/index/mujeres/consagracion.png') }}">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> La Consagración provoca una
                                                            dimensión nueva</span></h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 19 nov 2022
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-user"></i> Lety Cantú
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                        <a href="{{ asset('assets/img/index/mujeres/cansada.png') }}">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Marca Alfa Romeo"
                                                    src="{{ asset('assets/img/index/mujeres/cansada.png') }}">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> ¿Cansada y desesperada?</span>
                                                    </h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 16 nov 2022
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-user"></i> Lety Cantú
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                        <a href="{{ asset('assets/img/index/mujeres/consagracion.png') }}">
                                            <div class="cate-widget">
                                                <img class="img-fluid serv-img" alt="Marca Audi"
                                                    src="{{ asset('assets/img/index/mujeres/consagracion.png') }}">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> La Consagración provoca una
                                                            dimensión nueva</span></h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-calendar"></i> 19 nov 2022
                                                </div>
                                                <div class="cate-hour">
                                                    <i class="fas fa-user"></i> Lety Cantú
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
