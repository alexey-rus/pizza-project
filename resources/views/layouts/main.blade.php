<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts._parts.head')
</head>
<body>
@include('layouts._parts.nav')

@yield('content')

@include('layouts._parts.footer')


<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@stack('scripts')

</body>
</html>