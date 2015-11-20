<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    @yield('styles')
</head>

<body>
@include('headers.header')
@yield('content')

@yield('scripts')
@include('footers.footer')

</body>
</html>

