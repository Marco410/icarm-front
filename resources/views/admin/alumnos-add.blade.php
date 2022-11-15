<?php $page="Dashboard";?>

@extends('layout.mainlayout_admin')
@section('content')		
<div class="page-wrapper">
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-12">
							<h4>Añadir nuevo alumno</h4>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<div class="row">
					<div class="col-sm-12">
						@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						@endif

						@if (session('status_success'))
							<div class="alert alert-success">
								{{ session('status_success') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							
							</div>
						@endif

						@if (session('error'))
							<div class="alert alert-danger">
								{{ session('error') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						@endif
					</div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
							<form method="POST" action="{{ route('alumno.create') }}">
								{{ csrf_field() }}
                            	<div class="row">
                                	<div class="col-sm-4">
                                    <label for="">Nombre:</label>
                                        <input type="text" name="nombre" id="nombre" class="form-control mb-2" placeholder="Nombre"  >
									</div>
									<div class="col-sm-4">
										<label for="">Apellido Paterno:</label>
											<input type="text" name="apellido_p" id="apellido_p" class="form-control mb-2" placeholder="Apellido Paterno"  >
									</div>
									<div class="col-sm-4">
										<label for="">Apellido Materno:</label>
											<input type="text" name="apellido_m" id="apellido_m" class="form-control mb-2" placeholder="Apellido Materno"  >
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="">Teléfono:</label>
										<input type="text" name="telefono" id="telefono" class="form-control mb-2" placeholder="Teléfono"  >
									</div>
									<div class="col-sm-6">
										<label for="">Fecha de Nacimiento:</label>
										<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control mb-2" placeholder="Fecha de Nacimiento"  >
									</div>
								</div>
								<div class="row mt-4">
									<div class="col-sm-6">
										<div class="form-group form-check float-right">
											<input type="checkbox" class="form-check-input" id="exampleCheck1" name="asistencia" >
											<label class="form-check-label" for="exampleCheck1">Añadir asistencia</label>
										  </div>
									</div>
									<div class="col-sm-6">
										<button class="btn btn-sm btn-block btn-primary" > <i class="fas fa-save" ></i> Añadir Nuevo</button>
									</div>
								</div>
							</form>
                        </div>
                    </div>
                </div>
					
					
				</div>
			</div>
		</div> 
        </div>
		<!-- /Main Wrapper -->
	   @endsection
	  