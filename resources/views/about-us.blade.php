@extends('layouts.template')

@section('content')

<div class="hero-about img-fluid text-white container-fluid ">
    <div class="container hero-text-about text-left">
        <h1>Nosotros</h1>
        <p>Conectando el pasado, el presente y el futuro, cuatro generaciones de Arizu expresamos 120 años de excelencia mientras nos proyectamos
            hacia el futuro respetando nuestras raíces y destacando la singularidad del terruño mendocino.</p>
    </div>
</div>


<div class="container-fluid">

    <div class="row ">
        <div class="col-md-4 column-hero-1">
            <img class="img-fluid img-thumbnail rounded" src="{{ asset('images/nosotros-1.jpg') }}" alt="">
        </div>
        <div class="col-md-8 column-hero-2">
            <h2 class="text-center">1890</h2>
            <p>Leoncio Arizu, miembro de la cuarta generación de viticultores pioneros en elaborar vinos de calidad en Europa, llega a la Argentina desde España y se instala en Mendoza. Al conocer Luján de Cuyo se entusiasma con este lugar que le recuerda a su tierra natal y comienza a plantar viñedos con vides de origen europeo.</p>
        </div>
    </div> <!-- end-row -->


    <div class="row ">
        <div class="col-md-8 column-hero-2">
            <h2 class="text-center">1926</h2>
            <p>La bodega refunda la Finca El Paraíso de 500 hectáreas junto al Río Mendoza, en Maipú. Esta finca se convertiría en un motor de investigación e inspiración para la familia Arizu, permitiendo innovar a partir de una combinación entre naturaleza, trabajo artesanal, ciencia e instinto, y convirtiéndose así en la sede de grandes hitos en la historia de la marca.</p>
        </div>

        <div class="col-md-4 column-hero-1">
            <img class="img-fluid img-thumbnail rounded" src="{{ asset('images/nosotros-2.jpg') }}" alt="">
        </div>
    </div> <!-- end-row -->

    
    <div class="row ">
        <div class="col-md-4 column-hero-1">
            <img class="img-fluid img-thumbnail rounded" src="{{ asset('images/nosotros-3.jpg') }}" alt="">
        </div>
        <div class="col-md-8 column-hero-2">
            <h2 class="text-center">1933</h2>
            <p>La segunda generación ingresa a trabajar a la bodega de la mano de Leoncio Saturnino Arizu, quien se hace cargo de los viñedos. El joven, ya recibido de Ingeniero Agrónomo, aporta profesionalización y conocimiento técnico, creando una manera especial de producir “vinos de autor”.</p>
        </div>
    </div> <!-- end-row -->

    
    <div class="row ">
        <div class="col-md-8 column-hero-2">
            <h2 class="text-center">1963</h2>
            <p>La tercera generación ingresa a trabajar a la bodega de la mano del Ingeniero Agrónomo Alberto Arizu y su hermano, el Ingeniero Raúl. Comienza allí una etapa de innovación sin precedentes, que incluye análisis de terroirs, selección de materiales genéticos y el desembarco en nuevas zonas de Maipú y Luján de Cuyo.</p>
        </div>

        <div class="col-md-4 column-hero-1">
            <img class="img-fluid img-thumbnail rounded" src="{{ asset('images/nosotros-2.jpg') }}" alt="">
        </div>
    </div> <!-- end-row -->

        
    <div class="row ">
        <div class="col-md-4 column-hero-1">
            <img class="img-fluid img-thumbnail rounded" src="{{ asset('images/nosotros-7.jpg') }}" alt="">
        </div>
        <div class="col-md-8 column-hero-2">
            <h2 class="text-center">2006</h2>
            <p>Se adquiere Finca Los Miradores en Tunuyán, Valle de Uco, y se planta con una selección de los mejores materiales clonales antiguos de las fincas de la familia en Luján de Cuyo.</p>
        </div>
    </div> <!-- end-row -->

    <div class="row ">
        <div class="col-md-8 column-hero-2">
            <h2 class="text-center">2015</h2>
            <p>Se incorpora la Finca Miralejos en Altamira, San Carlos, corazón del Valle de Uco, a 1120 metros de altura. Con una extensión de 19 hectáreas plantadas en su totalidad con Malbec, tiene un suelo pedregoso que da uvas de gran carácter y personalidad.</p>
        </div>

        <div class="col-md-4 column-hero-1">
            <img class="img-fluid img-thumbnail rounded" src="{{ asset('images/nosotros-8.jpg') }}" alt="">
        </div>
    </div> <!-- end-row -->

    <div class="row ">
        <div class="col-md-4 column-hero-1">
            <img class="img-fluid img-thumbnail rounded" src="{{ asset('images/nosotros-9.jpg') }}" alt="">
        </div>
        <div class="col-md-8 column-hero-2">
            <h2 class="text-center">2017</h2>
            <p>Se suma al equipo como Head Winemaker el Ingeniero Agrónomo Pablo Cúneo, egresado de la Universidad Nacional de Cuyo y con amplia trayectoria en la industria vitivinícola. Pablo aporta una visión innovadora y fresca reinterpretando el estilo de la casa y reforzando el carácter elegante que imprime a los vinos que elabora.</p>
        </div>
    </div> <!-- end-row -->

    <div class="row ">
        <div class="col-md-8 column-hero-2">
            <h2 class="text-center">2021</h2>
            <p>Nace la línea De Sangre como resultado de una búsqueda de lotes especiales con expresiones únicas. Se trata de una alianza entre la naturaleza y la mano humana. Un acto de co-creación que refleja el estilo de la casa y la interpretación de nuestro enólogo.</p>
        </div>

        <div class="col-md-4 column-hero-1">
            <img class="img-fluid img-thumbnail rounded" src="{{ asset('images/nosotros-10.jpg') }}" alt="">
        </div>
    </div> <!-- end-row -->

</div>  <!-- end-container-fluid -->



@endsection