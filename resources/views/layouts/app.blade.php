<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.components.meta')
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('layouts.components.nav')

    <div class="container">
        <div class="row">
            <div>
                <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
                    <div class="position-sticky">
                        <div class="list-group list-group-flush mx-3 mt-4">
                            <a href="/home"
                                class="list-group-item list-group-item-action py-2 ripple {{ request()->is('home*') ? 'active' : '' }}">
                                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
                            </a>
                            <a href="/nieuws/create"
                                class="list-group-item list-group-item-action py-2 ripple {{ request()->is('nieuws/create') ? 'active' : '' }}">
                                <i class="fas fa-chart-area fa-fw me-3"></i><span>Nieuwsberichten</span>
                            </a>
                            <a href="/concertagenda/create"
                                class="list-group-item list-group-item-action py-2 ripple {{ request()->is('concertagenda/create') ? 'active' : '' }}">
                                <i class="fas fa-lock fa-fw me-3"></i><span>Concertagenda</span>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action py-2 ripple {{ request()->is('analytics*') ? 'active' : '' }}">
                                <i class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            @yield('content')
        </div>
    </div>



    @include('layouts.components.footer')

</body>


@include('layouts.components.js')

</html>
