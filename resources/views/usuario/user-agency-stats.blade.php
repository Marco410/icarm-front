<?php $page=$agencia->nombre;?>
@extends('layout.mainlayout')
@section('content')		
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-md-4 theiaStickySidebar">
				@include('usuario.sidebar')
			</div>
			<div class="col-xl-9 col-md-8">
				<h4 class="widget-title"> {{ $agencia->nombre }} </h4>
				<div class="row">
					<div class="col-lg-4">
						<a href="#" class="dash-widget dash-bg-3">
							<span class="dash-widget-icon">{{ $finRating }}</span>
							<div class="dash-widget-info">
								<span><i class="fas fa-star filled" ></i> Rating Total</span>
							</div>
						</a>
					</div>
					
					<div class="col-lg-4">
						<a href="#" class="dash-widget dash-bg-2">
							<span class="dash-widget-icon">{{ $agencia->fotos_count }}</span>
							<div class="dash-widget-info">
								<span>Fotos</span>
							</div>
						</a>
					</div>
					<div class="col-lg-4">
						<a href="#" class="dash-widget dash-bg-1">
							<span class="dash-widget-icon">{{ $agencia->reviews_count }}</span>
							<div class="dash-widget-info">
								<span>Comentarios</span>
							</div>
						</a>
					</div>
					
					
				</div>

				

				{{-- GRÁFICA DE LOS CUATRO ESTANDARES TOTAL  --}}
				<div class="row mt-4 card">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6 align-self-center">
								<div class="row">
									<div class="col-sm-12">
										<h2 id="total_rating" >{{ $finRating }}</h2>
										<div class="review-count">
											<div class="rating">
												<i id="1r" class="fas fa-star {{ ($finRating >= 1) ? 'filled' : '' }} fa-lg"></i>
												<i id="2r" class="fas fa-star {{ ($finRating >= 2) ? 'filled' : '' }} fa-lg"></i>
												<i id="3r" class="fas fa-star {{ ($finRating >= 3) ? 'filled' : '' }} fa-lg"></i>
												<i id="4r" class="fas fa-star {{ ($finRating >= 4) ? 'filled' : '' }} fa-lg"></i>
												<i id="5r" class="fas fa-star {{ ($finRating >= 5) ? 'filled' : '' }} fa-lg"></i>
											</div>
										</div>
										<span>Calificación General</span>
									</div>
									<div class="col-sm-12  mt-4 ">
										<div class="row border-top">
											<div class="col-sm-6 mt-2">
												<small class="text-secondary" >Periodo:</small>
											</div>
											<div class="col-sm-6 mt-2">
												<small>Del <strong class="text-primary" id="in" >{{ date('d M Y', strtotime($dateIni)) }}</strong> al <strong class="text-primary" id="end" >{{ date('d M Y')}}</strong> </small>
											</div>
										</div>
										<div class="row border-top mt-3">
											<div class="col-sm-6 mt-2">
												<small class="text-secondary" >Total de comentarios:</small>
											</div>
											<div class="col-sm-6 mt-2">
												<small><strong id="total_reviews" >{{ $agencia->reviews_count }}</strong></small>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row">

									<div class="col-sm-6"  >
										<label for="">Fecha Inicial</label>
										<input class="form-control" type="date" name="range_inTotal" id="range_inTotal" onchange="changePeriodoTotal()" />
									</div>
									<div class="col-sm-6 " >
										<label for="">Fecha Final</label>
										<input class="form-control" type="date" name="range_endTotal" id="range_endTotal" onchange="changePeriodoTotal()" />
									</div>
								</div>
		
								<div class="col-lg-12 mb-4" >
									<canvas id="myChart" width="500" height="270"></canvas>
									<script>
									var agencia_id = {{ $agencia->id }};
									let myChart;						
									function changePeriodoTotal(){
										var ini = $("#range_inTotal").val();
										var fin = $("#range_endTotal").val();
		
										$.ajax({
											url:'/usuario/data-estandar?agencia='+agencia_id+"&range_in="+ini+"&range_end="+fin,
											method: 'GET',
		
										}).done(function(resp){
											if(myChart){
												myChart.destroy();
											}
											$("#1r").removeClass('filled');
											$("#2r").removeClass('filled');
											$("#3r").removeClass('filled');
											$("#4r").removeClass('filled');
											$("#5r").removeClass('filled');

											var inDate = resp[5];
											var endDate = resp[6]
											var total_reviews = resp[4]
											var total_rating = resp[7]

											if(total_reviews == "0"){
												$("#total_rating").html("<span style='font-size:18px' >No hay comentarios en este rango de fechas</span>");
												$("#in").html(inDate);
												$("#end").html(endDate);
												$("#total_reviews").html(total_reviews);

											}else{
												$("#in").html(inDate);
												$("#end").html(endDate);
												$("#total_reviews").html(total_reviews);
												$("#total_rating").html(total_rating);
												if(total_rating >= 1){
													$("#1r").addClass('filled');
												}
												if(total_rating >= 2){
													$("#2r").addClass('filled');
												}
												if(total_rating >= 3){
													$("#3r").addClass('filled');
												}
												if(total_rating >= 4){
													$("#4r").addClass('filled');
												}
												if(total_rating >= 5){
													$("#5r").addClass('filled');
												}
											}
											generarGraficaTotal(resp[0],resp[1],resp[2],resp[3],resp[4]);
		
										});
										
									}
									generarGraficaTotal({{ $finAtencion }}, {{ $finPracticidad }}, {{ $finVelocidad }}, {{ $finResultado }},{{ $countAtencion }});
									function generarGraficaTotal(finAtencion, finPracticidad, finVelocidad, finResultado,countAtencion){
		
										let delayed;
										const ctx = document.getElementById('myChart').getContext('2d');
										myChart = new Chart(ctx, {
										type: 'bar',
										data: {
											labels: ['Atención Per.', 'Instalaciones', 'Tiempo de Respuesta', 'Calificación General'],
											datasets: [{
												label: 'Calificación total en base a '+countAtencion + ' comentarios',
												data: [finAtencion,finPracticidad,finVelocidad,finResultado],
												backgroundColor: [
													'#E5E5E5',
													'#E5E5E5',
													'#E5E5E5',
													'#E5E5E5'
												],
												borderRadius:15
											},
											
											]
										},
										options: {
											animation: {
											onComplete: () => {
												delayed = true;
											},
											delay: (context) => {
												let delay = 0;
												if (context.type === 'data' && context.mode === 'default' && !delayed) {
												delay = context.dataIndex * 300 + context.datasetIndex * 100;
												}
												return delay;
											},
											},
											scales: {
												y: {
													beginAtZero: true,
													title: {
														display:true,
														text: "Rating " + countAtencion + " comentarios"
													}
												}
											}
										}
										});
									}
									</script>
								</div>
							</div>
						</div>
						
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<h5>Información</h5>
						<div class="card">
							<div class="card-body">
								<div class="col-sm-12">
									<div class="row border-bottom mb-3">
										<div class="col-sm-3">
											<small class="text-secondary">Teléfono</small>
										</div>
										<div class="col-sm-9 text-right">
											<small><strong> {{ $agencia->telefono }}</strong></small>
										</div>
									</div>
									<div class="row border-bottom mb-3">
										<div class="col-sm-3">
											<small class="text-secondary">Dirección</small>
										</div>
										<div class="col-sm-9 text-right">
											<small><strong> {{ $agencia->direccion }}</strong></small>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<h5>Horario</h5>
						<div class="card">
							<div class="card-body">
								@if ($agencia->horario == 0)
									<span>Sin horario</span>
								@else
									{{ $agencia->horario }}
								@endif
								
							</div>
						</div>
					</div>
				</div>

				{{-- Gráfica por periodo # comentarios --}}
				<div class="row mt-4 card ">
					<div class="card-body">

						<div class="col-sm-12">
							<h5>Gráfica por periodo. # Comentarios</h5>
							<small>Seleccione un perido para visualizar la gráfica.</small>
							<hr>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<select class="form-control" name="periodo" id="periodo" onchange="changePeriodo()" >
									<option value="">Seleccione un periodo:</option>
									<option value="anio"  >Año</option>
									<option value="mes">Mes</option>
									<option value="range">Rango entre fechas</option>
									{{-- $datos = vEstadoPedidos::where('created_at', '>=', now()->subDays(30))
									->whereCodVendedor($userAct->codvendedor)
									->get(); --}}
								</select>
							</div>
	
							<div class="col-sm-3" id="panel-range-in" style="display: none;">
								<input class="form-control" type="date" name="range_in" id="range_in" onchange="changePeriodo()" />
							</div>
							<div class="col-sm-3" id="panel-range-end" style="display: none;">
								<input class="form-control" type="date" name="range_end" id="range_end" onchange="changePeriodo()" />
							</div>
							<div class="col-sm-2" id="panel-range-type" style="display: none;">
								<select class="form-control" name="range_period" id="range_period" onchange="changePeriodo()" >
									<option value="">Seleccione la vista:</option>
									<option selected value="anio">Año</option>
									<option value="mes">Mes</option>
									<option value="day">Día</option>
								</select>
							</div>
							<div class="col-sm-5" id="panel-anio-mes" style="display: none;">
								<select class="form-control" name="anio-mes"  id="anio-mes" onchange="changePeriodo()"  >
									<option value="">Seleccione un año:</option>
								</select>
							</div>
						</div>
						
						<div class="col-sm-12">
							<canvas id="myReviews" width="400" height="200"></canvas>
							<script>
							var agencia_id = {{ $agencia->id }};
							var periodo = $("#periodo").val();
							let myReviews;
							
							function changePeriodo(){
								elemento = document.getElementById('periodo').value;
								var fecha = new Date();
								var anio = fecha.getFullYear();
								var anios = [anio-3,anio-2,anio-1,anio];

								if(elemento == "mes"){
									$('#panel-anio-mes').show();
									if($("#anio-mes option[value=2022]").length > 0){

									}else{
										for(k=0;k<anios.length;k++){
											$("#anio-mes").append('<option value='+anios[k]+' >'+anios[k]+'</option>');
										}
									}
									$('#panel-range-in').hide();
									$('#panel-range-end').hide();
									$('#panel-range-type').hide();
								}else if (elemento == "range" ){
									
									$('#panel-anio-mes').hide();
									$('#panel-range-in').show();
									$('#panel-range-end').show();
									$('#panel-range-type').show();
									
								}else if (elemento == "anio"){
									
									$('#panel-anio-mes').hide();
									$('#panel-range-in').hide();
									$('#panel-range-end').hide();
									$('#panel-range-type').hide();
								}

								var arrayM = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

								$.ajax({
									url:'/usuario/data-reviews?agencia='+agencia_id+'&periodo='+elemento+'&anio_mes='+$("#anio-mes").val()+"&range_in="+$('#range_in').val()+"&range_end="+$('#range_end').val()+"&range_period="+$("#range_period").val(),
									method: 'GET',

								}).done(function(resp){
									if(myReviews){
										myReviews.destroy();
									}
									if(elemento == "anio"){
										generarGrafica(anios,resp);
									}else if(elemento == "mes"){
										generarGrafica(arrayM,resp);
									}else if(elemento == "range"){
										var labels = [];
										var labelsData = [];
										for (const [key, value] of Object.entries(resp))
										{
											labels.push(key);
											labelsData.push(value.length);
										}


										generarGrafica(labels,labelsData);
									}
								});

							}

							function generarGrafica(labels,respCount){
								let delayed2;
								const ctx2 = document.getElementById('myReviews').getContext('2d');
								myReviews = new Chart(ctx2, {
								type: 'line',
								data: {
									labels: labels,
									datasets: [{
										label: 'Comentarios',
										data: respCount,
										backgroundColor: [
											'#989CA6',
										],
										borderColor:'#4C5059'
									}]
								},
								options: {
									animation: {
									onComplete: () => {
										delayed2 = true;
									},
									delay: (context) => {
										let delay = 0;
										if (context.type === 'data' && context.mode === 'default' && !delayed2) {
										delay = context.dataIndex * 300 + context.datasetIndex * 100;
										}
										return delay;
									},
									},
									scales: {
										y: {
											beginAtZero: true,
											title: {
												display:true,
												text: "Cantidad de comentarios"
											}
										}
									}
								}
								});
							}
							
							</script>
						</div>
					</div>

				</div>

				{{-- GRÁFICA POR DÍAS 
				<div class="row">
					<div class="col-sm-12 mt-4">
						<h5>Gráfica calificación por día</h5>
						<small>Muestra la calificación de los últimos 8 días en base a los comentarios que hacen en el día, tomando los comentarios que tienen las cuatro calificaciones.</small>
						<hr>
					</div>
					<div class="col-sm-12">
						<script>
							const fechaD= [];
							const rev= [];
							const atencionArr= [];
							const practicidadArr= [];
							const velocidadArr= [];
							const resultadoArr= [];
							var countRev = 0;
							var countA = 0;
						</script>
						@foreach ($reviewsByDay as $key => $rev)
						<script>
							fechaD.push('{{ $key }}');
							rev.push({{ $rev->count() }});
						</script>
							<?php 
								$ate = 0;
								$prac = 0;
								$vel = 0;
								$res = 0;
							?>
							@foreach ($rev as $item)
								<?php 
									$ate += $item->atencion;
									$prac += $item->practicidad;
									$vel += $item->velocidad;
									$res += $item->resultado;
								?>
							@endforeach
							<?php $ate = $ate / $rev->count(); 
							 $prac = $prac / $rev->count(); 
							 $vel = $vel / $rev->count(); 
							 $res = $res / $rev->count(); ?>
							<script>
								atencionArr.push({{$ate}});
								practicidadArr.push({{$prac}});
								velocidadArr.push({{$vel}});
								resultadoArr.push({{$res}});
							</script>
						@endforeach
						
						<canvas id="myReviewsByDay" width="500" height="170"></canvas>
						<script>
						
						let delayed3;
						const ctx3 = document.getElementById('myReviewsByDay').getContext('2d');
						const myReviewsByDay = new Chart(ctx3, {
						type: 'bar',
						data: {
							labels: fechaD,
							datasets: [{
								label: '# Comentarios por Día',
								data: rev,
								backgroundColor: [
									'#5D8AA6'
								],
								borderRadius:20
							},{
								label:'% Atencion',
								data: atencionArr,
								backgroundColor:['#A8E6CE'],
								borderRadius:5
							},{
								label:'% Practicidad',
								data: practicidadArr,
								backgroundColor:['#D8E0F2'],
								borderRadius:5
							},{
								label:'% Velocidad',
								data: velocidadArr,
								backgroundColor:['#DCEDC2'],
								borderRadius:5
							},{
								label:'% Resultado',
								data: resultadoArr,
								backgroundColor:['#9A8FBF'],
								borderRadius:5
							}]
						},
						options: {
							animation: {
								y: {
								easing: 'easeInOutElastic',
								from: (ctx) => {
								if (ctx.type === 'data') {
									if (ctx.mode === 'default' && !ctx.dropped) {
									ctx.dropped = true;
									return 0;
									}
								}
								}
							}
							},
							scales: {
								y: {
									beginAtZero: true,
									title: {
										display:true,
										text: "Calificación"
									}
								}
							}
						}
						});
						</script>
					</div>
				</div>

				{{-- GRÁFICA POR MES 
				<div class="row">
					<div class="col-sm-12 mt-4">
						<h5>Gráfica calificación por mes</h5>
						<small>Muestra la calificación en base a los comentarios que hacen en el mes, tomando los comentarios que tienen las cuatro calificaciones.</small>
						<hr>
					</div>
					<div class="col-sm-12">
						<script>
							const fechaM= [];
							const revM= [];
							const atencionArrM= [];
							const practicidadArrM= [];
							const velocidadArrM= [];
							const resultadoArrM= [];
							var countRevM = 0;
							var countAM = 0;
						</script>
						@foreach ($reviewsByMonth as $keyM => $revM)
						<script>
							fechaM.push('{{ $keyM }}');
							revM.push({{ $revM->count() }});
						</script>
							<?php 
								$ateM = 0;
								$pracM = 0;
								$velM = 0;
								$resM = 0;
							?>
							@foreach ($revM as $itemM)
								<?php 
									$ateM += $itemM->atencion;
									$pracM += $itemM->practicidad;
									$velM += $itemM->velocidad;
									$resM += $itemM->resultado;
								?>
							@endforeach
							<?php $ateM = $ateM / $revM->count(); 
							 $pracM = $pracM / $revM->count(); 
							 $velM = $velM / $revM->count(); 
							 $resM = $resM / $revM->count(); ?>
							<script>
								atencionArrM.push({{$ateM}});
								practicidadArrM.push({{$pracM}});
								velocidadArrM.push({{$velM}});
								resultadoArrM.push({{$resM}});
							</script>
						@endforeach
						
						<canvas id="myReviewsByMonth" width="500" height="170"></canvas>
						<script>
						
						let delayedM;
						const ctxM = document.getElementById('myReviewsByMonth').getContext('2d');
						const myReviewsByMonth = new Chart(ctxM, {
						type: 'bar',
						data: {
							labels: fechaM,
							datasets: [{
								label: '# Comentarios por Mes',
								data: revM,
								backgroundColor: [
									'#5D8AA6'
								],
								borderRadius:20
							},{
								label:'% Atencion',
								data: atencionArrM,
								backgroundColor:['#A8E6CE'],
								borderRadius:5
							},{
								label:'% Practicidad',
								data: practicidadArrM,
								backgroundColor:['#D8E0F2'],
								borderRadius:5
							},{
								label:'% Velocidad',
								data: velocidadArrM,
								backgroundColor:['#DCEDC2'],
								borderRadius:5
							},{
								label:'% Resultado',
								data: resultadoArrM,
								backgroundColor:['#9A8FBF'],
								borderRadius:5
							}]
						},
						options: {
							scales: {
								y: {
									beginAtZero: true,
									title: {
										display:true,
										text: "Calificación"
									}
								}
							}
						}
						});
						</script>
					</div>
				</div>

				{{-- GRÁFICA POR AÑO 
				<div class="row">
					<div class="col-sm-12 mt-4">
						<h5>Gráfica calificación por año</h5>
						<small>Muestra la calificación en base a los comentarios que hacen en el año, tomando los comentarios que tienen las cuatro calificaciones.</small>
						<hr>
					</div>
					<div class="col-sm-12">
						<script>
							const fechaY= [];
							const revY= [];
							const atencionArrY= [];
							const practicidadArrY= [];
							const velocidadArrY= [];
							const resultadoArrY= [];
							var countRevY = 0;
							var countAY = 0;
						</script>
						@foreach ($reviewsByYear as $keyY => $revY)
						<script>
							fechaY.push('{{ $keyY }}');
							revY.push({{ $revY->count() }});
						</script>
							<?php 
								$ateY = 0;
								$pracY = 0;
								$velY = 0;
								$resY = 0;
							?>
							@foreach ($revY as $itemY)
								<?php 
									$ateY += $itemY->atencion;
									$pracY += $itemY->practicidad;
									$velY += $itemY->velocidad;
									$resY += $itemY->resultado;
								?>
							@endforeach
							<?php $ateY = $ateY / $revY->count(); 
							 $pracY = $pracY / $revY->count(); 
							 $velY = $velY / $revY->count(); 
							 $resY = $resY / $revY->count(); ?>
							<script>
								atencionArrY.push({{$ateY}});
								practicidadArrY.push({{$pracY}});
								velocidadArrY.push({{$velY}});
								resultadoArrY.push({{$resY}});
							</script>
						@endforeach
						
						<canvas id="myReviewsByYear" width="500" height="170"></canvas>
						<script>
						
						let delayedY;
						const ctxY = document.getElementById('myReviewsByYear').getContext('2d');
						const myReviewsByYear = new Chart(ctxY, {
						type: 'bar',
						data: {
							labels: fechaY,
							datasets: [{
								label: '# Comentarios por Mes',
								data: revY,
								backgroundColor: [
									'#5D8AA6'
								],
								borderRadius:20
							},{
								label:'% Atencion',
								data: atencionArrY,
								backgroundColor:['#A8E6CE'],
								borderRadius:5
							},{
								label:'% Practicidad',
								data: practicidadArrY,
								backgroundColor:['#D8E0F2'],
								borderRadius:5
							},{
								label:'% Velocidad',
								data: velocidadArrY,
								backgroundColor:['#DCEDC2'],
								borderRadius:5
							},{
								label:'% Resultado',
								data: resultadoArrY,
								backgroundColor:['#9A8FBF'],
								borderRadius:5
							}]
						},
						options: {
							animation: {
							onComplete: () => {
								delayedY = true;
							},
							delay: (context) => {
								let delay = 0;
								if (context.type === 'data' && context.mode === 'default' && !delayed) {
								delay = context.dataIndex * 300 + context.datasetIndex * 100;
								}
								return delay;
							},
							},
							scales: {
								y: {
									beginAtZero: true,
									title: {
										display:true,
										text: "Calificación"
									}
								}
							}
						}
						});
						</script>
					</div>
				</div>	--}}


				<div class="row card">
					<div class="card-body">

						<div class="col-sm-12">
							<h5>Comentarios de la Agencia</h5>
							<small>Estos son los comentarios que hacen los usuarios.</small>
							<hr>
						</div>
						<div class="col-sm-12">
							<div class="">
								@if (count($agencia->reviews) == 0)
								<div class="row">
								<div class="col-sm-12 text-center mb-4">
									<span>No hay comentarios aún</span>
								</div>
							</div>
							@else
								@foreach ($agencia->reviews as $rev)

								<div class="row  mb-4">
									<div class="col-sm-1">
										@if($rev->user_id)

										<img src="{{ asset('assets/img/user.png') }}" width="100%" alt="{{ $rev->user[0]->name }}">
										@else
										<img class="rounded-circle" src="{{ $rev->foto_url }}" width="100%" alt="{{ $rev->autor }} ">
										@endif

									</div>
									<div class="col-sm-10 border-bottom">
										@if($rev->user_id)
										<h6>{{ $rev->user[0]->name }} {{ $rev->user[0]->apellido_p }} {{ $rev->user[0]->apellido_m }}</h6>
										@else
										<h6>{{ $rev->autor }} </h6>
										@endif
										<div class="rating">
											<i class="fas fa-star {{ ($rev->rating >= 1) ? 'filled' : '' }}"></i>
											<i class="fas fa-star {{ ($rev->rating >= 2) ? 'filled' : '' }}"></i>
											<i class="fas fa-star {{ ($rev->rating >= 3) ? 'filled' : '' }}"></i>
											<i class="fas fa-star {{ ($rev->rating >= 4) ? 'filled' : '' }}"></i>
											<i class="fas fa-star {{ ($rev->rating >= 5) ? 'filled' : '' }}"></i>
											<span class="d-inline-block average-rating">({{ $rev->rating }})</span>
											<small class="text-secondary" >{{ date( 'd/m/Y', strtotime($rev->created_at)) }}</small>
										</div>
										@if($rev->user_id)
										<small>{{-- Atención --}}Atencion del Personal ({{$rev->atencion}}) <i class="fas fa-star filled"></i></small>
										<small>{{-- Practicidad --}} Instalaciones ({{$rev->practicidad}}) <i class="fas fa-star filled"></i></small>
										<small>{{-- Velocidad --}}Tiempo de Respuesta ({{$rev->velocidad}}) <i class="fas fa-star filled"></i></small>
										<small>Calificación General ({{$rev->resultado}}) <i class="fas fa-star filled"></i></small> <br> <br>
										@endif
										<span>{{ $rev->text }}</span>
									</div>
								</div>
								@endforeach
							@endif
							</div>
						</div>
					</div>

				</div>
				<div class="row card">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								@if (session('status_qr'))
									<div class="alert alert-success">
										{{ session('status_qr') }}
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								@endif
							</div>
						</div>
						<div class="row">

						<div class="col-sm-6">
							<h3 class="heading">Código QR AutoNavega®</h3>
							<small>
								Genera un código QR de forma ráida y sencilla, el cual podrás imprimir y colocar en espacio estratégico para que todos tus visitantes puedan subir su calificación.
							</small> <br>
							<form method="POST" action="{{ route('user.agency.qr') }}">
								{{ csrf_field() }}

								<button type="submit" class="btn btn-md btn-primary mt-4" >Genera QR <i class="fas fa-qrcode" ></i> </button>
								{{-- {{ QrCode::size(200)->generate(url()->current()); }} --}}
							</form>
							</div>
						<div class="col-sm-6">
							<img class="img-fluid" src="{{ asset('assets/img/qr-ejemplo.png') }}" alt="">
						</div>
					</div>

					</div>
				</div>
				{{-- <div class="card mb-0">
					<div class="row no-gutters">
						<div class="col-lg-8">
							<div class="card-body">
								<h6 class="title">Plan Details</h6>
								<div class="sp-plan-name">
									<h6 class="title">
										Gold <span class="badge badge-success badge-pill">Active</span>
									</h6>
									<p>Subscription ID: <span class="text-base">100394949</span></p>
								</div>
								<ul class="row">
									<li class="col-6 col-lg-6">
										<p>Started On 15 Jul, 2020</p>
									</li>
									<li class="col-6 col-lg-6">
										<p>Price $1502.00</p>
									</li>
								</ul>
								<h6 class="title">Last Payment</h6>
								<ul class="row">
									<li class="col-sm-6">
										<p>Paid at 15 Jul 2020</p>
									</li>
									<li class="col-sm-6">
										<p><span class="text-success">Paid</span>  <span class="amount">$1502.00</span>
										</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="sp-plan-action card-body">
								<div class="mb-2">
									<a href="provider-subscription" class="btn btn-primary"><span>Change Plan</span></a>
								</div>
								<div class="next-billing">
									<p>Next Billing on <span>15 Jul, 2021</span></p>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
</div>
</div>
@endsection