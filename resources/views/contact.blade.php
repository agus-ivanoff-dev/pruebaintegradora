@extends('layouts.template')

@section('content')
    <div class="wrapper">
        <div class="contenido">
            <div class="contacto container">

                <div class="titulo-contacto">
                    <h3> Contáctanos</h3>
                </div>

                <div class="row">

                    <div class="left">
                        <div class="img-copa-vino">
                            <img class="img-fluid" src="{{ asset('images/copa-vino.png') }}" alt="Copa de vino tinto">
                        </div>
                    </div> <!--end-left-->

                    <div class="right">

                        <section class="form-section">

                            <div class="form-fields">
                                <p> Si tienes alguna duda o comentario, te pedimos que completes el formulario.</p>
                                <p> Te contactaremos dentro de las próximas 24 hs. hábiles.</p>

                                <form action="{{ route('contact.store') }}" method="POST"> <!-- INICIO FORMULARIO -->
                                    @csrf

                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" id="floatingInput" name="nombre"
                                            placeholder="Ingresar nombre" required>
                                        <label for="floatingInput">Ingresar nombre</label>
                                    </div>


                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" id="floatingInput" name="apellido"
                                            placeholder="Ingresar apellido" required>
                                        <label for="floatingInput">Ingresar apellido</label>
                                    </div>


                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="email" id="floatingInput" name="email"
                                            placeholder="usuario@dominio.com" required>
                                        <label for="floatingInput">Ingresar email</label>
                                    </div>


                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="tel" id="floatingInput" name="telefono"
                                            placeholder="Ingresar telefono" required>
                                        <label for="floatingInput">Ingresar número de teléfono</label>
                                    </div>


                                    <div class="form-floating mb-3">
                                        <textarea class="form-control h-100" id="floatingTextarea" name="comentarios" placeholder="Ingrese sus comentarios aquí"
                                             required></textarea>
                                        <label for="floatingTextarea">Comentarios</label>

                                    </div>

                                    <div class="container mb-5">
                                        <div class="row">
                                            <h6><i>* Todos los campos son obligatorios</i></h6>
                                        </div><br>

                                        <div class="row form-buttons">
                                            <div class="col-6 col-md-4"><button type="submit" class="btn btn-lg btn-success">Enviar </button></div>
                                        </div>

                                    </div>
                                </form> <!-- FIN FORMULARIO -->
                            </div> <!--end form-fields-->
                        </section> <!--end form-section-->
                    </div> <!--end right-->


                </div> <!--end row-->


                @if (session('info'))
                    <!-- INICIO MENSAJE DE CONFIRMACIÓN -->
                    <script>
                        alert("{{ session('info') }}")
                    </script>
                @endif

            </div> <!--end contacto-container-->
        </div> <!--end contenido-->
    </div> <!--end wrapper-->
@endsection
