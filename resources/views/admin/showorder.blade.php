@extends('admin.master')
@section('content')
 @if ($message = Session::get('delete'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="container-fluid pt-4 px-4">
    
</div>
<!-- Sale & Revenue End -->





<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Show Order</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                    {{--   <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}
                        <th scope="col">Orders</th>
                        <th scope="col">User Name</th>
                        
                        <th scope="col">Amount</th>
                
                       
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($order as $value)
                 
                    <tr>
                        <?php $temp = json_decode($value['allorder']);?>

                        

                        <td> 
                        


                        @foreach($temp as $valuedata) 

                        <?php echo "Product Name : ".$valuedata->pro_id."<br>"; 


                        echo "User Name :".$valuedata->user_id."<br>";
                        echo "Quantity:".$valuedata->quantity."<br>"; 
                        echo "Price:"."200"."<br>"; 

                        echo "<hr>";
                        
                        
                        ?>


                            

                        @endforeach

                        </td>



                        <td>{{ $value['first_name'] }}</td>
                        
                
                         <td>{{ $value['amount']}}</td>

                        
                        <td><a class="" href="">
                                
                               
                              
                               
                        </a>
                        
                        <a><i class=""></i></a>
                        <form action="{{ route('order.destroy',$value['id']) }}" method="POST">
   
                
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="fas fa-trash text-primary"></button>
                </form>
                                             

                        </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
             {{ $order->links() }}
            </div>
        </div>
    </div>
</div>

@endsection