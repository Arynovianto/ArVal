<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
  <link rel="icon" href="{{asset('icon/icon-ArVaStore.png')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <title>@yield('title')</title>
</head>
<style>
    body {
        font-family: 'roboto', sans-serif;
    }
</style>
<body>
    <div class="container-fluid">
        @include('template.sidebar')

        @yield('content')


    </div>

</body>
</html>
