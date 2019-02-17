<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ITController extends Controller
{
    
    public function IT()
    {  
    	// $it_student_info =DB::table('students')
     //                      ->where(['branch'=>'IT'])
     //                      ->get();
        $it = student::orderBy("id","desc")->where(['branch'=>'IT'])->get();
    	return view('admin.it',compact("it"));                 
        // echo "</pre>";   
       
        // print_r($students);


                          
    	
}
}