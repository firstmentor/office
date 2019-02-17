@extends("layouts.master")
@section('content')


<div class="card">
                            <div class="card-header">
                                <strong class="card-title">Students list</strong>
                            </div>

                            <div class="card-body">
                                
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        	<th>Sr No</th>
                                            <th>Name</th>
                                            
                                            <th>Mobile</th>
                                            <th>College</th>
                                            <th>Branch</th>
                                            <th>Semester</th>
                                            <th>Internship</th>
                                             <th>Fee</th>
                                            <th>image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=1;?>
                                    @foreach($students as $student)
                                        <tr>
                                        	<td>{{ $i++}}</td>
                                            <td>{{ $student->name}}</td>
                                            
                                            <td>{{ $student->mobile}}</td>
                                            <td>{{ $student->college}}</td>
                                            <td>{{ $student->branch}}</td>
                                            <td>{{ $student->semester}}</td>
                                            <td>{{ $student->courses}}</td>
                                            <td>{{ $student->fee}}</td>
                                            <td>
                                                @php if(!empty($student->std_image)){@endphp
              <img src="{{ url('upload/'.$student->std_image) }}" style="height: 70px; width: 70px; border-radius: 100%;">
          @php }else{ @endphp
          
            <p>No Image Found</p>
          @php } @endphp 
                                            </td>
                                            <td>
                                            <a href="{{ URL::to('/view/'.$student->id)}}"><button class="btn btn-outline-primary">View</button></a>
                                           <a href="{{ URL::to('/student_edit/'.$student->id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                           <a href="{{ URL::to('/student_delete/'.$student->id)}}" id="delete"> <button class="btn btn-outline-danger">Delete</button></a>
                                        </td>
                                        </tr>
                                      @endforeach
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



@endsection
