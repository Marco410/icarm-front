<?php $page="Inicio";?>

@extends('layout.mainlayout')
@section('content')
<!-- Hero Section -->
<section class="hero-section">
	<div class="layer">
		<div class="home-banner"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-search">
						<h3>Encuentra la Agencia ideal para todo<br>lo que necesites con tu auto <span>¡fácil!</span></h3>
						<p>Busca entre más de 2000 agencias alrededor de México verificadas</p>
						<div class="row mt-4">
							<div class="col-sm-4 mt-4">
								<button type="button" class="btn btn-sm btn-primary p-3" id="btn_search" > <i class="fas fa-search" ></i>  <span class="text-white h4"> Donaciones</span></button>
							</div>
							<div class="col-sm-4 mt-4">
								<button class="btn btn-lg btn-primary p-3" id="btn_star" > <i class="fas fa-star" ></i> <span class="text-white h4 "> Ubicaciones</span></button>
							</div>
							<div class="col-sm-4 mt-4">
								<button class="btn btn-lg btn-primary p-3" id="btn_star" > <i class="fas fa-star" ></i> <span class="text-white h4 "> Contacto</span></button>
							</div>
						</div>

						
					@if (session('errorResults'))
					<script>
						$( document ).ready(function() {
							$('#error_modal').modal('toggle')
						});
					</script>
					@endif
						 <!-- Error Modal -->
					<div class="modal account-modal fade" id="error_modal">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header p-0 border-0">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row text-center">
										<div class="col-sm-12">
											<i class="fas fa-exclamation-circle fa-2x text-primary"></i>
											<h4 class="text-primary" >Ups, si todavía no llegamos a la agencia que quieres calificar.</h4> <p>Por favor deja <a href="{{ route('contacto') }}"> aquí </a>  el nombre de la agencia, tu ubicación y tu comentario y nosotros nos encargaremos.</p> <p> Estamos creciendo día a día nuestro directorio. <strong>¡Gracias!</strong></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Error Modal -->

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Hero Section -->
<!-- quienes-somos -->
<section class="quienes-somos" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-6 float-righ offset-6">
						<h3 class="text-white" >Somos <strong> Iglesia</strong></h3>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-sm-6" data-aos="fade-up">
						<div class="video">
							<img src="{{asset('assets/img/index/somos_iglesia.gif')}}" class="img-fluid" alt="Somos iglesia">
						</div>

					</div>
					<div class="col-sm-6" data-aos="fade-left">
						<div class="text">
							<p class="text-white">
								Nuestra misión es Amar a Dios, amar al prójimo y hacer discípulos.
							</p>
							<p class="text-white" >
								Nuestra visión es Conquistar y Transformar.
							</p>
							<a class="btn btn-white btn-sm p-2 mt-4"><i class="fa fa-lightbulb"></i> Estrategia  </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /quienes-somos -->
<!-- How It Works -->
<section class="how-work">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading howitworks">
					<h2>Somos <strong class="text-primary" >Iglesia</strong></h2>
					<span>Nuestra misión es Amar a Dios, amar al prójimo y hacer discípulos.</span>
					<span>Nuestra visión es Conquistar y Transformar</span>
				</div>
				<div class="howworksec">
					<div class="row">
						<div class="col-lg-3">
							<div class="howwork">
								<div class="iconround">
									<div class="steps">01</div>
									<img class="mt-4" width="60px" src="assets/img/icon-1.png"  alt="Cuentanos">
								</div>
								<h3>Cuéntanos</h3>
								<p>Qué buscas y en qué lugar</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="howwork">
								<div class="iconround">
									<div class="steps">02</div>
									<img class="mt-4" width="50px" src="assets/img/icon-2.png" alt="">
								</div>
								<h3>Te Decimos</h3>
								<p>Las agencias mejor rankeadas cerca de ti.</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="howwork">
								<div class="iconround">
									<div class="steps">03</div>
									<img class="mt-3" width="60px" src="assets/img/icon-3.png" alt="">
								</div>
								<h3>Decide</h3>
								<p>A qué agencia ir de acuerdo a las puntuaciones y comentarios de los usuarios.</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="howwork">
								<div class="iconround">
									<div class="steps">04</div>
									<img class="mt-3" width="60px" src="assets/img/icon-4.png" alt="">
								</div>
								<h3>Califica</h3>
								<p>Tu experiencia en la agencia.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /How It Works -->



<!-- como-funciona -->
<section class="como-funciona" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-6 ">
						<div class="heading">
							<h2 class="text-white" >Qué calificamos en Autonavega</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 text-center mb-4">
						<div class="box">
							<img class="mb-2" width="40px" src="assets/img/icons/sillon.png" alt=""><br>
							<span> <strong> Comodidad para el cliente</strong></span>
						</div>
					</div>
					<div class="col-lg-3 text-center mb-4">
						<div class="box">
							<img class="mb-2" width="40px" src="assets/img/icons/atencion.png" alt=""><br>
							<span> <strong> Nivel de atención de los ejecutivos</strong></span>
						</div>
					</div>
					<div class="col-lg-3 text-center mb-4">
						<div class="box">
							<img class="mb-2" width="40px" src="assets/img/icons/servicio.png" alt=""><br>
							<span> <strong> Costo-Beneficio </strong></span>
						</div>
					</div>
					<div class="col-lg-3 text-center mb-4">
						<div class="box">
							<img class="mb-2" width="40px" src="assets/img/icons/practicidad.png" alt=""><br>
							<span> <strong> Practicidad y Ventajas para el cliente</strong></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /como-funciona -->


</div>

@endsection
