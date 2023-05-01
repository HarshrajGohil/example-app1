@extends('user.usermaster')
@section('content')
<div class='container'>
<form method="post" action = "checklogin">
 @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">OTP</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="otp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
    <div class="mb-3 form-check">
 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <div class="d-flex flex-row-reverse bd-highlight">
 
  </div>
</form>
</div>
@endsection
