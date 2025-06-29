@extends('user.usermaster')
@section('content')
		 @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<section class="text-center">

			
  <h3 class="mb-5">Contact us</h3>

  <div class="row">
    <div class="col-lg-5">
     <div style="width: 100%"><iframe width="93%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Ahmedabad+(doggy_den)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
    </div>

    <div class="col-lg-7">
      <form class="my-form" method="post" action = {{ url('send-email') }} >

      @csrf
        <div class="row">
          <div class="col-md-9">
            <div class="row mb-4">
              <div class="col-md-6 mb-4 mb-md-0">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" placeholder="Name"  name='name'/>
                  <label for="form-name"></label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-outline">
                  <input type="email" id="form3Example2" class="form-control" placeholder="Email Address" name='email'/>
                  <label class="form-label" for="form3Example2"></label>
                </div>
              </div>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control" placeholder="Telephone" name='mobile' />
              <label class="form-label" for="form3Example3"></label>
            </div>
            <div class="form-outline mb-4">
              <textarea class="form-control" id="form4Example3" rows="4" placeholder="Message" name='message'></textarea>
              <label class="form-label" for="form4Example3"></label>
            </div>
            <div class="text-center text-md-start">
              <button type="submit" class="btn btn-primary mb-5 mb-md-0" name='submit'>
                Send
              </button>
            </div>
          </div>
          <div class="col-md-3">
            <ul class="list-unstyled">
              <li>
                <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                <p><small>Ahmedabad</small></p>
              </li>
             
              <li>
                <i class="fas fa-envelope fa-2x text-primary"></i>
                <p><small>doggyden001@gmail.com</small></p>
              </li>
            </ul>
          </div>
        </div>
      </form>

    </div>
  </div>
  


</section>

@endsection 