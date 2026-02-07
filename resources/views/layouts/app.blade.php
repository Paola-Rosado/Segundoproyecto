<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--En la siguiente linea sino le paso un valor por defecto va tener el valor de Laravel 12-->
    <title>@yield('title','Laravel 12')</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('css')
</head>
<body>
    <header></header>
    @yield('content')
    <div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>
</body>
</html>
