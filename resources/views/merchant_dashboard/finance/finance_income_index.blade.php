@extends('layouts.merchant-app')

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
        <h3 class="card-title">
          <i class="fas fa-box-open"></i> Income »  » 
        </h3>
      </div>

    <div class="card-body">
        <table class="table table-bordered">
        <thead>                  
            <tr>
              <th>This week</th>
              <th>This month</th>
              <th>total</th>
              <th colspan="2"  class="text-center">Action</th>
            </tr>
            @if($incomeData)
            @foreach($incomeData as $post)
            <tr>
              <td>#{{ $post->ps_ref_no }}</td>
              <td></td>
              <td></td>
              <td class="text-center">
                <div class="btn-group btn-group-sm">
                  <a href="" class="btn btn-info"><i class="fas fa-eye"></i> Edit</a>
                  <!-- <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a> -->
                </div>
              </td>
              <td class="text-center">
                <div class="btn-group btn-group-sm">
                  <!-- <a href="" class="btn btn-info"><i class="fas fa-eye"></i> Edit</a> -->
                  <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                </div>
              </td>
            </tr>
            @endforeach
            @endif
        </thead>
        
        <tbody>
        </tbody>
        
        </table>
    </div>
        
      <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-left">
        </ul>
      </div>

    </div>
  </div>
</div>

</div>
</section>

@endsection