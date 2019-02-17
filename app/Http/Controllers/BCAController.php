<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class BCAController extends Controller
{
     public function BCA()
    {  
    	// $it_student_info =DB::table('students')
     //                      ->where(['branch'=>'IT'])
     //                      ->get();
        $bca = student::orderBy("id","desc")->where(['qualification'=>'BCA'])->get();
    	return view('admin.bca',compact("bca"));                 
        // echo "</pre>";   
       
        // print_r($students);


                          
    	
}
}
