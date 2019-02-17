@extends("layouts.master")
@section('content')
<div>
	 


                <div class="row">
                    <div class="col-lg-6">

<div class="card ">
	<div class="card-header">
     <strong>Add</strong>Students
    </div>
    @if($errors->any())
         <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
          </ul>
        </div>
        @endif


        @if(session()->has("studentMessage"))

             <div class="alert alert-success">
              <p>{{session()->get("studentMessage")}}</p>
            </div>

         @endif  
         <p class="alert-success"><?php
                           $exception = Session::get('exception');
                           if($exception)
                           {
                            echo $exception;
                            Session::put('exception',null);
                           }
                           ?></p>
        
    <div class="card-body card-block">
        
                                                    
    <form id="form_login" method="post" action="{{URL::to('/update_student',$student_edit->id)}}" enctype="multipart/form-data">
              {{ csrf_field()}}
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" id="log_email" placeholder="Enter name" value="{{ $student_edit->name}}">
               
              </div>

              <div class="form-group">
                <label >Email address</label>
                <input type="email" class="form-control" name="email"  placeholder="Enter email" value="{{ $student_edit->email}}">
               
              </div>

              <div class="form-group">
                <label >Mobile Number</label>
                <input type="text" class="form-control" name="mobile"  placeholder="Mobile Number" value="{{ $student_edit->mobile}}">
               
              </div>


              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address"  placeholder="Enter Address" value="{{ $student_edit->address}}">
               
              </div>


              <div class="form-group">
                <label>College name</label>
                <input type="text" class="form-control" name="college" placeholder="Enter College name" value="{{ $student_edit->college}}">
               
              </div> 


              <div class="form-group">
                <label >Qualification</label>
           
                <select name="qualification" id="" class="form-control">

         <option value="BE">BE</option>
         <option value="MCA">MCA</option>
         <option value="BCA">BCA</option>
         
         
    </select>
               
              </div> 


             <div class="form-group">
                <label>Branch</label>
                 <select name="branch" id="" class="form-control">

         <option value="IT">IT</option>
         <option value="CSE">CSE</option>
         <option value="EE">EE</option>
         <option value="EC">EC</option>
         
    </select>
               
              </div> 


             <div class="form-group">
                <label >Semester</label>
                <select class="form-control"  name="semester">
                          <option value="I Semester">I Semester</option>
                          <option value="II Semester">II Semester</option>
                          <option value="III Semester">III Semester</option>
                          <option value="IV Semester">IV Semester</option>
                          <option value="V Semester">V Semester</option>
                          <option value="VI Semester">VI Semester</option>
                          <option value="VII Semester">VII Semester</option>
                          <option value="VIII Semester">VIII Semester</option>
               </select>
              </div> 
              <div class="form-group">
                <label>INTERNSHIP TRAINING COURSES</label>

                <select name="courses" class="form-control" >
                    <option value="WORKSHOP " id="select-1526993445566-0">WORKSHOP</option>
                    <option value="Training on C programming" id="select-1526993445566-1">Training on C programming</option>
                    <option value="Training on C++ programming" id="select-1526993445566-2">Training on C++ programming</option>
                    <option value="WEB DESIGNING" selected="true" id="select-1526993445566-3">WEB DESIGNING</option>
                    <option value="WEB DEVELOPMENT" id="select-1526993445566-4">WEB DEVELOPMENT</option>
                    <option value="CORE PHP" id="select-1526993445566-5">CORE PHP</option>
                    <option value="COORDINATOR FRAMEWORK" id="select-1526993445566-6"> COORDINATOR FRAMEWORK</option>
                    <option value="LARAVEL FRAMEWORK" id="select-1526993445566-7">LARAVEL FRAMEWORK</option>
                    <option value="WORDPRES" id="select-1526993445566-8">WORDPRESS CMS</option>
                    <option value="MAGENTO CMS" id="select-1526993445566-9">MAGENTO CMS</option>
                    <option value="DRUPAL CMS" id="select-1526993445566-10">DRUPAL CMS</option>
                    <option value="OPENCART CMS" id="select-1526993445566-11">OPENCART CMS</option>
                    <option value="PHOTOSHOP" id="select-1526993445566-12">PHOTOSHOP</option>
                    <option value="Python" id="select-1526993445566-13">Python</option>
                    <option value="Java" id="select-1526993445566-14">Java</option>
                    <option value="Android" id="select-1526993445566-15">Android</option>
                    <option value="Java Script" id="select-1526993445566-16">Java Script</option>
                    <option value="Jquery" id="select-1526993445566-17">Jquery</option>
                    <option value="Angular 7" id="select-1526993445566-18">Angular 7</option>
                    <option value="React js" id="select-1526993445566-19">React js</option>
                    <option value="Node js" id="select-1526993445566-20">Node js</option>
                    <option value="6 Month Industrial Training" id="select-1526993445566-21">6 Month Industrial Training</option>
                </select>
                
              </div>
               <div class="form-group">
                <label>Photo Upload</label>
                <input type="file" class="form-control" name="std_image"  placeholder="Enter Photo" required="image">
               
              </div>
              

              <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Submit</button>
              
            </form>
            

</div>
    </div>
    </div>
 @endsection   