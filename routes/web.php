<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});

//Admin Login
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');

//students use

Route::post('/save_student','StudentsController@savestudent');

//Admin AllStudent data

Route::get("allstudent","AllstudentController@all_student");


//Admin add student data

Route::get("addstudents","AddstudentsController@add_students");
Route::post('/Addstudent','AddstudentsController@Add_student');

//Course
Route::get("it","ITController@IT");
Route::get("cs","CSController@CS");
Route::get("ec","ECController@EC");
Route::get("ee","EEController@EE");
Route::get("mca","MCAController@MCA");
Route::get("bca","BCAController@BCA");
Route::get("be","BEController@BE");

//view data

Route::get('/view/{id}','AllstudentController@studentview');

//delete student data 

Route::get('/student_delete/{id}','AllstudentController@studentdelete');

//logout

Route::get('/logout','AdminController@logout');

//Edit Student Data
 Route::get('/student_edit/{id}','AllstudentController@studentedit');
 Route::post('/update_student/{id}','AllstudentController@studentupdate');

