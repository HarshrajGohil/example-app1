
<html lang="en">
  <head>
    <title>Pet Sitting - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="user/css/animate.css">
    
    <link rel="stylesheet" href="user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="user/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="user/css/magnific-popup.css">


    {{--<link rel="stylesheet" href="user/css/bootstrap-datepicker.css"> --}}
    <link rel="stylesheet" href="{{ URL::asset('user/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('user/css/user/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="user/css/flaticon.css">
   
    <link rel="stylesheet" href="{{ URL::asset ("user/css/style.css")}}">
   

  </head>
  <body>

    <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"></a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span>doggyden001@gmail.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href=""><span class="flaticon-pawprint-1 mr-2"></span>Doggy Den</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ url('showproduct') }}" class="nav-link">Products</a></li>
	        	<li class="nav-item"><a href="{{ url('aboutus') }}" class="nav-link">About</a></li>
	        	
	          <li class="nav-item"><a href="{{ url('contactus') }}" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ url('showdoctor') }}" class="nav-link">Doctor</a></li>
              @if(!(Session::get('userName')))  
            <li class="nav-item"><a href="{{ url('register') }}" class="nav-link">Register</a></li>
             @endif
               @if(!(Session::get('userName')))  
              <li class="nav-item"><a href="{{ url('login') }}" class="nav-link">Login</a></li>
               @endif

            
           

    @if(!empty(Session::get('userName')))  

            <li class="nav-item"><a href="cart" class="nav-link">Cart</a></li> 
            <li class="nav-item"><a href="editprofile" class="nav-link">Profile</a></li> 
               <li class="nav-item"><a href="" class="nav-link">Order</a></li> 

     <li class="nav-item"><a href="cart" class="nav-link">Hello 
                {{ Session::get('userName') }}

            </a></li>   

        
        <li class="nav-item"><a href="{{ url('logout') }}" class="nav-link">Logout</a></li>  

      @endif


 
     
                        

          

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    



    

  


    



    

   
	@yield('content')

    <footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">About Store </h2>
						<span class="icon fa fa-envelope"></span><span class="text"> doggyden001@gmail.com</span>
						<ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
					</div>
					{{--<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Latest News</h2>
						<div class="block-21 mb-4 d-flex">
              <a class="img mr-4 rounded" style="background-image: url(img/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> April 7, 2020</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="img mr-4 rounded" style="background-image: url(img/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> April 7, 2020</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
					</div> --}}
			
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Information</h2>
						<div class="block-23 mb-3">
              <ul>
                <li><a href="{{ url('aboutsus') }}"><span class="icon fa fa-map"></span><span class="text">About Us</span></a></li>
                <li><a href="{{ url('contactus') }}"><span class="icon fa fa-phone"></span><span class="text">Contact Us</span></a></li>
                <li><a href="{{ url('editprofile') }}"><span class="icon fa fa-user"></span><span class="text">Edit Profile</span></a></li>
              </ul>
            </div>
					</div>
          		<div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
						<h2 class="footer-heading">Quick Links</h2>
						<ul class="list-unstyled">
              <li><a href="{{ url('/') }}" class="py-2 d-block">Home</a></li>
              <li><a href="{{ url('register') }}" class="py-2 d-block">Register</a></li>
              <li><a href="{{ url('login') }}" class="py-2 d-block">Login</a></li>
              <li><a href="{{ url('editprofile') }}" class="py-2 d-block">My Account</a></li>
              <li><a href="#" class="py-2 d-block">My Order</a></li>
                <li><a href="{{ url('aboutus') }}" class="py-2 d-block">About us</a></li>
            </ul>
					</div>
				</div>
				<div class="row mt-5">
          <div class="col-md-12 text-center">

            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">Doggy Den</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
			</div>
		</footer>

    
  

  <!-- loader -->


  <script src="user/js/jquery.min.js"></script>
  <script src="user/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="user/js/popper.min.js"></script>
  <script src="user/js/bootstrap.min.js"></script>
  <script src="user/js/jquery.easing.1.3.js"></script>
  <script src="user/js/jquery.waypoints.min.js"></script>
  <script src="user/js/jquery.stellar.min.js"></script>
  <script src="user/js/jquery.animateNumber.min.js"></script>
  <script src="user/js/bootstrap-datepicker.js"></script>
  <script src="user/js/jquery.timepicker.min.js"></script>
  <script src="user/js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="user/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="user/js/google-map.js"></script>
  <script src="user/js/main.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


    
  </body>
</html>