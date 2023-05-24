<?php 

use Illuminate\Support\Facades\DB;

class MyHelper
{
    public static function myMethod($id)
    {
        $proname =  DB::table('product')->select('pro_name')->where('id',$id);
        return $proname;    
    }
}

