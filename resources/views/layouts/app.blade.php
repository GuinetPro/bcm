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
    <link rel="stylesheet" type="text/css" href="{{ url('/css/font-awesome.min.css') }}">
    
    <!-- Styles 
    <link href="/css/app.css" rel="stylesheet">
-->
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

        Base =  {!! json_encode(url('/')) !!}

    </script>



</head>
<body ng-app="BCMApp">
    <div id="app">
        @include('partials._nav')
        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts 

    
    <script src="/js/app.js"></script>-->

    <script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

    <script src="{{ url('/js/bootstrap.min.js') }}"></script>

    <script src="{{ url('/js/angular.min.js') }}"></script>

    <script src="{{ url('/app/app.js') }}"></script>

    <script src="{{ url('/app/factory/Region.js') }}"></script>
    
    <script src="{{ url('/app/factory/Comuna.js') }}"></script>
    
    <script src="{{ url('/app/factory/Direccion.js') }}"></script>
    
    <script src="{{ url('/app/factory/Telefono.js') }}"></script>

    <script src="{{ url('/app/controller/clienteController.js') }}"></script>

</body>
</html>
