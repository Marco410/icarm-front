<?php $page="Dashboard";?>

@extends('layout.mainlayout_admin')
@section('content')		
<div class="page-wrapper">
			<div class="content container-fluid">
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-6">
							<h3>Alumnos</h3>
						</div>
						<div class="col-6"  >
							<a style="float: right" class="btn btn-md btn-primary text-white" href="{{ route('alumnos.add') }}" > <i class="fas fa-plus" ></i> </a>
						</div>
					</div>
				</div>
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
												<th>Nombre</th>
												<th>Teléfono</th>
												<th>Fecha Nacimiento</th>
												<th>Asistencias</th>
												<th>Acciones</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($alumnos as $alumno)
												<tr>
													<td>{{ $alumno->id }}</td>
													<td>{{ $alumno->nombre }} {{ $alumno->apellido_p }} {{ $alumno->apellido_m }}</td>
													<td> <a href="tel:{{ $alumno->telefono }}">{{ $alumno->telefono }}</a> </td>
													<td>{{ $alumno->fecha_nacimiento }}</td>
													<td id="asistencia{{$alumno->id}}" >{{ $alumno->asistencia->count()}}</td>
													<td>
														<button  data-toggle="modal" data-target="#asistenciaModal" data-id="{{ $alumno->id }}" data-nombre="{{ $alumno->nombre }}" class="btn btn-sm btn-success"  > <i class="fas fa-check" ></i></button>
														<button  data-toggle="modal" data-target="#editarModal" data-id="{{ $alumno->id }}" data-nombre="{{ $alumno->nombre }}" data-apellido_p="{{ $alumno->apellido_p }}" data-apellido_m="{{ $alumno->apellido_m }}" data-telefono="{{ $alumno->telefono }}" data-fecha_nacimiento="{{ $alumno->fecha_nacimiento }}" class="btn btn-sm btn-warning text-white"  > <i class="fas fa-edit" ></i></button>
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
        </div>
		<!-- /Main Wrapper -->

		<div class="modal fade" id="asistenciaModal" tabindex="-1" role="dialog" aria-labelledby="asistenciaModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="asistenciaModalLabel">Asistencia a: <strong id="name" ></strong>  </h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<form action="" method="POST">
					{{ csrf_field() }}
					<div class="modal-body">
					<div class="row">
						<input type="hidden" name="alumno_id" id="alumno_id" value="" >
						<div class="col-sm-12">
							<p>¿Estás seguro de pasar asistencia a <strong id="name_two" ></strong> ?</p>
						</div>
					</div>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="button" id="asistencia" class="btn btn-primary">Asistencia</button>
					</div>
				</form>
			  </div>
			</div>
		  </div>
		  <script>
			   	$('#asistenciaModal').on('show.bs.modal', function (event) {
					var button = $(event.relatedTarget) // Button that triggered the modal
					var id = button.data('id');
					var nombre = button.data('nombre');
				
					$("#name").html(nombre);
					$("#name_two").html(nombre);
					$("#alumno_id").val(id);
			});
		  </script>

<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="editarModalLabel">Editar a: <strong id="name_edit" ></strong>  </h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<form action="" method="POST">
			{{ csrf_field() }}
			<div class="modal-body">
				<div class="row">
					<input type="hidden" name="alumno_id_update" id="alumno_id_update" value="" >
					<div class="col-sm-4">
						<div class="form-group">

						<label for="">Nombre</label>
						<input type="text" class="form-control" name="nombre_update" id="nombre_update">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">

						<label for="">Apellido Paterno</label>
						<input type="text" class="form-control" name="apellido_p_update" id="apellido_p_update">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
						
						<label for="">Apellido Materno</label>
						<input type="text" class="form-control" name="apellido_m_update" id="apellido_m_update">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Teléfono</label>
							<input type="text" class="form-control" name="telefono_update" id="telefono_update">
						</div>	
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Fecha de Nacimiento: <strong id="fecha_nacimiento"></strong> </label>
							<input type="date" class="form-control" name="fecha_nacimiento_update" id="fecha_nacimiento_update">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			<button type="button" id="editar-alumno" class="btn btn-primary">Editar Alumno</button>
			</div>
		</form>
	  </div>
	</div>
  </div>
  <script>
		   $('#editarModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var id = button.data('id');
			var nombre = button.data('nombre');
			var apellido_p = button.data('apellido_p');
			var apellido_m = button.data('apellido_m');
			var telefono = button.data('telefono');
			var fecha_nacimiento = button.data('fecha_nacimiento');
		
			$("#name_edit").html(nombre);
			$("#nombre_update").val(nombre);
			$("#apellido_p_update").val(apellido_p);
			$("#apellido_m_update").val(apellido_m);
			$("#telefono_update").val(telefono);
			$("#fecha_nacimiento").html(fecha_nacimiento);
			$("#alumno_id_update").val(id);
	});
  </script>
	   @endsection
	  