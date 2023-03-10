<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>PRONOSTICO DEL CLIMA </title>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="/css/cover.css" rel="stylesheet">
<link rel="stylesheet" href="stylo.css"/>


</head>
     <script type="text/javascript" src="leaflet.js"></script>
	   <link rel="stylesheet" type="text/css" href="leaflet-openweathermap.css" />
	   <script type="text/javascript" src="leaflet-openweathermap.js"></script>
    <body class="d-flex h-100 text-center text-white">

     <p href="https://openweathermap.org/" target="_blank">Buscar</p>

      <div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
       <header class="mb-auto">
      <div>
      <h3 class="float-md-start mb-0">PRONOSTICO DEL CLIMA</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
      <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
      <a link rel="stylesheet"  href="consultar.php">Mapa</a>
      <a link rel="stylesheet"  href="consultar.php">Cosultar</a>
      </nav>
      </div>
      </header>

      @yield('content')
      </div>

    </body>

</html>
