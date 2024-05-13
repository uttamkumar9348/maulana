@extends('web.layouts.master')
@section('title', __('navbar_home'))

@section('social_meta_tags')
    @if (isset($setting))
        <meta property="og:type" content="website">
        <meta property='og:site_name' content="{{ $setting->title }}" />
        <meta property='og:title' content="{{ $setting->title }}" />
        <meta property='og:description' content="{!! Str::limit(strip_tags($setting->meta_description), 160, ' ...') !!}" />
        <meta property='og:url' content="{{ route('home') }}" />
        <meta property='og:image' content="{{ asset('/uploads/setting/' . $setting->logo_path) }}" />


        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="{!! '@' . str_replace(' ', '', $setting->title) !!}" />
        <meta name="twitter:creator" content="@HiTechParks" />
        <meta name="twitter:url" content="{{ route('home') }}" />
        <meta name="twitter:title" content="{{ $setting->title }}" />
        <meta name="twitter:description" content="{!! Str::limit(strip_tags($setting->meta_description), 160, ' ...') !!}" />
        <meta name="twitter:image" content="{{ asset('/uploads/setting/' . $setting->logo_path) }}" />
    @endif
@endsection

{{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/> --}}
<style>
    .latest-notice {
        background: #191d33;
    }

    .text-align-center {
        text-align: center !important;
    }

    .news {
        padding: 10px 10px 10px 13px;
        background-color: #ff6000;
        margin-bottom:0px;
        height:100%;
    }

    .marq {
        color: white;
        margin-top:5px;
    }

    .marquee-btn {
        display: inline-block;
        padding: 8px 15px;
        background-color: #007bff;
        color: #ffffff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .marquee-btn:hover {
        background-color: #0056b3;
    }

    .fab {
        line-height: unset !important;
    }

    .testi-author1 {
    width: 100%;
    float: left;
    text-align: center;
    }
.testi-author1 img{
    display: inline-block;
    /* margin-top: 15px; */
    width: 22rem;
    height: 15rem;
    border-radius: 5%;
}
.team-cont{
    height: 35rem;
}
.team-sdisc{
    max-height: 8rem;
    overflow: hidden;
}
.para{
    text-align: justify;
    color: black;
}
.social li {
  display: inline-block;
  margin-right: 5px;
}
.social li a {
  display: block;
  width: 2rem;
  height: 2rem;
  line-height: 2rem;
  border-radius: 50%;
  font-size: 1rem;
  color: #60c5a8;
  border: 1px solid #60c5a8;
  transition: all 0.5s ease 0s;
}
.social li a:hover {
  background-color: #025784 !important;
  border: none;
  text-decoration: none;
}
.team{
    text-align: center
}
</style>


