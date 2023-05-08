<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\User; 
use App\Models\Cart; 
use App\Models\Order; 
use App\Models\Billing;


use DB;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
        $request->validate([
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u|max:20|',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/u|max:20|',
            'email' => ['required','max:30'],
            'address' => 'required', 'max:255',
            'contact_no' => 'required|digits:10',
           // 'nameoncard' => 'required','|regex:/^[a-zA-Z]+$/u|max:20|',
           // 'cardnumber' => 'required','max:16',
           // 'expiration' => 'required','date', 
           // 'cvv' => 'required','digits:3', 
         
        ]);

        $userid = $request->session()->get('uid'); 


       // $userid = $request->session()->get('uid'); 

       $bildata = new Billing();

        $bildata->first_name = $request->first_name;
        $bildata->last_name = $request->last_name;
        $bildata->email = $request->email;
        $bildata->address = $request->address;
        $bildata->contact_no = $request->contact_no; 
        $bildata->card = $request->card; 
        $bildata->name_on_card = $request->name_on_card ; 
        $bildata->credit_card_number = $request->credit_card_number; 
        $bildata->expiration = $request->expiration; 
        $bildata->cvv = $request->cvv; 

        $bildata->save();   

        DB::table('cart')->where('user_id', $userid)->delete();

        return  redirect('/');;




    
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
    }
}
