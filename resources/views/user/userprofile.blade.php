@extends('user.usermaster')
@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="container bootstrap snippet">

    	<div class="col-sm-9">
            

              
          
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="{{ route('user1.update',$userdata[0]["id"]) }}" method="post" id="registrationForm">
                      <div class="form-group">
                          @csrf
                                    @method('PUT')

                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" 
                              id="first_name" value = {{$userdata[0]["first_name"]}} placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" value = {{$userdata[0]["last_name"]}} title="enter your last name if any.">
                          </div>
                      </div>
          
                      {{-- <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="phone" id="phone" value = {{$userdata[0]["email"]}} title="enter your phone number if any.">
                          </div>
                      </div> --}}
          
                     
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for=""><h4>Address</h4></label>
                              <textarea cols='100' rows='5' name='address'>
                              {{$userdata[0]["address"]}}
                              </textarea>

                            
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Contact Number</h4></label>
                              <input type="text" class="form-control" id="location" 
                              value = {{$userdata[0]["contact_no"]}} title="enter a location" name='contact_no'>
                          </div>
                      </div>
                      <div class="form-group">
                          
                         
                      
                    
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit">
                                <i class="glyphicon glyphicon-ok-sign"></i> Update Profile</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
            
             
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
                                                      
@endsection