@extends('user.usermaster')
@section('content')
<section style="background-color: #eee;">
 @foreach($doctor as $value)
  <div class="container py-5">
  

    <div class="row justify-content-center mb-3">
   
      <div class="col-md-12 col-xl-10">
       <h4>Doctor Details</h4>
        <div class="card shadow-0 border rounded-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
              
              
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img src={{ $value['photo']}} height='210' width='210' class="w-130" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h5>Name :  {{ $value['full_name']}} </h5>
                <div class="d-flex flex-row">
                  <div class="text-danger mb-1 me-2">
                   
                  </div>
                
                </div>
                <div class="mt-1 mb-0 text-muted small">
                   <h5> Degree : {{ $value['degree']}} </h5>
                  
                </div>
                <div class="mb-2 text-muted small">
                  <h5>Specialist : {{ $value['specialist']}} </h5>
               
                </div>
                <div class="mb-2 text-muted small">
                 <h5> About : {{ $value['about']}}</h5>
                 </div>
                 <div class="mb-2 text-muted small">
                 <h5> Location : {{ $value['location']}}</h5>
                 </div>
                 <div class="mb-2 text-muted small">
                 <h5> Email : {{ $value['email']}}</h5>
                 </div>
                 <div class="mb-2 text-muted small">
                 <h5>Contact Number : {{ $value['contact_no']}}</h5>
                 </div>
                
              </div>
              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center mb-1">
                  <h4 class="mb-1 me-1"></h4>
                  <span class="text-danger"><s></s></span>
                </div>
                <h6 class="text-success"></h6>
                <div class="d-flex flex-column mt-4">

                 <a href="mailto:{{$value['email']}}"> <button class="btn btn-primary btn-sm" type="button">Email</button></a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
   
  </div>
   @endforeach
</section>

@endsection