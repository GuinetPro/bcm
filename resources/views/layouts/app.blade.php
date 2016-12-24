<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BCM') }}</title>
  <!--  <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
    
     Styles 
    <link href="/css/app.css" rel="stylesheet">
-->
    <link rel="stylesheet" href="{{ url('/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ url('/libs/bower/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css')}}">
    <!-- build:css ../assets/css/app.min.css -->
    <link rel="stylesheet" href="{{ url('/libs/bower/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ url('/libs/bower/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{ url('/libs/bower/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ url('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ url('/css/core.css')}}">
    <link rel="stylesheet" href="{{ url('/css/app.css')}}">
    <!-- Scripts -->

    <!-- endbuild -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
    <script src="{{ url('/libs/bower/breakpoints.js/dist/breakpoints.min.js')}}"></script>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

        Base =  {!! json_encode(url('/api')) !!}
        Breakpoints();
    </script>



</head>


<body class="menubar-top menubar-light theme-primary" ng-app="BCMApp">


    @if ( Auth::user()->rol_id == 3)
         @include('partials._nav_tecnico')
    @elseif ( Auth::user()->rol_id == 4)
         @include('partials._nav_taller')         
    @else
         @include('partials._nav')
    @endif
   
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
      <div class="wrap">
        <section class="app-content">@include('partials._error',[]) 
            @include('flash::message')
            @yield('content')
        </section>
      </div>

        <!-- APP FOOTER -->
          <div class="wrap p-t-0">
            <footer class="app-footer">
              <div class="clearfix">

                <div class="copyright pull-left">Software BCM 2016 &copy;</div>
              </div>
            </footer>
          </div>


    </main>

<!-- 
    <script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

    <script src="{{ url('/js/bootstrap.min.js') }}"></script>


    <!-- SIDE PANEL -->
    <div id="side-panel" class="side-panel">
        <div class="panel-header">
            <h4 class="widget-title">Monitor de Atenciones</h4>
        </div>
        <div class="scrollable-container">
            <div class="media-group">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Fecha</td>
                            <td>Cantidad</td>
                        </tr>
                    </thead>
                    <tbody>
                          
                        <tr>
                            <td>12/12/2016</td>
                            <td>0</td>
                        </tr>
                                                      
                        <tr>
                            <td>13/12/2016</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>14/12/2016</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>15/12/2016</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>16/12/2016</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>17/12/2016</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>18/12/2016 </td>
                            <td>0</td>
                        </tr>

                      </tbody>     
                </table>
            </div>
        </div><!-- .scrollable-container -->
    </div><!-- /#side-panel -->
    <!-- build:js ../assets/js/core.min.js -->
    <script src="{{ url('/libs/bower/jquery/dist/jquery.js') }}"></script>
    <script src="{{ url('/libs/bower/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ url('/libs/bower/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
    <script src="{{ url('/libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js') }}"></script>
    <script src="{{ url('/libs/bower/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ url('/libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ url('/libs/bower/PACE/pace.min.js') }}"></script>
    <!-- endbuild -->

    <!-- build:js ../assets/js/app.min.js -->
    <script src="{{ url('/js/library.js') }}"></script>
    <script src="{{ url('/js/plugins.js') }}"></script>
    <script src="{{ url('/js/app.js') }}"></script>
    <!-- endbuild -->
    <script src="{{ url('/libs/bower/moment/moment.js') }}"></script>
    <script src="{{ url('/libs/bower/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ url('/js/fullcalendar.js') }}"></script>
    <script src="{{ url('/js/bootbox.min.js') }}"></script>

    <script src="{{ url('/js/angular.min.js') }}"></script>

    <script src="{{ url('/js/intlTelInput.min.js') }}"></script>

    <script src="{{ url('/app/app.js') }}"></script>

    <script src="{{ url('/app/factory/Region.js') }}"></script>
    
    <script src="{{ url('/app/factory/Comuna.js') }}"></script>

    <script src="{{ url('/app/factory/Modelo.js') }}"></script>
    
    <script src="{{ url('/app/factory/Producto.js') }}"></script>

    <script src="{{ url('/app/factory/ProductoCliente.js') }}"></script>

    <script src="{{ url('/app/factory/Direccion.js') }}"></script>
    
    <script src="{{ url('/app/factory/Telefono.js') }}"></script>

    <script src="{{ url('/app/controller/clienteController.js') }}"></script>

</body>
</html>
