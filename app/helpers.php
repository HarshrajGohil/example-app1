<?php 
ini_set('memory_limit', '44M');

use Illuminate\Support\Facades\DB;
 function getProductName($id)
 {
     $proname =  DB::table('product')->select('pro_name')->where('id',$id);
     return $proname;
 }

?>