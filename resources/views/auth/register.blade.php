@extends('layouts.template')

@section('content')
<div class="wrapper">
    <div class="contenido">
        <div class="container mt-5">
            <h3 class="text-center mb-4"><u>Registro de usuario</u></h3><br><br>
    
            <form action="/register" method="POST" class="login-register-form"> <!-- INICIO FORMULARIO -->
                @csrf
    
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" id="floatingInput" name="username" placeholder="Nombre de Usuario" required>
                    <label for="floatingInput">Ingresar nombre de usuario</label> 
                </div>
    
    
                <div class="form-floating mb-3">
                    <input class="form-control" type="email" id="floatingInput" name="email" placeholder="nombre@dominio.com" required>
                    <label for="floatingInput">Ingresar correo electrónico</label>
                    
                </div>
    
                <div class="form-floating mb-3">
                    <input class="form-control" type="password" id="floatingPassword" name="password" placeholder="Password" required>
                    <label for="floatingPassword">Ingresar contraseña</label>
                    
                </div>
    
    
                <div class="form-floating mb-3">
                    <input class="form-control" type="password" id="floatingPassword" name="password_confirmation" placeholder="Confirmar Password" required>
                    <label for="floatingPassword">Confirmar contraseña</label>
                </div>
    
                <div class="container">
                    <div class="row"> <h6><i>* Todos los campos son obligatorios</i></h6></div><br>
                    <div class="row form-buttons">
                        <div class="col-6 col-md-4"><button type="submit" class="btn btn-primary">Registrarse</button></div>
                        <div class="col-6 col-md-4"><button class="btn btn-success"><a href="/login">Iniciar sesión</a></button></div>
                    </div>
                </div>
    
            </form>
        </div>
    </div>
</div>
<style>
    footer{
        padding-bottom: 105px;
        overflow: hidden
    }
</style>
@endsection
