@extends('user.usermaster')
@section('content')
<style>
        .text-bold {
            font-weight: 800;
        }

        text-color {
            color: #0093c4;
        }

        /* Main image - left */
        .main-img img {
            width: 100%;
        }

        /* Preview images */
        .previews img {
            width: 100%;
            height: 140px;
        }

        .main-description .category {
            text-transform: uppercase;
            color: #0093c4;
        }

        .main-description .product-title {
            font-size: 2.5rem;
        }

        .old-price-discount {
            font-weight: 600;
        }

        .new-price {
            font-size: 2rem;
        }

        .details-title {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 1.2rem;
            color: #757575;
        }

        .buttons .block {
            margin-right: 5px;
        }

        .quantity input {
            border-radius: 0;
            height: 40px;

        }


        .custom-btn {
            text-transform: capitalize;
            background-color: #0093c4;
            color: white;
            width: 150px;
            height: 40px;
            border-radius: 0;
        }

        .custom-btn:hover {
            background-color: #0093c4 !important;
            font-size: 18px;
            color: white !important;
        }

        .similar-product img {
            height: 400px;
        }

        .similar-product {
            text-align: left;
        }

        .similar-product .title {
            margin: 17px 0px 4px 0px;
        }

        .similar-product .price {
            font-weight: bold;
        }

        .questions .icon i {
            font-size: 2rem;
        }

        .questions-icon {
            font-size: 2rem;
            color: #0093c4;
        }


        /* Small devices (landscape phones, less than 768px) */
        @media (max-width: 767.98px) {

            /* Make preview images responsive  */
            .previews img {
                width: 100%;
                height: auto;
            }

        }

        

        </style>
 <div class="container my-5">
        <div class="row">
            <div class="col-md-5">
                <div class="main-img">
                    <img class="img-fluid" src="{{"../".$data[0]['pro_image']}}" alt="ProductS">
                    <div class="row my-3 previews">
                  
                  @foreach($allImg as $valueImg)
                    
                 
                        <div class="col-md-3">
                            <img class="w-100" 
                            src={{"../".$valueImg->path}} alt="Sale">
                        </div>
                  
                       

                         @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="main-description px-2">
                    <div class="category text-bold">
                        SubCategory: {{$data[0]['sub_cate_name']}}
                    </div>
                    <div class="product-title text-bold my-3">
                        {{$data[0]['pro_name']}}
                    </div>


                    <div class="price-area my-4">
                        
                        <p class="new-price text-bold mb-1"> &#x20B9;{{$data[0]['pro_price']}}</p>
                       
                    </div>


                    <div class="buttons d-flex my-5">
                        <div class="block">
                          
                        </div>
                        <div class="block">
                            <button class="shadow btn custom-btn">Add to cart</button>
                        </div>

                        <div class="block quantity">
                            <input type="number" class="form-control" id="cart_quantity" value="1" min="1" max="20" placeholder="Enter email" name="cart_quantity">
                        </div>
                    </div>




                </div>

                <div class="product-details my-4">
                    <p class="details-title text-color mb-1">Product Details</p>
                    <p class="description"> {{$data[0]['pro_desc']}}</p>
                </div>
              
                        
                    <div class="col-md-1 icon">
                        <i class="fa-brands fa-rocketchat questions-icon"></i>
                    </div>
                    
                </div>

               
               
                
             
            </div>
        </div>
    </div>
<div class="mx-0 mx-sm-auto">
  <div class="card">
    <div class="card-header bg-primary">
      <h5 class="card-title text-white mt-2" id="exampleModalLabel">Feedback request</h5>
    </div>
    <div class="modal-body">
      <div class="text-center">
        <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
        <p>
          <strong>Your opinion matters</strong>
        </p>
        <p>
          Have some ideas how to improve our product?
          <strong>Give us your feedback.</strong>
        </p>
      </div>

      <hr />

      <form class="px-4" action="{{ route('review.store') }}" method="post">

      @csrf
        <p class="text-center"><strong>Your Rating:</strong></p>

        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="rev_stars" id="radio3Example1" value='5' />
          <label class="form-check-label" for="radio3Example1" >
            Very good
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="rev_stars" id="radio3Example2" value='4' />
          <label class="form-check-label" for="radio3Example2">
            Good
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="rev_stars" id="radio3Example3" value='3' />
          <label class="form-check-label" for="radio3Example3">
            Medicore
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="rev_stars" id="radio3Example4" value='2'/>
          <label class="form-check-label" for="radio3Example4">
            Bad
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="rev_stars" id="radio3Example5" value='1'/>
          <label class="form-check-label" for="radio3Example5">
            Very bad
          </label>
        </div>

        <input type='hidden' value={{Session::get('uid')}} name='user_name'/> 


                <input type='hidden' value={{$data[0]['id']}} name='pro_name'/> 



        <p class="text-center"><strong>Review Text</strong></p>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form4Example3" rows="4" name='review_desc'></textarea>
          <label class="form-label" for="form4Example3">Your Review</label>
        </div> 

         <div class="text-center">
      <input type="submit" class="btn btn-primary" >
    </div>

      </form>
    </div>
   
  </div>
</div>



<section style="color: #000; background-color: #f3f2f2;">
  <div class="container py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h3 class="fw-bold mb-4">Feedback</h3>
       
      </div>
    </div>

    <div class="row text-center">
    @foreach($allReview as $value)
          <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold"></h5>
            <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2" value={{$data[0]['review_desc']}}>
              <i class="fas fa-quote-left pe-2"></i>.
            </p>
          </div>
        </div>
      </div>
    @endforeach
    

    </div>
  </div>
</section>

   {{-- <div class="container similar-products my-4">
        <hr>
        <p class="display-5">Similar Products</p>

        <div class="row">
            <div class="col-md-3">
                <div class="similar-product">
                    <img class="w-100" src="https://source.unsplash.com/gsKdPcIyeGg" alt="Preview">
                    <p class="title">Lovely black dress</p>
                    <p class="price">$100</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="similar-product">
                    <img class="w-100" src="https://source.unsplash.com/sg_gRhbYXhc" alt="Preview">
                    <p class="title">Lovely Dress with patterns</p>
                    <p class="price">$85</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="similar-product">
                    <img class="w-100" src="https://source.unsplash.com/gJZQcirK8aw" alt="Preview">
                    <p class="title">Lovely fashion dress</p>
                    <p class="price">$200</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="similar-product">
                    <img class="w-100" src="https://source.unsplash.com/qbB_Z2pXLEU" alt="Preview">
                    <p class="title">Lovely red dress</p>
                    <p class="price">$120</p>
                </div>
            </div>
        </div>
    </div>




    </div>

--}}
 




  

@endsection 





