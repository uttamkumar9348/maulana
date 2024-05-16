@extends('admin.layout.index')

@section('title')
NOTICE TYPE
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h3>Manage Notice Type</h3>
    </div>
    <div class="col-lg-6" style="text-align: right">
        <a class="btn btn-primary" href="{{route('admin.NoticeType.add')}}">Add New Notice Type</a>
    </div>
</div>
<div class="card">
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Notice Type</th>
                <th>Created Date</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($all_noticetype as $noticetype)
            <tr>
                <td>{{$i}}</td>
                <td><b>{{$noticetype->notice_type}}</b></td>
                <td>{{ $noticetype->created_at->format('d M, Y') }}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.NoticeType.edit',['id'=>$noticetype->id])}}">Edit</a>
                </td>
                <td>
                    <a class="btn btn-danger" onclick="confirmDelete('{{route('admin.NoticeType.delete',['id'=>$noticetype->id])}}')">Delete</a>
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

