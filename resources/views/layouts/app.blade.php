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

    <div class="container-fluid">
        @yield('content')
    </div>

    @include('layouts.components.footer')

</body>


@include('layouts.components.js')

</html>
