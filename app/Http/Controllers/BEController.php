<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class BEController extends Controller
{
    public function BE()
    {  
    	// $it_student_info =DB::table('students')
     //                      ->where(['branch'=>'IT'])
     //                      ->get();
        $be = student::orderBy("id","desc")->where(['qualification'=>'BE'])->get();
    	return view('admin.be',compact("be"));                 
        // echo "</pre>";   
       
        // print_r($students);


                          
    	
}
}
