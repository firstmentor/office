<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AdminController extends Controller
{    
   //admin dashboard open
    public function admin_dashboard(){

       return view('admin.dashboard');

    }



	//Admin login code
    public function login_dashboard(Request $request)
    {

      $email = $request->admin_email;
      $password =md5($request->admin_password);
      $result = DB::table('admin_tbl')
      ->where('admin_email', $email)
      ->where('admin_password', $password)
      ->first();

      // echo "</pre>";
      // print_r($result);

       if ($result){

      	 Session::put('admin_email',$result->admin_email);
      	 Session::put('admin_id',$result->admin_id);

      	return Redirect::to('/admin_dashboard');
      }
      else{
        Session::put('exception','Email or Password Invalid');
      	return Redirect::to('/backend'); 
      }

   }

   //logout 


    public function logout()
    {
       Session::put('admin_email',null);
       Session::put('admin_id',null);

      return Redirect::to('/backend');
    }
}

