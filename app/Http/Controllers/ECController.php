<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class ECController extends Controller
{
   public function EC()
    {  
    	// $it_student_info =DB::table('students')
     //                      ->where(['branch'=>'IT'])
     //                      ->get();
        $ec = student::orderBy("id","desc")->where(['branch'=>'EC'])->get();
    	return view('admin.ec',compact("ec"));                 
        // echo "</pre>";   
       
        // print_r($students);


                          
    	
}
}
