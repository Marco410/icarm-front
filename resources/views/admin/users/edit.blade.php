<?php $page='Editar Usuarios';?>

@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">

                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">Editar Usuario</h3> @if ($user->block == 1)
                                <span class="badge badge-danger" >Usuario Bloqueado</span> @else <span class="badge badge-success" >Usuario Activo</span>
                            @endif
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col">
                            <h5 class="page-title">Información</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!-- Form -->
                            <form method="post" enctype="multipart/form-data" action="{{ route('users.update') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Nombre</label></label>
                                    <input class="form-control" type="text" name="id" value="{{ $user->id }}" hidden>
                                    <input class="form-control" type="text" name="name" value="{{ $user->name }}" required >
                                </div>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Apellido Paterno</label>
                                            <input class="form-control" type="text" name="apellido_p" value="{{ $user->apellido_p }}" required >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Apellido Materno</label>
                                            <input class="form-control" type="text" name="apellido_m" value="{{ $user->apellido_m }}"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" type="email" value="{{ $user->email }}"
                                      required  >
                                </div>
                                <div class="form-group">
                                    <label class="w-100">Rol</label>
                                    <select class="custom-select" name="rol" id="rol">

                                        <option value="Admin" {{($user->roles[0]->name == 'Admin') ? 'selected' : ''}}>Admin</option>
                                        <option value="Dealer" {{($user->roles[0]->name == 'Dealer') ? 'selected' : ''}}>Dealer</option>
                                        <option value="Suscriptor" {{($user->roles[0]->name == 'Suscriptor') ? 'selected' : ''}}>Suscriptor</option>

                                    </select>
                                    {{-- <input class="form-control" name="imagen" type="email" value="{{ $user->roles[0]->name }}" > --}}
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="block" type="checkbox" {{ ($user->block == 1) ? 'checked' : '' }} >
                                    <label class="form-check-label" for="flexCheckChecked">
                                      Bloquear Usuario
                                    </label>
                                  </div>
                                <div class="form-group">
                                    <small>Si se bloquea este usuario no podrá comentar.</small>
                                    
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary" type="submit">Guardar cambios</button>
                                    <a href="../usuarios" class="btn btn-link">Cancelar</a>
                                </div>
                            </form>
                            <!-- /Form -->

                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col">
                            <h5 class="page-title">Resumen de membresía</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row border-bottom">
                                    <div class="col-sm-4">
                                        <p class="text-secondary">Membresía</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4><span class="badge text-white" style="background-color: var(--primary)" >Basic</span></h4>
                                    </div>
                                </div>
                                <div class="row border-bottom mt-2">
                                    <div class="col-sm-4">
                                        <p class="text-secondary">Subscripción ID:</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>00001</p>
                                    </div>
                                </div>
                                <div class="row border-bottom mt-2">
                                    <div class="col-sm-4">
                                        <p class="text-secondary">Empezó en:</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>01 Abril 2022</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-secondary">$0000.00</p>
                                    </div>
                                </div>
                                <div class="row border-bottom mt-2">
                                    <div class="col-sm-4">
                                        <p class="text-secondary">Último pago:</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>01 Abril 2022</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-secondary">$0000.00</p>
                                    </div>
                                </div>
                                <div class="row border-bottom mt-2">
                                    <div class="col-sm-4">
                                        <p class="text-secondary">Próximo pago:</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>01 Abril 2022</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-secondary">$0000.00</p>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-12">
                                        <button class="btn btn-md btn-primary btn-block" > <i class="fas fa-trash" ></i> Dar de baja o eliminar cuenta</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    
                    @if (count($user->agencies) != 0)
                    <div class="row">
                        <div class="col">
                            <h5 class="page-title">Agencias</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                @foreach ($user->agencies as $agencia)
                                <div class="col-sm-4">
                                    
                                    <div class="service-widget">
                                        <div class="service-img">
                                            <a href="{{route('agencia.detalles',$agencia->agencia[0]->id)}}">
                                                @if($agencia->agencia[0]->marca[0]->first() != null) 		
                                                <img class="img-fluid serv-img" alt="Marca {{ $agencia->agencia[0]->marca[0]->nombre }}" src="{{URL::asset('storage/marcas/'.$agencia->agencia[0]->marca[0]->imagen)}}">
                                                @else
                                                <img class="img-fluid serv-img" alt="Sin Marca" src="{{URL::asset('storage/marcas/default.jpg')}}">
                                                @endif 
                                                </a>
                                            <div class="item-info">
                                                <div class="service-user">
                                                    {{-- <a href="#">
                                                        
                                                        <img src="assets/img/customer/user-03.jpg" alt="">
                                                    </a> --}}
                                                    {{-- <span class="service-price">{{$i}}</span> --}}
                                                </div>
                                                <div class="cate-list">
                                                    <a class="bg-yellow" href="{{route('agencia.detalles',$agencia->agencia[0]->id)}}">
                                                        {{ $agencia->agencia[0]->marca[0]->nombre }}
                                                   </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3 class="title">
                                                <a href="{{route('agencia.detalles',$agencia->agencia[0]->id)}}">{{$agencia->agencia[0]->nombre}}</a>
                                            </h3>
                                            <div class="rating">
                                                <i class="fas fa-star {{ ($agencia->agencia[0]->rating >= 1) ? 'filled' : '' }}"></i>
                                                <i class="fas fa-star {{ ($agencia->agencia[0]->rating >= 2) ? 'filled' : '' }}"></i>
                                                <i class="fas fa-star {{ ($agencia->agencia[0]->rating >= 3) ? 'filled' : '' }}"></i>
                                                <i class="fas fa-star {{ ($agencia->agencia[0]->rating >= 4) ? 'filled' : '' }}"></i>
                                                <i class="fas fa-star {{ ($agencia->agencia[0]->rating >= 5) ? 'filled' : '' }}"></i>
                                                <span class="d-inline-block average-rating">({{ $agencia->agencia[0]->rating }})</span>
                                            </div>
                                            <div class="user-info">
                                                <div class="row">
                                                    {{-- <div class="col-sm-12 mb-2" title="{{$agencia->telefono}}">
                                                        <span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i><a href="tel:{{$agencia->telefono}}"> <span>{{$agencia->telefono}}</span></a></span>
                                                    </div> --}}
                                                    <div class="col-sm-12 " title="123, 123">
                                                        <span class="col-auto ser-contact"><i class="fas fa-map-marker-alt mr-1"></i><span >{{ $agencia->agencia[0]->ciudad }}, {{ $agencia->agencia[0]->estado }}</span></span>
                                                    </div>
                                                    <div class="col-sm-12 mt-2 ml-2">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6">
                                                                <span class="ser-contact ml-2 mt-1"><i class="fas fa-images mr-1"></i>{{ count($agencia->agencia[0]->fotos) }}</span>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <span class="ser-location ml-2 mt-1"><i class="fas fa-comments mr-1"></i>{{ count($agencia->agencia[0]->reviews) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach

                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-sm-12 text-center mb-4">
                            <small>No tiene agencias</small>
                        </div>
                    </div>
                    @endif
                    
                </div>

            </div>
        </div>
    </div>

    </div>
    <!-- /Main Wrapper -->
@endsection
