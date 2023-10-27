@extends('layouts.template')

@section('content')
<div class="contacto container">
    <div class="titulo-contacto">
        <h3> Contáctanos</h3>
    </div>
    <div class="row">

        <div class="left">
            <div class="img-copa-vino">
                <img class="img-fluid" src="{{ asset('images/copa-vino.png') }}" alt="Copa de vino tinto">
            </div>
        </div>

        <div class="right">

            <section class="form-section">


                <div class="form-fields">
                    <p> Si tienes alguna duda o comentario, te pedimos que completes el formulario.</p>
                    <p> Te contactaremos dentro de las próximas 24 hs. hábiles.</p>

                    <form action="{{route('contact.store')}}" method="POST"> <!-- INICIO FORMULARIO -->
                        @csrf 

                        <div class="form-border">
                            <label for="nombre">Nombre</label> &nbsp;<span class="asterisk">*</span> <br>
                            <input class="form-control" type="text" name="nombre" placeholder="Ingresar nombre" required> <br><br>
                        </div>


                        <div class="form-border">
                            <label for="apellido">Apellido</label><span class="asterisk">*</span> <br>
                            <input class="form-control" type="text" name="apellido" placeholder="Ingresar apellido" required> <br><br>
                        </div>


                        <div class="form-border">
                            <label for="email">Email</label><span class="asterisk">*</span> <br>
                            <input class="form-control" type="text" name="email" placeholder="Ingresar email" required> <br><br>
                        </div>


                        <div class="form-border">
                            <label for="telefono">Teléfono</label><span class="asterisk">*</span> <br>
                            <input class="form-control" type="tel" name="telefono" placeholder="Ingresar telefono" required> <br><br>
                        </div>


                        <div class="form-border">
                            <label for="comentarios">Comentarios</label><span class="asterisk">*</span> <br>
                            <textarea id="comentarios" name="comentarios" rows="4" cols="50" placeholder="Ingrese sus comentarios aquí" required></textarea>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col"><button class="btn btn-success p-3" type="submit">Enviar</button></div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </section>

            </form>

            @if (session('info')) <!-- INICIO MENSAJE DE CONFIRMACIÓN -->
            <script>
                alert("{{session('info')}}")
            </script>
                
            @endif

        </div>

    </div>

</div>

</div>


@endsection