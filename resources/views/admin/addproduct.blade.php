
@extends('admin.master')
@section('content')

<div class="container-fluid pt-4 px-4" class="center">
  @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                          
                            <form method="post" action = {{ route('product.store') }} enctype='multipart/form-data'>
                            @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="name" name="pro_name">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Description</label>
                                    <textarea type="text" class="form-control" id="exampleInputPassword1" name="pro_desc"></textarea>
                                </div>

                                    <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="pro_image">
                                </div>

                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Price</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="pro_price">
                                </div>

                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Quantity</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" name="pro_quan" min=1>
                                </div>

                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Measurement</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="pro_meas">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">SubCategory Name</label>
                                    <select class="form-select" aria-label="Default select example" name="subcat_name">
                                    @foreach($subcat as  $c) 
                                    <option value={{$c['id']}}>{{$c['sub_cate_name']}}</option>
                                   
                                        
                                    @endforeach
                                    


                                </select>
                                </div>


                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Multiple Image</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" 
                                    name="images[]" multiple>
                                </div>


                               
                               <center> <button type="submit" class="btn btn-primary" name="submit">Add Product</button></center>
                            </form>
                        </div>
                    </div>
</body>
</html>
@endsection