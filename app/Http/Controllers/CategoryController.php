<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        echo "hello data ";
        $data = Category::paginate(2);

        
        return view('admin.showcategory',['cat'=>$data]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        echo "in store ";

        $cat = new Category;
 
        $cat->cate_name = $request->cate_name; 
        $cat->cate_desc = $request->cate_desc; 
        $cat->cate_image = $request->cate_image;
        $cat->save();
        return redirect('/category')->with('success','Category inserted..');; 
        


        

        


 
        $flight->save();


        //
    }

    public function updatecategory(Request $request)
    {
        $adminid = $request->session()->get('aid'); 
        $userdata = Category::where('id',$adminid)->get();

                     return  view('admin.updatecategory',['userdata'=>$userdata]);;

                     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

         echo $id; 
         $cat = Category::find($id);
         echo($cat->cate_name);
         return view('admin.updatecategory',['cat'=>$cat]);
          

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
    // public function updatecategory(Request $request)
    // {
    //     $adminid = $request->session()->get('aid'); 
    //     $userdata = User::where('id',$adminid)->get();

    //                  return  view('admin.updateprofile',['userdata'=>$userdata]);

    // }

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
        
        $category = Category::find($id);
 
        $category->cate_name = $request->cate_name;

        $category->cate_desc = $request->cate_desc;
        $category->cate_image = $request->cate_image;

         
        $category->save();
    
    
        return back()->with('success','Category Updated..');
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

     //   echo $id;

        Category::destroy($id);

        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect('category')->with('delete','Category deleted..');;


    }
}
