<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Review;

use Session;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 

     public function homepage()
     {
        // $reviewdata = DB::table('review')->paginate(3);  

        $reviewdata = Review::select('*','user.id as uid','product.id as pid','review.id as rid')->
        join('user', 'user.id', '=', 'review.user_id')-> 
        join('product', 'product.id', '=', 'review.product_id')->
        orderby('review.id')->
        paginate(3);
        return view('user.userhome',['reviewdata'=>$reviewdata]);

    
    }

    public function datadashboard()
    {
        $userCount = DB::table('user')->where('is_admin', '!=',1)->count();
        
        $productCount = DB::table('product')->count();

        $orderCount = DB::table('billing')->count();

        $reviewCount = DB::table('review')->count();


        $data = [
            'user'=>$userCount,
            'products'=>$productCount,
            'orders'=>$orderCount,
            'reviews'=>$reviewCount,

        ];
        return view('admin.dashboard',$data);

      
   
    }
    public function index()
    {
        //
        $data = User::paginate(2);
        return view('admin.showuser',['user'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.register');

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
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u|max:20|',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/u|max:20|',
            'email' => ['required', 'unique:user', 'max:30'],
            'password' => 'required', 'min:6','max:20',
            'address' => 'required', 'max:255',
            'contact_no' => 'required|digits:10',
         
        ]);

        //
        $user = new User;
 
        $user->first_name = $request->first_name; 
        $user->last_name = $request->last_name; 
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->contact_no = $request->contact_no;
        $user->save();
        return redirect('/login');


 
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
        
        echo $id; 
        $user = User::find($id);
        echo($user->first_name);
        return view('admin.showorder',['user'=>$user]);
         
        // $data = User::where('user.id',$id)->get();
        
    }

    public function checklogin(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => 'required',
    
         
        ]);


        $email = $request->email;
        $password = $request->password;
    
        $data = User::where('email',$email)->where('password',$password)->where('is_admin',0)->get();  

        $dataCount = $data->count(); 
        
        if($dataCount >=1)
        {
            $userdata = User::where('email',$email)->get();
            $name = $userdata[0]['first_name'];
            $id = $userdata[0]['id'];
            $request->session()->put('userName', $name);  
            $request->session()->put('uid', $id); 

             return  redirect('/');


        }





    }


    public function adminlogout(Request $request)
    {
        $request->session()->flush(); 
        return  redirect('/adminlogin');
    }


    public function adminprofile(Request $request)
    {
        $adminid = $request->session()->get('aid'); 
        $userdata = User::where('id',$adminid)->get();

                     return  view('admin.adminprofile',['userdata'=>$userdata]);

    }
    public function userprofile(Request $request)
    {
        $adminid = $request->session()->get('uid'); 
        $userdata = User::where('id',$adminid)->get();

                     return  view('user.userprofile',['userdata'=>$userdata]);

    }
    public function adminlogin(Request $request)
    {

        $email = $request->email;
        $password = $request->password;
    
        $data = User::where('email',$email)->where('password',$password)->where('is_admin',1)->get();  

        $dataCount = $data->count(); 
        
        if($dataCount >=1)
        {
            $userdata = User::where('email',$email)->get();
            $name = $userdata[0]['first_name'];
            $id = $userdata[0]['id'];
            $request->session()->put('adminname', $name);  
            $request->session()->put('aid', $id); 
             return  redirect('/dashboard');


        }

        else 
        {
            return  redirect('/adminlogin')->with("error","Check Id And Password");

        }

        


       echo "hello...";
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


    public function logout(Request $request)
    {

        $request->session()->flush(); 
        return  redirect('/');




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
       



        $user = User::find($id);
 
        $user->first_name = $request->first_name;
        $request->session()->put('userName', $user->first_name);  

        $user->last_name = $request->last_name;
        $user->contact_no = $request->contact_no;
        $user->address = $request->address;

         
        $user->save();
    
    
        return back()->with('success','User Profile Updated... if you change  first name , your admin panel will reflect after login');
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
        User::destroy($id);

        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect('user1')->with('delete','User Deleted..');; 
    }
}
