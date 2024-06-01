@extends('web.layouts.master')

@section('title')
    {{ $title }} | {{ $setting->meta_title ?? '' }}
@endsection

<style>
    .row-news {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
    }
    .news-heading {
        text-align: center;
    }
    .news-heading h3 {
        position: relative;
        display: inline-block;
        font-size: 24px;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }
    .news-heading h3::after {
        content: '';
        position: absolute;
        width: 30%;
        height: 3px;
        display: block;
        margin: auto;
        background: #ff7350;
        transition: width 0.5s;
        left: 0;
        right: 0;
        bottom: 0;
    }
    .news-heading h3:hover::after {
        width: 100%;
    }
    .news-desc {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    .news-btn {
        text-align: center;
    }
    .news-btn a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .news-btn a:hover {
        background-color: #0056b3;
    }
</style>

@section('content')

    <section class="breadcrumb-area d-flex  p-relative align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>{{ $view_notice->notice_type }}</h2>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('navbar_home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$view_notice->notice_type }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40 pb-40">
        <div class="container">
            <div class="row-news">
                <div class="news-heading">
                    <h3>{{$view_notice->title}}</h3>
                </div>
                <div class="news-desc">
                    <p>{!! $view_notice->description !!}</p>
                </div>
                <div class="news-btn" style="text-align: center">
                    <a target="blank" href="{{ asset('file/' . $view_notice->file) }}">Download</a>
                </div>
            </div>
        </div>
    </section>

@endsection
