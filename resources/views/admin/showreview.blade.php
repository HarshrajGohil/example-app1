@extends('admin.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    
</div>
<!-- Sale & Revenue End -->





<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Show Review</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
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
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>{{ $value['review_desc']}}</td>
                        <td>{{ $value['review_stars']}}</td>
                        <td>{{ $value['first_name']}} {{ $value['last_name']}}</td>
                        <td>{{ $value['pro_name']}}</td>
                        
                        <td><a class="" href="">
                                
                               <i class="fas fa-eye"></i>
                              
                               
                        </a>
                        
                        <a><i class="fas fa-edit text-primary"></i></a>
                        <form action="{{ route('review.destroy',$value['rid']) }}" method="POST">
   
                
                    @csrf
                    @method('DELETE')
                    <a class="" href="">
                    <i class="fas fa-trash"></i></a>
                </form>
                                               

                        </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
             {{ $rev->links() }}
            </div>
        </div>
    </div>
</div>

@endsection