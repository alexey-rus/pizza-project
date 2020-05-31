<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts._parts.head')
</head>
<body>
@include('layouts._parts.nav')

@yield('content')

@include('layouts._parts.footer')
@include('cart.popup')

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@stack('scripts')

</body>
</html>