@extends('user.usermaster')
@section('content')
<div class="wrapper container">
    
        
       
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
            <th scope="col">Price</th>

      <th scope="col">Quantity</th> 
            <th scope="col">Total</th>  
                        <th scope="col">Action</th> 


    </tr>
     
  </thead>
  <tbody>
  @foreach($cart as $value)
    <tr>
      <td>{{ $value['pro_name']}}</td>
      
      <td>
      <img src='{{($value['pro_image'])}}' height='100' width='100'/>
        </td>
        <td>
        {{ $value['pro_price']}}
        </td>

        <td>
        <button class='btn btn-primary' onClick="increse('<?php echo $value["cartId"];?>');" >
        +
        </button>
        
       <input type='text'  value={{$value['quantity']}} style='width:40px'>
    
         <button class='btn btn-primary' onClick="decrease('<?php echo $value["cartId"];?>');">
         -
         </button>
        
        </td>

        
      <td><span id='totaldata'>{{ $value['pro_price'] * $value['quantity']}}</span></td> 


      <td>

               <a  class="fa fa-trash btn btn-danger text-white"  
               onClick="DeleteCart('<?php echo $value["cartId"];?>');">
			   
			   </a> 
      </td>
    </tr>
 
    
  </tbody>
    @csrf
    @endforeach
</table>
    </div> 
    <div class='container-fluid'>
    <div class='row'>
    <div class='col-sm-3'></div> 
        <div class='col-sm-3'></div>
        <div class='col-sm-3'></div>

        <span>Cart Total : {{$total}}</span>

    <div class='col-md-12 text-center'>  <a href={{url('checkout')}}>  <button class='btn btn-primary'>CheckOut</button> </a>
    
</div>

    </div>
    </div>
<br>
@endsection
<script>
function DeleteCart(ids)
{
//alert(ids)
$.ajax({
                url: "{{url('deletecart/')}}"+"/"+ids, 
                type:"DELETE" ,
                data: {
					"_token": "{{ csrf_token() }}",

                    pid:ids,
					
                    
                },
				         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                success:function(response)
                {
                    if(response){
                       window.location.reload();

                    }
                }
            });
}

function increse(idsa)
{
  alert(idsa)
$.ajax({
                url: "{{url('updatecart/')}}"+"/"+idsa, 
                type:"PUT" ,
                data: {
					"_token": "{{ csrf_token() }}",

                    pid:idsa,
					
                    
                },
				         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                success:function(response)
                {
                    if(response){

                       window.location.reload();


                    }
                }
            });
}
function decrease(idsa)
{
  alert(idsa)
$.ajax({
                url: "{{url('updatedec/')}}"+"/"+idsa, 
                type:"PUT" ,
                data: {
					"_token": "{{ csrf_token() }}",

                    pid:idsa,
					
                    
                },
				         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                success:function(response)
                {
                    if(response){

                       window.location.reload();

                       alert(response)


                    }
                }
            });
} 
</script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
