@extends('admin.layout.index')

@section('title')
    Dashboard
@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
            <div class="card card-body">
                <div class="media mb-0">
                    <div class="media-body">
                        <h3 class="font-weight-semibold mb-0 text-center">
                            MAULANA MAZHARUL HAQUE ARABIC AND PERSIAN UNIVERSITY
                        </h3>
                    </div>
                </div>
            </div>

    </div>
</div>
<div class="row">

    <div class="col-sm-4 col-xl-4">
        <a href="{{route('admin.student.index')}}">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">

                    <div class="mr-3 align-self-center">
                        <i class="icon-unlink2 icon-3x opacity-75"></i>
                    </div>
                    <div class="media-body text-right">
                    <h3 class="mb-0">{{App\Models\User::where('role_id',3)->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Students</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-4 col-xl-4">
        <a href="{{route('admin.teacher.index')}}">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-stack-picture icon-3x opacity-75"></i>
                    </div>
                    <div class="media-body text-right">
                    <h3 class="mb-0">{{App\Models\User::where('role_id',4)->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Teachers</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4 col-xl-4">
        <a href="{{route('admin.college.index')}}">
            <div class="card card-body bg-orange-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{App\Models\User::where('role_id',2)->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Colleges</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-blog icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4 col-xl-4">
        <a href="{{route('admin.course.index')}}">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-stack-picture icon-3x opacity-75"></i>
                    </div>
                    <div class="media-body text-right">
                    <h3 class="mb-0">{{App\Models\Web\Course::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Course</span>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <div class="col-sm-4 col-xl-4">
        <a href="{{route('admin.subject.index')}}">
            <div class="card card-body bg-teal-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-question4 icon-3x opacity-75"></i>
                    </div>
                    <div class="media-body text-right">
                    <h3 class="mb-0">{{App\Models\Subject::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Subject</span>
                    </div>

                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4 col-xl-4">
        <a href="{{route('admin.exam.index')}}">
            <div class="card card-body bg-purple-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{App\Models\Exam::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Exam</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-search4 icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
@section('scripts')
@endsection
