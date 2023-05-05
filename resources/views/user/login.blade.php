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
<form method="post" action = "checklogin">
 @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
    <div class="mb-3 form-check">
 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <div class="d-flex flex-row-reverse bd-highlight">
  <a href="userforgotpassword">Forgot Password ?</a>
  </div>
</form>
</div>
@endsection
