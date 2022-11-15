<?php $page="Citas";?>
@extends('layout.mainlayout')
@section('content')		
<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-4 theiaStickySidebar">
						@include('usuario.sidebar')
					</div>
					<div class="col-xl-9 col-md-8">
						<h4 class="widget-title">Citas en mis Agencias</h4>
						<div class="card mb-0">

							<div class="row no-gutters">
								<div class="col-lg-12">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-12">
												@if (session('status_cita'))
													<div class="alert alert-success">
														{{ session('status_cita') }}
														<button type="button" class="close" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
												@endif
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
												<table class="table table-hover table-center mb-0 datatable" style="width:100%">
													<thead>
														<tr>
															<th>#</th>
															<th>Agencia</th>
															<th>Autor</th>
															<th>Fecha Solicitada</th>
															<th>Tipo de Cliente</th>
															<th>Motivo</th>
															<th>Estatus</th>
															<th>Acciones</th>
														</tr>
													</thead>
													<tbody>
														@for ($i = 0; $i < count($citas) ; $i++)
															@foreach ($citas[$i] as $cita)	
															<tr>
																<td>{{ $cita->id }}</td>
																<td><a href="{{route('agencia.detalles',$cita->agencia[0]->id)}}" target="_blank" >
																	{{ $cita->agencia[0]->nombre }}<a>
																	</td>
																	<td>{{ $cita->nombre }} {{ $cita->apellidos }}</td>
																	
																	<td>{{ Date('d/M/Y h:i a', strtotime($cita->date_cita)) }}</td>
																	<td>{{ $cita->tipo_cliente }}</td>
																	<td>{{ $cita->motivo_cita }}</td>
																	<td>
																		@if ($cita->accept == 0 )
																			<span class="badge badge-info" >Sin Revisar</span>
																		@elseif ($cita->accept == 1)
																			<span class="badge badge-success" >Aceptada</span>	
																		@else
																		<span class="badge badge-danger" >Rechazada</span>
																		@endif
																	</td>
																	<td>
																		<a class="btn btn-sm bg-info-light " href="{{ route('user.citas.ver',$cita->id) }}"> <i class="fas fa-eye" ></i> </a>
																	</td>
																	
																</tr>
																@endforeach
															@endfor
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
				</div>
			</div>
		</div>
</div>
@endsection