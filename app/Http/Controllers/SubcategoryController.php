<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Session;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $data = Subcategory::select('*','category.id as cid','subcategory.id as sid')->
        join('category', 'category.id', '=', 'subcategory.cat_id')->
        paginate(5);

        
        return view('admin.showsubcategory',['subcat'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Category::get();
        return view('admin.addsubcategory',['cat'=>$data]);
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
            'sub_cate_name' => 'required',
            'sub_cate_desc' => 'required',
            'cate_name' => 'required',
         
        ]);
        echo "in store ";

        $subcat = new Subcategory;
 
        $subcat->sub_cate_name = $request->sub_cate_name; 
        $subcat->sub_cate_desc = $request->sub_cate_desc; 
        $subcat->cat_id = $request->cate_name;  
        $subcat->save();
        return redirect('/subcategory')->with('success','Subcategory inserted..');; 


 
        $flight->save();
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

        $subcat = Subcategory::find($id); 

        $allcat = Category::get();
        return view('admin.updatesubcategory',['subcat'=>$subcat,'allcat'=>$allcat]);

       
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
        $request->validate([
            'sub_cate_name' => 'required',
            'sub_cate_desc' => 'required',
            //'cate_name' => 'required',
         
        ]);
       

        $subcategory = Subcategory::find($id);
 
        $subcategory->sub_cate_name = $request->sub_cate_name;

        $subcategory->sub_cate_desc = $request->sub_cate_desc;
       // $subcategory->cat_id = $request->cat_id;

         
        $subcategory->save();
    
    
        return back()->with('success','Subcategory Updated..');
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
        Subcategory::destroy($id);

        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect('subcategory')->with('delete','Subcategory deleted..');;
    }
}
