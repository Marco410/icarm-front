<div class="main-wrapper">

		<!-- Header -->
		<div class="header">
			<div class="header-left">
				<a href="inicio" class="logo logo-small">
					<img src="{{asset('assets_admin/img/logo-icon.png')}}" alt="Logo" width="30" height="30">
				</a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn">
				<i class="fas fa-align-left"></i>
			</a>
			<a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
				<i class="fas fa-align-left"></i>
			</a>

			<ul class="nav user-menu">
				<!-- Notifications --->
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<i class="far fa-bell"></i> 
						{{-- @if (Auth::user()->unreadNotifications->count() > 0)
							<span class="badge badge-pill"></span>
						@endif --}}
					</a>
					<div class="dropdown-menu dropdown-menu-right notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notificaciones</span>
							<a href="#" id="read_all" class="clear-noti"> Borrar Todas </a>
							
						</div>
						<div class="noti-content">
						
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<!-- User Menu -->
				<li class="nav-item dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link" data-toggle="dropdown">
						<span class="user-img">
							<img class="rounded-circle" src="{{asset('assets_admin/img/user.jpg')}}" width="40" alt="Admin">
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						{{-- <a class="dropdown-item" href="admin-profile">Perfil</a> --}}


					
					</div>
				</li>
				<!-- /User Menu -->

			</ul>
		</div>
		<!-- /Header -->
