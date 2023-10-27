@extends('layouts.template')


@section('content')
<section class="hero">
    <img class="img-fluid" src="images/banner-luigi-bosca.png" alt="">
</section>

    <!--        Recomendados        -->
    <section id="recomendados" class="recomendados">
        <h3 class="text-center">Recomendados</h3>

        <div class="vinos-recomendados container">
            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <!--card 1-->

                    <div class="card card-1">
                        <p class="descuento">25% <br> OFF</p>
                        <img src="images/luigi-malbec.png" class="card-img-top img-fluid" alt="Luigi Bosca Malbec">
                        <div class="card-body">
                            <h5 class="card-title">Luigi Bosca - Malbec - 750ml</h5>
                            <p class="precio card-text">$10000</p>
                            <p class="precio-descuento card-text">$10000</p>
                            <a href="{{ url('products') }}" class="btn btn-secondary">Comprar</a>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-md-4">
                    <!--card 2-->

                    <div class="card card-2">
                        <p class="descuento">25% <br> OFF</p>
                        <img src="images/luigi-syrah.png" class="card-img-top img-fluid" alt="Luigi Bosca Malbec">
                        <div class="card-body">
                            <h5 class="card-title">Luigi Bosca - Merlot - 750ml</h5>
                            <p class="precio card-text">$10000</p>
                            <p class="precio-descuento card-text">$10000</p>
                            <a href="{{ url('products') }}" class="btn btn-secondary">Comprar</a>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-md-4">
                    <!--card 3-->

                    <div class="card card-3">
                        <p class="descuento">25% <br> OFF</p>
                        <img src="images/luigi-merlot.png" class="card-img-top img-fluid" alt="Luigi Bosca Malbec">
                        <div class="card-body">
                            <h5 class="card-title">Luigi Bosca - Syrah - 750ml</h5>
                            <p class="precio card-text">$10000</p>
                            <p class="precio-descuento card-text">$10000</p>
                            <a href="{{ url('products') }}" class="btn btn-secondary">Comprar</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>  <!--fin recomendados-->

@endsection
