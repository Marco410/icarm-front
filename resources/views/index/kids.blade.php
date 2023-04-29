<?php $page = 'Kids'; ?>

@extends('layout.mainlayout')
@section('content')
    <section class="hero">
        <img src="{{ asset('assets/img/index/kids/portada.jpg') }}" class="back-video" alt="Kids">
        <div class="content">
            <img src="{{ asset('assets/img/kids_logo.png') }}" class="img-fluid" alt="Logo Kids ICAR">
        </div>
    </section>

    <!--- Image - Text --->
    <section class="image-text-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="sticky-top mt-4">
                        <h4>Nuestro Compromiso</h4>
                        <p>Jesús le dijo: Amarás al Señor tu Dios con todo tu corazón, y con toda tu alma, y con toda tu
                            mente.
                            Este es el primero y grande mandamiento.Y el segundo es semejante: Amarás a tu prójimo como a ti
                            mismo.
                            De estos dos mandamientos depende toda la ley y los profetas.</p>
                        <p><strong>- Mateo 22:37-40</strong></p>

                    </div>
                </div>
                <div class="col-sm-6 img-back">
                    <img data-aos="fade-down" src="{{ asset('assets/img/index/kids/compromiso.png') }}"
                        alt="Compromiso Kids">
                </div>
            </div>
        </div>

    </section>
    <!--- /Text - Image --->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="https://www.youtube.com/@icarkids1677/featured" target="_blank"><i class="fab fa-youtube"
                            style="font-size: 70px"></i></a>
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
                                <a href="{{ asset('assets/img/index/kids/carousel/1.png') }}">
                                    <div class="cate-widget">
                                        <img class="img-fluid serv-img" alt="Carousel kids"
                                            src="{{ asset('assets/img/index/kids/carousel/1.png') }}">
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item" style="margin-right: 10px;">
                                <a href="{{ asset('assets/img/index/kids/carousel/3.png') }}">
                                    <div class="cate-widget">
                                        <img class="img-fluid serv-img" alt="Carousel kids"
                                            src="{{ asset('assets/img/index/kids/carousel/3.png') }}">
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item" style="margin-right: 10px;">
                                <a href="{{ asset('assets/img/index/kids/carousel/4.png') }}">
                                    <div class="cate-widget">
                                        <img class="img-fluid serv-img" alt="Carousel kids"
                                            src="{{ asset('assets/img/index/kids/carousel/4.png') }}">
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item" style="margin-right: 10px;">
                                <a href="{{ asset('assets/img/index/kids/carousel/5.png') }}">
                                    <div class="cate-widget">
                                        <img class="img-fluid serv-img" alt="Carousel kids"
                                            src="{{ asset('assets/img/index/kids/carousel/5.png') }}">
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item" style="margin-right: 10px;">
                                <a href="{{ asset('assets/img/index/kids/carousel/6.png') }}">
                                    <div class="cate-widget">
                                        <img class="img-fluid serv-img" alt="Carousel kids"
                                            src="{{ asset('assets/img/index/kids/carousel/6.png') }}">
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
