<!DOCTYPE html>
<html lang="en">

<head>
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
