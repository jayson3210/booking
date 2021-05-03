@extends('layouts.tourismo.ui')

@section('content')
<section class="features">
      <div class="container">

<div style="margin-top: 45px;"></div>

<!-- <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true"> -->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 8:3; animation: push">

    <ul class="uk-slideshow-items">
      @foreach($room_details as $details)
        <li>
            <img src="{{ asset('upload/merchant/coverphoto')}}/{{ $details->photo == '' ? 'default.png' : $details->photo }}" alt="" uk-cover>
             <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <h1 class="uk-margin-remove"><b>Tourism Made Easy</b></h1>
                <p class="uk-margin-remove">Its All started with seeding of inspiration</p>
            </div>
        </li>
      @endforeach()
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<div style="margin-bottom: 20px;"></div>



<div class="uk-child-width-expand@s" uk-grid>

<div>
  <div class="section-title">
  <h2>{{ $room_details[0]->roomname }}</h2>
  <p style="margin-top: -5px;">
  <span style="font-size:12px; font-weight: 100px;"><i class="fas fa-building"></i> EuroTEL Corp.</span>
  </p>
  <span style="font-size:12px; font-weight: 100px;"><i class="fas fa-map-marker-alt"></i> {{ $room_details[0]->address }}</span>
  </div>

 <h3 class="uikit-title">Booking Details</h3>
  <ul>
  <li><i class="icofont-check"></i>Room size: <b>{{ $room_details[0]->roomsize }} m²</b></li>
  <li><i class="icofont-check"></i>View : <b>City View</b></li>
  <li><i class="icofont-check"></i>Max guest: <b>{{ $room_details[0]->noguest }}</b></li>
  <li><i class="icofont-check"></i>No. of Bed: <b>{{ $room_details[0]->nobed }}</b></li>
</ul>

<h3 class="uikit-title">
  Package
</h3>

<ul>
  <li><i class="icofont-check"></i>{{ $room_details[0]->booking_package }}</li>
</ul>

<h3  class="uikit-title">
  Room Facilities
</h3>

<ul>
  <li><i class="icofont-check"></i>{{ $room_details[0]->room_facilities }}</li>
</ul>

<h3 class="uikit-title">
     Building Facilities
</h3>

<ul>
  <li><i class="icofont-check"></i>{{ $room_details[0]->building_facilities }}</li>
</ul>


</div>

    <div>
        <div class="uk-card uk-card-default uk-card-body">
            
<h3 class="uikit-title">
  <b>
 <span style="font-weight: 500px;color:#ff2f00;"> ₱ </span>
  <span style="font-size:18px; font-weight:200px;color:#ff2f00;">
    {{ $room_details[0]->price }} / For {{ $room_details[0]->nonight }} Night
  </span>
</b>
</h3>


@if(Auth::check())
    @auth
      <!-- ---------------------------- user is authenticated ----------------- -->
    @endauth
@else 
<div id="checklogin" class="uk-modal-full" uk-modal>
<div class="uk-modal-dialog">
<button class="uk-modal-close-full uk-close-large uk-position-top" type="button" uk-close></button>

<div class="uk-section uk-section-muted uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport>
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                <div class="uk-width-1-1@m">
                    <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                        <h3 class="uk-card-title uk-text-center">Booking Tourismo</h3>
                        
    <form method="POST" action="{{ route('login') }}">
      @csrf
        <div class="uk-margin">
            <div class="uk-inline uk-width-1-1">
                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                <input class="uk-input uk-form-meduim" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline uk-width-1-1">
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                <input class="uk-input uk-form-meduim" type="password" name="password" required autocomplete="current-password">  
            </div>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-checkbox" type="checkbox"> Remember Me</label>
        </div>

        <div class="uk-margin">
            <button type="submit" class="uk-button uk-button-primary uk-button-meduim uk-width-1-1">Login</button>
        </div>
        <div class="uk-text-small uk-text-center">
            Not registered? <a href="#register" uk-toggle>Register</a>
        </div>
    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>

@endif


<div class="uikit-btn-book">

@if(Auth::check())
    @auth


<ul uk-accordion>
    
<li>
<a class="uk-button uk-button-small uk-accordion-title " href="javascript:void(0)">Book Now <span uk-icon="chevron-down"></span></a>
<a class="uk-button uk-button-small btn-room-details-m" href="javascript:void(0)">Like<span uk-icon="chevron-down"></span></a>
<br>  

<div style="margin-top: 12px;">      
<span style="font-size:12px; font-weight: 100px;"><span uk-icon="chevron-down"></span> 200 + Booked</span>
<span style="font-size:12px; font-weight: 100px;"><span uk-icon="chevron-down"></span> No cancellation available</span>
</div>

