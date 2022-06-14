<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #3252DF;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home')}}">
        <div class="brand-icon">
            <i class="fas fa-futbol fa-2x"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CARIPEMAIN</div>
    </a>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider my-0"> -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Heading -->
    <div class="sidebar-heading">
        <!-- Master Data -->
    </div>

    @can('isAdmin')
    <!-- Nav Item - Users -->
    <li class="nav-item @if(request()->routeIs('users.*')) active @endif">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('Users') }}</span></a>
    </li>
    @endcan

    @can('isAdmin')
    <!-- Nav Item - Orders -->
    <li class="nav-item @if(request()->routeIs('nilaipemain.*')) active @endif">
        <a class="nav-link" href="{{ route('nilaipemain.index') }}">
            <i class="fas fa-keyboard"></i>    
            <span>{{ __('Input Nilai Pemain') }}</span></a>
    </li>
    @endcan
    

    @can('isAdmin')
    <!-- Nav Item - Orders -->
    <li class="nav-item @if(request()->routeIs('jadwalpemain.*')) active @endif">
        <a class="nav-link" href="{{ route('jadwalpemain.index') }}">
            <i class="fas fa-keyboard"></i>    
            <span>{{ __('Input Jadwal Pemain') }}</span></a>
    </li>
    @endcan
    


    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->
    @can('isUser')
    <!-- Heading -->
    <li class="nav-item @if(request()->routeIs('lihatnilai.index')) active @endif">
        <a class="nav-link" href="{{ route('lihatnilai.index') }}">
            <i class="fas fa-chart-bar"></i>
            <span>{{ __('Nilai Pemain') }}</span></a>
    </li>
    @endcan

    @can('isUser')
    <!-- Heading -->
    <li class="nav-item @if(request()->routeIs('lihatjadwal.index')) active @endif">
        <a class="nav-link" href="{{ route('lihatjadwal.index') }}">
            <i class="fas fa-chart-bar"></i>
            <span>{{ __('Jadwal Pemain') }}</span></a>
    </li>
    @endcan





    <li class="nav-item @if(request()->routeIs('logout')) active @endif">
        <a class="nav-link" href="{{ route('home') }}" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>{{ __('Logout') }}</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->