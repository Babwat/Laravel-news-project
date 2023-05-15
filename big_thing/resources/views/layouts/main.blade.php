<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact us page</title>
</head>
<body>
    
     
    <h1>@yield('title')</h1>
    <p><a href="{{'/'}}">HOMEPAGE</a></p>
    <p><a href=" {{ route('about-us') }}">ABOUT US</a></p>
    <p><a href="{{ route('contact-us') }}">CONTACT US</a></p>
   
    <hr>
    @yield('content')

</body>
</html>