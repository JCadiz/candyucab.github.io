@extends('layouts.web')

@section('title', ' CandyUcab')

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
                                    <a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Watch Now</a>
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
                                    <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Discover</a>
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
                                    <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Keep Watching</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('content')
<!-- ****** Top Catagory Area Start ****** -->
<section class="top_catagory_area d-md-flex clearfix">
    <!-- Single Catagory -->
    <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img2/bg-img/bg-2.jpg);">
        <div class="catagory-content">
            <h6>On Accesories</h6>
            <h2>Sale 30%</h2>
            <a href="#" class="btn karl-btn">SHOP NOW</a>
        </div>
    </div>
    <!-- Single Catagory -->
    <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img2/bg-img/bg-3.jpg);">
        <div class="catagory-content">
            <h6>in Bags excepting the new collection</h6>
            <h2>Designer bags</h2>
            <a href="#" class="btn karl-btn">SHOP NOW</a>
        </div>
    </div>
</section>
<!-- ****** Top Catagory Area End ****** -->

 <!-- ****** Area de ofertas inicio****** -->
<section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(img2/bg-img/bg-5.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-end justify-content-end">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                    <h2>White t-shirt <span class="karl-level">Hot</span></h2>
                    <p>* Free shipping until 25 Dec 2017</p>
                    <div class="offer-product-price">
                        <h3><span class="regular-price">$25.90</span> $15.90</h3>
                    </div>
                    <a href="#" class="btn karl-btn mt-30">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** area de ofertas final ****** -->

@endsection

