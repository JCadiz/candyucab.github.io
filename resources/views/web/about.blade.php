@extends('layouts.web')

@section('title', ' CandyUcab :: About')

@section('slider')
@endsection

@section('content')
<section class="top_catagory_area d-md-flex clearfix footer_area" width='100vw' height="75vh" >
    <div class="row d-flex flex-wrap">
        <div class="col-md-4 col-lg-3 col-sm-12 single_catagory_area d-flex align-items-center bg-img ml-5" style="background-image: url(img/about1.jpg);">
        </div>
        <div class="col-md-8 col-lg-8 col-sm-12">
            <h1 class="text-center my-4">Nuestra Historia</h1>
            <p class="text-justify mx-5">Candy UCAB fue fundado en 1951 por un grupo de pioneros con el objetivo de ofrecer golosinas de calidad a un
            precio accesible para consumidores de todo el mundo. Su historia se remonta al año 1935, cuando una joven inmigrante de Francia llamada
            Amelia Farrisiti decidió radicarse en Caracas. Allí instaló una panadería oficio que ejercía en su Francia natal. 10 años
            después su primogénita le propuso la idea de montar una fábrica de caramelos que tuviera un volumen importante de producción con el fin de reducir costos e
            incrementar la competitividad. En el año de 1977 se produce la primera paleta de caramelo con polvo de chile en el mercado, nuestra marca líder Chupilita. Un dulce innovador que les
            permitió a nuestros pequeños consumidores mezclar el sabor y la diversión en un solo producto.</p>
        </div>
    </div>
</section>
<section class="top_catagory_area d-md-flex clearfix " width='100vw' height="75vh">
    <div class="row d-flex flex-wrap">
        <div class="col-md-8 col-lg-8 col-sm-12">
            <h1 class="text-center my-4">Fabricacion</h1>
            <p class="text-justify mx-5">Las materias primas básicas en la fabricación de caramelos son: azúcar, glucosa y agua, que combinadas en las proporciones adecuadas
            generan un jarabe almibarado que posteriormente se cuece a altas temperaturas. El agua presente en el jarabe cocido se elimina por
            evaporación, resultando una pasta de caramelo que puede ser modelada en diferentes formas. El enfriamiento posterior conlleva la
            cristalización de la masa, dotando al caramelo de rigidez. La textura final del caramelo dependerá de la temperatura a la que se
            hierva el almíbar. Cuanto más azúcar se haya disuelto, más alto será el punto de ebullición. En general, a mayor concentración de azúcar y temperaturas más altas,
            resultan caramelos más duros y rígidos, mientras que a temperaturas más bajas resultan caramelos más suaves.</p>
        </div>
        <div class="col-md-4 col-lg-3 col-sm-12 single_catagory_area d-flex align-items-center bg-img mr-5" style="background-image: url(img/about2.jpg);">
        </div>
    </div>
</section>
<!-- ****** Popular Brands Area Start ****** -->
        <section class="karl-testimonials-area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>Slogan</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="karl-testimonials-slides owl-carousel">

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote"></span>
                                <h4>CandyUcab un Dulce Mundo</h4>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    
                                    <div class="testi-data">
                                       
                                        <span> Caracas, Distrito Capital</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote"></span>
                                <h4>Soñar con caramelos hace la vida más fácil...</h4>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="testi-data">
                                       <span>Amelia Farrisiti</span>    
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ****** Popular Brands Area End ****** -->
@endsection
