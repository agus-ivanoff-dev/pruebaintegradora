<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Luigi Bosca Wines</title>

    <!--BOOTSTRAP 5-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>


    <!--BOOTSTRAP Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <!-- FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <!-- FAVICON-->
    <link rel="icon" href="{{ asset('images/luigi-favicon.ico') }}">

</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('./') }}"><img src="{{ asset('images/luigi-brand.svg') }}"
                    alt="Luigi Bosca Brand"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <h4> 
                        <span class="badge bg-success">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth()->user()->name ?? Auth()->user()->username }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/logout">Cerrar sesión</a></li>
                                </ul>
                            </li>
                        </span>
                    
                    </h4>

                </ul>
            </div>
        </div>
    </nav>


    @yield('content')



    <!--        Footer        -->
    <footer class="container-fluid">

        <div class="row">
            <div class="col-4 col-sm-4 col-md-6 col-lg-4">
                <div class="brand-footer text-center">
                    <h4>Luigi Bosca</h4>
                    <p>Bodega Luigi Bosca</p>
                </div>
            </div>


            <div class="col-8 col-sm-8 col-md-6 col-lg-4">
                <div class="nav-footer d-flex flex-row justify-content-evenly">

                    <a href="{{ url('products') }}">
                        <p>Productos</p>
                    </a>


                    <a href="{{ url('contact') }}">
                        <p>Contacto</p>
                    </a>

                    <a href="{{ url('about-us') }}">
                        <p>Nosotros</p>
                    </a>

                </div>
            </div>


            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="social-media text-center">
                    <a href="mailto:agus.svp@gmail.com"><i class="bi bi-envelope"></i></a>
                    <a href="https://facebook.com"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com"><i class="bi bi-instagram"></i></a>
                    <a href="https://whatsapp.com"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

        </div>
    </footer>

</body>

</html>
