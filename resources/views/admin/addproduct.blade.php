
@extends('admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Libraries Stylesheet -->
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

     <!-- Template Stylesheet -->
     <link href="css/style.css" rel="stylesheet">

      <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid pt-4 px-4" class="center">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="name" name="">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Description</label>
                                    <textarea type="text" class="form-control" id="exampleInputPassword1" name=""></textarea>
                                </div>

                                    <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="">
                                </div>

                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Price</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="">
                                </div>

                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Quantity</label>
                                    <input type="number" min=1 max=50 class="form-control" id="exampleInputPassword1" name="">
                                </div>

                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Measurement</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">SubCategory Id</label>
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                </div>
                               
                               <center> <button type="submit" class="btn btn-primary" name="submit">Add Product</button></center>
                            </form>
                        </div>
                    </div>
</body>
</html>
@endsection