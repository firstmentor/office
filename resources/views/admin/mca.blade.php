@extends("layouts.master")
@section('content')

<div class="card">
                            <div class="card-header">
                                <strong class="card-title">MCA list</strong>
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
                                            <th>image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php $i=1;?>
                                    @foreach($mca as $mcastudent)
                                        <tr>
                                            <td>{{ $i++}}</td>
                                            <td>{{ $mcastudent->name}}</td>
                                            
                                            <td>{{ $mcastudent->mobile}}</td>
                                            <td>{{ $mcastudent->college}}</td>
                                            <td>{{ $mcastudent->branch}}</td>
                                            <td>{{ $mcastudent->semester}}</td>
                                            <td>{{ $mcastudent->courses}}</td>
                                            <td>
                                
              @php if(!empty($mcastudent->std_image)){@endphp
              <img src="{{ url('upload/'.$mcastudent->std_image) }}" style="height: 70px; width: 70px; border-radius: 100%;">
          @php }else{ @endphp
          
            <p>No Image Found</p>
          @php } @endphp 
                            </td>
                                            <td>
                                            <a href="{{ URL::to('/view/'.$mcastudent->id)}}"><button class="btn btn-outline-primary">View</button></a>
                                           <a href="{{ URL::to('/student_edit/'.$mcastudent->id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                           <a href="{{ URL::to('/student_delete/'.$mcastudent->id)}}" id="delete"> <button class="btn btn-outline-danger">Delete</button></a>
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