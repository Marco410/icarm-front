<?php $page="Filas";?>

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
				
				<div class="row">
					<div class="col-xl-12 text-center">
						<div class="badge badge-secondary mb-2" style="height: 50px; width: 100%;"></div>
						@foreach ($filasHombres as $fila)
						@if ($fila->Silla == 1)
							<span class="badge badge-success">{{ $fila->Fila }}</span>
						@endif
							<div style="height: 25px; width:50px; text-align: center;" class="badge @if ($fila->Asignado == 1) badge-primary @else badge-secondary @endif">
									{{ $fila->grupo }}{{ $fila->Fila }}@switch($fila->Silla)
									@case(1)A @break
									@case(2)B @break
									@case(3)C @break
									@case(4)D @break
									@case(5)E @break
									@case(6)F @break
									@case(7)G @break
									@case(8)H @break
									@case(9)I @break
									@case(10)J @break
									@case(11)K @break
									@case(12)L @break
									@case(13)M @break
									@case(14)N @break
									@case(15)O @break
								@endswitch
							</div>
							@if ($fila->Silla == 15)
								<br>
							@endif
						@endforeach
				</div>
			</div>
		</div> 
        </div>
		<!-- /Main Wrapper -->
	   @endsection
	  