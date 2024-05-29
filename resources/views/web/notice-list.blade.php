@extends('web.layouts.master')

@section('title')
    {{ $title }} | {{ $setting->meta_title ?? '' }}
@endsection

<style>
    body {
        background-color: #f0f0f0;
    }

    .evit-notice-list {
        width: 100%;
        max-width: 700px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .evit-notice-list h3 {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 20px;
        text-transform: uppercase;
        color: #212529;
    }

    .evit-notice-list .evit-notice {
        background: #fff;
        position: relative;
        padding: 15px 30px 15px 40px;
        box-shadow: 0 0 20px 5px rgba(0, 0, 0, 0.08);
        font-weight: 600;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .evit-notice-list .evit-notice .evit-date {
        background: #CA3C3C;
        position: absolute;
        left: -25px;
        top: 50%;
        transform: translate(0, -50%);
        color: #fff;
        padding: 5px 9px;
        text-align: center;
        border-radius: 7px;
    }

    .evit-notice-list .evit-notice .evit-date span {
        display: block;
    }

    .evit-notice-list .evit-notice .evit-date .date {
        font-size: 25px;
    }

    .header {
        background-color: white;
    }

    .header ul {
        list-style: none;
    }

    .header ul li {
        display: inline-block;
    }

    .sticky {
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 1;
    }

    #subdomain-value {
        display: inline-block;
    }

    .fab {
        line-height: unset !important;
    }
</style>

@section('content')
    <section class="breadcrumb-area d-flex  p-relative align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>{{ $type }}</h2>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('navbar_home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $type }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40 pb-40">
        <div class="container">
            @foreach ($notice as $notices)
                <div class='evit-notice-list pb-3'>
                    <h3>{{ \Carbon\Carbon::parse($notices->created_at)->format('F Y') }}</h3>
                    <div class='evit-notice'>
                        <div class='evit-date'>
                            <span class='date'>{{ \Carbon\Carbon::parse($notices->created_at)->format('d') }}</span>
                            <span class='day'>{{ \Carbon\Carbon::parse($notices->created_at)->format('D') }}</span>
                        </div>
                        <div class='evit-desc'>
                            <p>{{ $notices->title }}</p>
                            <a href="{{ route('web.viewNotice', $notices->id) }}">
                                <p style="font-size: 12px;">
                                    @if (strlen($notices->description) > 370)
                                        {!! substr($notices->description, 0, 370) !!}...
                                    @else
                                        {!! $notices->description !!}
                                    @endif
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

<script>
    window.onscroll = function() {
        myFunction()
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    console.log(sticky);

    function myFunction() {
        if (window.pageYOffset > sticky) {
            console.log(window.pageYOffset);
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

    console.log('text', jQuery('#subdomain-value').width());
</script>
