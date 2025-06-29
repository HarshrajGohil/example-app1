@extends('admin.master')
@section('content')
 @if ($message = Session::get('delete'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="container-fluid pt-4 px-4">
    
</div>
<!-- Sale & Revenue End -->





<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Show User</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                    {{--   <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email Id</th>
                        <th scope="col">Password</th>
                        <th scope="col">Address</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Is Admin</th>

                       
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($user as $value)
                 
                    <tr>
                        
                        <td>{{ $value['first_name']}}</td>
                        <td>{{ $value['last_name']}}</td>
                        <td>{{ $value['email']}}</td>
                         <td>{{ $value['password']}}</td>
                          <td>{{ $value['address']}}</td>
                           <td>{{ $value['contact_no']}}</td>
                            <td>{{ $value['is_admin']}}</td>
                        <td><a class="" href="">
                                
                             {{--  <i class="fas fa-eye"></i> --}}
                              
                               
                        </a>
                        
                        <a><i class=""></i></a>
                        <form action="{{ route('user1.destroy',$value['id']) }}" method="POST">
   
                
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="fas fa-trash text-primary"></button>
                </form>
                                             

                        </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
            <br>
            <div class="d-flex justify-content-center">
             {{ $user->links() }}
            </div>
        </div>
    </div>
</div>

@endsection