<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('frontend/scss/main.css')}}">
    <link rel="shortcut icon" href="{{url('frontend/img/favicon.png')}}">
    @yield('style')
</head>
<body>
    <section class="container-fluid wrapper">
        <div class="row h-100">
            <!--sidebar-->
            @include('frontend.include.header')
            @yield('content')
        </div>
    </section>

    <script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('frontend/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    @yield('script')
</body>
</html>