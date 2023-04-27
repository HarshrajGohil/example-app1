
@extends('user.usermaster')
@section('content')






      <section class="hero-wrap hero-wrap-2" style="background-image: url('img/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Services</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-5 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(img/about-1.jpg);">
    				</div>
    			</div>
    			<div class="col-md-7 pl-md-5 py-md-5">
    				<div class="heading-section pt-md-5">
	            <h2 class="mb-4">Why Choose Us?</h2>
    				</div>
    				<div class="row">
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
	    					<div class="text pl-3">
	    						<h4>Care Advices</h4>
	    						<p>Far far away, behind the word mountains, far from the countries.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-customer-service"></span></div>
	    					<div class="text pl-3">
	    						<h4>Customer Supports</h4>
	    						<p>Far far away, behind the word mountains, far from the countries.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
	    					<div class="text pl-3">
	    						<h4>Emergency Services</h4>
	    						<p>Far far away, behind the word mountains, far from the countries.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
	    					<div class="text pl-3">
	    						<h4>Veterinary Help</h4>
	    						<p>Far far away, behind the word mountains, far from the countries.</p>
	    					</div>
	    				</div>
	    			</div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	
       <div class='container'> 

              <div class='row'> 
               @foreach($prod as $value)

               


              <div class='col-sm-3'>
              <img src={{($value['pro_image'])}} class='img-fluid'>
              <p>{{$value['pro_name']}}</p>

			     
              <p>&#x20B9;{{$value['pro_price']}}</p>
    
               <a  class="fa fa-shopping-cart btn btn-primary text-white"  onClick="addProduct('<?php echo $value["pid"];?>');">
				
			     <a href='singleproduct/{{$value['pid'] }}' class="fa fa-eye btn btn-primary"></a>
			   
			   </a>

			   <input type='hidden' id='productId' value='<?php echo $value["pid"]?>'> </p>
			   
			 
              
              </div>
              
              @endforeach
             





       </div>
	   <br><div class="d-flex justify-content-center">

               {{ $prod->links() }}
              </div> 
    	</div>
    </section> 
@endsection 

<script>
function addProduct(ids)
{
alert(ids) 

 $.ajax({
                url: "{{route('cart.store')}}",
                type:"POST" ,
                data: {
					"_token": "{{ csrf_token() }}",

                    pid:ids,
					
                    
                },
				         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                success:function(response)
                {
                    if(response){
                       alert('hello data complete')
                    }
                }
            });


	

}
</script>



    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
