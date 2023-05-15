<!doctype html>
<html lang="{{config('app.locale')}}">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>
{{config('app.name', 'LSAPP')}}
    </title>
</head>
<body>
    @yield('content');
</body>
</html>