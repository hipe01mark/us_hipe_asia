<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts._head')
</head>
<body id="body">
    @include('layouts._header')
    @yield('contents')
    @include('layouts._footer')
    @include('layouts._scripts')
    @include('layouts._custom-scripts')
</body>
</html>
