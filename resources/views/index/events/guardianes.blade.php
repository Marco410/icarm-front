<?php $page = 'Guardianes'; ?>

@extends('layout.mainlayout')
@section('content')
    <section class="hero">
        <img src="{{ asset('assets/img/index/events/guardianes.png') }}" class="back-video" alt="guardianes">

        <img style="border-radius: 15px; margin:20px; width: 100%" class="img-fluid serv-img" alt="guardianes"
            src="{{ asset('assets/img/index/events/guardianes.png') }}">
    </section>
    <section class="image-text-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">

                </div>
                <div class="col-sm-12 text-center">
                    <a href="{{ asset('assets/img/index/events/guardianes-2.png') }}">
                        <img style="border-radius: 15px; margin:10px; width: 100%" class="img-fluid serv-img"
                            alt="guardianes" src="{{ asset('assets/img/index/events/guardianes-2.png') }}">
                    </a>

                </div>
            </div>

        </div>
    </section>

    </div>
@endsection
