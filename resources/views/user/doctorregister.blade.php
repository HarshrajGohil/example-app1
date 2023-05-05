
@extends('user.usermaster')
@section('content')
<div class='container'>
 @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form class="row g-3" method="post" action ={{ route('doctor.store') }}>
 @csrf
<div class="col-md-6">
    <label for="inputFirstName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="full_name">
  </div>
  <div class="col-md-6">
    <label for="inputLastname" class="form-label">Doctor Degree</label>
    <input type="text" class="form-control" id="inputEmail4" name="degree">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Doctor Specialist</label>
    <input type="text" class="form-control" id="inputEmail4" name="specialist">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Doctor About</label>
    <input type="text" class="form-control" id="inputPassword4" name="about">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Doctor Location</label>
     <input type="text" class="form-control" id="" placeholder="" name="location">
  
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Doctor Email</label>
    <input type="email" class="form-control" id="" placeholder="" name="email">
  </div>

    <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Doctor Photo</label>
    <input type="file" class="form-control" id="inputEmail4" name="photo">
  </div>

    <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Doctor Contact Number</label>
    <input type="text" class="form-control" id="inputEmail4" name="contact_no">
  </div>
 
 
  
  
  <div class="col-12">
    <div class="form-check">
      
    
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>
</div>
@endsection