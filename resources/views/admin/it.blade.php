@extends("layouts.master")
@section('content')

<div class="card">
                            <div class="card-header">
                                <strong class="card-title">IT list</strong>
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
                                    @foreach($it as $itstudent)
                                        <tr>
                                            <td>{{ $i++}}</td>
                                            <td>{{ $itstudent->name}}</td>
                                            
                                            <td>{{ $itstudent->mobile}}</td>
                                            <td>{{ $itstudent->college}}</td>
                                            <td>{{ $itstudent->branch}}</td>
                                            <td>{{ $itstudent->semester}}</td>
                                            <td>{{ $itstudent->courses}}</td>
                                            <td>
                                
              @php if(!empty($itstudent->std_image)){@endphp
              <img src="{{ url('upload/'.$itstudent->std_image) }}" style="height: 70px; width: 70px; border-radius: 100%;">
          @php }else{ @endphp
          
            <p>No Image Found</p>
          @php } @endphp 
                            </td>
                                            <td>
                                            <a href="{{ URL::to('/view/'.$itstudent->id)}}"><button class="btn btn-outline-primary">View</button></a>
                                           <a href="{{ URL::to('/student_edit/'.$itstudent->id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                           <a href="{{ URL::to('/student_delete/'.$itstudent->id)}}" id="delete"> <button class="btn btn-outline-danger">Delete</button></a>
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