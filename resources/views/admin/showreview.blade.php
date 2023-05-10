@extends('admin.master')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif 


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
            <h6 class="mb-0">Show Review</h6>
            
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                     {{--    <th scope="col"><input class="form-check-input" type="checkbox"></th>  --}}
                        <th scope="col">Review Description</th>
                        <th scope="col">Review Stars</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Product Name</th>
                       
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($rev as $value)
                 
                    <tr>
                      
                        <td>{{ $value['review_desc']}}</td>
                        <td>

                        @for($i=1;$i<=$value['review_stars'];$i++)
                       <i class="fas fa-star" style='color:yellow'></i>
                        @endfor
                        
                        </td>
                        <td>{{ $value['first_name']}} {{ $value['last_name']}}</td>
                        <td>{{ $value['pro_name']}}</td>
                        
                        <td><a class="" href="">
                                
                         {{--       <i class="fas fa-eye"></i> --}}
                              
                               
                        </a>
                        
                
                        <form action="{{ route('review.destroy',$value['rid']) }}" method="POST">
   
                
                    @csrf
                    @method('DELETE')
                    <a class="" href="">
                    <button type='submit' class="fas fa-trash text-primary" onclick='return confirm("Are you sure you want to delete this data ?")'></button></a>
                </form>
                                               

                        </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
            <br><div class="d-flex justify-content-center">
             {{ $rev->links() }}
            </div>
        </div>
    </div>
</div>

@endsection