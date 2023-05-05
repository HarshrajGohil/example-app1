<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; 
use App\Mail\SendMail;
use DB;

use App\Models\User;

class EmailController extends Controller
{
    //  
function resetdata(Request $request)
{
        $otpdata = $request->otp;
        $psw = $request->password;
        $npsw = $request->cpassword; 
        $email = $request->emaildata;  

        if($psw != $npsw)
        {
            return back()->with('success','Both Password are Not same chack and try again!..');
        }

        else 
        {

            $data = DB::table('user')->where('email',$email)->where('otp',$otpdata)->get();   
        

        if(!$data->isEmpty()) 
        {
                $updated = DB::table('user')->where('email',$email)->update(['password' => $psw]);

                
                return redirect('/login')->with('success','Pssword Changed ..');; 



        }



        
    }   




}

function adminresetdata(Request $request)
{
        $otpdata = $request->otp;
        $psw = $request->password;
        $npsw = $request->cpassword; 
        $email = $request->emaildata;  
  echo $email;
        if($psw != $npsw)
        {
            return back()->with('success','Both Password are Not same chack and try again!..');
        }

        else 
        {
           
            $data = DB::table('user')->where('email',"harshh6621@gmail.com")->where('otp',$otpdata)->get();   
          

        if(!$data->isEmpty()) 
        {

            echo $psw;
            
                $updated = DB::table('user')->where('email',"harshh6621@gmail.com")->update(['password' => $psw]);

                
                return redirect('/adminlogin')->with('success','Pssword Changed ..');; 



        }



        
    }   




}

function generateNumericOTP($n)
{
  // Taking a generator string that consists of
  // all the numeric digits
  $generator = "1357902468";

 $result = "";

  for ($i = 1; $i <= $n; $i++) {
    $result .= substr($generator, rand() % strlen($generator), 1);
  }

  return $result;
}




    public function checkemail(Request $request)
    {

            $userdata = DB::table('user')->where('email',$request->email)->get(); 
            if($userdata->isEmpty()) 
            {
        
                return view('user.data404');
        
            }
            else 
            {

                // echo $data[0]->email; 
                $otp = $this->generateNumericOTP(6);


                $data = [
                    'name'=>$userdata[0]->first_name,
                    'otp'=>$otp,
                    
                 ];
                
                $testMailData = [
                    'title' => 'Password Reset',
                    'body' => 'Hello'." ".$data['name']." your otp is : ".$data['otp']
                ];
        
                Mail::to($userdata[0]->email)->send(new SendMail($testMailData)); 
                // return back()->with('Success! Email has been sent successfully.');  

                $datatemp = array(
                    'email'=>$request->email,
                    'message'=>"data sent"
                    );


                    DB::table('user')
                    ->where('email',$request->email)
                    ->update([
                        'otp'=>$otp
                    ]);                

                return view('user.userresetpassword')->with($datatemp);








            }


    }

    public function admincheckemail(Request $request)
    {

            $userdata = DB::table('user')->where('email',$request->email)->get(); 
            if($userdata->isEmpty()) 
            {
        
                return view('admin.admindata404');
        
            }
            else 
            {

                // echo $data[0]->email; 
                $otp = $this->generateNumericOTP(6);


                $data = [
                    'name'=>$userdata[0]->first_name,
                    'otp'=>$otp,
                    
                 ];
                
                $testMailData = [
                    'title' => 'Password Reset',
                    'body' => 'Hello'." ".$data['name']." your otp is : ".$data['otp']
                ];
        
                Mail::to($userdata[0]->email)->send(new SendMail($testMailData)); 
                // return back()->with('Success! Email has been sent successfully.');  

                $datatemp = array(
                    'email'=>$request->email,
                    'message'=>"data sent"
                    );


                    DB::table('user')
                    ->where('email',$request->email)
                    ->update([
                        'otp'=>$otp
                    ]);                

                return view('admin.adminresetpassword')->with($datatemp);








            }


    }
    public function index(Request $request)
    {

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'mobile'=>$request->mobile
         ];
        $testMailData = [
            'title' => 'Contact Form Doggyden001@gmail.com',
            'body' => 'Contact Form Submit.......'."Name : ".$data['name']."Email : ".$data['email']."Telephone : ".$data['mobile']."Message : ".$data['message']
        ];

        Mail::to('doggyden001@gmail.com')->send(new SendMail($testMailData)); 
        return back()->with('Success! Email has been sent successfully.');  
 }
}
