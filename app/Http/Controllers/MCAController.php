<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class MCAController extends Controller
{
    public function MCA()
    {  
    	// $it_student_info =DB::table('students')
     //                      ->where(['branch'=>'IT'])
     //                      ->get();
        $mca = student::orderBy("id","desc")->where(['qualification'=>'MCA'])->get();
    	return view('admin.mca',compact("mca"));                 
        // echo "</pre>";   
       
        // print_r($students);


                          
    	
}
}
