@extends('admin.layout.index')

@section('title')
    STUDENT SECTION
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Student Section</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.student.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <label for="notice_type" class="form-label">Icon Tag<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="icon"
                            placeholder="E.g. <i class='fa fa-external-link'></i>" required>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="notice_type" class="form-label">Heading<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="heading" placeholder="Enter Heading" required>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="notice_type" class="form-label">Url Name(Example : /home)<span
                                style="color: red">*</span></label>
                        <input type="text" class="form-control" name="url" placeholder="E.g. /Url-name" required>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
