<?php $page = 'Media'; ?>

@extends('layout.mainlayout')
@section('content')
    <section class="hero">
        <img src="{{ asset('assets/img/index/media/portada.jpg') }}" class="back-video" alt="Hombres">
        <div class="content">
            <h1 data-aos="fade-up">Nuevos Episodios</h1>
            <p data-aos="fade-up">Todos los Martes y Jueves.</p>
        </div>
    </section>
    <section class="podcast" style="padding: 80px">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 data-aos="fade-down" class="p-4"><strong>Nuestro Podcast</strong></h2>
                </div>
                <div data-aos="fade-down" class="col-sm-6">
                    <iframe title="Pastor Pedro Cantu Podcast" allowtransparency="true" height="315" width="100%"
                        style="border: none; min-width: min(100%, 430px);" scrolling="no" data-name="pb-iframe-player"
                        src="https://www.podbean.com/player-v2/?i=bnxay-f457dc-pbblog-playlist&share=1&download=1&rtl=0&fonts=Arial&skin=1&font-color=&logo_link=episode_page&order=episodic&limit=10&filter=all&ss=a713390a017602015775e868a2cf26b0&btn-skin=1b1b1b&size=315"
                        allowfullscreen=""></iframe>
                </div>

                <div class="col-sm-6 text-center">
                    <h5 data-aos="fade-down">Disponible en todas las plataformas digitales.</h5>
                    <div class="social-links">
                        <a href="https://music.amazon.com/podcasts/aa0a575a-3392-4a53-868f-6ccc135ccf6b"
                            target="_blank"><img data-aos="fade-right"
                                src="{{ asset('assets/img/index/media/amazon.png') }}" class="back-video"
                                alt="Amazon Music"></a>

                        <a href="https://iheart.com/podcast/109655373" target="_blank"><img data-aos="fade-down"
                                src="{{ asset('assets/img/index/media/iheart.png') }}" class="back-video"
                                alt="Iheart music radio"></a>
                        <a href="https://open.spotify.com/show/5hVThp6kSv6Ra3TFC78frR" target="_blank"><img
                                data-aos="fade-left" src="{{ asset('assets/img/index/media/spotify.png') }}"
                                class="back-video" alt="Spotify"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
@endsection
