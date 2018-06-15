@extends('layouts.web')

@section('title', ' CandyUcab :: Contact')

@section('slider')
@endsection

@section('content')
<section class="offer_area height-750 section_padding_100 bg-img" style="background-image: url(gallery/contact.jpg);">
    @if(Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Notification:</strong>  {{ Session::get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(Session::get('warning'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Notification:</strong>  {{ Session::get('warning') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
    <div class="container h-100">
        <div class="row h-100 align-items-end justify-content-end">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                    <h2 class="text-center ">Keep In Touch</h2>
                            <div class="checkout_area section_padding_100">
                                <form action="{{ route('send.email') }}" method="POST">
                                 @csrf
                                    <div class="row form-group">
							            <div class="col-md-12">
								            <label class="sr-only" for="name">Name</label>
								            <input type="text" id="name" name="name" class="form-control" placeholder="Your firstname">
							            </div>
						            </div>
						            <div class="row form-group">
							            <div class="col-md-12">
								            <label class="sr-only" for="email">Email</label>
								            <input type="text" id="email" name="email" class="form-control" placeholder="Your email address">
							            </div>
						            </div>
						            <div class="row form-group">
							            <div class="col-md-12">
								            <label class="sr-only" for="subject">Subject</label>
								            <input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message">
							            </div>
						            </div>
						                <div class="row form-group">
							            <div class="col-md-12">
								            <label class="sr-only" for="message">Message</label>
								            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Write us something"></textarea>
							            </div>
						            </div>
						            <div class="form-group">
							            <input type="submit" value="Send Message" class="btn karl-btn mt-30 boton">
						            </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
