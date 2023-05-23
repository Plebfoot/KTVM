<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.components.meta')
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" style="background-color: #F5F9FE;">

    @php
        use Jenssegers\Agent\Facades\Agent;
    @endphp

    @if (Request::is('dashboard') && Agent::isMobile())
        @include('components.mobile-warning')
    @else
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="/">
                    <span class="text-center">KTVM</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item {{ request()->is('home*') ? 'active' : '' }}">
                        <a class="sidebar-link" href="/home">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->is('nieuws/create') ? 'active' : '' }}">
                        <a class="sidebar-link" href="/nieuws/create">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-sign-in.html">
                            <i class="material-icons me-3">article</i><span>Nieuwsberichten</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-sign-up.html">
                            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign
                                Up</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-blank.html">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Tools & Components
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-buttons.html">
                            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-forms.html">
                            <i class="align-middle" data-feather="check-square"></i> <span
                                class="align-middle">Forms</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-cards.html">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-typography.html">
                            <i class="align-middle" data-feather="align-left"></i> <span
                                class="align-middle">Typography</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="icons-feather.html">
                            <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Plugins & Addons
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="charts-chartjs.html">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                class="align-middle">Charts</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="maps-google.html">
                            <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-cta">
                    <div class="sidebar-cta-content">
                        <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                        <div class="mb-3 text-sm">
                            Are you looking for more components? Check out our premium version.
                        </div>
                        <div class="d-grid">
                            <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>


        <div class="main">
            <div class="container p-0">
                @yield('content')
            </div>
        </div>
    @endif
    {{-- <div class="container">
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <a class="navbar-brand me-4 d-flex align-items-center justify-content-center" href="/">
                <img src="/assets/imgs/logo-zwart.png" style="width:25%; height: auto; margin-top: 10px;" class="d-inline-block align-middle" alt="KTVM-Logo">
                <span class="logo-text align-middle">KTVM</span>
            </a>
    
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="/home" class="list-group-item list-group-item-action py-2 ripple {{ request()->is('home*') ? 'active' : '' }}">
                    <i class="material-icons me-3">dashboard</i><span>Dashboard</span>
                </a>
                <a href="/nieuws/create" class="list-group-item list-group-item-action py-2 ripple {{ request()->is('nieuws/create') ? 'active' : '' }}">
                    <i class="material-icons me-3">article</i><span>Nieuwsberichten</span>
                </a>
                <a href="/concertagenda/create" class="list-group-item list-group-item-action py-2 ripple {{ request()->is('concertagenda/create') ? 'active' : '' }}">
                    <i class="material-icons me-3">event</i><span>Concertagenda</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple {{ request()->is('analytics*') ? 'active' : '' }}">
                    <i class="material-icons me-3">analytics</i><span>Analytics</span>
                </a>
            </div>
            <div class="list-group list-group-flush mx-2 mt-auto">
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-light flex-grow-1 me-2">
                        <span class="d-flex align-items-center justify-content-center">
                            <i class="material-icons">settings</i>
                        </span>
                    </a>
                    <a href="#" class="btn btn-light flex-grow-1 ms-2">
                        <span class="d-flex align-items-center justify-content-center">
                            <i class="material-icons">exit_to_app</i>
                        </span>
                    </a>
                </div>
            </div>
            
            
            
        </nav> --}}

    {{-- </div> --}}

</body>

@include('layouts.components.js')

</html>
