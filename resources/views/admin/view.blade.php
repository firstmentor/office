@extends("layouts.master")
@section('content')
<div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3">Profile Student</strong>
            </div>
            <div class="card-body">
             
                <div class="mx-auto d-block">
                    <img src="{{ url('upload/'.$view->std_image) }}" height="150" width="180" style="border-radius: 90%;     margin-left: 387px;">
                    <h5 class="text-sm-center mt-2 mb-1"></h5>
                    <div class="location text-sm-center"><i class="fa fa-building">{{ $view->name}}</i></div>
                    <div class="location text-sm-center"><i class="fa fa-envelope">{{ $view->email}}</i> </div>
                    <div class="location text-sm-center"><i class="fa fa-phone-square">{{$view->mobile}}</i></div>
                </div>
                <hr>
                <div class="card-text text-sm-center">
                    <table class="table table-bordered">
                        <tbody>
                    	<tr class="bg-info">
                           
                    		<th>Address</th>
                    		<th>College</th>
                    		<th>Qalification</th>
                    		<th>Semester</th>
                    		<th>Branch</th>
                    		
                    		<th>Courses</th>
                    	</tr>
</tbody>  
                       
                    	<td>{{ $view->address}}</td>
                        <td>{{ $view->college}}</td>
                        <td>{{ $view->qualification}}</td>
                        <td>{{ $view->semester}}</td>
                        <td>{{ $view->branch}}</td>
                        <td>{{ $view->courses}}</td>

                    	

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection