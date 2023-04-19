@extends('admin.master')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif 



 @if ($message = Session::get('update'))
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
            <h6 class="mb-0">Show Product</h6>
            
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                      {{--   <th scope="col"><input class="form-check-input" type="checkbox"></th>  --}}
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Description</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Quantity</th>
                        <th scope="col">Product Measurement</th>
                        <th scope="col">Subcategory Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($prod as $value)
                    <tr>
                       
                        <td>{{ $value['pro_name']}}</td>
                        <td>{{ $value['pro_desc']}}</td>
                        <td>{{ $value['pro_image']}}</td>
                        <td>{{ $value['pro_price']}}</td>
                        <td>{{ $value['pro_quantity']}}</td>
                        <td>{{ $value['pro_measurement']}}</td>
                        <td>{{ $value['sub_cate_name']}}</td>
                        
                        <td><a class="" href="">
                                
                            {{--   <i class="fas fa-eye"></i> --}}
                              
                               
                        </a>
                        
                        <a class="" href="{{ route('product.edit',$value['sid']) }}">
                        <i class="fas fa-edit text-primary"></i></a>
                        <form action="{{ route('product.destroy',$value['sid']) }}" method="POST">
   
                
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="fas fa-trash text-primary" onclick='return confirm("r u sure u want to delete this data ?")'></button>
                </form>
                                               

                        </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
             <br><div class="d-flex justify-content-center">
    {{ $prod->links() }}
    </div>
        </div>
    </div>
</div>

@endsection