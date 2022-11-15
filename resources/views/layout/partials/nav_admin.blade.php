<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <a href="index">
            <img src="{{ asset('assets_admin/img/user.jpg') }}" class="img-fluid" alt="">

        </a>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                    <li class="{{ Route::is(['dashboard']) ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}"><i class="fas fa-columns"></i> <span>Inicio</span></a>
                    </li>

                    {{-- <li class="{{ Route::is(['encontrados']) ? 'active' : '' }}">
                        <a href="{{ route('encontrados') }}"><i class="fas fa-users"></i> <span>Encontrados</span></a>
                    </li> --}}

                    <li class="{{ Route::is(['alumnos']) ? 'active' : '' }}">
                        <a href="{{ route('alumnos') }}"><i class="fas fa-users"></i> <span>Alumnos</span></a>
                    </li>

                    {{-- <li class="{{ Route::is(['filas']) ? 'active' : '' }}">
                        <a href="{{ route('filas') }}"><i class="fas fa-users"></i> <span>Filas</span></a>
                    </li>

                    <li class="{{ Route::is(['baja.view']) ? 'active' : '' }}">
                        <a href="{{ route('baja.view') }}"><i class="fas fa-users"></i> <span>Baja</span></a>
                    </li> --}}
               
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