<div class="uk-accordion-content">    

<form class="uk-form-stacked" method="GET" action="{{ route('xxx') }}">
@csrf
<div class="row row-margin">

<div class="col-md-5 form-group mt-3">
    <label class="labelcoz">First Name</label>
    <input type="text" class="uk-input" name="fname" id="fname" value="{{ Auth::user()->fname }}" readonly="readonly">
    <div class="validate"></div>
</div>

<div class="col-md-5 form-group mt-3">
    <label class="labelcoz">First Name</label>
    <input type="text" class="uk-input" name="lname" id="lname" value="{{ Auth::user()->lname }}" readonly="readonly">
    <div class="validate"></div>
</div>

<div class="col-md-2 form-group mt-3">
    <label class="labelcoz">M.N</label>
    <input type="text" class="uk-input" name="mname" id="mname" value="{{ Auth::user()->mname }}" readonly="readonly">
    <div class="validate"></div>
 </div>

<div class="col-md-6 form-group mt-3">
    <label class="labelcoz">Phone No.</label>
    <input type="text" class="uk-input" name="pnumber" id="pnumber" value="{{ Auth::user()->pnumber }}" readonly="readonly">
    <div class="validate"></div>
</div>

<div class="col-md-6 form-group mt-3">
    <label class="labelcoz">Email</label>
    <input type="text" class="uk-input" name="email" id="email" value="{{ Auth::user()->email }}" readonly="readonly">
    <div class="validate"></div>
</div>

<div class="col-md-12 form-group mt-3">
    <label class="labelcoz">Address</label>
    <input type="text" class="uk-input" name="address" id="address" value="{{ Auth::user()->address }}" readonly="readonly">
    <input type="hidden" class="uk-input" name="country" id="country" value="{{ Auth::user()->country }}" readonly="readonly">
    <div class="validate"></div>
</div>

<div class="col-md-12 form-group mt-3">
<div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-radio" type="radio" name="radio2" checked> Pay with PayPal</label>
            <label><input class="uk-radio" type="radio" name="radio2" checked> Pay with TraxionPay</label>
        </div>
        </div>
<div class="col-md-12 form-group mt-3">
<button type="submit" class="uk-button uk-button-primary">Continue</button>
</div>

</div>
</form>

</div>

</li>

</ul>



    @endauth
@else 

  <a class="uk-button uk-button-small btn-room-details-m" href="javascript:void(0)" uk-toggle="target: #checklogin">
    Book Now
  </a>

  <a class="uk-button uk-button-small btn-room-details-m" href="javascript:void(0)" uk-toggle="target: #checklogin">
    Like
  </a>

@endif

</div>







        </div>

        <h3>Hotel Information</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <h3>Terms & Conditions</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

     </div>

</div>


</div>
</section>

<div style="margin-top: 45px;"></div>
<section class="services team aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <div class="container">
    <div class="row">

<div class="section-title">
  <h2>Related Rooms</h2>
</div>

          @foreach($room_details as $list)
<div class="col-md-6 col-lg-3 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up">
          <div class="icon-box icon-box-pink">
          
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('upload/merchant/coverphoto')}}/{{ $list->photo == '' ? 'default.png' : $list->photo }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $list->roomname }}</h4>
                <span style="font-weight: 500px; font-size: 14px;color:#ff2f00;"><b>₱ {{ $list->price }}</b> / For {{ $list->nonight }} Night</span>

                <span>
                  <img style="padding-bottom: 5px;" src="{{ asset('upload/merchant/icons/baseline_local_dining_black_18dp.png')}}">
                  {{ $list->booking_package }}
                </span>
                
                <span>
                  <img style="padding-bottom: 3px;" src="{{ asset('upload/merchant/icons/baseline_supervisor_account_black_18dp.png')}}">
                  Max Guests: {{ $list->noguest }}
                </span>
                
                <span>
                  <img style="padding-bottom: 1px;" src="{{ asset('upload/merchant/icons/baseline_visibility_black_18dp.png')}}"> City View
                </span>
              
              </div>

<div class="details-m">
<a class="uk-button uk-button-default uk-button-small btn-room-details-m" href="javascript:void(0)" data-id="{{ $list->upload_id }}">Explore</a>
<button class="uk-button uk-button-default uk-button-small" type="button" data-toggle="modal" data-id="{{ $list->id }}" id="btn-room-details-m">Details</button>

</div>

            </div>
          </div>
          </div>
          @endforeach

    </div>
  </div>

</section>



<!-- -----------------offcanvas-------------- -->
<div id="offcanvas-slide" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <h3 id="upload_id"></h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

    </div>
</div>

@endsection

@section('js')

@endsection