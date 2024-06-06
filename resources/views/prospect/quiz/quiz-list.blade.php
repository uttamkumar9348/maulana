@extends('prospect.layout.index')
@section('title')
    Quiz List
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Quiz List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable-save-state">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Duration</th>    
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sl = 1;
                        @endphp
                        @foreach ($quiz_list as $quiz)
                            <tr>
                                <th scope="row">{{ $sl++ }}</th>
                                <td><a href="{{ url('prospect/give-quiz', $quiz->id) }}">{{ $quiz->title }}</a></td>
                                <td>{{ $quiz->from_time }}</td>
                                <td>{{ $quiz->to_time }}</td>
                                <td>{{ $quiz->duration }} minutes</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
