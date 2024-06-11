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
        padding: 10px 0px;
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
                                            onmouseover="this.stop();" onmouseout="this.start();" height="215">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-caret-right"></i>
                                                    <a href="pdf/202406101618267ede64ede1.pdf">
                                                        <span>
                                                            Notice reg. Open Counseling of M.Sc Botany, Session 2024-25.
                                                        </span>
                                                    </a>
                                                    {{-- <img src="images/new.gif" alt="new image" /> --}}
                                                </li>
                                                <hr>
                                                <li>
                                                    <i class="fa fa-caret-right"></i>
                                                    <a href="pdf/202406101618267ede64ede1.pdf">
                                                        <span>
                                                            Notice reg. Open Counseling of M.Sc Botany, Session 2024-25.
                                                        </span>
                                                    </a>
                                                    {{-- <img src="images/new.gif" alt="new image" /> --}}
                                                </li>
                                                <hr>
                                                <li>
                                                    <i class="fa fa-caret-right"></i>
                                                    <a href="pdf/202406101618267ede64ede1.pdf">
                                                        <span>
                                                            Notice reg. Open Counseling of M.Sc Botany, Session 2024-25.
                                                        </span>
                                                    </a>
                                                    {{-- <img src="images/new.gif" alt="new image" /> --}}
                                                </li>
                                                <hr>
                                                <li>
                                                    <i class="fa fa-caret-right"></i>
                                                    <a href="JavaScript:void(0);">
                                                        <span>
                                                            Merit List for 6th round of Counselling: </span>
                                                    </a>
                                                    <a class="orange-text" href="pdf/20240609203224786f972cd9.pdf">
                                                        <span class="orange-text">M.Sc. (Botany)</span>
                                                    </a>
                                                    || <a class="orange-text" href="pdf/202406101118451bf7549d23.pdf">
                                                        <span class="orange-text">MBA</span>
                                                    </a>
                                                    || <a class="orange-text" href="pdf/20240610161634807083e6a6.pdf">
                                                        <span class="orange-text">M.Sc. (Mathematics)</span>
                                                    </a>
                                                    || <a class="orange-text" href="pdf/20240611061451e50a8ec81e.pdf">
                                                        <span class="orange-text">M.Sc. (Biotechnology)</span>
                                                    </a>
                                                    <img src="images/new.gif" alt="new image" />
                                                </li>
                                                <hr>
                                                <li>
                                                    <i class="fa fa-caret-right"></i>
                                                    <a href="pdf/202406101618267ede64ede1.pdf">
                                                        <span>
                                                            Notice reg. Open Counseling of M.Sc Botany, Session 2024-25.
                                                        </span>
                                                    </a>
                                                    {{-- <img src="images/new.gif" alt="new image" /> --}}
                                                </li>
                                                <hr>
                                                <li>
                                                    <i class="fa fa-caret-right"></i>
                                                    <a href="pdf/202406101618267ede64ede1.pdf">
                                                        <span>
                                                            Notice reg. Open Counseling of M.Sc Botany, Session 2024-25.
                                                        </span>
                                                    </a>
                                                    {{-- <img src="images/new.gif" alt="new image" /> --}}
                                                </li>
                                                <hr>
                                            </ul>
                                        </marquee>
                                        <a href="" class="viewAll-btn">View all</a>
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
                                            onmouseover="this.stop();" onmouseout="this.start();" height="250">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-caret-right"></i>
                                                    <a href="pdf/20240606074354b89de6c1b3.pdf">
                                                        <span>
                                                            Back Paper Result of Semester III and revised result of
                                                            Semester IV of M. Sc. Chemistry, batch: 2020-22. </span>
                                                    </a>
                                                    <img src="images/new.gif" alt="new image" />
                                                </li>
                                                <hr>
                                                <li>
                                                    <i class="fa fa-caret-right"></i>
                                                    <a href="pdf/202406060742356e3a396970.pdf">
                                                        <span>
                                                            Revised result of M. Sc. Chemistry, Semester IV (Back
                                                            Paper), Batch: 2020-22. </span>
                                                    </a>
                                                    <img src="images/new.gif" alt="new image" />
                                                </li>
                                                <hr>
                                            </ul>
                                        </marquee>
                                        <a href="" class="viewAll-btn">View all</a>
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


                    <div class="col-md-3 col-sm-3 col-xs-12">
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
                                        <img src="images/vc_1.jpg" class="pull-left img-responsive uniImg"
                                            style="height: 90px;">
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
                                            <a href="" class="marquee-btn btn-sm"
                                                style="float: right;">Read More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="mb-10">
                                    <div class="admissoinBox">
                                        <h5>University Administrators</h5>
                                    </div>
                                    <div class="desc-wrap uniAdminBox">
                                        <div class="whiteBox whiteBox-bg">
                                            <img src="images/poi1.png" alt="Smt. Droupadi Murmu"
                                                class="img-responsive" />
                                            <div class="vcBox-content">
                                                <h5>Smt. Droupadi Murmu</h5>
                                                <h6>The President of India, Hon'ble Visitor</h6>
                                                <a href="https://presidentofindia.nic.in/Profile" target="_blank">Read
                                                    more</a>
                                            </div>
                                        </div>
                                        <div class="whiteBox whiteBox-bg">
                                            <img src="images/Dharmendra_Pradhan.png" alt="Shri Dharmendra Pradhan"
                                                class="img-responsive" />
                                            <div class="vcBox-content">
                                                <h5>Shri Dharmendra Pradhan</h5>
                                                <h6>Hon'ble Education Minister</h6>
                                                <a href="https://www.msde.gov.in/en/ministers/profile-honble-minister"
                                                    target="_blank">Read more</a>
                                            </div>
                                        </div>
                                        <div class="whiteBox whiteBox-bg">
                                            <img src="images/Mahesh Sharma_vc.jpg" alt="Padma Shri Dr Mahesh Sharma"
                                                class="img-responsive" />
                                            <div class="vcBox-content">
                                                <h5>Padma Shri Dr Mahesh Sharma </h5>
                                                <h6>Hon'ble Chancellor</h6>
                                                <a href="chancellor.php">Read more</a>
                                            </div>
                                        </div>
                                        <div class="whiteBox whiteBox-bg">
                                            <img src="images/vc_1.jpg" alt="Prof. Sanjay Srivastava"
                                                class="img img-responsive" />
                                            <div class="vcBox-content">
                                                <h5>Prof. Sanjay Srivastava</h5>
                                                <h6>Hon'ble Vice-Chancellor</h6>
                                                <a href="">Read more</a>
                                            </div>
                                        </div>
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
                                            <div>
                                                <a href="pdf/event/20240413072954853fb1c735.jpg" target="_blank">
                                                    <img src="pdf/event/20240413072954853fb1c735.jpg">
                                                    <h6>National seminar on the occasion of Dr. B. R. Ambedkar
                                                        Jayanti.<br>[14th April 2024]
                                                        <img src="images/new.gif" alt="new image"
                                                            style="    height: auto !important; width: unset; border: none;" />
                                                    </h6>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="pdf/event/20240322200632aa809ac16b.jpeg" target="_blank">
                                                    <img src="pdf/event/20240322200632aa809ac16b.jpeg">
                                                    <h6>Contribution of Shankaracharya in National Integration<br>[22
                                                        March 2024]
                                                        <img src="images/new.gif" alt="new image"
                                                            style="    height: auto !important; width: unset; border: none;" />
                                                    </h6>
                                                </a>
                                            </div>

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
                                    <h2 data-max="120">120+</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>Departments</h6>
                                    <i class="fa fa-building"></i>
                                    <h2 data-max="20">20+</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>Centres</h6>
                                    <i class="fa fa-building"></i>
                                    <h2 data-max="11">16</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>Programmes</h6>
                                    <i class="fa fa-laptop f-25"></i>
                                    <h2 data-max="65">65+</h2>
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
                                    <h2 data-max="1200" id="test">1200+</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>MOU</h6>
                                    <i class="fa fa-graduation-cap"></i>
                                    <h2 data-max="12" id="test">12+</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>Students</h6>
                                    <i class="fa fa-graduation-cap"></i>
                                    <h2 data-max="1300" id="test">1300+</h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                                <div class="counterBox">
                                    <h6>Scholars</h6>
                                    <i class="fa fa-book"></i>
                                    <h2 data-max="350" id="test">350+</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            
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
