@extends('layouts.tourismo.ui')


@section('content')


<section class="services team aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <div class="container">
    <div class="row">

<div class="section-title">
  <h2><b>Must Visit Destination </b></h2>
</div>

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@m uk-grid">

        @foreach($destination as $list)
        <li>
          <div class="icon-box icon-box-pink">


              <div class="uk-panel">
                  <img src="{{ asset('image/destination')}}/{{ $list->destination_image == '' ? 'default.png' : $list->destination_image }}" alt="">
                  <div class="uk-position-center uk-panel"> </div>
              </div>

              <div class="member-info">

                <p class="mem-title"><i class="fas fa-map-marked-alt"></i>  {{ $list->destination_info }}</p>

                <span>
                  <i class="fas fa-building"></i> No. of hotels : 150
                </span><br>

                <span>
                  <i class="fas fa-directions"></i> No. of Tour Operators : 251
                </span><br>

                <div class="mem-button">
                <a class="uk-button uk-button-small btn-room-details-m" href="javascript:void(0)" uk-toggle="target: #unavailable">
                  Explore
                </a>


        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                      


                </div>

              </div>

            </div>
        </li>
        @endforeach
        
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

    </div>
  </div>
</section>




<section class="services team aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <div class="container">
    <div class="row">

<div class="section-title">
  <h2><b>Province Destination (Region 1)</b><span style="font-size: 15px;padding-left: 25px;"><a href="{{ route('region',$region_one[0]->region_id ) }}" class="uk-link"> View All</a></span></h2>
</div>

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@m uk-grid">

        @foreach($region_one as $list)
        <li>
          <div class="icon-box icon-box-pink">


              <div class="uk-panel">
                  <img src="{{ asset('image/destination')}}/{{ $list->destination_image == '' ? 'default.png' : $list->destination_image }}" alt="">
                  <div class="uk-position-center uk-panel"> </div>
              </div>

              <div class="member-info">

                <p class="mem-title"><i class="fas fa-map-marked-alt"></i>  {{ $list->destination_info }}</p>

                <span>
                  <i class="fas fa-building"></i> No. of hotels : 150
                </span><br>

                <span>
                  <i class="fas fa-directions"></i> No. of Tour Operators : 251
                </span><br>

                <div class="mem-button">
                <a class="uk-button uk-button-small btn-room-details-m" href="javascript:void(0)" uk-toggle="target: #unavailable">
                  Explore
                </a>


        <a class="uk-button uk-button-small btn-room-details-m"  href="http://127.0.0.1:8000/hotels/rooms/29" uk-toggle="#modal-center">
          <i class="fas fa-share-alt"></i> Share
        </a>
                      


                </div>

              </div>

            </div>
        </li>
        @endforeach
        
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

    </div>
  </div>
</section>


<section class="services team aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <div class="container">
    <div class="row">

<div class="section-title">
  <h2><b>Province Destination (Region 10)</b>  <span style="font-size: 15px;padding-left: 25px;"><a href="{{ route('region',$region_ten[0]->region_id ) }}" class="uk-link"> View All</a></span></h2>
</div>

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@m uk-grid">

        @foreach($region_ten as $list)
        <li>
          <div class="icon-box icon-box-pink">


              <div class="uk-panel">
                  <img src="{{ asset('image/destination')}}/{{ $list->destination_image == '' ? 'default.png' : $list->destination_image }}" alt="">
                  <div class="uk-position-center uk-panel"> </div>
              </div>

              <div class="member-info">

                <p class="mem-title"><i class="fas fa-map-marked-alt"></i>  {{ $list->destination_info }}</p>

                <span>
                  <i class="fas fa-building"></i> No. of hotels : 150
                </span><br>

                <span>
                  <i class="fas fa-directions"></i> No. of Tour Operators : 251
                </span><br>

                <div class="mem-button">
                <a class="uk-button uk-button-small btn-room-details-m" href="javascript:void(0)" uk-toggle="target: #unavailable">
                  Explore
                </a>


        <a class="uk-button uk-button-small btn-room-details-m"  href="http://127.0.0.1:8000/hotels/rooms/29" uk-toggle="#modal-center">
          <i class="fas fa-share-alt"></i> Share
        </a>
                      


                </div>

              </div>

            </div>
        </li>
        @endforeach
        
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

    </div>
  </div>
</section>





<!-- ------------------------modal share ------------------------>

<div id="modal-center" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    </div>
</div>

@endsection

@section('js')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=2142027805833973&autoLogAppEvents=1" nonce="uUSyMk8o"></script>
@endsection
