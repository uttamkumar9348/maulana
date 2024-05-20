@extends('admin.layout.index')

@section('title')
Prospects
@endsection

@section('content')

<div class="card">
    <div class="table-responsive">
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Exam</th>
                    <th>Status</th>
                    <th>Track ID</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($prospects  as $key => $prospect)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$prospect->name}}</td>
                    <td>{{$prospect->email}}</td>
                    <td>{{ $prospect->entrance_fee?$prospect->entrance_fee->course->title:'' }}</td>
                    <td>{{ $prospect->studentPaymentLastest()?$prospect->studentPaymentLastest()->status:'' }}</td>
                    <td>{{ $prospect->studentPaymentLastest()?$prospect->studentPaymentLastest()->track_id:'' }}</td>

                    <td>

                        <button data-toggle="modal" data-target="#edit_modal"
                            id="{{$prospect->id}}" class="edit-btn btn btn-primary">Edit</button>
                        {{-- <a href="{{route('admin.prospect.edit',$prospect->id)}}" class="btn btn-primary btn-sm">Edit</a> --}}
                    </td>
                    <td>
                        <a href="{{route('admin.prospect.show',$prospect->id)}}" class="btn btn-info btn-sm">Show Application</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <form id="updateForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Student Approval</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="user_id" id="user_id" required>
                        <label for="name">Status</label>
                        <select  name="status" id="status"  class="form-control" required>
                            <option selected disabled>Select Status</option>
                            <option value="Admitted">Admitted</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                    <div class="form-group admitted_fields" style="display:none;">
                        <label for="name">College</label>
                        <select  name="college_id"  id="college_id" class="form-control">
                            <option selected value="">Select College</option>
                            @foreach(App\Models\User::where('role_id',2)->where('is_verified',1)->where('is_active',1)->get() as $college)
                            <option value="{{$college->id}}">{{$college->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group admitted_fields" style="display:none;">
                        <label for="name">Course</label>
                        <select  name="course_id"  id="course_id" class="form-control" >
                            <option selected value="">Select Course</option>
                        </select>
                    </div>
                    <div class="form-group admitted_fields" style="display:none;">
                        <label for="name">Semester</label>
                        <select  name="semester_id"  id="semester_id" class="form-control" >
                            <option selected value="">Select Semester</option>
                        </select>
                    </div>
                    <div class="form-group admitted_fields" style="display:none;">
                        <label>Enrollment Year</label>
                        <select  name="enrollment_year" id="enrollment_year" class="form-control" >
                            <option selected value="">Select Enrollment Year</option>
                            @for($i = 2015;$i < 2031;$i++)
                            <option  value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('.edit-btn').click(function(){
            let id = $(this).attr('id');
            $('#user_id').val(id);
            $('#updateForm').attr('action','{{route('admin.prospect.status_update','')}}');
        });
    });

    $(document).on('change', '#status', function (event) {
        status = $(this).val();
        if(status == 'Admitted')
        {
            $('.admitted_fields').show();
            $('#college_id').attr('required',true);
            $('#course_id').attr('required',true);
            $('#semester_id').attr('required',true);
            $('#enrollment_year').attr('required',true);
        }else{
            $('.admitted_fields').hide();
            $('#college_id').attr('required',false);
            $('#course_id').attr('required',false);
            $('#semester_id').attr('required',false);
            $('#enrollment_year').attr('required',false);
        }
    });
    $(document).on('change', '#college_id', function (event) {
        college_id = $(this).val();
        event.preventDefault();
        $.ajax({
            url: '{{url("get_course_aganist_college")}}',
            type: 'POST',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            dataType: 'JSON',
            data: {
                'college_id': college_id,
            },
        })
        .done(function (data) {
            $('#course_id').empty();
            $('#course_id').append('<option selected value="">Select College Course</option>');
            for (i=0;i<data.length;i++){
            $('#course_id').append('<option value="'+data[i].id+'">'+data[i].name+'</option>');
            }
        })
    });
    $(document).on('change', '#course_id', function (event) {
        course_id = $(this).val();
        event.preventDefault();
        $.ajax({
            url: '{{url("get_semester_aganist_course")}}',
            type: 'POST',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            dataType: 'JSON',
            data: {
                'course_id': course_id,
            },
        })
        .done(function (data) {
            $('#semester_id').empty();
            $('#semester_id').append('<option selected value="">Select Semester</option>');
            for (i=0;i<data.length;i++){
            $('#semester_id').append('<option value="'+data[i].id+'">'+data[i].name+'</option>');
            }
        })
    });
</script>
@endsection
