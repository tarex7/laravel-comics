<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>

@include('includes.header')
@include('includes.jumbo')

    @yield('main-content')

<div>
    {{-- @yield('comic-content') --}}
</div>

@include('includes.footer')
@include('includes.footer-bottom')



  

  

  
</body>
</html>