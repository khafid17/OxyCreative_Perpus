        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon">
                </div>
                <div class="sidebar-brand-text mx-3">Perpus<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Route::currentRouteNamed('dashboard') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            {{-- Admin --}}
            @if (auth()->user()->level==1)
            <!-- Nav Item - User -->
            <li class="nav-item {{ Route::currentRouteNamed('user.index') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('user.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>{{ __('Users') }}</span></a>
            </li>
           
            <!-- Nav Item - Perpus -->
            <li class="nav-item {{ Route::currentRouteNamed('perpus.index') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('perpus.index') }}">
                <i class="fas fa-fw fa-newspaper"></i>
                <span>{{ __('Perpus') }}</span></a>
            </li>
            

            {{-- User Admin --}}
            @else 
             <!-- Nav Item - Perpus -->
             <li class="nav-item {{ Route::currentRouteNamed('perpus.index') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('perpus.index') }}">
                <i class="fas fa-fw fa-newspaper"></i>
                <span>{{ __('Perpus') }}</span></a>
            </li>
            
            @endif
    
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->