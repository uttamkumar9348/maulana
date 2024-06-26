<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description=" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="{{ asset('web/images/favicon.png') }}">
    <title>Welcome to the Official Website of Maulana Mazharul Haque Arabic and
        Persian University, Patna :: Home Page</title>
    <link rel="stylesheet" href="{{ asset('web/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/magnific-popup.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/nice-select.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/jquery-ui.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 header-top-right no-padding">
                        <a href="frontend/admission">Admission <img src="{{ asset('web/images/new.gif') }} "
                                alt="new image" /></a> &nbsp;|&nbsp;
                        <a href="frontend/./rti">RTI</a> &nbsp;|&nbsp;
                        <!--  <a href="frontend/recruitments">Recruitment  <img src="images/new.gif" alt="new image"/></a> &nbsp;|&nbsp; -->
                        <a href="frontend/iqac">IQAC</a> &nbsp;|&nbsp;
                        <a href="frontend/committees">Committees </a> &nbsp;|&nbsp;
                        <a href="frontend/eResources">eResources</a> &nbsp;|&nbsp;
                        <a href="frontend/tender">Tender</a> &nbsp;|&nbsp;
                        <a href="frontend/./archives">Archives</a> &nbsp;|&nbsp;
                        <a href="frontend/alumni">Alumni</a> &nbsp;|&nbsp;
                        <a href="frontend/./downloads">Downloads</a> &nbsp;|&nbsp;
                        <a href="frontend/./downloads">Notification</a> &nbsp;|&nbsp;
                        <a href="frontend/sc_st">SC/ST Cell</a> &nbsp;|&nbsp;
                        <a href="frontend/./contact_us">Contact Us</a> &nbsp;|&nbsp;
                        <a href="https://www.mmhapu.ac.in/">Old Website</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo_part">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div id="logo">
                            <a href="frontend/index">
                                <img class="rotate-image" src="{{ asset('web/images/logo.jpeg') }}"
                                    alt="rotate logo" />
                                <h3 class="text-logo orange-text"> मौलाना मज़हरुल हक़ अरबी और फ़ारसी
                                    विश्वविद्यालय<br>MAULANA MAZHARUL HAQUE ARABIC AND PERSIAN UNIVERSITY</h3>
                                <h6 class="text-logo">A State University established by an Act of Bihar State
                                    Universities</h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-md-8 col-xs-12 plr5">
                                <!--   <img class="img-responsive gandhiji_img mr-20 mt10 pull-right" src="images/slok.jpg" alt="slok" title="slok" /> -->
                                <!--<a class="hindiWebsite" href="hindi/index.php">हिंदी वेबसाइट</a>-->
                            </div>
                            <div class="col-md-4 col-xs-12 plr5">
                                <img class="img-responsive gandhiji_img" src="{{ asset('web/images/aazadi.png') }}"
                                    alt="aazadi ka amrut mahotsav" title="aazadi ka amrut mahotsav" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="main-menu">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="active">
                                <a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"
                                        style="font-size:22px;"></i></a>
                            </li>
                            <li class="menu-has-children ">
                                <a href="">About Us</a>
                                <ul>
                                    <li><a href="{{route('about')}}"> History of MMHAPU</a></li>
                                    <li><a href="{{route('missionVision')}}"> Vision & Mission</a></li>
                                    <!--  <li>frontend/visitor"> Hon'ble Visitor</a></li> -->
                                    <li><a href="{{route('chancellor')}}"> Chancellor</a></li>
                                    {{-- <li><a href="{{route('vc')}}"> Vice Chancellor</a></li> --}}
                                    <!--<li><a href="pro_vc.php"> Pro Vice-Chancellor</a></li>-->
                                    <li><a href="{{route('legacy')}}"> Legacy of Bihar</a></li>
                                    <li><a href="{{route('logo')}}"> Logo</a></li>
                                    <li><a href="{{route('actStatutes')}}"> Act & Statutes</a></li>
                                    <li><a href="{{route('ordinances')}}">Ordinances</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-children ">
                                <a href="">Administration</a>
                                <ul>
                                    <li><a href="{{route('chancellor_1')}}"> The Chancellor</a></li>
                                    <li><a href="{{route('vc')}}"> Vice Chancellor</a></li>
                                    <li><a href="{{route('universityAuthority')}}"> University Authorities</a></li>
                                    <li><a href="{{route('statutoryBodies')}}"> Statutory Administrative Officers</a></li>
                                    <li><a href="{{route('universityOfficers')}}"> University Administration</a></li>
                                    <!--                                        <li><a href="iqac.php"> IQAC</a></li>
                                 <li><a href="committees.php"> Committees</a></li>
                                 <li><a href="download/Office Order dated 10.05.2020 regarding Academic Calendars 2019-20_and_2020-21.pdf" > Academic calendar</a></li>-->
                                    <li><a href="{{route('directory')}}"> Directory</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-children ">
                                <a href="">Academics</a>
                                <ul>
                                    <li class="menu-has-children">
                                        <a href="#"> P.G. Departments</a>
                                        <ul>
                                            <li><a href=" {{route('departmentArabic')}} ">Department of Arabic</a></li>
                                            <li><a href="{{route('departmentArabic')}}">Department of Persian</a>
                                            </li>
                                            <li><a href="{{route('departmentArabic')}}">Department of Urdu</a></li>
                                            <li><a href="{{route('departmentArabic')}}">Department of Islamic
                                                    Studies</a></li>
                                            <li><a href="{{route('departmentArabic')}}">Department of English</a>
                                            </li>
                                            <li><a href="{{route('departmentArabic')}}">Department of Management</a>
                                            </li>
                                            <li><a href="{{route('departmentArabic')}}">Department of Journalism &
                                                    Mass Communication</a></li>
                                            <li><a href="{{route('departmentArabic')}}">Department of
                                                    Education</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-has-children">
                                        <a href="frontend/school_of_computational_sciences"> Colleges</a>
                                        <ul>
                                            <li><a href="frontend/department_of_computer_science">Constituent</a></li>
                                            <li><a href="frontend/department_of_library_science">Affiliated</a></li>
                                            <li><a href="frontend/list_of_bed_college">B.Ed</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-has-children">
                                        <a href="frontend/school_of_education"> KRC</a>
                                        <ul>
                                            <li><a href="frontend/department_of_education">KRC With AICTE
                                                    Recognition</a></li>
                                            <li><a href="frontend/department_of_education">KRC Without AICTE
                                                    Recognition</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-has-children">
                                        <a href="frontend/school_of_Humanities_and_Languages"> Madarsa</a>
                                        <ul>
                                            <li><a href="frontend/department_of_english">ALIM</a></li>
                                            <li><a href="frontend/department_of_hindi">FAZIL</a></li>
                                            <!--   <li><a href="frontend/department_of_sanskrit">Department of Sanskrit</a></li> -->
                                        </ul>
                                    </li>
                                    <!-- <li class="menu-has-children">
                                 <a href="frontend/school_of_life_sciences"> School of Life Sciences</a>
                                 <ul>
                                    <li><a href="frontend/department_of_biotechnology">Department of Biotechnology</a></li>
                                    <li><a href="frontend/department_of_botany">Department of Botany</a></li>
                                    <li><a href="frontend/department_of_zoology">Department of Zoology</a></li>
                                 </ul>
                              </li> -->
                                    <!--  <li class="menu-has-children">
                                 <a href="frontend/school_of_physical_sciences"> School of Physical Sciences</a>
                                 <ul>
                                    <li><a href="frontend/department_of_chemistry">Department of Chemistry</a></li>
                                    <li><a href="frontend/department_of_mathematics">Department of Mathematics</a></li>
                                    <li><a href="frontend/department_of_physics">Department of Physics</a></li>
                                 </ul>
                              </li> -->
                                    <!-- <li class="menu-has-children">
                                 <a href="frontend/school_of_social_sciences"> School of Social Sciences</a>
                                 <ul>
                                    <li><a href="frontend/department_of_economics">Department of Economics</a></li>
                                    <li><a href="frontend/department_of_gandhian">Department of Gandhian and Peace Studies</a></li>
                                    <li><a href="frontend/department_of_political_science">Department of Political Science</a></li>
                                    <li><a href="frontend/department_of_social_work">Department of Social Work</a></li>
                                    <li><a href="frontend/department_of_sociology">Department of Sociology</a></li>
                                 </ul>
                              </li> -->
                                    <!--<li><a href="university_laboratories.php">University Laboratories</a></li>-->
                                </ul>
                            </li>
                            <li class=""><a href="frontend/library">Library</a></li>
                            <li class="">
                                <a href="#">Centres</a>
                                <ul class="centerMenu">
                                    <li>
                                        <a class="">
                                            <i class="fa fa-plus sliderDown01">
                                                <span>School of Computational Sciences, Information
                                                    <br>and Communication Technology</span>
                                            </i>
                                            <i class="fa fa-minus sliderDown02" style="display:none;">
                                                <span>School of Computational Sciences, Information
                                                    <br>and Communication Technology</span>
                                            </i>
                                        </a>
                                        <div class="slideDiv">
                                            <p>
                                                <a href="frontend/centre_for_cyber_security">साइबर सुरक्षा केंद्र
                                                    (Centre for Cyber Security)</a>
                                            </p>
                                            <p>
                                                <a href="frontend/centre_of_acharya_bharat_muni_sanchar">आचार्य भरतमुनि
                                                    संचार शोध केन्द्र (Aacharya Bharatamuni Sanchaar Shodh Kendra)</a>
                                            </p>
                                            <p>
                                                <a
                                                    href="frontend/centre_for_maharshi_panini_gyan_vanagmay_shodh_peeth">महर्षि
                                                    पाणिनि ज्ञान वाङगमय शोध पीठ (Maharshi Panini Gyan Vanagmay Shodh
                                                    Peeth)</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="">
                                            <i class="fa fa-plus sliderDown03">
                                                <span>School of Humanities &amp; Languages</span>
                                            </i>
                                            <i class="fa fa-minus sliderDown04" style="display:none;">
                                                <span>School of Humanities &amp; Languages</span>
                                            </i>
                                        </a>
                                        <div class="slideDiv_2">
                                            <p>
                                                <a href="frontend/bharat_vidya_kendra">भारत विद्या केन्द्र (Bharat
                                                    Vidya Kendra)</a>
                                            </p>
                                            <p>
                                                <a href="frontend/centre_of_lok_kala_sanskriti">लोक कला एवं संस्कृति
                                                    निष्पादन केन्द्र (Lok Kala Evam Sanskrti Nishpadan Kendra)</a>
                                            </p>
                                            <p>
                                                <a href="frontend/maharshi_patanjali_yoga_ayurved_centre">महर्षि पंतजलि
                                                    योग एवं आयुर्वेद अध्ययन केन्द्र (Maharshi Pantanjali Yog Evam
                                                    Ayurveda Adhyayan Kendra)</a>
                                            </p>
                                            <p>
                                                <a
                                                    href="frontend/center_for_Kashi_Prasad_Jaiswal_Hindu_Adhyayan_Kendra">काशी
                                                    प्रसाद जायसवाल हिंदू अध्ययन केंद्र (Kashi Prasad Jaiswal Hindu
                                                    Adhyaan Kendra)</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="">
                                            <i class="fa fa-plus sliderDown05">
                                                <span>School of Life Sciences</span>
                                            </i>
                                            <i class="fa fa-minus sliderDown06" style="display:none;">
                                                <span>School of Life Sciences</span>
                                            </i>
                                        </a>
                                        <div class="slideDiv_3">
                                            <p>
                                                <a href="frontend/centre_of_sustainable_development">सतत विकास केंद्र
                                                    (Centre for Sustainable Development)</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="">
                                            <i class="fa fa-plus sliderDown07">
                                                <span>School of Social Sciences</span>
                                            </i>
                                            <i class="fa fa-minus sliderDown08" style="display:none;">
                                                <span>School of Social Sciences</span>
                                            </i>
                                        </a>
                                        <div class="slideDiv_4">
                                            <p>
                                                <a href="frontend/centre_for_gandhian_research">गांधी शोध केन्द्र
                                                    (Gandhi Shodh Kendra)</a>
                                            </p>
                                            <p>
                                                <a href="frontend/vaidehi_mahila_adhyan_kendra">वैदेही महिला अध्ययन
                                                    केन्द्र (Vaidehee Mahila Adhyayan Kendra)</a>
                                            </p>
                                            <p>
                                                <a href="frontend/centre_for_diaspora_studies">प्रवासी अध्ययन केन्द्र
                                                    (Pravasee Adhyayan Kendra)</a>
                                            </p>
                                            <p>
                                                <a href="frontend/deen_dayal_upadhyaya_shodhpeeth">पण्डित दीनदयाल
                                                    उपाध्याय शोध पीठ (Pandit Deendayal Upadhyaya Shodh Peeth)</a>
                                            </p>
                                            <p>
                                                <a href="frontend/centre_for_Dr_BR_Ambedkar_Sodh_kendra">डॉ. बी. आर.
                                                    अम्बेडकर शोध केंद् (Dr. B. R. Ambedkar Shodh Kendra)</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="">
                                            <i class="fa fa-plus sliderDown09">
                                                <span>Pandit Madan Mohan Malaviya School of
                                                    <br>Commerce & Management Sciences</span>
                                            </i>
                                            <i class="fa fa-minus sliderDown10" style="display:none;">
                                                <span>Pandit Madan Mohan Malaviya School of
                                                    <br>Commerce & Management Sciences</span>
                                            </i>
                                        </a>
                                        <div class="slideDiv_5">
                                            <p>
                                                <a
                                                    href="frontend/centre_for_M_Vishveshvaraiya_Udyamita_Evam_Kausha_Vikas_Kendra">एम.
                                                    विश्वेश्वरैया उद्यमिता एवं कौशल विकास केंद्र (M. Vishveshvaraiya
                                                    Udyamita evan Kosal Vikaas Kendra)</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="">
                                            <i class="fa fa-plus sliderDown11">
                                                <span>School of Education</span>
                                            </i>
                                            <i class="fa fa-minus sliderDown12" style="display:none;">
                                                <span>School of Education</span>
                                            </i>
                                        </a>
                                        <div class="slideDiv_6">
                                            <p>
                                                <a
                                                    href="frontend/centre_for_Chhatrapati_Sheevaaji_Lok_Neeti_Shiksha_Kendra">छत्रपति
                                                    शिवाजी लोक नीति शिक्षा केंद्र (Chhatrapati Sheevaaji Lok Neeti
                                                    Shiksha Kendra)</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="">
                                            <i class="fa fa-plus sliderDown13">
                                                <span>School of Physical Sciences</span>
                                            </i>
                                            <i class="fa fa-minus sliderDown14" style="display:none;">
                                                <span>School of Physical Sciences</span>
                                            </i>
                                        </a>
                                        <div class="slideDiv_7">
                                            <p>
                                                <a
                                                    href="frontend/centre_for_Maharishi_Kanaad_Antah_Anushasanatmak_Shodh_Kendra">महर्षि
                                                    कणाद अन्तः अनुशासनात्मक शोध केंद्र (Maharshi Kanaad Antah
                                                    Anushasanatmk Shodh Kendra)</a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=""><a href="frontend/mou">MOU<small>s</small></a></li>
                            <li class=""><a href="frontend/mou">RTI<small></small></a></li>
                            <li class=""><a href="frontend/facilities">Facilities</a></li>
                            <li class="menu-has-children ">
                                <a href="">Publications</a>
                                <ul>
                                    <li><a href="frontend/books_research_publication"> Books & Research Publication</a>
                                    </li>
                                    <li><a href="frontend/e_news_letter"> E- Newsletter</a></li>
                                    <li><a href="frontend/reports"> Annual Reports</a></li>
                                    <li><a href="frontend/annual_magazine"> Annual Magazine</a></li>
                                    <li><a href="frontend/documentation"> Documentation</a></li>
                                    <li><a href="frontend/newspaper_clippings"> News Clipping</a></li>
                                    <li><a href="frontend/proceedings"> Proceedings</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-children ">
                                <a href="">Students Section</a>
                                <ul>
                                    <li><a href="frontend/admission"> Admission 2022-23</a></li>
                                    <li><a href="frontend/examination"> Examination</a></li>
                                    <li><a href="frontend/syllabus"> Syllabus </a></li>
                                    <li><a href=""> Grievances</a></li>
                                    <li><a href="frontend/eVimarsh"> eVimarsh / eLearning</a></li>
                                    <li><a href="">Initiative</a></li>
                                    <li><a href="frontend/attendance"> Attendance</a></li>
                                    <li><a href=""> Evaluation</a></li>
                                    <li><a href=""> Resources</a></li>
                                    <li><a href=""> Anti-Ragging</a></li>
                                    <li><a href="frontend/library"> Library</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-children ">
                                <a href="#">Contact Us</a>
                                <ul class="right-0">
                                    <li><a href="frontend/contact_us"> Contact Us</a></li>
                                    <li><a href="frontend/address"> Address</a></li>
                                    <li><a href="frontend/how_to_reach"> How to reach</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
    <!-- #header -->
