@extends('layouts.log-in')
@section('content')
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 fondo_imagen_login">
                </div>
                <div class="col-md-6 fondo_blanco_login">
                    <div class="login_box">
                        <form action="#" method="post">
                            @csrf
                            <h1 class="fiducom_title mb-30">
                                FIDUCOM
                            </h1>

                            <h3 class="bienvenido_title mb-30">
                                Bienvenido
                            </h3>

                            <div class="input-group input-group-lg mb-30">
                                <input type="text" class="form-control input_border input_text mb-10" name="dni" id="dni" aria-describedby="sizing-addon1" required>
                                <p class="placeholder_login">Usuario</p>
                            </div>

                            <div class="input-group input-group-lg mb-30">
                                <input type="password" name="clave" class="form-control input_border input_text mb-10" id="clave"  aria-describedby="sizing-addon1" required>
                                <p class="placeholder_login">Contraseña</p>
                            </div>

                            <div class="input-group input-group-lg mb-10 div-submit">
                                <button class="btn btn-lg btn-login" id="IngresoLog" type="submit">
                                    Ingresar
                                </button>
                            </div>
                        </form>
                        <p class="mt-10">
                            <a class="forgot_pw" href="forgot-password.html">¿Olvidó su contraseña?</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </body>

@endsection