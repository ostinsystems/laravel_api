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

<style>
.bd-placeholder-img {
font-size: 1.125rem;
text-anchor: middle;
-webkit-user-select: none;
-moz-user-select: none;
user-select: none;
}

@media (min-width: 768px) {
.bd-placeholder-img-lg {
font-size: 3.5rem;
}
}

.b-example-divider {
height: 3rem;
background-color: rgba(0, 0, 0, .1);
border: solid rgba(0, 0, 0, .15);
border-width: 1px 0;
box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.b-example-vr {
flex-shrink: 0;
width: 1.5rem;
height: 100vh;
}

.bi {
vertical-align: -.125em;
fill: currentColor;
}

.nav-scroller {
position: relative;
z-index: 2;
height: 2.75rem;
overflow-y: hidden;
}

.nav-scroller .nav {
display: flex;
flex-wrap: nowrap;
padding-bottom: 1rem;
margin-top: -1px;
overflow-x: auto;
text-align: center;
white-space: nowrap;
-webkit-overflow-scrolling: touch;
}

</style>

</head>
    <body class="d-flex h-100 text-center text-white">

     <p href="https://www.google.com/maps/search/mapa/@6.237305,-75.6006009,12z/data=!3m1!4b1" target="_blank">Buscar</p>

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
