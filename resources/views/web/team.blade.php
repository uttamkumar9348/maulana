@extends('web.layouts.master')

@section('title')
    {{ $title }} | {{ $setting->meta_title ?? '' }}
@endsection

<style>
    .teamimage img{
        height: 25rem;
        width: -webkit-fill-available ;
        border-radius: 5%;
    }
    .team-icon {
        display: flex;
        justify-content: center;
    }

    .team-icon a {
        margin: 0 20px;
    }

    .team-icon i {
        font-size: 30px;
    }
</style>

@section('content')
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-6">
                <div class="teamimage">
                    <img src="{{asset('Team/'.$view_team->photo)}}" alt="TeamImage" height="100%">
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-6">
                <div class="pb-3">
                    <h2>{{$view_team->name}}</h2>
                </div>

                <div class="pb-4">
                    <h4>{{$view_team->designation}}</h4>
                </div>

                <div>
                    <p><b>{{$view_team->s_description}}</b></p>
                </div>
                <div class="teamdesc">
                    <p>{!! $view_team->details !!}</p>
                </div>
                <div class="team-icon mt-4">
                    <a target="blank" href="{{ $view_team->facebook }}"><i class="fab fa-facebook"></i></a>
                    <a target="blank" href="{{ $view_team->instagram }}"><i class="fab fa-instagram"></i></a>
                    <a target="blank" href="{{ $view_team->x }}"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
