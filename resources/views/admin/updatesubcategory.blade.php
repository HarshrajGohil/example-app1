
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
                            
                            <form method="post" action="{{ route('subcategory.update',$subcat->id )}}">
                             @csrf
                                    @method('PUT')
                             
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">SubCategory Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="name" name="sub_cate_name" value = "{{$subcat->sub_cate_name}}">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">SubCatgegory Description</label>
                                    <textarea cols='100' rows='5' name='sub_cate_desc'>
                                    {{$subcat->sub_cate_desc}}
                                    </textarea>
                                </div>

                                   <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Catgeory Name</label>
                                <select class="form-select" aria-label="Default select example" 
                                name="cat_id">

                                @foreach($allcat as  $c)
                                <option @selected($c->id == $subcat->cat_id) value={{$c['id']}}>{{$c['cate_name']}}</option>
                                @endforeach
                                </select>
                                </div>
                               
                               <center> <button type="submit" class="btn btn-primary" name="submit">Update SubCategory</button></center>
                            </form>
                        </div>
                    </div>
</body>
</html>
@endsection