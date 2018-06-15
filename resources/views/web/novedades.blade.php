@extends('layouts.web')

@section('title', ' CandyUcab :: novedades')

@section('slider')
 <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(gallery/logo.gif);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Welcome to Marvel</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Visit Our section of Movies</h2>
                                    <a href="{{ route('movies') }}" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(gallery/SliderHom.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Also can see a few important characters</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Only in Charcater section</h2>
                                    <a href="{{ route('personajes') }}" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(gallery/slider3.png);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* And remenber</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Thanos Demand your Silence</h2>
                                    <a href="{{ route('series') }}" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Keep Watching</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('content')
@endsection
