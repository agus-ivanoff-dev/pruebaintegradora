@extends('layouts.template')

@section('content')
    <<div class="container mt-5">
        <h3 class="text-center mb-4"><u>Ingreso de usuario y contraseña - Login</u></h3><br><br>
        <form action="/login" method="POST" class="login-register-form"> <!-- INICIO FORMULARIO -->
            @csrf
            @include('layouts.messages')

            <div class="form-border">
                <label for="username">Nombre de usuario o Email</label> &nbsp;<span class="asterisk">*</span> <br>
                <input class="form-control" type="text" name="username" placeholder="Username" required> <br><br>
            </div>

            <div class="form-border">
                <label for="password">Password</label><span class="asterisk">*</span> <br>
                <input class="form-control" type="password" name="password" placeholder="Password" required> <br><br>
            </div>

            <div class="container">
                <div class="row form-buttons">
                    <div class="col-6 col-md-4"><button class="btn btn-success" type="submit">Iniciar sesión</button></div>
                    <div class="col-6 col-md-4"><button class="btn btn-primary"><a href="/register">Registrarse</a></button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    @endsection
