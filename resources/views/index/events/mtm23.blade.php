<?php $page = 'Gobierno & Conquista'; ?>

@extends('layout.mainlayout')
@section('content')
    <section class="hero">
        <img src="{{ asset('assets/img/index/events/mtm23.png') }}" class="back-video" alt="Axios">

        <img style="border-radius: 15px; margin:10px; width: 100%" class="img-fluid serv-img event-img" alt="Axios"
            src="{{ asset('assets/img/index/events/mtm23.png') }}">

    </section>
    <section class="container mt-4">
        <div class="row ">
            <div class="col-sm-12">
                <div class="heading">
                    <a href="#information">
                        <h2>Información General <i class="fa fa-chevron-down"></i> </h2>
                    </a>
                    <span>01-03 de Noviembre </span>
                </div>
            </div>
        </div>
    </section>

    <section id="information">
        <div class="container">
            <div class="row ">
                <div class="col-sm-4">
                    <div class="box text-center" style="height: 90%">
                        <a target="_blank" href="https://icar.churchcenter.com/people/forms/606976"><img
                                class="img-fluid mb-4 text-center" width="64px" height="64px" alt="Registro Pastoral A&R"
                                src="{{ asset('assets/img/index/events/icons/pastor.png') }}"></a>
                        <h4>Registro Pastoral</h4>
                        <a target="_blank" class="btn btn-primary btn-registro m-4"
                            href="https://icar.churchcenter.com/people/forms/606976">Registrate
                            aquí</a>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box text-center" style="height: 90%">
                        <a target="_blank" href="https://icar.churchcenter.com/people/forms/611133"><img
                                class="img-fluid mb-4 text-center" width="64px" height="64px" alt="Registro A&R"
                                src="{{ asset('assets/img/index/events/icons/anadir.png') }}"></a>
                        <h4>Registro General</h4>
                        <a target="_blank" class="btn btn-primary btn-registro m-4"
                            href="https://icar.churchcenter.com/people/forms/611133">Registrate
                            aquí</a>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="box text-center">
                        <img class="img-fluid mb-4" width="64px" height="64px" alt="Alojamiento A&R"
                            src="{{ asset('assets/img/index/events/icons/hotel.png') }}">
                        <h4>ALOJAMIENTO</h4>
                        <a target="_blank" class="btn btn-primary btn-registro m-4"
                            href="https://www.staybridge.com/redirect?path=hd&brandCode=SB&localeCode=en&regionCode=1&hotelCode=HOUKP&_PMID=99801505&GPC=AAR&cn=no&viewfullsite=true">Registrate
                            aquí</a>

                    </div>

                </div>



            </div>
        </div>
    </section>

    <section class="container mt-4">
        <div class="row ">
            <div class="col-sm-12">
                <div class="heading">
                    <a href="#information">
                        <h2>Invitados Especiales <i class="fa fa-chevron-down"></i> </h2>
                    </a>
                    <span>Gobierno & Conquista </span>
                </div>
            </div>
        </div>
    </section>

    <section id="information">
        <div class="container">
            <div class="row ">
                <div class="col-sm-6">
                    <div class="box text-center">
                        <img class="img-fluid mb-4" width="170px" height="170px" style="border-radius: 100px"
                            alt="Job Gonzalez A&R" src="{{ asset('assets/img/index/events/job.jpg') }}">
                        <h4>Job Gonzalez</h4>
                        <h5>Salmista</h5>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box text-center">
                        <img class="img-fluid mb-4" width="170px" height="170px" style="border-radius: 100px"
                            alt="Satirio Dos Santos A&R" src="{{ asset('assets/img/index/events/satirio.jpg') }}">
                        <h4>Satirio Dos Santos</h4>
                        <h5>Apostol</h5>

                    </div>
                </div>

                <div class="col-sm-12">

                    <div class="box text-center">
                        <h3>ANFITRIONES</h3>
                        <img class="img-fluid mb-4" width="350px" height="200px" style="border-radius: 300px"
                            alt="Pedro y Leticia Cantu A&R" src="{{ asset('assets/img/index/events/apostoles.png') }}">
                        <h4>Pedro y Leticia Cantu</h4>
                        <h5>Pastores</h5>

                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <div class="box text-center">

                        <img class="img-fluid mb-4" width="84px" height="84px" alt="Calendario Axios A&R"
                            src="{{ asset('assets/img/index/events/icons/calendario.png') }}">
                        <h3>Programa</h3>

                        <h4>Miércoles | 01 de Noviembre</h4>
                        <p>
                            <strong>7:30 PM</strong> Inauguración
                        </p>

                        <h4>Jueves | 02 de Noviembre</h4>
                        <p>
                            <strong>3:00 PM - 6:00 PM </strong> Plenarias <br>
                            <strong>7:30 PM </strong> Celebración y Plenaria <br>
                        </p>

                        <h4>Viernes | 03 de Noviembre</h4>
                        <p>
                            <strong>3:00 PM - 6:00 PM </strong> Plenarias <br>
                            <strong>7:30 PM </strong> Celebración y Plenaria <br>
                        </p>

                    </div>
                    <a target="_blank" class="btn btn-primary btn-registro m-4" href="https://wa.link/7d24rx">Escríbenos</a>
                </div>
            </div>
        </div>
    </section>

    </div>
@endsection
