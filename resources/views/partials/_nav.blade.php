
<!-- APP NAVBAR ==========-->
<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top dark">
  
  <!-- navbar header -->
  <div class="navbar-header">
    <button type="button" id="menubar-toggle-btn" class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-more"></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-search"></span>
    </button>

    <a href="{{ url('/') }}" class="navbar-brand">
      <span class="brand-icon"><i class="fa fa-gg"></i></span>
      <span class="brand-name"> {{ config('app.name', 'BCM') }}</span>
    </a>
  </div><!-- .navbar-header -->
  
  <div class="navbar-container container-fluid">
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
        <li class="hidden-float hidden-menubar-top">
          <a href="javascript:void(0)" role="button" id="menubar-fold-btn" class="hamburger hamburger--arrowalt is-active js-hamburger">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
          </a>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top">Dashboard</h5>
        </li>
      </ul>

      <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">
        <li class="nav-item dropdown hidden-float">
          <a href="javascript:void(0)" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
            <i class="zmdi zmdi-hc-lg zmdi-search"></i>
          </a>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-notifications"></i></a>
          <div class="media-group dropdown-menu animated flipInY">
            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="../assets/images/221.jpg" alt="">
                    <i class="status status-online"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">John Doe</h5>
                  <small class="media-meta">Active now</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="../assets/images/205.jpg" alt="">
                    <i class="status status-offline"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">John Doe</h5>
                  <small class="media-meta">2 hours ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="../assets/images/207.jpg" alt="">
                    <i class="status status-away"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">Sara Smith</h5>
                  <small class="media-meta">idle 5 min ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="../assets/images/211.jpg" alt="">
                    <i class="status status-away"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">Donia Dyab</h5>
                  <small class="media-meta">idle 5 min ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->
          </div>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
          <ul class="dropdown-menu animated flipInY">
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>My Profile</a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-phone-msg"></i>Connection<span class="label label-primary">3</span></a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>privacy</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="side-panel-toggle" data-toggle="class" data-target="#side-panel" data-class="open" role="button"><i class="zmdi zmdi-hc-lg zmdi-apps"></i></a>
        </li>
      </ul>
    </div>
  </div><!-- navbar-container -->
</nav>
<!--========== END app navbar -->       

<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar dark">
  <div class="app-user">
    <div class="media">
      <div class="media-left">
        <div class="avatar avatar-md avatar-circle">
        {{ Auth::user()->rol->nombre }}
          <!-- <a href="javascript:void(0)"><img class="img-responsive" src="../assets/images/221.jpg" alt="avatar"/></a>
         -->
        </div><!-- .avatar -->
      </div>
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username">John Doe</a></h5>
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>Web Developer</small>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu animated flipInY">
                <li>
                  <a class="text-color" href="/index.html">
                    <span class="m-r-xs"><i class="fa fa-home"></i></span>
                    <span>Home</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="profile.html">
                    <span class="m-r-xs"><i class="fa fa-user"></i></span>
                    <span>Profile</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="settings.html">
                    <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                    <span>Settings</span>
                  </a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="logout.html">
                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                    <span>Home</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">


        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-windows zmdi-hc-fw-lg"></i>
            <span class="menu-text">Atenciones</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Encuestas OUT</span></a></li>
            <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Presupuestos</span></a></li>
            <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Gasfiters</span></a></li>
          </ul>
        </li>   

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-windows zmdi-hc-fw-lg"></i>
            <span class="menu-text">Administracion</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Tiempos de Realizacion</span></a></li>
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Administrar Clientes</span></a></li>
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Administrar Atenciones</span></a></li>
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Estadisticas</span></a></li>
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Validar Garantias</span></a></li>
              <li><a href="{{url('/bosh/usuarios')}}"><span class="menu-text">Usuarios</span></a></li>
              <li><a href="{{url('/clientes')}}"><span class="menu-text">Clientes</span></a></li>
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text"> Lista de Precios</span></a></li>
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Actualizar Lista de Precios</span></a></li>
              <li><a href="{{url('/bosh/talleres')}}"><span class="menu-text">Talleres</span></a></li>
              <li><a href="{{url('/productos')}}"><span class="menu-text">Productos</span></a></li>
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Repuestos</span></a></li>

          </ul>
        </li>     
        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-windows zmdi-hc-fw-lg"></i>
            <span class="menu-text">Configuracion</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Analisis y Control</a></li>
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Talleres</a></li>
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Reportes</a></li>
              <li><a href="{{url('/bosh/gasfiteros')}}"><span class="menu-text">Reporte Gestion</span></a></li>
          </ul>
        </li> 

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon fa fa-archive"></i>
            <span class="menu-text">Atenciones</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">

            <li>
                <a href="{{url('/visitas')}}">Atenciones Actuales</a>
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

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon fa fa-wrench"></i>
            <span class="menu-text">Repuestos</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
                <li>
                    <a href="{{url('/bosh/repuestos/')}}">Solicitar Rptos</a>
                </li>
                <li>
                    <a href="{{url('/bosh/repuestos/')}}">Estado Solicitud de Rptos</a>
                </li>
                <li>
                   <a href="{{url('/bosh/repuestos')}}">Lista de Precios</a>
                </li>

                <li>
                   <a href="{{url('/bosh/repuestos')}}">Sin Repuesto</a>
                </li>
          </ul>
        </li>
        
        <li>
          <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text">Salir</span>
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
          </form>
        </li>


      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>
<!--========== END app aside -->