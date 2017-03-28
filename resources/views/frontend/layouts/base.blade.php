<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Productos deportivos de ultima generación. Resistentes cómodos, ligeros y personalizables. Tu eliges que quieres ser, tu identidad te protege!">
    <meta name="keywords" content="canilleras, toallas, kanis, kanisport, armatura, canilleras personalizadas, toallas personalizadas, deportes, fútbol, kanicarbono">
    <meta name="author" content="E-Channel & Juan Almeida">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://file.myfontastic.com/429eZzyddCaSsutfiNJFhV/icons.css" rel="stylesheet">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Canilleras - Toallas - Fútbol - Deportes | {{ getenv('APP_NAME') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

    @yield('stylesheets')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    @include('frontend.includes.navbar', ['title' => $title])

    <div class="container-fluid">
      @yield('content')
    </div>

    @include('frontend.includes.footer')

    <script src="{!! asset('js/app.js') !!}"></script>

    @yield('scripts')

  </body>
</html>