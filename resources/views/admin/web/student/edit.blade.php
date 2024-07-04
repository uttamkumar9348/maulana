@extends('admin.layout.index')

@section('title')
    STUDENT SECTION
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Student</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{route('admin.student.update')}}" method="post">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$edit->id}}">
                    <div class="col-lg-4 mb-3">
                        <label for="notice_type" class="form-label">Icon<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="icon" placeholder="Enter Title" required value=" {{$edit->icon}}">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="notice_type" class="form-label">Heading<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="heading" placeholder="Enter Title" required value=" {{$edit->heading}}">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="notice_type" class="form-label">Url Name(Example : /home)<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="url" placeholder="E.g. /Url-name"
                        required value="{{$edit->url}}">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
