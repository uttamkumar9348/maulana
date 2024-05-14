@extends('admin.layout.index')

@section('title')
    Edit Admin User
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Admin Users</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.AdminUser.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$edit_adminuser->id}}">
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{$edit_adminuser->name}}">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$edit_adminuser->email}}">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                        <img class="pl-3 pt-2" src="{{asset($edit_adminuser->image)}}" width="90" alt="">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Password<span style="color: red">*</span></label>
                        <input type="password" class="form-control" name="password" placeholder="Enter New Password" >
                        <span style="color: red">Do you Want to Change Your Old Password!</span>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
