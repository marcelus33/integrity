<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="icon" type="image/ico" href="favicon.ico">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <style>
            /* Sticky footer styles
            -------------------------------------------------- */
            html {
              position: relative;
              min-height: 100%;
            }
            body {
              /* Margin bottom by footer height */
              margin-bottom: 60px;
            }
            .footer {
              position: absolute;
              bottom: 0;
              width: 100%;
              /* Set the fixed height of the footer here */
              height: 60px;
              line-height: 60px; /* Vertically center the text there */
              background-color: #f5f5f5;
            }


            /* Custom page CSS
            -------------------------------------------------- */
            /* Not required for template or sticky footer method. */

            body > .container {
              padding: 60px 15px 0;
            }

            .footer > .container {
              padding-right: 15px;
              padding-left: 15px;
            }

            code {
              font-size: 80%;
            }
        </style>

</head>

<body>

  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Integrity</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          {{-- <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Archivo</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Padres</a>
              <a class="dropdown-item" href="#">Alumnos</a>
              <a class="dropdown-item" href="#">Inscripciones</a>
              <a class="dropdown-item" href="#">Facturas</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informes</a>
            <div class="dropdown-menu" aria-labelledby="dropdown02">
              <a class="dropdown-item" href="#">Cuotas Vencidas</a>
              <a class="dropdown-item" href="#">Cuenta Corriente</a>
              <a class="dropdown-item" href="#">Facturas por período</a>
              <a class="dropdown-item" href="#">Detalles de ingresos</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parámetros</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="#">Periodo Lectivo</a>
              <a class="dropdown-item" href="#">Cursos</a>
              <a class="dropdown-item" href="#">Facturación</a>
              <a class="dropdown-item" href="#">Productos</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Varios</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="#">Backup</a>
              <a class="dropdown-item" href="#">Registro de cambios</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</a>
            <div class="dropdown-menu" aria-labelledby="dropdown06">
              <a class="dropdown-item" href="#">Cambiar contraseña</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ayuda</a>
            <div class="dropdown-menu" aria-labelledby="dropdown05">
              <a class="dropdown-item" href="#">Acerca de...</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown07">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        {{-- <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> --}}
      </div>
    </nav>
  </header>

  <!-- Begin page content -->
  <main role="main" class="container">
    <div class="img_container">
        <img class="main_logo" src="img/integrity-logo.png" alt="Logo">
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <span>Derechos Reservados &copy; 2019 - Integrity</span>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>


</body>



</html>