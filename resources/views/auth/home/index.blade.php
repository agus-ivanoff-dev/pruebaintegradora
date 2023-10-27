@extends('layouts.auth')

@section('content')
<h1 class="text-center"><u>Intranet - Luigi Bosca</u></h1>

@auth

<div class="alert alert-success" role="alert">
    <p>Bienvenido {{Auth()->user()->name ?? Auth()->user()->username}}, has iniciado sesión correctamente</p>
  </div>
    

@endauth

@guest
    <p>Para ver el contenido, <a href="/login">inicia sesión</a></p>
@endguest

@endsection