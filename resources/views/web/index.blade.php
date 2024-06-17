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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        margin-bottom: 0px;
        height: 100%;
    }

    .marq {
        color: white;
        margin-top: 5px;
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

    .testi-author1 img {
        display: inline-block;
        /* margin-top: 15px; */
        width: 22rem;
        height: 15rem;
        border-radius: 5%;
    }

    .team-cont {
        height: 35rem;
    }

    .team-sdisc {
        max-height: 8rem;
        overflow: hidden;
    }

    .para {
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

    .team {
        text-align: center
    }

    .team-name:hover {
        color: #125875;
    }
</style>
<style>
    /* General Container Styles */

    .feature-area {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        background: #FBFAFA;
        padding: 20px 0;
    }

    .single-feature {
        text-align: center;
        box-shadow: 0px 5px 10px 0px rgb(153 153 153);
    }

    .single-feature .title {
        background: #000000;
        border: 1px solid #ffffff;
        /* padding: 10px 0px; */
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s
    }


    .single-feature .title h4 {
        color: #fff;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 600;
    }

    .single-feature .desc-wrap {
        padding: 10px 20px;
        border: 1px solid #ffffff;
        background-color: #ebf2ff;
        box-shadow: 0px 5px 10px 0px rgb(153 153 153);
        /*float: left;*/
        width: 100%;
        float: left;
        margin-bottom: 10px;
    }

    .img-responsive {
        display: block;
        height: auto;
        max-width: 100%;
    }

    .vcBox-content h4 {
        font-size: 16px;
        margin-bottom: 4px;
        margin-top: 5px;
        color: #e77815;
        text-align: left;
    }

    .vcBox-content h5 {
        font-size: 13px;
        margin-bottom: 4px;
        margin-top: 5px;
        color: #e77815;
        text-align: left;
    }

    .vcBox-content h6 {
        font-size: 12px;
        font-weight: 400;
        margin-bottom: 3px;
        text-align: left;
    }

    .vcBox-content a {
        background: #125875;
        color: #fff !important;
        font-size: 12px !important;
        padding: 2px 7px;
        margin-top: 7px;
        display: inline-block;
        line-height: 16px;
    }

    .whiteBox {
        padding: 8px 7px;
        width: 100%;
        border-radius: 4px;
        float: left;
        margin-bottom: 12px;
    }

    .whiteBox-bg {
        background: #f6f6f6;
        box-shadow: 0px 1px 2px #939393;
    }

    .whiteBox img {
        float: left;
        margin-right: 6px;
        border: 1px solid #ccc;
        padding: 3px;
    }

    .vcBox-content a:hover {
        background: #ff7350;
    }

    .vcBox-content p {
        line-height: 18px;
    }

    .vcBox-content a {
        margin-top: 0px;
    }

    .single-feature .desc-wrap a {
        font-size: 14px;
        font-weight: 500;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        color: #000000;
        text-align: left;
    }

    .admsnBox {
        max-height: 225px;
        overflow: hidden;
    }

    .theUniBox {
        max-height: 225px;
        overflow: hidden;
    }

    .items {
        width: 90%;
        margin: 0px auto;
        margin-top: 10px;
        max-height: 520px;
        overflow: scroll;
    }

    .items::-webkit-scrollbar {
        width: 0px;
        /* Hide the scrollbar */
    }

    .items::-webkit-scrollbar-track {
        background: transparent;
        /* Make the track transparent */
    }

    .items::-webkit-scrollbar-thumb {
        background: transparent;
        /* Make the thumb transparent */
    }

    /* Firefox */
    .items {
        scrollbar-width: none;
        /* Hide the scrollbar */
    }

    /* IE and Edge */
    .items {
        -ms-overflow-style: none;
        /* Hide the scrollbar */
    }

    .items div h6 {
        font-size: 13px;
    }

    .slick2 .items2 .slick-prev {
        left: -38px;
        bottom: 0px;
        top: 38%;
        z-index: 11111;
    }

    .slick2 .items2 .slick-next {
        right: -23px;
        bottom: 0px;
        top: 38%;
    }

    .eventBox {
        padding: 0 !important;
    }

    .single-feature .desc-wrap a:hover {
        color: #002dab;
    }

    .single-feature:hover {}

    .single-feature:hover .title {}

    .single-feature:hover .desc-wrap a {}

    @media (max-width: 991px) {
        .single-feature {
            margin-bottom: 30px
        }

        .single-feature .title {
            background: #f7631b;
        }
    }

    .admissoinBox {}

    .admissoinBox h5 {
        background: #ff7350;
        margin-bottom: 0rem;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        padding: 5px 0px;
    }

    .pr5 {
        padding-right: 5px;
    }

    .pl5 {
        padding-left: 5px;
    }

    .uniImg {
        width: 95px;
        height: 68px;
        margin-right: 8px;
    }

    .uniBox .desc-wrap a {
        color: #fff !important;
    }

    .uniAdminBox {
        max-height: 555px;
        overflow: scroll;
        /* border: 1px solid #ccc; */
        /* Optional: to give the box a border */
    }

    /* WebKit browsers (Chrome, Safari) */
    .uniAdminBox::-webkit-scrollbar {
        width: 0px;
        /* Hide the scrollbar */
    }

    .uniAdminBox::-webkit-scrollbar-track {
        background: transparent;
        /* Make the track transparent */
    }

    .uniAdminBox::-webkit-scrollbar-thumb {
        background: transparent;
        /* Make the thumb transparent */
    }

    /* Firefox */
    .uniAdminBox {
        scrollbar-width: none;
        /* Hide the scrollbar */
    }

    /* IE and Edge */
    .uniAdminBox {
        -ms-overflow-style: none;
        /* Hide the scrollbar */
    }

    .marquee_text ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .marquee_text li {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .marquee_text li i {
        margin-right: 5px;
    }

    .marquee_text a {
        text-decoration: none;
        color: #333;
    }

    .viewAll-btn {
        background: #5bc0de;
        color: #fff;
        padding: 5px;
        text-align: center;
        border-radius: 3px;
        margin-top: 10px;
        text-decoration: none;
        align-self: flex-end;
    }

    .university {
        max-height: 22.5rem;
    }

    .parag {
        max-height: 11rem;
        overflow: hidden;
    }

    .Chancellor {
        height: 23rem;
    }

    .Vice {
        max-height: 165px;
        overflow: hidden;
    }

    .fourBtnBox a {
        background: linear-gradient(45deg, #125875, #587512);
        color: #fff;
        width: 100%;
        display: block;
        margin-bottom: 12px;
        padding: 18px 10px;
        text-align: center;
        font-size: 20px;
        border-radius: 8px;
        font-weight: 600;
    }

    .fourBtnBox a:hover {
        background: linear-gradient(45deg, #587512, #125875);
    }

    .counterBox {
        text-align: center;
        background: #ffe6dc;
        padding-top: 15px;
        padding-bottom: 8px;
        border-radius: 10%;
        border: 2px solid #ff7350;
    }

    .counterSection {
        margin-bottom: 30px;
    }

    .counterBox h6 {
        color: #125875;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 7px;
        font-size: 14px;
    }

    .counterBox h2 {
        color: #125875;
        margin-top: 6px;
        letter-spacing: 1px;
    }

    .counterBox i {
        color: #ffffff;
        background: #125875;
        font-size: 21px;
        width: 45px;
        height: 45px;
        text-align: center;
        line-height: 45px;
        border-radius: 10px;
    }

    @media only screen and (min-width: 200px) and (max-width: 480px) {
        .counterBox {
            width: 70%;
            margin: 0 auto;
            margin-bottom: 13px;
        }

        .j_middleBox {
            background: #fff2cc;
            padding-top: 15px;
            padding-bottom: 15px;
            border: 1px solid #fff5eb;
            width: 100%;
        }

        .j_left_topBox ul li a {
            font-size: 1rem !important;
            line-height: 2;
        }
    }

    .administartionBox .icon-box {
        border-radius: 10px;
    }

    .administartionBox .icon-box h4 {
        border-radius: 10px 10px 0 0;
    }

    .pr-5 {
        padding-right: 5px !important;
    }

    .border-orglight {
        border: 1px solid #E16734 !important;
        box-shadow: 0px 5px 10px 0px rgb(153 153 153);
    }

    .text-center {
        text-align: center
    }

    .icon-box .icon {
        display: inline-block;
        height: 30px;
        margin-bottom: 0;
        -webkit-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
        width: 50px;
        text-align: center;
        margin-top: 0px;
    }

    .icon-box .icon.icon-md {
        height: 45px;
        width: 45px;
        float: left;
        margin-right: 10px;
    }

    .icon-box .icon.icon-circled {
        border-radius: 50%;
    }

    .icon-box .icon.icon-md i {
        font-size: 20px;
        line-height: 45px;
    }

    .icon-box.hover-effect:hover {
        /*  box-shadow: 0px 5px 10px 0px rgb(153 153 153);
    margin-top: -10px;*/
    }

    .bg-gray-lighter:hover {
        background-color: #ffe6dc !important;
    }

    .icon-box.hover-effect {
        -webkit-transition: all 120ms ease-in-out 0s;
        -o-transition: all 120ms ease-in-out 0s;
        transition: all 120ms ease-in-out 0s;
        /* box-shadow: 0px 5px 10px 0px rgb(153 153 153);*/
    }

    .icon-box {
        margin-bottom: 0;
    }

    .icon-box-title {
        font-size: 16px;
        font-weight: 600;
        color: #E16734;
        text-transform: uppercase;
        text-align: center;
    }

    .icon-box div a {
        color: #f90;
    }

    .icon-box i {
        display: inline-block;
        font-size: 30px;
        -webkit-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    .icn-box {
        height: 55px;
        width: 55px;
        border: 1px solid #ececec;
        padding-top: 10px;
        border-radius: 50%;
        color: #fff;
        margin-bottom: 4px;
    }

    .icon-box-text {
        font-size: 13px;
        font-weight: 600;
        color: #000000;
        transition: color .3s linear, background .3s linear;
        height: 20px;
    }

    .otherboxSection .icon-box {
        min-height: 160px;
    }

    .administartionBox .icon-box {
        border-radius: 10px;
    }

    .administartionBox .icon-box h4 {
        border-radius: 10px 10px 0 0;
    }

    .boxbg {
        background: #e1e1e1;
        border-bottom: 1px solid #E16734;
        box-shadow: 0px 5px 10px 0px rgb(153 153 153);
    }

    .uniSectionBox {
        height: 235px;
    }

    @media (max-width: 673px) {
        .uniSectionBox {
            height: 335px;
        }

        .icon-box .icon {
            margin-top: 0px;
        }

        .mt-15 {
            margin-top: 8px;
        }

        .otherboxSection .icon-box {
            min-height: 125px;
            margin-bottom: 12px;
        }
    }

    .hvr-grow {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -moz-osx-font-smoothing: grayscale;
        -webkit-transition-duration: .3s;
        transition-duration: .3s;
        -webkit-transition-property: transform;
        transition-property: transform;
    }

    .hvr-grow:active,
    .hvr-grow:focus,
    .hvr-grow:hover {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

    .bg-light-blue {
        background-color: #125875 !important;
    }

    .bg-blue {
        background-color: #125875 !important;
        /* Change this to your desired blue color */
    }

    .bg-dark-blue {
        background-color: #125875 !important;
        /* Change this to your desired dark blue color */
    }

    .icon-box-text {
        font-size: 12px;
        font-weight: 600;
        color: #000000;
        transition: color .3s linear, background .3s linear;
        height: 20px;
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
                    <div class="col-lg-2 text-align-center mt-3"
                        style="padding-left:0px;padding-right:0px;padding-top:5px;">
                        <h4 class="news">Latest News :</h4>
                    </div>

                    <div class="col-lg-10" style="padding-left:0px">
                        <h6>
                            <marquee class="marq" behavior="scroll" direction="left" scrollamount="10"
                                onmouseover="this.stop();" onmouseout="this.start();">
                                @foreach ($notices as $notice)
                                    {{ $notice->title }}
                                    (New)
                                    <a class="marquee-btn mt-4" target="blank"
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

        <section class="feature-area pt-120 pb-100 p-relative fix"
            style="background:#FBFAFA; padding-bottom:0px; padding-top:20px">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="single-feature mb-10">
                                    <div class="admissoinBox">
                                        <h5>Admission</h5>
                                    </div>
                                    <div class="desc-wrap marquee_text admsnBox">
                                        <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                            onmouseover="this.stop();" onmouseout="this.start();" height="177">
                                            <ul>
                                                @foreach ($admission_notice as $admission)
                                                    <li>
                                                        <i class="fa fa-caret-right"></i>
                                                        <a href="{{ asset('file/' . $admission->file) }}">
                                                            <span>
                                                                {{ $admission->title }}
                                                            </span>
                                                        </a>
                                                        <img src="{{ asset('web/img/icon/new.gif') }}" alt="new image" />
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </marquee>
                                        <a href="{{ route('web.noticeList', 'Admission Notice') }}"
                                            class="viewAll-btn">View all</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <div class="single-feature mb-10">
                                    <div class="admissoinBox">
                                        <h5>Examination / Result</h5>
                                    </div>
                                    <div class="desc-wrap marquee_text resultBox">
                                        <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                            onmouseover="this.stop();" onmouseout="this.start();" height="245">
                                            <ul>
                                                @foreach ($exam_notice as $exam)
                                                    <li>
                                                        <i class="fa fa-caret-right"></i>
                                                        <a href="{{ asset('file/' . $exam->file) }}">
                                                            <span>
                                                                {{ $exam->title }}
                                                            </span>
                                                        </a>
                                                        <img src="{{ asset('web/img/icon/new.gif') }}">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </marquee>
                                        <a href="{{ route('web.noticeList', 'Exam Result') }}" class="viewAll-btn">View
                                            all</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- University Documentary Video Popup -->
                    <div class="modal fade" id="uniDocumentaryModal" tabindex="-1"
                        aria-labelledby="uniDocumentaryModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="uniDocumentaryModalLabel">University Documentary
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe id="video_frame" width="100%" height="500"
                                        src="https://www.youtube.com/embed/36ip7Xw0JjI?start=57"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="university col-md-12 col-xs-12">
                                <div class="single-feature mb-10 uniBox">
                                    <div class="admissoinBox">
                                        <h5>The university</h5>
                                    </div>
                                    <div class="desc-wrap theUniBox">
                                        <img src="images/address2.jpg" alt="address2"
                                            class="pull-left img-responsive uniImg">
                                        <div class="vcBox-content text-justify">
                                            <p class="parag text-justify mb-0">MAHATMA GANDHI CENTRAL UNIVERSITY came into
                                                existence by an Act of Parliament, Central Universities (Amendment)
                                                Act 2014(No 35 of 2014). The University became functional on 3 rd
                                                February 2016. MGCU is situated in Motihari (Bankat), on National
                                                Highway 28.</p>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#" class="marquee-btn" data-bs-toggle="modal"
                                                data-bs-target="#uniDocumentaryModal">Documentary</a>

                                            <a href="" class="marquee-btn btn-sm" style="float: right;">Read
                                                More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- University VC Video Popup -->
                            <div class="modal fade" id="HVCModal" tabindex="-1" aria-labelledby="HVCModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="HVCModalLabel">Hon'ble Vice-Chancellor's
                                                address on the first convocation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe id="video_frame" width="100%" height="500"
                                                src="https://www.youtube.com/embed/vcdH3qE-PlY"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="Chancellor col-md-12 col-xs-12">
                                <div class="single-feature mb-10">
                                    <div class="admissoinBox">
                                        <h5>Vice Chancellor Message</h5>
                                    </div>
                                    <div class="desc-wrap vcBox">
                                        <img src="{{ asset('Team/1718253910_echarts.png') }}"
                                            class="pull-left img-responsive uniImg" style="height: 90px;">
                                        <div class="vcBox-content text-justify">
                                            <h5>Prof. Sanjay Srivastava</h5>
                                            <p class="Vice text-justify mb-0">महात्मा गाँधी केन्द्रीय विश्वविद्यालय,
                                                मोतिहारी, बिहार में आप सभी का स्वागत है। बिहार के पूर्वी चम्पारण जिले
                                                में स्थापित यह भारत का 41वां केन्द्रीय विश्वविद्यालय है। अपनी स्थापना के
                                                मात्र सात वर्षों में ही विश्वविद्यालय ने नए पाठ्यक्रमों,...
                                                में स्थापित यह भारत का 41वां केन्द्रीय विश्वविद्यालय है। अपनी स्थापना के
                                                मात्र सात वर्षों में ही विश्वविद्यालय ने नए पाठ्यक्रमों,...
                                            </p>
                                        </div>
                                        <div class="mt-3 mb-3">
                                            <a href="#" class="marquee-btn btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#HVCModal">
                                                Vice-Chancellor's </a>
                                            <a href="" class="marquee-btn btn-sm" style="float: right;">Read
                                                More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> --}}

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="mb-10">
                                    <div class="admissoinBox">
                                        <h5>University Administrators</h5>
                                    </div>
                                    <div class="desc-wrap uniAdminBox">
                                        @foreach ($teams as $team)
                                            <div class="whiteBox whiteBox-bg">
                                                <img src="{{ asset('Team/' . $team->photo) }}"
                                                    class="pull-left img-responsive uniImg" />
                                                <div class="vcBox-content">
                                                    <h5>{{ $team->name }}</h5>
                                                    <h6> {{ $team->designation }} </h6>
                                                    <h6> {{ $team->s_description }} </h6>
                                                    <a href="{{ route('web.team', $team->id) }}" target="_blank">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="single-feature mb-10">
                                    <div class="admissoinBox">
                                        <h5>Events</h5>
                                    </div>
                                    <div class="desc-wrap eventBox">
                                        <!--Slick Carousel Slider-->
                                        {{-- <link rel="stylesheet" type="text/css" href="{{asset('web/css/slick-theme.css')}}"/>
                                        <link rel="stylesheet" type="text/css" href="web/css/slick.css" /> --}}
                                        <div class="items">
                                            @foreach ($events as $event)
                                                <div>
                                                    <a href="{{ asset('uploads/web-event/' . $event->attach) }}"
                                                        target="_blank">
                                                        <img src="{{ asset('uploads/web-event/' . $event->attach) }}"
                                                            width="100%" style="height: 90px">
                                                        <h6>{{ $event->title }}<br>[ {{ $event->date }} ]
                                                            <img src="{{ asset('web/img/icon/new.gif') }}"
                                                                style="height: auto !important; width: unset; border: none;" />
                                                        </h6>
                                                    </a>
                                                </div>
                                            @endforeach

                                        </div>
                                        <a href="" class="viewAll-btn">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>

        <section>
            <div class="fourBtnBox">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <a href="#">National Service Scheme</a>
                        </div>
                        <div class="col-md-3 col-sm-23 col-xs-12">
                            <a href="#">Journal</a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <a href="https://nad.digilocker.gov.in/" target="_blank">DigiLocker NAD</a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <a href="#">Viksit Bharat</a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <!-- <a href="gyanagrah.php">ज्ञानाग्रह (वार्षिक पत्रिका)</a> -->
                            <a href="#" target="_blank">Internal Complaint Committee</a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <a href="#" target="_blank">Academic Bank of Credits</a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <a href="#" target="_blank">National Academic Depository (NAD)</a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <a href="#" target="_blank">Institutional Development Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="counterSection section-bg-blue pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>Faculties</h6>
                                    <i class="fa fa-users"></i>
                                    <h2 data-max="120">{{ $overview->faculties }}+</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>Departments</h6>
                                    <i class="fa fa-building"></i>
                                    <h2 data-max="20">{{ $overview->departments }}+</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>Centres</h6>
                                    <i class="fa fa-building"></i>
                                    <h2 data-max="11">{{ $overview->centres }}+</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>Programmes</h6>
                                    <i class="fa fa-laptop f-25"></i>
                                    <h2 data-max="65">{{ $overview->programmes }}+</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>e-Resources</h6>
                                    <i class="fa fa-graduation-cap"></i>
                                    <h2 data-max="1200" id="test">{{ $overview->e_resources }}+</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>MOU</h6>
                                    <i class="fa fa-graduation-cap"></i>
                                    <h2 data-max="12" id="test">{{ $overview->mou }}+</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>Students</h6>
                                    <i class="fa fa-graduation-cap"></i>
                                    <h2 data-max="1300" id="test">{{ $overview->students }}+</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>Scholars</h6>
                                    <i class="fa fa-book"></i>
                                    <h2 data-max="350" id="test">{{ $overview->scholars }}+</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="" id="about">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12 mb-10 administartionBox pr-5">
                            <div class="icon-box border-orglight text-center pb-10">
                                <h4 class="icon-box-title mt-0 pt-1 pb-1 boxbg">University Campus Section</h4>
                                <div class="row pl-10 pr-10 pt-2 uniSectionBox">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-university icn-box bg-light-blue"></i>
                                                <h5 class="icon-box-text">Recruitment</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-newspaper-o icn-box bg-blue"></i>
                                                <h5 class="icon-box-text">News Letter</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fas fa-certificate icn-box bg-dark-blue"></i>
                                                <h5 class="icon-box-text">Alumni</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-gavel icn-box bg-light-blue"></i>
                                                <h5 class="icon-box-text">RTI</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class=""
                                                href="download/Office Order dated 10.05.2020 regarding Academic Calendars 2019-20_and_2020-21.pdf">
                                                <i class="fa fa-book icn-box bg-blue"></i>
                                                <h5 class="icon-box-text">Academic calendar</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-handshake-o icn-box icn-box bg-dark-blue"></i>
                                                <h5 class="icon-box-text">MoUs</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 mb-10 administartionBox pr-5">
                            <div class="icon-box border-orglight text-center pb-10">
                                <h4 class="icon-box-title mt-0 pt-1 pb-1 boxbg">Administration</h4>
                                <div class="row pl-15 pr-5 pt-2 uniSectionBox">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-user icn-box bg-light-blue"></i>
                                                <h5 class="icon-box-text">Visitor</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-gavel icn-box bg-blue"></i>
                                                <h5 class="icon-box-text">University Authorities</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-users icn-box bg-dark-blue"></i>
                                                <h5 class="icon-box-text">University Officers</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 ">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-user-secret icn-box bg-light-blue"></i>
                                                <h5 class="icon-box-text">COE</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-user-plus icn-box bg-blue"></i>
                                                <h5 class="icon-box-text">DSW</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-users icn-box bg-dark-blue"></i>
                                                <h5 class="icon-box-text">Proctor</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 mb-10 administartionBox pr-5">
                            <div class="icon-box border-orglight text-center pb-10">
                                <h4 class="icon-box-title mt-0 pt-1 pb-1 boxbg">Student Section</h4>
                                <div class="row pl-15 pr-5 pt-2 uniSectionBox">

                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-pencil-square-o icn-box bg-light-blue"></i>
                                                <h5 class="icon-box-text">Admission</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-calendar icn-box bg-blue"></i>
                                                <h5 class="icon-box-text">Examination</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-bar-chart icn-box bg-dark-blue"></i>
                                                <h5 class="icon-box-text">Result</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-file-pdf-o icn-box  bg-light-blue"></i>
                                                <h5 class="icon-box-text"> Syllabus</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="#">
                                                <i class="fa fa-pencil-square-o icn-box  bg-blue"></i>
                                                <h5 class="icon-box-text"> Anti Ragging</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 ">
                                        <div class="icon-box hvr-grow">
                                            <a class="" href="">
                                                <i class="fa fa-graduation-cap icn-box bg-dark-blue"></i>
                                                <h5 class="icon-box-text">Scholarship</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 mb-10 administartionBox">
                            <div class="single-feature">
                                <div class="title latest_bg ">
                                    <h4 style="text-align: left">Content / Research <span><a href="content_research.php"
                                                class="float-right content_research_view_all">View All</a></span></h4>
                                </div>
                                <div class="abt_box">
                                    <div class="row pl-15 pr-5">
                                        <div class="col-md-6 col-xs-6">
                                            <a href="https://ugcmoocs.inflibnet.ac.in/" target="_blank"><img
                                                    src="images/imp_logos/ugc_moocs.png"
                                                    class="img img-responsive img-thumbnail content_img"></a>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <a href="https://epgp.inflibnet.ac.in/" target="_blank"><img
                                                    src="images/imp_logos/epgp.png"
                                                    class="img img-responsive img-thumbnail content_img"></a>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <a href="https://www.swayamprabha.gov.in/" target="_blank"><img
                                                    src="images/imp_logos/swayam_prabha.png"
                                                    class="img img-responsive img-thumbnail content_img"></a>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <a href="https://shodhganga.inflibnet.ac.in/" target="_blank"><img
                                                    src="images/imp_logos/sodhganga.gif"
                                                    class="img img-responsive img-thumbnail content_img"></a>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <a href="https://swayam.gov.in/" target="_blank"><img
                                                    src="images/imp_logos/swayam.png"
                                                    class="img img-responsive img-thumbnail content_img"></a>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <a href="https://shodhshuddhi.inflibnet.ac.in/" target="_blank"><img
                                                    src="images/imp_logos/sodh_shuddhi.png"
                                                    class="img img-responsive img-thumbnail content_img"></a>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <a href="https://vidyamitra.inflibnet.ac.in/" target="_blank"><img
                                                    src="images/imp_logos/vidhya_mitra.png"
                                                    class="img img-responsive img-thumbnail content_img"></a>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <a href="" target="_blank"><img src="images/imp_logos/vidwan.png"
                                                    class="img img-responsive img-thumbnail content_img"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-12">
                        <div class="single-feature">
                            <div class="title twitterBg">
                                <h4>
                                    <i class="fa fa-twitter"></i> Twitter
                                </h4>
                            </div>
                            <div class="desc-wrap" style="padding: 0px !important;">
                                <a class="twitter-timeline" data-width="100%" data-height="350" data-theme="light"
                                    href="https://twitter.com/MGCUBihar?ref_src=twsrc%5Etfw">Tweets by MGCUBihar</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12">
                        <div class="single-feature">
                            <div class="title facebookBg">
                                <h4>
                                    <i class="fa fa-facebook"></i> Facebook
                                </h4>
                            </div>
                            <div class="desc-wrap" style="padding: 0px !important;">
                                <iframe
                                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMGCUB2016%2F&tabs=timeline&width=305&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                    width="100%" height="350" style="border:none;overflow:hidden" scrolling="no"
                                    frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12">
                        <div class="single-feature">
                            <div class="title bg-dark-blue">
                                <h4>
                                    <i class="fa fa-youtube"></i> Youtube
                                </h4>
                            </div>
                            <div class="desc-wrap" style="padding: 0px !important;">
                                <iframe width="100%" height="350"
                                    src="https://www.youtube.com/embed/watch?v=Si5WOGhEPsQ&list=UUX35-ZgGBrtFKwZ131_Su1Q&index=1"
                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12">
                        <div class="single-feature">
                            <div class="title latest_bg">
                                <h4>News media</h4>
                            </div>
                            <div class="desc-wrap newsImg_box vcBox-content">
                                <!--<h5>text to be added</h5>-->
                                <img src="images/news/202212171432010e10f7ad22.JPG" class="img-responsive">
                                <a href="newspaper_clippings.php" class="newsall-btn">View all</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>

        @isset($callToAction)
            <!-- cta-area -->
            <section class="cta-area cta-bg pt-10 pb-40" style="background-color: #125875; padding-top:30px">
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
            <section class="testimonial-area pt-120 pb-115 p-relative fix" style="padding-top:30px;padding-bottom:30px">
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
