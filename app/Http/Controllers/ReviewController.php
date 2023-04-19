<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;
use App\Models\User;
use Session;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Review::select('*','user.id as uid','product.id as pid','review.id as rid')->
        join('user', 'user.id', '=', 'review.user_id')-> 
        join('product', 'product.id', '=', 'review.product_id')->

        paginate(2);

        return view('admin.showreview',['rev'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Product::get();
        $user = User::get();


        return view('admin.addreview',['pro'=>$data,'user'=>$user]);
        
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
         $rev = new Review;
     
        
 
        $rev->review_desc = $request->review_desc; 
        $rev->review_stars = $request->rev_stars; 
        $rev->user_id = $request->user_name;
        $rev->product_id = $request->pro_name; 
    

        $rev->save();
        return back()->with('success','Review inserted..');;


 
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
        Review::destroy($id);

        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect('review')->with('delete','Review Deleted..');;
    }
}
