<?php $page="Dashboard";?>

@extends('layout.mainlayout_admin')
@section('content')		
<div class="page-wrapper">
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-12">
							
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				
				
				{{ session('status') }}
				<div class="row">
					<div class="col-sm-12">
						@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>

								<form method="POST" action="{{ route('baja') }}">
									{{ csrf_field() }}
									<input type="hidden" name="clave" id="" value="{{ session('clave') }}">
									<button type="submit" class="btn" >Sí, seguro</button>
								</form>
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
                <div class="col-lg-6 offset-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form method="POST" action="{{ route('baja.encontrado') }}">
                                    {{ csrf_field() }}
                                    <label for="">Dar de baja</label>
                                        <input type="text" name="clave" id="clave" class="form-control mb-2" placeholder="Clave"  >

                                        <button type="submit" class="btn btn-block btn-primary" >Buscar</button>
                                    </form>
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
	   @endsection
	  