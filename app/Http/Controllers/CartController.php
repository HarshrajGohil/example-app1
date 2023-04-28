<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\User; 
use App\Models\Cart; 
use App\Models\Order;

use DB;
use Session;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $uid = $request->session()->get('uid');  

        $data = Cart::select('*','product.id as pid','cart.id as cartId')->
        join('product', 'product.id', '=', 'cart.pro_id')->
        where('user_id','=',$uid)->
        get();

        $total = Cart::where('user_id',$uid)->
        join('product', 'product.id', '=', 'cart.pro_id')
        ->sum(DB::raw('product.pro_price * cart.quantity')); 

  return view('user.usercart',['cart'=>$data,'total'=>$total]); 

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function checkout(Request $request)
    {
        $uid = $request->session()->get('uid');  

        $cartdata = Cart::where('user_id',$uid)->get(); 

        $cartdata = json_encode($cartdata);  


        $data = Cart::select('*','product.id as pid','cart.id as cartId')->
        join('product', 'product.id', '=', 'cart.pro_id')->
        where('user_id','=',$uid)->
        get();





        $total = Cart::where('user_id',$uid)->
        join('product', 'product.id', '=', 'cart.pro_id')
        ->sum(DB::raw('product.pro_price * cart.quantity')); 

        $orderData = new Order();
        $orderData->allorder = $cartdata;
        $orderData->u_id = $uid;
        $orderData->amount = $total;
        $orderData->save(); 

        return view('user.checkout',['data'=>$data,'total'=>$total]);


       






    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 

        
        $userid = $request->session()->get('uid'); 
        $pid = $request->pid;


        $checkDb = DB::table('cart')->where('pro_id',$request->pid)->where('user_id',$userid)->get(); 
        echo "<pre>";
        if(isset($checkDb[0]->id))
        {
            $qnt = $checkDb[0]->quantity + 1; 

            $affected = DB::table('cart')
              ->where('user_id', $userid)
              ->where('pro_id',$pid)
              ->update(['quantity' => $qnt]);
        }
        else 
        {
            $qnt = 1; 
            
        $Cartdata = new Cart();
        $Cartdata->pro_id = $pid;
        $Cartdata->user_id = $userid;
        $Cartdata->quantity = $qnt;
        $Cartdata->save();


          
        }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


         echo $id;
    }


    function deletecart($id)
    {
        echo "the delete data ".$id;
        Cart::find($id)->delete();
        echo "data deleted";
   }
   function incresedata($id)
   {
          echo $id; 

          $checkDb = DB::table('cart')->where('id',$id)->get(); 

          $qnt = $checkDb[0]->quantity + 1; 

          $affected = DB::table('cart')
            ->where('id', $id)
            ->update(['quantity' => $qnt]); 


        echo "increse";



   }

   function decreasedata($id)
   {

          $checkDb = DB::table('cart')->where('id',$id)->get(); 

          $qnt = $checkDb[0]->quantity - 1; 

          if($qnt <=0)
          {
           echo "Min 1 qnt needed";
          }
          else 
          {
            $affected = DB::table('cart')
            ->where('id', $id)
            ->update(['quantity' => $qnt]); 


        echo "decrease";
          }

          


   }
}
