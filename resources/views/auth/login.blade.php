@extends('layouts.template')

@section('content')
<div class="wrapper">
    <div class="contenido">
        <div class="container mt-5">
            <h3 class="text-center mb-4"><u>Ingreso de usuario y contraseña - Login</u></h3><br><br>
    
            <form action="/login" method="POST" class="login-register-form"> <!-- INICIO FORMULARIO -->
                @csrf
                @include('layouts.messages')
    
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" id="floatingInput" name="username" placeholder="Nombre de usuario"
                        required>
                    <label for="floatingInput">Ingresar nombre de usuario o Email</label>
                </div>
    
                <div class="form-floating mb-3">
                    <input class="form-control" type="password" id="floatingPassword" name="password" placeholder="Password"
                        required>
                    <label for="floatingPassword">Ingresar contraseña</label>
                </div>
    
                <div class="container">
                    <div class="row"><h6><i>* Todos los campos son obligatorios</i></h6></div><br>
                    <div class="row form-buttons">
                        <div class="col-6 col-md-4"><button class="btn btn-success" type="submit">Iniciar sesión</button></div>
                        <div class="col-6 col-md-4"><button class="btn btn-primary"><a href="/register">Registrarse</a></button></div>
                    </div>
                </div>
    
            </form>
        </div>
    </div>
</div>
<style>
    footer{
        padding-bottom: 250px;
        overflow: hidden
    }
</style>

@endsection
