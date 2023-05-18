@extends('user.usermaster')
@section('content')

    <div class="container col-8 my-5 br-2 rounded">
     @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="row g-3">
            <div class="col-4 order-md-last">
                <h4 class="d-flex justify-content-between align-item-center">
                    <span class="text-muted">Your Order</span>
                    <span class="badge bg-secondary rounded-pill"></span>
                </h4>
                <ul class="list-group">

                        @foreach($data as $value)
                            
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6>{{$value['pro_name']}}</h6>
                            <span class="text-muted">{{$value['pro_desc']}}</span>
                        </div>
                        <span class="text-muted">RS:{{$value["pro_price"]}}</span>
                    </li> 


                                            @endforeach

                 
                    <li class="list-group-item d-flex justify-content-center">
                        <div>
                            <h6>Total {{$total}}</h6>
                        </div>
                        <span class="text-muted"></span>
                    </li>
                </ul>
            </div>
            <div class="col-8">
                <h4>Billing Address</h4>
                <form method='post' action={{route('order.store')}}> 
                @csrf
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="firstname">First Name</label>
                            <input type="text" id="firstname" class="form-control" name="first_name">
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="lastname">Last name</label>
                            <input type="text" id="lastname" class="form-control" name="last_name">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="email">Email
                                <span class="text-muted"></span>
                            </label>
                            <input type="email" id="email" class="form-control" name="email">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="address">Address </label>
                            <input type="text" id="address" class="form-control" name="address">
                        </div>
                             <div class="col-12">
                            <label class="form-label" for="address">Contact Number</label>
                            <input type="text" id="address" class="form-control" name="contact_no">
                        </div>
                       
                        
                    </div>
                    <hr>
                   
                    <hr>
                    <h4>Payment</h4>
                     <div class="form-check">
                        <input type="radio" class="form-check-input" name="card" id='cod' value='cash_on_delivery'>
                        <label class="form-check-label">Cash On Delivery</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="card" id='card' value='credit'>
                        <label class="form-check-label">Credit Card</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="card" id='card' value='debit'>
                        <label class="form-check-label">Debit Card</label>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="cardname">Name on Card </label>
                            <input type="text" id="cardname" class="form-control" name="name_on_card">
                            <small class="text-muted">Full name as displayed on card</small>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="creditcard">Credit Card Number </label>
                            <input type="text" id="creditcard" class="form-control" name="credit_card_number">
                        </div>
                        <div class="col-sm-12" align="left">
                            <label class="form-label" for="expiration">Expiration </label>
                            <input type="date" id="expiration" class="form-control" name="expiration">
                        </div>
                        <div class = "container">  
        <div class = "row">  
                        <div class="col-3">
                    
                            <label class="form-label" for="cvv">CVV </label>
                            <input type="text" id="cvv" class="form-control" name="cvv">
                        </div>
                        </div>
                        </div>
                        
                    </div>
                    <hr>
                    <input type="submit" class="btn btn-primary btn-block mb-4">
                </form>
            </div>
        </div>
    </div>




       
@endsection