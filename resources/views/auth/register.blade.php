@extends('layouts.template')

@section('content')
    <div class="container mt-5">
        <h3 class="text-center mb-4"><u>Registro de usuario</u></h3><br><br>

        <form action="/register" method="POST" class="login-register-form"> <!-- INICIO FORMULARIO -->
            @csrf

            <div class="form-border">
                <label for="username">Nombre de Usuario</label> &nbsp;<span class="asterisk">*</span> <br>
                <input class="form-control" type="text" name="username" placeholder="Nombre de Usuario" required> <br><br>
            </div>


            <div class="form-border">
                <label for="email">Email</label>&nbsp;<span class="asterisk">*</span> <br>
                <input class="form-control" type="email" name="email" placeholder="Email" required> <br><br>
            </div>


            <div class="form-border">
                <label for="password">Password</label>&nbsp;<span class="asterisk">*</span> <br>
                <input class="form-control" type="password" name="password" placeholder="Password" required> <br><br>
            </div>


            <div class="form-border">
                <label for="password">Password</label>&nbsp;<span class="asterisk">*</span> <br>
                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirmar Password"
                    required> <br><br>
            </div>

            <div class="container">
                <div class="row form-buttons">
                    <div class="col-6 col-md-4"><button type="submit" class="btn btn-primary">Registrarse</button></div>
                    <div class="col-6 col-md-4"><button class="btn btn-success"><a href="/login">Iniciar sesión</a></button></div>
                </div>
            </div>

        </form>
    </div>
@endsection
