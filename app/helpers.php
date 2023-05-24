<?php

use Illuminate\Support\Facades\DB;

function Date_Format1($date,$format){
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($format);    
}


  function myMethod($id)
{
    $proname =  DB::table('product')->select('pro_name')->where('id',$id); 
    print_r($proname);
    
    //return $id;    
}
?>