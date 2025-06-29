<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Doggy Den</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
     @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        


        <!-- Sign In Start -->
        <div class="container-fluid">
         
        

            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="text-center">
                      <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Doggy Den</h3>
                    <img class="rounded-circle" src="img/user2.png" alt="" style="width: 200px; height: 200px;">
                    </div>
                     @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="" class="">
                            
                                
                            </a>
                            <h3>Reset Password</h3>
                        </div>
                        <div class="form-floating mb-3">
                        <p>Hello</p>{{$email}}
                        <form method="post" action = {{ url('adminresetpsw') }}>
                         @csrf
                            <input type="text" class="form-control" 
                            id="floatingInput" placeholder="OTP" name='otp' required>
                            <label for="floatingInput">OTP</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword"
                            name='password'
                            placeholder="Password" required>
                            <label for="floatingInput">Enter Password</label>
                        </div>
                         <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword"
                            name='cpassword'
                            placeholder="confirm password" required>
                            <label for="floatingPassword">Confirm Password</label>
                        </div> 

                     <input type='hidden' name='emaildata' value={{$email}}/>



                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                               
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Reset Password</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>