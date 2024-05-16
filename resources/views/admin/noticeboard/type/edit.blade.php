@extends('admin.layout.index')

@section('title')
NOTICE TYPE
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h3>Edit Notice Type</h3>
    </div>
</div>
<div>
    <form action="{{route('admin.NoticeType.update')}}" method="post">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="id" value="{{$edit_noticetype->id}}">
            <label for="notice_type" class="form-label">Notice Type</label>
            <input type="text" class="form-control" id="notice_type" name="notice_type" value="{{$edit_noticetype->notice_type}}" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>


</div>

@endsection

