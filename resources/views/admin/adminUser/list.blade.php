@extends('admin.layout.index')

@section('title')
    Admin User
@endsection

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Manage Admin Users</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="btn btn-primary" href="{{route('admin.AdminUser.add')}}">Add New Admin User</a>
                {{-- <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="remove"></a> --}}
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($all_adminuser as $adminuser)

                <tr>
                    <td>{{$i}}</td>
                    <td>{{$adminuser->name}}</td>
                    <td>{{$adminuser->email}}</td>
                    <td><img src="{{asset($adminuser->image)}}" width="80" alt=""></td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.AdminUser.edit',$adminuser->id)}}">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
                @php
                    $i++;
                @endphp
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
@section('scripts')
@endsection
