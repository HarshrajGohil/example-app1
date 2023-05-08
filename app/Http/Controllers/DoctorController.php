<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Session;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data = Doctor::paginate(2);
        

        return view('admin.showdoctor',['doctor'=>$data]);
        

      

    } 

    public function showdr()
    {

        $data = Doctor::where('is_approve',1)->paginate(10); 
        return view('user.showdoctor',['doctor'=>$data]);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.adddoctor');

        return view('user.doctorregister');
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
            'full_name' => 'required',
            'degree' => 'required',
            'specialist' => 'required',
            'about' => 'required',
            'location' => 'required',
            'email' => ['required', 'unique:doctor', 'max:30'],
            'photo' => 'required',
            'contact_no' => 'required|digits:10',
         
        ]);

        
        $file = $request->file('photo'); 
        $files = $request->file('images');
        $destinationPath = 'img';

        $file->move($destinationPath,$file->getClientOriginalName());
        $path = $destinationPath."/".$file->getClientOriginalName(); 

        
        $doc = new Doctor;
        $doc->full_name = $request->full_name; 
        $doc->degree = $request->degree; 
        $doc->specialist = $request->specialist;
        $doc->about = $request->about; 
        $doc->location = $request->location; 
        $doc->email = $request->email; 
        $doc->photo = $path;
        $doc->contact_no = $request->contact_no; 
        $doc->save();

     

     

        return back()->with("doctore created")->with('insert','Doctor Inserted..');; 

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
//   echo $id; 
//         $doctor = Doctor::find($id);
//         echo($doctor->full_name);
//         echo($doctor->degree);
//         echo($doctor->specialist);
//         echo($doctor->about);
//         echo($doctor->location);
//         echo($doctor->email);
//         echo($doctor->photo);
//         echo($doctor->contact_no);
//         return view('user.showdoctor',['doctor'=>$doctor]); 
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
        Doctor::destroy($id);

        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect('doctor')->with('delete','Doctor Deleted..');; 
    }
}
