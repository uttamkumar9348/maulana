@extends('admin.layout.index')
@section('title')
    Add New Quiz
@endsection
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h4 class="card-title">Add New Quiz</h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.store.quiz') }}">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Quiz Title</label>
                            <input type="text" placeholder="Quiz Title" name="title" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Valid From</label>
                            <input name="from_time" type="datetime-local" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Valid Till</label>
                            <input name="to_time" type="datetime-local" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Duration</label>
                            <input class="form-control" placeholder="Duration in Minute" name="duration" type="number"
                                required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header header-elements-inline">
            <h4 class="card-title">Quiz List</h4>
        </div>
        <div class="card-body">
            <table class="table">
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
                            <td><a href="{{ url('admin/add-question', $quiz->id) }}" target="_blank">{{ $quiz->title }}</a></td>
                            <td>{{ $quiz->from_time }}</td>
                            <td>{{ $quiz->to_time }}</td>
                            <td>{{ $quiz->duration }} minutes</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
