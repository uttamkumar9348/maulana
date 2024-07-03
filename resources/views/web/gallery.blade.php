@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Gallery Details
                </h1>
                <p class="text-white link-nav">
                    <a href="index.php">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="gallery.php">Gallery</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a class="orange-text">Building and Planning Monitoring Board Meeting (8 October 2021)</a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="gallery-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2>Building and Planning Monitoring Board Meeting (8 October 2021)</h2>
                </div>
            </div>
            @foreach ($view_gallery as $gallery)

            <div class="col-lg-4 col-md-4 col-xs-12">
                <a href=" {{asset('uploads/gallery/'. $gallery->image)}} " class="img-gal">
                    <div class="single-imgs relative">
                        <div class="overlay overlay-bg"></div>
                        <div class="relative">
                            <img class="img-fluid" src=" {{asset('uploads/gallery/'. $gallery->image)}} " alt="Photos">
                        </div>
                    </div>
                </a>
            </div>

            @endforeach
        </div>
    </div>
</section>
<div class="clearfix"></div>

<div class="topFooter">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="socialMedia">
                    <h6>Connect with us on:</h6>
                    <ul>
                        <li><a href="https://www.facebook.com/MGCUB2016" target="_blank"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/MGCUBihar" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://in.linkedin.com/school/mgcubihar/" target="_blank"><i
                                    class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 text-center">
                <ul class="middleLinks">
                    <li><a href="disclaimer.php">Disclaimer</a></li>
                    <li><a href="website_policy.php">Policy</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-xs-12 text-end feedbackLinks">
                <h6>
                    Send your comments/feedback
                </h6>
                <h5><a href="mailto:webadmin@mgcub.ac.in">webadmin@mgcub.ac.in</a></h5>
            </div>
        </div>
    </div>
</div>
<div class="footerNew">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-xs-12">
                <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-gray-lighter p-8">
                    <a href="gallery_thum.php" class="icon icon-circled icon-md" data-bg-color="#FC9928"
                        style="background: rgb(252, 153, 40) !important;">
                        <i class="fa fa-photo text-white font-45"></i>
                    </a>
                    <h4 class="icon-box-title text-uppercase mt-15">
                        <a href="gallery_thum.php">Photo Gallery</a>
                    </h4>
                </div>

                <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-gray-lighter p-8">
                    <a href="https://www.youtube.com/channel/UCX35-ZgGBrtFKwZ131_Su1Q" class="icon icon-circled icon-md"
                        data-bg-color="#43B14B" style="background: rgb(67, 177, 75) !important;">
                        <i class="fa fa-file-video-o text-white font-45"></i>
                    </a>
                    <h4 class="icon-box-title text-uppercase font-18 mt-15">
                        <a href="https://www.youtube.com/channel/UCX35-ZgGBrtFKwZ131_Su1Q" target="_blank">Video</a>
                    </h4>
                </div>

                <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-gray-lighter p-8">
                    <a href="newspaper_clippings.php" class="icon icon-circled icon-md" data-bg-color="#00C3CB"
                        style="background: rgb(0, 195, 203) !important;">
                        <i class="fa fa-newspaper-o text-white font-45"></i>
                    </a>
                    <h4 class="icon-box-title text-uppercase font-18 mt-15">
                        <a href="newspaper_clippings.php">News Paper Clippings</a>
                    </h4>
                </div>

                <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-gray-lighter p-8">
                    <a href="directory.php" class="icon icon-circled icon-md" data-bg-color="#EF5861"
                        style="background: rgb(239, 88, 97) !important;">
                        <i class="fa fa-phone text-white font-45"></i>
                    </a>
                    <h4 class="icon-box-title text-uppercase font-18 mt-15">
                        <a href="directory.php">Directory</a>
                    </h4>
                </div>

                <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-gray-lighter p-8">
                    <a href="tender.php" class="icon icon-circled icon-md" data-bg-color="#EF5861"
                        style="background: rgb(28, 156, 235) !important;">
                        <i class="fa fa-file-text-o text-white font-45"></i>
                    </a>
                    <h4 class="icon-box-title text-uppercase font-18 mt-15">
                        <a href="tender.php">Tenders</a>
                    </h4>
                </div>

                <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-gray-lighter p-8">
                    <a href="downloads.php" class="icon icon-circled icon-md" data-bg-color="#EF5861"
                        style="background: rgb(69, 87, 145) !important;">
                        <i class="fa fa-download text-white font-45"></i>
                    </a>
                    <h4 class="icon-box-title text-uppercase font-18 mt-15">
                        <a href="downloads.php">Downloads</a>
                    </h4>
                </div>


            </div>
            <div class="col-md-7 col-xs-12 text-center">
                <div class="centerLogo" style="margin-top: 100px;">
                    <img src="images/mgcubIcon.png" class="mt-20">
                    <h3>Mahatma Gandhi Central University</h3>
                    <h6>A Central University established by an Act of Parliament</h6>
                    <p>@Mahatma Gandhi Central University-845401, India</p>
                    <p><a href="http://www.mgcub.ac.in">www.mgcub.ac.in</a></p>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="row imp_logos">
                    <div class="col-md-12">
                        <h5 class="footerTitle">Important Links</h5>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="https://www.education.gov.in/en" target="_blank"><img src="images/imp_logos/01.png"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="https://www.ugc.ac.in/" target="_blank"><img src="images/imp_logos/02.png"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="http://naac.gov.in/index.php/en/" target="_blank"><img src="images/imp_logos/03.png"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="https://nad.ndml.in/" target="_blank"><img src="images/imp_logos/04.png"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="https://icssr.org/" target="_blank"><img src="images/imp_logos/05.png"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="https://scholarships.gov.in/" target="_blank"><img src="images/imp_logos/06.png"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="https://nta.ac.in/" target="_blank"><img src="images/imp_logos/07.png"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="https://www.vidyalakshmi.co.in/" target="_blank"><img src="images/imp_logos/08.png"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="https://delnet.in/" target="_blank"><img src="images/imp_logos/09.png"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="https://www.india.gov.in/" target="_blank"><img src="images/imp_logos/10.png"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="https://www.nirfindia.org/Home" target="_blank"><img src="images/imp_logos/11.png"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-xs-12 plr-5">
                        <a href="https://www.ariia.gov.in/" target="_blank"><img src="images/imp_logos/12.png"
                                class="img-responsive"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row top_border mt-10">
            <div class="col-md-6 col-xs-12">
                <h6 class="updatedText">Updated on: <span>25 July 2023 10:30 AM</span></h6>
            </div>
            <div class="col-md-6 col-xs-12">
                <h6 class="updatedText text-end">Number Visitors: <span>2450465</span></h6>
            </div>
        </div>
    </div>
</div>

@include('web.layouts.footer')
