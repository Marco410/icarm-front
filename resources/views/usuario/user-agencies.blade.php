<?php $page="Mis Agencias";?>
@extends('layout.mainlayout')
@section('content')		
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-md-4 theiaStickySidebar">
				@include('usuario.sidebar')
			</div>
			<div class="col-xl-9 col-md-8">
				<h4 class="widget-title">Mis Agencias</h4>
				<ul class="nav nav-tabs menu-tabs">
					<li class="nav-item active">
						<a class="nav-link" href="my-services">Agencias Activas</a>
					</li>
					{{-- <li class="nav-item">
						<a class="nav-link" href="my-services-inactive">Agencias Inactivas</a>
					</li> --}}
				</ul>
				<div class="row">
					@foreach ($agencias as $agencia)
						<div class="col-sm-4">
							<div class="service-widget">
								<div class="service-img">
									<a href="{{ route('user.agency.stats',$agencia['agencia'][0]->id) }}">
									@if($agencia['agencia'][0]->marca()->first() != null) 		
									<img class="img-fluid serv-img" alt="Marca {{ $agencia['agencia'][0]->marca[0]->nombre }}" src="{{URL::asset('storage/marcas/'.$agencia['agencia'][0]->marca[0]->imagen)}}">
									@else
									<img class="img-fluid serv-img" alt="Sin Marca" src="{{URL::asset('storage/marcas/default.jpg')}}">
									@endif 
									</a>
									<div class="item-info">
										<div class="service-user">
											<a class="btn btn-primary btn-sm"  href="{{route('agencia.detalles',$agencia['agencia'][0]->id)}}">
											 <i class="fas fa-eye" ></i>
											</a> 
										</div>
										<div class="cate-list">
											@if($agencia['agencia'][0]->marca()->first() != null) 
											<a class="bg-yellow" href="service-details">
												{{ $agencia['agencia'][0]->marca[0]->nombre}}  
										</a>
											@else
											
											@endif 
										</div>
									</div>
								</div>
								<div class="service-content">
									<h3 class="title">
										<a href="{{ route('user.agency.stats',$agencia['agencia'][0]->id) }}">{{ $agencia['agencia'][0]->nombre }}</a>
									</h3>
									<div class="rating">
										<i class="fas fa-star {{ ($agencia['agencia'][0]->rating >= 1) ? 'filled' : '' }}"></i>
										<i class="fas fa-star {{ ($agencia['agencia'][0]->rating >= 2) ? 'filled' : '' }}"></i>
										<i class="fas fa-star {{ ($agencia['agencia'][0]->rating >= 3) ? 'filled' : '' }}"></i>
										<i class="fas fa-star {{ ($agencia['agencia'][0]->rating >= 4) ? 'filled' : '' }}"></i>
										<i class="fas fa-star {{ ($agencia['agencia'][0]->rating >= 5) ? 'filled' : '' }}"></i>
										<span class="d-inline-block average-rating">({{ $agencia['agencia'][0]->rating }})</span>
									</div>
									<div class="user-info">
										<div class="row">
											<div class="col-sm-12 mb-2" title="{{$agencia['agencia'][0]->telefono}}">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i><a href="tel:{{$agencia['agencia'][0]->telefono}}"> <span>{{$agencia['agencia'][0]->telefono}}</span></a></span>
											</div>
											<div class="col-sm-12 " title="{{$agencia['agencia'][0]->ciudad}}, {{ $agencia->estado }}">
												<span class="col-auto ser-contact"><i class="fas fa-map-marker-alt mr-1"></i><span >{{$agencia['agencia'][0]->ciudad}}, {{ $agencia->estado }}</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					
					{{-- <!-- Pagination Links --> 
					<div class="pagination">
						<ul>
							<li class="active">
								<a href="javascript:void(0);">1</a>
							</li>
							<li>
								<a href="javascript:void(0);">2</a>
							</li>
							<li>
								<a href="javascript:void(0);">3</a>
							</li>
							<li>
								<a href="javascript:void(0);">4</a>
							</li>
							<li class="arrow">
								<a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a>
							</li>
						</ul>
					</div> --}}
				</div>
			</div>
		</div>
	</div>
</div>
		
	<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
					</button>
				</div> 
				<div class="modal-footer">	<a href="javascript:;" class="btn btn-success si_accept_confirm">Yes</a>
					<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="deleteNotConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="acc_title">Inactive Service?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Service is Booked and Inprogress..</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
</div>
	   @endsection
	  