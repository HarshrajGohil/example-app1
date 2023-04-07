
@extends('admin.master')
@section('content')

<div class="container-fluid pt-4 px-4" class="center">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            
                            <form method="post" action = {{ route('subcategory.store') }}>
                             @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">SubCategory Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="name" name="sub_cate_name">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">SubCatgegory Description</label>
                                    <textarea type="text" class="form-control" id="exampleInputPassword1" name="sub_cate_desc"></textarea>
                                </div>

                                    <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Catgeory Name</label>
                                <select class="form-select" aria-label="Default select example" name="cate_name">
                                @foreach($cat as  $c)
                                <option value={{$c['id']}}>{{$c['cate_name']}}</option>
                                @endforeach
                                </select>
                                </div>
                               
                               <center> <button type="submit" class="btn btn-primary" name="submit">Add SubCategory</button></center>
                            </form>
                        </div>
                    </div>
</body>
</html>
@endsection