<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BCM') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
    
    <!-- Styles 
    <link href="/css/app.css" rel="stylesheet">
-->
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>


<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

     <script src="{{ url('/js/bootstrap.min.js') }}"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'BCM') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                               Atenciones
                              <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{url('/clientes')}}">Clientes</a>
                                </li>
                                <li>
                                    <a href="#">Atenciones Actuales</a>
                                </li>
                                <li>
                                    <a href="#">Atenciones Cerradas</a>
                                </li>
                                <li>
                                    <a href="#">Atenciones Criticas</a>
                                </li>
                                <li>
                                    <a href="#">Reportes</a>
                                </li>
                                <li>
                                    <a href="#">Gasfiters</a>
                                </li>
                              </ul>
                         </li>
                         <li class="dropdown">   
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Garantias
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Rendicion</a>
                                </li>
                                <li>
                                    <a href="#">Reparaciones</a>
                                </li>
                            </ul>
                         </li>
                         <li>
                            <a href="#">Presupuestos</a>
                        </li>
                        <li class="dropdown">      
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Repuestos <span class="caret"></span></a>
                            <ul class="dropdown-menu">                               
                                <li>
                                    <a href="#">Solicitar Rptos</a>
                                </li>
                                <li>
                                    <a href="#">Estado Solicitud de Rptos</a>
                                </li>
                                <li>
                                    <a href="#">Lista de Precios</a>
                                </li>
                            </ul>
                         </li>

                        <li>
                            <a href="#">Sin Repuesto</a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts 
    <script src="/js/app.js"></script>-->
    
</body>
</html>
