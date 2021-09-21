@extends('layouts.app')

@section('content')

<section class="content">
      <div class="container-fluid">

<div class="row">
  <div class="col-md-12">

    <div class="timeline">
      
      <div class="time-label">
        @if($profile_details->verify_id == 3)
          <span class="bg-green"> Account : Fully verified </span>
        @elseif($profile_details->id1 == 2)
          <span class="bg-red"> Information : For Compliance&nbsp;</span>
        @else

        @endif
      </div>


<div>
<i class="fas fa-check bg-green"></i>
<div class="timeline-item">
  
  <h3 class="timeline-header">Merchant Profile</h3>

  <div class="timeline-body">

  <div class="post">
  <div class="user-block">
  <img class="img-circle img-bordered-sm" src="https://www.thegoldenscope.com/wp-content/uploads/2015/11/boracay-1b-411x308.jpg" alt="user image">
  <span class="username">
  <a href="#">{{ $profile_details->company }}</a>
  </span>
  <span class="description">{{ $profile_details->address }}</span>
  </div>

  <p>
  <b>About : </b>{{ $profile_details->about }}
  </p>
  <p  style="margin-top:-10px;">
  <b>Email : </b>{{ $profile_details->email }}
  </p>
  <p  style="margin-top:-10px;">
  <b>Tel/Phone No : </b>{{ $profile_details->telno }}
  </p>
  <p  style="margin-top:-10px;">
  <b>Website  : </b>{{ $profile_details->website }}
  </p>
  </div>

  </div>
</div>
</div>












<div>
  <i class="fas fa-check bg-green"></i>
  <div class="timeline-item">
    <span class="time"><i class="fas fa-clock"></i> xxx</span>
    <h3 class="timeline-header">Action</h3>
    <div class="timeline-body">
    
    <form action="{{ route('verification_update',$profile_details->id) }}" method="post" role="form" id="valid-form" class="form-border">
    @csrf

      <div class="form-group">
          <label>
          <span class="text-danger">*</span> Select action
            <small class="text-danger has-error">
              {{ $errors->has('status') ?  $errors->first('status') : '' }}
            </small>
          </label>
        <select class="form-control" name="status">
          <option value="">-Select Update-</option>
          <option value="3">Account Appproved</option>
          <option value="2">For Compliance</option>
        </select>
      </div>

      <div class="form-group">
        <label>
          <span class="text-danger">*</span> Message
          <small class="text-danger has-error">
            {{ $errors->has('message') ?  $errors->first('message') : '' }}
          </small>
        </label>
        <textarea class="form-control" rows="3" name="message" placeholder="Your Message"></textarea>
      </div>
      
      <div class="timeline-footer">
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i> Update</button>
      </div>

    </form>

    </div>
  </div>
</div>






</div>
</div>

</div>
</section>

@endsection
