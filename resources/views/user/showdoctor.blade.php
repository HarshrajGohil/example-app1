@extends('user.usermaster')
@section('content')
<div class="container-fluid pt-4 px-4">
    
</div>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Show Doctor</h6>
           
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Degree</th>
                        <th scope="col">Specialist</th>
                        <th scope="col">About</th>
                        <th scope="col">Location</th>
                        <th scope="col">Email</th>
                        <th scope="col">Photo</th>

                       
                        <th scope="col">Contact Number</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($doctor as $value)
                 
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>{{ $value['full_name']}}</td>
                        <td>{{ $value['degree']}}</td>
                        <td>{{ $value['specialist']}}</td>
                         <td>{{ $value['about']}}</td>
                          <td>{{ $value['location']}}</td>
                           <td>{{ $value['email']}}</td>
                            <td>{{ $value['photo']}}</td>
                             <td>{{ $value['contact_no']}}</td>
                        <td><a class="" href="">
                                
                               <i class="fas fa-eye"></i>
                              
                               
                        </a>
                        
                
        <a class="" href="{{ route('doctor.show',$value['id']) }}"><i class="fas fa-edit text-primary"></i></a>
   
                
                   
                
      
                
                </form>
                                             

                        </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
             {{ $doctor->links() }}
            </div>
        </div>
    </div>
</div>

@endsection