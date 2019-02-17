<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class EEController extends Controller
{
   public function EE()
    {  
    	// $it_student_info =DB::table('students')
     //                      ->where(['branch'=>'IT'])
     //                      ->get();
        $ee = student::orderBy("id","desc")->where(['branch'=>'EE'])->get();
    	return view('admin.ee',compact("ee"));                 
        // echo "</pre>";   
       
        // print_r($students);


                          
    	
}
}
