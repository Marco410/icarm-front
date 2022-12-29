<?php $page = 'Matrimonios'; ?>

@extends('layout.mainlayout')
@section('content')
    <section class="hero">
        <img src="{{ asset('assets/img/index/matrimonios/matrimonio.jpg') }}" class="back-video" alt="Matrimonios">
        <div class="content">
            <h1 data-aos="fade-up">Matrimonios</h1>
            <p data-aos="fade-up">Por tanto, lo que Dios juntó, no lo separe el hombre – <strong> Marcos 10:9</strong></p>
        </div>
    </section>
    <!--- Matrimonios --->
    <section class="inner-page-hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="sticky-top mt-4">
                        <img src="{{ asset('assets/img/index/matrimonios/para_siempre.png') }}" alt="Para siempre">
                    </div>
                </div>
                <div class="col-sm-7">
                    <p class="p-4">Una de las cosas mas importantes en el corazón de Dios es LA FAMILIA, por eso con la
                        ayuda de El Espíritu Santo hemos desarrollado un plan de trabajo para darle continuidad en nuestro
                        6o. año a las reuniones matrimoniales las cual hemos denominado: “MATRIMONIOS PARA SIEMPRE” en este
                        2022.</p>
                    <p class="p-4">El Señor ha traído para nuestra iglesia una visitación invaluable e incomparable del
                        Espíritu Santo y es nuestro sueño poder transmitir los principios de la palabra de Dios a todas
                        aquellas personas que quieran desarrollarse y transmitir una buena salud en el área de la Familia.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!--- /Matrimonios --->

    <section class="coordinadores">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 element">
                    <div class="box justify-content-center">
                        <img class="img-fluid" src="{{ asset('assets/img/index/matrimonios/javier_raquel.png') }}"
                            alt="Javier y Raquel Hernández">
                        <h4>Javier y Raquel Hernández</h4>
                        <p>Coordinadores</p>
                        <i class="fa fa-phone-alt color-primary"></i>
                        <a href="tel:281-536-7694"> 281-536-7694</a> <br>
                        <i class="fa fa-phone-alt color-primary"></i><a href="tel:832-216-5453"> 832-216-5453</a>
                    </div>
                </div>
                <div class="col-sm-6 element">
                    <div class="box">
                        <img class="img-fluid" src="{{ asset('assets/img/index/matrimonios/juan_gladys.png') }}"
                            alt="Javier y Raquel Hernández">
                        <h4>Juan Carlos y Gladys Silva</h4>
                        <p>Asistentes de Coordinación</p>
                        <i class="fa fa-phone-alt color-primary"></i>
                        <a href="tel:281-701-7275"> 281-701-7275</a> <br>
                        <i class="fa fa-phone-alt color-primary"></i><a href="tel:713-261-8865"> 713-261-8865</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="carousel-page">
        <div class="container">
            <div class="" data-aos="fade-up">
                <div class="images-carousel owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 10200px;">
                            <div class="owl-item active" style="margin-right: 10px;">
                                <a href="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    <div class="cate-widget">
                                        <img class="img-fluid serv-img" alt="Carousel matrimonios"
                                            src="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item" style="margin-right: 10px;">
                                <a href="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    <div class="cate-widget">
                                        <img class="img-fluid serv-img" alt="Carousel matrimonios"
                                            src="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item" style="margin-right: 10px;">
                                <a href="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    <div class="cate-widget">
                                        <img class="img-fluid serv-img" alt="Carousel matrimonios"
                                            src="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item" style="margin-right: 10px;">
                                <a href="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    <div class="cate-widget">
                                        <img class="img-fluid serv-img" alt="Carousel matrimonios"
                                            src="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item" style="margin-right: 10px;">
                                <a href="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    <div class="cate-widget">
                                        <img class="img-fluid serv-img" alt="Carousel matrimonios"
                                            src="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item" style="margin-right: 10px;">
                                <a href="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    <div class="cate-widget">
                                        <img class="img-fluid serv-img" alt="Carousel matrimonios"
                                            src="{{ asset('assets/img/index/matrimonios/carousel.png') }}">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
