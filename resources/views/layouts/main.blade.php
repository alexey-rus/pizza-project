<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts._parts.head')
</head>
<body>
@include('layouts._parts.nav')

@yield('content')

@include('layouts._parts.footer')
@include('layouts._parts.cart')

@include('layouts._parts.loader')

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>

@stack('scripts')

</body>
</html>