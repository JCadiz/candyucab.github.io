@extends('layouts.web')

@section('title', ' CandyUcab :: tienda')

@section('slider')

@endsection

@section('content')
<section class="shop_grid_area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2> Tienda <strong style="color:red">Candy</strong>Ucab</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row karl-new-arrivals">
            <!-- Single gallery Item Start -->
                @foreach($test as $producto)
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/{{ $producto->imagen }}" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview{{ $producto->id }}"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h2 class="product-price text-center">{{ $producto->nombre }}</h2>
                        </div>
                    </div>

<!-- ****** Quick View Modal Area Start ****** -->
    <div class="modal fade" id="quickview{{ $producto->id }}" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

        <div class="modal-body">
            <div class="quickview_body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <div class="quickview_pro_img">
                                <img src="img/{{ $producto->imagen}}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="quickview_pro_des">
                                    <h4 class="title">{{ $producto->nombre}}</h4>
                                <div class="top_seller_product_rating mb-15">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h5 class="price">Bs.S {{ $producto->precio}}</h5>
                                <p class="text-justify">{{ $producto->descripcion }}</p>
                            </div>
                        <!-- Add to Cart Form -->
                        <form class="cart" method="post">
                            <div class="quantity">
                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                            </div>

                            <a href="{{ route('cart', $producto->id) }}" name="addtocart" value="1" class="cart-submit py-3 px-3">Add to cart {{ $producto->id }}</a>

                        </form>

                            <div class="share_wf mt-30">
                                <p>Share With Friend</p>
                                <div class="_icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- ****** Quick View Modal Area End ****** -->

                @endforeach



        </div>
    </div>
</section>
<div class="shop_pagination_area wow d-flex justify-content-center mb-4 fadeInUp" data-wow-delay="1.1s">
    <nav aria-label="Page navigation ">
        <ul class="pagination pagination-sm">
                <li class="page-item @if($test->previousPageUrl() == null) disabled @endif">
                <a class="page-link" href="{{ $test->previousPageUrl() }}"> << </a>
            </li>
            <li class="page-item @if($test->lastPage() == $test->currentPage()) disabled @endif">
                <a class="page-link" href="{{ $test->nextPageUrl() }}"> >> </a>
            </li>
        </ul>
    </nav>
</div>
@endsection
