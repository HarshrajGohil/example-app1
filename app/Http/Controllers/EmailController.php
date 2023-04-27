<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; 
use App\Mail\SendMail;


class EmailController extends Controller
{
    // 

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
