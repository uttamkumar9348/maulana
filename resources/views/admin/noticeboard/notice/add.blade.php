@extends('admin.layout.index')

@section('title')
NOTICE
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h3>Add Notice</h3>
    </div>
</div>
<div>
    <form action="{{route('admin.Notice.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
            <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
        </div>
        <div class="mb-3">
            <label for="notice_type" class="form-label">Description<span style="color: red">*</span></label>
            {{-- <input type="text" class="form-control" name="description" placeholder="Enter Notice Type"> --}}
            <textarea class="form-control texteditor" name="description"cols="30" rows="4" placeholder="Enter Description"></textarea>

        </div>
        <div class="mb-3">
            <label for="notice_type" class="form-label">File</label>
            <input type="file" class="form-control" name="file" placeholder="Enter Notice Type">
        </div>
        <div class="mb-3">
            <label for="notice_type" class="form-label">Notice Type<span style="color: red">*</span></label>
            <select class="form-control" name="notice_type" required>
                <option value="">Select Notice Type</option>
                @foreach ($add_notice as $notice)
                <option value="{{$notice->notice_type}}">{{$notice->notice_type}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


</div>

@endsection

