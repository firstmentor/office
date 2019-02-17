<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use App\Student;
use Validator;
use DB;
use Session;
session_start();

class StudentsController extends Controller
{
    
     public function savestudent(Request $request)
    { 
        // print_r($request->file("std_image"));die;  //reade
        $file = $request->file("std_image");  //image ayi h ya nahi
        // echo "File Name: ".$file->getClientoriginalName(). "<br/>";
        // echo "File Extension: ".$file->getClientoriginalExtension(). "<br/>";
        // echo "File Real Path: ".$file->getRealPath(). "<br/>";
        // echo "File Size: ".$file->getSize(). "<br/>";
        // echo "File Mime Type: ".$file->getMimeType(). "<br/>";
        // die;
        if($request->hasfile("std_image")){       //hasfile ( hasfile ye chack karta h ki image ayi h ki nahi)
            //$file =$request->file("std_image");    

            $file->move("upload/",$file->getClientoriginalName());  //move method use folder mai upload kar ne ke liye public ke andar auto matic (move method do parametter ko leti hai)  (is file name ko data base mai save karana hai)
        }
       //die;
        $data = Validator::make($request->all(),[
              
            "name" =>"required |max:255",
            "email"=>"required|max:255 |unique:students|email"
                  
        ],[
             
             "name.required" => "Name is needed",
             "email.required" =>"Email is needed",
             "email.email" => "Email should be valid email"

        ])->validate(); //auto redirect

        $obj = new Student; 

        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->mobile = $request->mobile;
        $obj->address = $request->address;
        $obj->college = $request->college;
        $obj->qualification = $request->qualification;
        $obj->branch = $request->branch;
        $obj->semester = $request->semester;
        $obj->courses = $request->courses;
        $obj->std_image = $file->getClientoriginalName();

        $is_saved = $obj->save();

        if($is_saved){

        	session()->flash("studentMessage","Registration Successfully Completed");
        	return redirect("/");
        }
         
    
      }

}
