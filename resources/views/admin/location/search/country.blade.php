@extends('layouts.app')
@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
        
            <div class="small-box bg-info">
              <div class="inner">
                <h4>150</h4>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-success">
              <div class="inner">
                <h4>53<sup style="font-size: 20px">%</sup></h4>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4>44</h4>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4>65</h4>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
        




<div class="row">
  <div class="col-12">
    <div class="card">

      <div class="card-header">
        <h3 class="card-title"><i class="nav-icon fa fa-product-hunt" aria-hidden="true"></i> {{ $locations[0]->name }} </h3>
      </div>

    <div class="card-body">

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">

    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Data</a>

    <a class="nav-item nav-link" id="nav-building-tab" data-toggle="tab" href="#nav-building-facilities" role="tab" aria-controls="nav-building-facilities" aria-selected="false">Form</a>

  </div>
</nav>

<br>

<form name="search_country" method="post" action="">

<div class="input-group mb-3">
                  <input type="text" class="form-control" name="search" placeholder="Search Country">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info">Search!</button>
                  </span>
                </div>

</form>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


    
    <table class="table table-bordered">
        <thead>                  
            <tr>
              <th style="width: 10px">#</th>
              <th>Country/State</th>
              <th>Region</th>
              <th>District</th>
              <th>City</th>
              <th>Municipality</th>
              <th>Barangay</th>
              <th style="width: 180px" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($getcountry as $country)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td><b>{{ $country->country }}</b></td>
              <td>null</td>
              <td>null</td>
              <td>null</td>
              <td>null</td>
              <td>null</td>

              
              <td class="text-center">
                <div class="uk-button-group">
                  
                <a href="http://127.0.0.1:8000/admin/tourismo/ph/page/4/inclusion/14" class="btn btn-sm btn-primary py-0">Edit »</a>
                <a href="" onclick="if(confirm('Do you want to delete this product?'))event.preventDefault(); document.getElementById('delete-14').submit();" class="btn btn-sm btn-danger py-0">» Delete</a>
                <form id="delete-{{$country->id}}" method="get" action="{{ route('profile-contact-delete',$country->id) }}" style="display: none;">

              @csrf
              </form>
                  </div>
              </td>
            </tr>
            @empty
            <p> No data  found!</p> 
            @endforelse
        </tbody>

        <tbody>
        </tbody>
      </table>
  </div>
<div class="tab-pane fade" id="nav-building-facilities" role="tabpanel" aria-labelledby="nav-building-tab">    

  </div>

</div>
    </div>
        
    </div>
  </div>
</div>
</div>
</section>

@endsection