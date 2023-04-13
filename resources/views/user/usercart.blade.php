@extends('user.usermaster')
@section('content')
<div class="wrapper container">
    
        
       
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
            <th scope="col">Price</th>

      <th scope="col">Quantity</th> 
            <th scope="col">Total</th> 

    </tr>
     
  </thead>
  <tbody>
  @foreach($cart as $value)
    <tr>
      <th scope="row">1</th>    
      <td>{{ $value['pro_name']}}</td>
      
      <td>
      <img src='{{($value['pro_image'])}}' height='100' width='100'/>
        </td>
        <td>
        {{ $value['pro_price']}}
        </td>

        <td>
        <button>+</button>
       <input type='text' value={{$value['quantity']}}>

         <button>-</button>
        </td>
      <td>{{ $value['pro_price'] * $value['quantity']}}</td>
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

    <div class='col-sm-3'>    <button class='btn btn-primary'>CheckOut</button>
    
</div>

    </div>
    </div>
<br>
@endsection