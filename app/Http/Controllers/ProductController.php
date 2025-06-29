<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Subcategory; 
use App\Models\Category;

use Session;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Product::select('*','subcategory.id as cid','product.id as sid')->
        join('subcategory', 'subcategory.id', '=', 'product.cat_id')->
        paginate(5);

        return view('admin.showproduct',['prod'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        $data = Subcategory::get();

        return view('admin.addproduct',['subcat'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pro_name' => 'required',
            'pro_desc' => 'required',
            'pro_image' => 'required',
            'pro_price' => 'required',
            'pro_quan' => 'required',
            'pro_meas' => 'required',
            'subcat_name' => 'required',
         
        ]);
        //
  //      $request->validate([
 //           'Product name' => 'required|regex:/^[a-zA-Z]+$/u|max:20|',
//            'Product description' => 'required',
//            'Product Image' => 'required',
//            'Product Price' => 'required',
//            'Product Quantity' => 'required',
//            'Product Measurement' => 'required',
//            'Subcategory Name' => 'required',
//            'Multiple Images' => 'required',
         
 //       ]); 
        $prod = new Product; 

        
        $file = $request->file('pro_image'); 
        $files = $request->file('images');
        $destinationPath = 'img';

        $file->move($destinationPath,$file->getClientOriginalName());
        $path = $destinationPath."/".$file->getClientOriginalName(); 







// $fileimages = $request->file('images');
// foreach($fileimages as $file1){
// $filename = $fileimages->getClientOriginalName();  
// $destinationPath1 = 'img'.'/'.time();

// $file->move($destinationPath1,$file1->getClientOriginalName());  

// DB::table('images')->insert([

//     'path'=>$destinationPath1,
//     'pro_id'=>$productId

// ]); 





 
        $prod->pro_name = $request->pro_name; 
        $prod->pro_desc = $request->pro_desc; 
        $prod->pro_image = $path;
        $prod->pro_price = $request->pro_price; 
        $prod->pro_quantity = $request->pro_quan; 
        $prod->pro_measurement = $request->pro_meas; 
        $prod->cat_id = $request->subcat_name;  
        $prod->save();

        // $productId = DB::table('product')->lastInsertId(); 

        $productId = $prod->id; 
        // $school_id = School::latest()->first()->id;

            foreach($files as $file){ 
            $destinationPath1 = 'img';

            $filename = $file->getClientOriginalName();
            //dd($check); 
            $path1 = $destinationPath1."/".$file->getClientOriginalName(); 


            $file->move($destinationPath1,$file->getClientOriginalName());

            DB::table('images')->insert([

                    'path'=>$path1,
                    'pro_id'=>$productId
                
                ]); 
        
           
         
    }


        return redirect('/product')->with('success','Product inserted..');; 


 
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::select('*','product.id as pid')->where('product.id',$id)->
        join('subcategory', 'subcategory.id', '=', 'product.cat_id')->get();


        $allImg = DB::table('images')->where('pro_id',$id)->get();


        $allReview = DB::table('review')->join('user','user.id', '=', 'review.user_id')->where('product_id',$id)->get();

    


         return view('user.singleproduct',['data'=>$data,'allImg'=>$allImg,'allReview'=>$allReview]);











        // print_r($data);
    

        // code here specific id dta 


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $prod = Product::find($id);
         $allprod = Subcategory::get();
         return view('admin.updateproduct',['prod'=>$prod,'allprod'=>$allprod]);
    }
    public function show1($id)
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
        $request->validate([
            'pro_name' => 'required',
            'pro_desc' => 'required',
            'pro_image' => 'required',
            'pro_price' => 'required',
            'pro_quan' => 'required',
            'pro_meas' => 'required',
            'cat_id' => 'required',
         
        ]);
         $prod = Product::find($id);
         $prod->pro_name = $request->pro_name;
         $prod->pro_desc = $request->pro_desc;
        
         $prod->pro_price = $request->pro_price;
         $prod->pro_quantity = $request->pro_quan;
         $prod->pro_measurement = $request->pro_meas;
    
         if($request->file('pro_image'))
         {
             $file = $request->file('pro_image');
             $destinationPath = 'img'.'/'.time();
     
             $file->move($destinationPath,$file->getClientOriginalName());
             $path = $destinationPath."/".$file->getClientOriginalName(); 
             $prod->pro_image = $path; 
 
         }
         else 
         {
                 $path = $prod->pro_image;
 
         }  


 
          
         $prod->save();
     
         return redirect('product')->with('update','Product updated..');;
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
        Product::destroy($id);

        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect('product')->with('delete','Product deleted..');;
    }

    public function searchdata(Request $request)
    {
        $term = $request->searterm;

        // echo $term;

        $data = Product::where('pro_name',$term)->get();

        $catid = Subcategory::select('Subcategory.id')->where('sub_cate_name',$term)->get(); 

        
        $catid_data = Category::select('category.id')->where('cate_name',$term)->get(); 

    if(!$catid->isEmpty())
    {
      $data = Product::where('cat_id',$catid[0]->id)->get();  
      

    }

    else if(!$catid_data->isEmpty())
     {

        // echo "in category";
      
      $subdataIds  = Subcategory::select('id')->where('cat_id',$catid_data[0]->id)->get();  


      $sundata = $subdataIds->toArray(); 
 


      $last_names = array_column($sundata, 'id'); 



      $data = Product::whereIn('cat_id', $last_names)->get(); 






      
      


    }

    if($catid_data->isEmpty() && $catid->isEmpty() && $data->isEmpty()) 
    {

        return view('user.data404');

    }
    else 
    {
        return view('user.search',['prod'=>$data]);
    }

   
   }
}
