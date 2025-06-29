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

 @if ($message = Session::get('success'))
        <div class="alert alert-">
            <p>{{ $message }}</p>
        </div>
    @endif 

<p>Hello</p>{{$email}}
<form method="post" action = {{ url('resetpsw') }}> 
 @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">OTP</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="otp" required>
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>

  <input type='hidden' value={{$email}}  name='emaildata'/>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword" required>
  </div>
    <div class="mb-3 form-check">
 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <div class="d-flex flex-row-reverse bd-highlight">
 
  </div>
</form>
</div>
@endsection
