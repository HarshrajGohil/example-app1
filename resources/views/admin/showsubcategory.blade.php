@extends('admin.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    
</div>
<!-- Sale & Revenue End -->





<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Show SubCategory</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">SubCategory Name</th>
                        <th scope="col">SubCatgeory Description</th>
                        <th scope="col">Category Id</th>
                       
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>Demo</td>
                        <td>Demo Data</td>
                        <td>1.png</td>
                        
                        <td><a class="" href="">
                                
                               <i class="fas fa-eye"></i>
                              
                               
                        </a>
                        
                        <a><i class="fas fa-edit text-primary"></i></a>
                                                <a> <i class="fas fa-trash text-danger"></i></a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection