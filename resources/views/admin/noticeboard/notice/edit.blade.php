@extends('admin.layout.index')

@section('title')
NOTICE
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h3>Edit Notice</h3>
    </div>
</div>
<div>
    <form action="{{route('admin.Notice.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="id" value="{{$edit_notice->id}}">
            <label for="notice_type" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{$edit_notice->title}}">
        </div>
        <div class="mb-3">
            <label for="notice_type" class="form-label">Description<span style="color: red">*</span></label>
            {{-- <input type="text" class="form-control" name="description" placeholder="Enter Notice Type"> --}}
            <textarea class="form-control texteditor" name="description"cols="30" rows="4" placeholder="Enter Description">{{$edit_notice->description}}</textarea>

        </div>
        <div class="mb-3">
            <label for="notice_type" class="form-label">File</label>
            <input type="file" class="form-control" name="file" >
        </div>
        <div class="mb-3">
            <label for="notice_type" class="form-label">Notice Type<span style="color: red">*</span></label>
            <select class="form-control" name="notice_type" required>
                <option value="">Select Notice Type</option>
                @foreach ($all_notice as $notice)
                    <option value="{{ $notice->notice_type }}" {{ ($edit_notice->notice_type == $notice->notice_type) ? 'selected' : '' }}>
                        {{ $notice->notice_type }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>


</div>

@endsection

