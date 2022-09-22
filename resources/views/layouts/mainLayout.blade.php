<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @yield('bootstrap')
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script  defer src="{{ asset('js/app2.js')}}"></script>
</head>
<body>

@include('includes.header')
@include('includes.jumbo')

    @yield('main-content')

<div>
</div>

@include('includes.footer')
@include('includes.footer-bottom')



  

  

@yield('extra-js')
  
</body>
</html>