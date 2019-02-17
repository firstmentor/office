<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Redirect;

use Validator;
use Session;
session_start();
class AllstudentController extends Controller
{

  // Show student data
    public function all_student()
    {
        $students = student::orderBy("id","desc")->get();
    	return view('admin.allstudent',compact("students"));

    }

//view data student

   public function studentview($id)
    {
       // $student_description_view =DB::table('student_tbl')
       //                           ->select('*')
       //                           ->where('student_id',$student_id)
       //                           ->first();

        $view = student::select('*')->where('id',$id)->first();
    	return view('admin.view',compact("view")); 


        // echo "</pre>";
        // print_r($view);
        // echo "</pre>";  



        // $manage_description_student =view('admin.studentview')
        //                             ->with('student_description_profile',$student_description_view);
        // return view('layout.master')
        //             ->with('view',$manage_description_student);                           



    }

    //delete student datat

    public function studentdelete($id)
    {
      // DB::table('student_tbl')
      //     ->where('student_id',$student_id)
      //     ->delete();

       $delete = student::where('id',$id)->delete();
      //return view('admin.view',compact("view"));     

      return Redirect::to('/allstudent');    
    }

    //Student Edit Data

    public function studentedit($id)
     {

      // $student_edit =DB::table('student_tbl')
      //                            ->select('*')
      //                            ->where('student_id',$student_id)
      //                            ->first();
       $student_edit = student::select('*')->where('id',$id)->first();
      return view('admin.student_edit',compact("student_edit"));                            
        // echo "</pre>";
        // print_r($student_edit);
        // echo "</pre>";   


        // $manage_description_student =view('admin.studentedit')
        //                             ->with('student_description_profile',$student_description_view);
        // return view('layout.master')
        //             ->with('studentedit',$manage_description_student); 
        
     }

     public function studentupdate(Request $request,$id)
    { 
        // print_r($request->file("std_image"));die;  //reade
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
            "email"=>"required|max:255 |email"
                  
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

          session()->flash("studentMessage","Student Update Successfully");
          return redirect("/allstudent");
        }
         
    
      }
}      