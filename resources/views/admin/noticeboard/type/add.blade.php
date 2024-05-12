@extends('admin.layout.index')

@section('title')
NOTICE TYPE
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h3>Add Notice Type</h3>
    </div>
</div>
<div>
    <form action="{{route('admin.NoticeType.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="notice_type" class="form-label">Notice Type<span style="color: red">*</span></label>
            <input type="text" class="form-control" id="notice_type" name="notice_type" placeholder="Enter Notice Type" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


</div>

@endsection

