
@extends('admin.master')
@section('content')

<div class="container-fluid pt-4 px-4" class="center">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                          
                            <form method="post" action="{{ route('product.update',$prod->id )}}">
                            @csrf
                                  @method('PUT')
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="name" name="pro_name" value = "{{$prod->pro_name}}">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Description</label>
                                   <textarea cols='100' rows='5' name='pro_desc'>
                              {{$prod->pro_desc}}
                              </textarea>
                                </div>

                                    <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Image</label>
                                      <img src="../{{$prod->pro_image}}" height='100' width='100'/>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="pro_image">
                                </div>

                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Price</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="pro_price" value = "{{$prod->pro_price}}">
                                </div>

                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Quantity</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" name="pro_quan" value = "{{$prod->pro_quantity}}">
                                </div>

                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Measurement</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="pro_meas" value = "{{$prod->pro_measurement}}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">SubCategory Name</label>
                                    <select class="form-select" aria-label="Default select example" name="cat_id">
                                    @foreach($allprod as  $c) 
                                    <option  @selected($c->id == $prod->cat_id) value={{$c['id']}}>{{$c['sub_cate_name']}}</option>
                                   
                                        
                                    @endforeach
                                    


                                </select>
                                </div>
                               
                               <center> <button type="submit" class="btn btn-primary" name="submit">Update Product</button></center>
                            </form>
                        </div>
                    </div>
</body>
</html>
@endsection