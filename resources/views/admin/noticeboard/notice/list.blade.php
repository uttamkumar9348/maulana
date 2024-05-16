@extends('admin.layout.index')

@section('title')
NOTICE
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h3>Manage Notice</h3>
    </div>
    <div class="col-lg-6" style="text-align: right">
        <a class="btn btn-primary" href="{{route('admin.Notice.add')}}">Add New Notice</a>
    </div>
</div>
<div class="card">
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>File</th>
                <th>Notice Type</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i= 1;
            @endphp
            @foreach ($all_notice as $notice)
            <tr>
                <td>{{$i}}</td>
                <td><b>{{$notice->title}}</b></td>
                <td>{!! $notice->description !!}</td>
                <td><a target="blank" class="btn btn-success btn-sm" href="{{asset('file/'.$notice->file)}}">View</a></td>
                <td>{{$notice->notice_type}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.Notice.edit',['id'=>$notice->id])}}">Edit</a>
                </td>
                <td>
                    <a class="btn btn-danger" onclick="confirmDelete('{{route('admin.Notice.delete',['id'=>$notice->id])}}')">Delete</a>
                </td>
            </tr>
            @php
                $i++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function confirmDelete(deleteUrl) {
         var isConfirmed =confirm("Are you sure you want to delete this item?");

          if (isConfirmed) {
              window.location.href = deleteUrl;
          } else {

              alert("Deletion canceled");
          }
       }
  </script>
@endsection

