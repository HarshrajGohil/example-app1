<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
        // $data = User::where('user.id',$id)->get();
    }

    public function checklogin(Request $request)
    {

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





       echo "hello...";
    }


    public function adminlogout(Request $request)
    {
        $request->session()->flush(); 
        return  redirect('/adminlogin');
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
            return  redirect('/adminlogin');

        }

        


       echo "hello...";
    }

    public function myprofile()
    {

        $data = User;

        return view('admin.adminprofile',['adminprofile'=>$data]);
       
    
    


        


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
        User::destroy($id);

        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect('user1');
    }
}
