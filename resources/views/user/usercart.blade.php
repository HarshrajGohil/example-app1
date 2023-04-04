@extends('user.usermaster')
@section('content')
<div class="wrapper container">
    
        
       
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Quantity</th> 
            <th scope="col">Total</th> 

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Toy</td>
      <td>
      <img src='./'/>
        </td>
        <td>
        <button>+</button>
       5  

         <button>-</button>
        </td>
      <td>230</td>
    </tr>
 
    
  </tbody>
</table>
    </div>
@endsection