@extends("layouts.master")
@section('content')

<div class="card">
                            <div class="card-header">
                                <strong class="card-title">EC list</strong>
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
                                    @foreach($ec as $ecastudent)
                                        <tr>
                                            <td>{{ $i++}}</td>
                                            <td>{{ $ecastudent->name}}</td>
                                            
                                            <td>{{ $ecastudent->mobile}}</td>
                                            <td>{{ $ecastudent->college}}</td>
                                            <td>{{ $ecastudent->branch}}</td>
                                            <td>{{ $ecastudent->semester}}</td>
                                            <td>{{ $ecastudent->courses}}</td>
                                            <td>
                                
              @php if(!empty($ecastudent->std_image)){@endphp
              <img src="{{ url('upload/'.$ecastudent->std_image) }}" style="height: 70px; width: 70px; border-radius: 100%;">
          @php }else{ @endphp
          
            <p>No Image Found</p>
          @php } @endphp 
                            </td>
                                            <td>
                                            <a href="{{ URL::to('/view/'.$ecastudent->id)}}"><button class="btn btn-outline-primary">View</button></a>
                                           <a href="{{ URL::to('/student_edit/'.$ecastudent->id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                           <a href="{{ URL::to('/student_delete/'.$ecastudent->id)}}" id="delete"> <button class="btn btn-outline-danger">Delete</button></a>
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