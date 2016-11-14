 @extends("layouts.auth");

@section('content')

<div class="inner-bg">
    <div class="container">                
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">              
                    <img src="{{ url('/img/top.png') }}" alt="logo">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Formulario de Ingreso</h3>
                            <p>Ingresa tu usuario y password</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="{{ url('/login') }}"  method="post" class="login-form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                    <label class="sr-only" for="email">Usuario</label>
                                    <input type="text" name="email" placeholder="Usuario" class="form-username form-control" id="email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="password">Password</label>
                                <input type="password" name="password" placeholder="Password" class="form-password form-control" id="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn">Ingresar!</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="description">                             
                         <p>Todos los derechos reservados © {{ date('Y') }} RB - CL LOM Asesorías y Servicios.  </p>
                         <p>Para poder ingresar a esta seccion es necesario usuario y contraseña validos, Si usted no posee uno por favor comunicarse con el administrador o envíe un correo solicitando la creación de usuario a junkers.sat@cl.bosch.com  </p>
                        <p>Sitio optimizado para Google Chrome y Mozilla Firefox.</p>                                                  
                    </div>
                </div>    

            </div>
</div>
@endsection
