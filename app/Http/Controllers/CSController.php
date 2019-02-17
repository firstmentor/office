<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class CSController extends Controller
{
   public function CS()
    {  
    	// $it_student_info =DB::table('students')
     //                      ->where(['branch'=>'IT'])
     //                      ->get();
        $cs = student::orderBy("id","desc")->where(['branch'=>'CS'])->get();
    	return view('admin.cs',compact("cs"));                 
        // echo "</pre>";   
       
        // print_r($students);


                          
    	
}
}
