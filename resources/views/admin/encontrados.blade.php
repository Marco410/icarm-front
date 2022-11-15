<?php $page = 'Encontrados'; ?>

@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Encontrados</h3>
                    </div>
                    <div class="col-auto text-right">
                        
                       
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
					
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="tabla-users" class="table table-hover table-center mb-0 ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Clave</th>
                                            <th>Nombre</th>
                                            <th>Sexo</th>
                                            <th>Edad</th>
                                            <th>Teléfono</th>
                                            <th>Bautizar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($encontrados as $encontrado)
                                            <tr>
                                                <td>{{ $encontrado->idEncontrado }}</td>
                                                <td>{{ $encontrado->clave }}</td>
                                                <td>{{ $encontrado->Nombre }} {{ $encontrado->ApellidoPaterno }} {{ $encontrado->ApellidoMaterno }}</td>
                                                <td>{{ $encontrado->Sexo }}</td>
                                                <td>{{ $encontrado->Edad }}</td>
                                               
                                                <td>{{ $encontrado->Telefono}}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('bautizar') }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="clave" value="{{ $encontrado->clave }}" >
                                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus" ></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Main Wrapper -->
@endsection