@section('content')

    <!-- main-area -->
    <main>
        <!-- slider-area -->
        <section id="home" class="slider-area fix p-relative">

            <div class="slider-active" style="background: #141b22;">

                @foreach ($sliders as $slider)
                    <div class="single-slider slider-bg"
                        style="background-image: url({{ asset('uploads/slider/' . $slider->attach) }}); background-size: cover;">

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7">
                                    <div class="slider-content s-slider-content mt-130">
                                        <h2 data-animation="fadeInUp" data-delay=".4s">{{ $slider->title }}</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">{!! strip_tags($slider->sub_title, '<b><u><i><br>') !!}</p>

                                        @if (isset($slider->button_link))
                                            <div class="slider-btn mt-30">
                                                <a href="{{ $slider->button_link }}" target="_blank"
                                                    class="btn ss-btn mr-15" data-animation="fadeInLeft"
                                                    data-delay=".4s">{{ $slider->button_text }} <i
                                                        class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 p-relative">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        <!-- slider-area-end -->


        @if (count($features) > 0)
            <!-- service-area -->
            <section class="service-details-two p-relative">
                <div class="container">
                    <div class="row">

                        @foreach ($features as $key => $feature)
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="services-box07 @if ($key == 1) active @endif">
                                    <div class="sr-contner">
                                        <div class="icon">
                                            <img src="{{ asset('web/img/icon/sve-icon4.png') }}" alt="icon">
                                        </div>
                                        <div class="text">
                                            <h5>{{ $feature->title }}</h5>
                                            <p>{!! $feature->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <!-- service-area-end -->
        @endif

        <section class="latest-notice pt-40 pb-10" style="padding-top:15px;padding-bottom:0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 text-align-center mt-3" style="padding-left:0px;padding-right:0px;padding-top:5px;">
                        <h4 class="news">Latest News :</h4>
                    </div>

                    <div class="col-lg-10" style="padding-left:0px">
                        <h6>
                            <marquee class="marq" behavior="scroll" direction="left" scrollamount="10"
                                onmouseover="this.stop();" onmouseout="this.start();">
                                @foreach ($notices as $notice)
                                    {{ $notice->title }}
                                    (New) <a class="marquee-btn mt-4" target="blank"
                                        href="{{ asset('file/' . $notice->file) }}">Download</a>
                                    |
                                @endforeach
                            </marquee>
                        </h6>
                    </div>

                </div>
            </div>
        </section>

        @isset($about)
            <!-- about-area -->
            <section class="about-area about-p pt-40 pb-40 p-relative fix" style="background: #eff7ff;">
                <div class="animations-02"><img src="{{ asset('web/img/bg/an-img-02.png') }}" alt="About"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative wow fadeInLeft animated" data-animation="fadeInLeft"
                                data-delay=".4s">
                                <img src="{{ asset('uploads/about-us/' . $about->attach) }}" alt="img">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content pl-15 wow fadeInRight animated"
                                data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">
                                    <h5><i class="fal fa-graduation-cap"></i> {{ $about->label }}</h5>
                                    <h2>{{ $about->title }}</h2>
                                </div>

                                {!! strip_tags($about->description, '<a><b><i><u><strong>') !!}

                                <div class="about-content2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="green2">
                                                @isset($about->mission_title)
                                                    <li>
                                                        <div class="abcontent">
                                                            <div class="text">
                                                                <h3>{{ $about->mission_title }}</h3>
                                                                <p>{!! strip_tags($about->mission_desc, '<a><b><i><u><strong>') !!}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endisset
                                                @isset($about->vision_title)
                                                    <li>
                                                        <div class="abcontent">
                                                            <div class="text">
                                                                <h3>{{ $about->vision_title }}</h3>
                                                                <p>{!! strip_tags($about->vision_desc, '<a><b><i><u><strong>') !!}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endisset
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- about-area-end -->
        @endisset

        <section class="testimonial-area pt-50 pb-100 p-relative fix">
            <div class="container">
                <div class="row">
                    <h2 class="team pb-5">UNIVERSITY ADMINISTRATION</h2>
                    <div class="col-lg-12">
                        <div class="team-cont testimonial-active wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">

                            @foreach($teams as $team)
                            <div class="single-testimonial text-center">
                                <div class="testi-author1">
                                    <img src="{{asset('Team/'.$team->photo)}}" alt="">
                                    {{-- <img src="{{ asset('uploads/testimonial/'.$testimonial->attach) }}" alt="img"> --}}
                                </div>
                                {{-- <div class="qt-img">
                                    <img src="{{ asset('web/img/testimonial/qt-icon.png') }}" alt="img">
                                </div> --}}


                                <div class="ta-info">
                                    <h3>{{ $team->name}}</h3>
                                    <h5>{{ $team->designation }}</h5>
                                </div>
                                <div class="team-sdisc">
                                    <p class="para mt-3">{{ $team->s_description }}</p>
                                </div>
                                {{-- <ul class="social mt-3">
                                    <li><a target="blank" href="{{$team->facebook}}" class="fab fa-facebook-f"></a></li>
                                    <li><a target="blank" href="{{$team->instagram}}" class="fab fa-instagram"></a></li>
                                    <li><a target="blank" href="{{$team->instagram}}" class="fab fa-instagram"></a></li>
                                </ul> --}}
                                <div class="social mt-4">
                                    <a target="blank" href="{{$team->facebook}}" class="fab fa-facebook-f"></a>
                                    <a style="padding: 10px" target="blank" href="{{$team->instagram}}" class="fab fa-instagram"></a>
                                    <a target="blank" href="{{$team->x}}" class="fab fa-twitter"></a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>

        @isset($callToAction)
            <!-- cta-area -->
            <section class="cta-area cta-bg pt-10 pb-40" style="background-color: #125875;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated"
                                data-delay=".2s">
                                <h2>{{ $callToAction->title }}</h2>
                                <p>{{ $callToAction->sub_title }}</p>
                            </div>

                        </div>
                        <div class="col-lg-4 text-right">
                            <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30" data-animation="fadeInDown animated"
                                data-delay=".2s">
                                @if (isset($callToAction->button_link))
                                    <a href="{{ $callToAction->button_link }}" target="_blank"
                                        class="btn ss-btn smoth-scroll">{{ $callToAction->button_text }} <i
                                            class="fal fa-long-arrow-right"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- cta-area-end -->
        @endisset


        @if (count($testimonials) > 0)
            <!-- testimonial-area -->
            <section class="testimonial-area pt-120 pb-115 p-relative fix">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="testimonial-active wow fadeInUp animated" data-animation="fadeInUp"
                                data-delay=".4s">

                                @foreach ($testimonials as $testimonial)
                                    <div class="single-testimonial text-center">
                                        <div class="qt-img">
                                            <img src="{{ asset('web/img/testimonial/qt-icon.png') }}" alt="img">
                                        </div>
                                        <p>{!! $testimonial->description !!}</p>
                                        <div class="testi-author">
                                            <img src="{{ asset('uploads/testimonial/' . $testimonial->attach) }}"
                                                alt="img">
                                        </div>
                                        <div class="ta-info">
                                            <h6>{{ $testimonial->name }}</h6>
                                            <span>{{ $testimonial->designation ?? '' }}</span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
        @endif

    </main>
    <!-- main-area-end -->

@endsection



