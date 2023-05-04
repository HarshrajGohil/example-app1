
@extends('user.usermaster')
@section('content')
<div class='container'>
<form class="row g-3" method="post" action = {{ route('user1.store') }}>
 @csrf
<div class="col-md-6">
    <label for="inputFirstName" class="form-label">First Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="first_name">
  </div>
  <div class="col-md-6">
    <label for="inputLastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="last_name">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Address</label>
    <textarea rows="4" cols="50" class="form-control" id="inputPassword4" name="address"></textarea>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Contact No</label>
    <input type="number" class="form-control" id="" placeholder="" name="contact_no">
  </div>
 
 
  
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</div>
@endsection