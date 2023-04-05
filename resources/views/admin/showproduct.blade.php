@extends('admin.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    
</div>
<!-- Sale & Revenue End -->





<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Show Product</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Description</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Quantity</th>
                        <th scope="col">Product Measurement</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($prod as $value)
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>{{ $value['pro_name']}}</td>
                        <td>{{ $value['pro_desc']}}</td>
                        <td>{{ $value['pro_image']}}</td>
                        <td>{{ $value['pro_price']}}</td>
                        <td>{{ $value['pro_quantity']}}</td>
                        <td>{{ $value['pro_measurement']}}</td>
                        <td>{{ $value['sub_cate_name']}}</td>
                        
                        <td><a class="" href="">
                                
                               <i class="fas fa-eye"></i>
                              
                               
                        </a>
                        
                        <a><i class="fas fa-edit text-primary"></i></a>
                                                <a> <i class="fas fa-trash text-danger"></i></a>

                        </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
    {{ $prod->links() }}
    </div>
        </div>
    </div>
</div>

@endsection