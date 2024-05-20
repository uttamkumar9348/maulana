@extends('admin.layout.index')

@section('title')
    Add Center
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add Center Mapping</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.center_mapping.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <p><strong>Course : {{$user->entrance_fee && $user->entrance_fee->course ? $user->entrance_fee->course->title : '' }}</strong></p>
                        <input type="hidden" name="entrance_fee_id" value="{{$user->entrance_fee_id}}" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Center ID</label>
                            <select name="center_id" class="form-control " required>
                                <option>Select</option>
                                @foreach(App\Models\Center::all() as $center)
                                <option value="{{$center->id}}">{{$center->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Exam Date</label>
                            <input name="exam_date" type="date" class="form-control" placeholder="Enter Exam Date" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Exam Time</label>
                            <input name="exam_time" type="time" class="form-control" placeholder="Enter Exam Time" required>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Create <i class="icon-paperplane ml-2"></i></button>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
@endsection

@section('scripts')
@endsection