<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts._parts.head')
</head>
<body>
@include('layouts._parts.nav')

@yield('content')

@include('layouts._parts.footer')


<script src="{{ mix('js/app.js') }}"></script>

@stack('scripts')

</body>
</html>
