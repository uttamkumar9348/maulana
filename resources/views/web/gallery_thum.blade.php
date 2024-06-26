<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Photo Gallery
                </h1>
                <p class="text-white link-nav">
                    <a href="index.php">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="#">About</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a class="orange-text">Photo Gallery</a>
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
                    <h2><span>Photo</span> Gallery</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12">
                <form method="post" action="gallery_thum.php">
                    <div class="row gallery-search-box mb-40">
                        <div class="col-md-4">
                            <select name="year" id="year" class="form-control" onchange="getGalleryName()" required="required">
                                <option value="">Select year</option>
                                                                        <option value="2022">2022</option>
                                                                                <option value="2021">2021</option>
                                                                                <option value="2020">2020</option>
                                                                    </select>
                        </div>
                        <div class="col-md-4">
                            <select name="gallery_name" id="gallery_name" class="form-control" required="required">
                                <option value="">Select Gallery Name</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="btn_submit" value="Search" class="btn btn-primary btn-block btn-sm btn">
                        </div>
                        <div class="col-md-2">
                            <a href="gallery_thum.php" class="btn btn-info btn-block btn-sm btn">Remove Search</a>
                        </div>
                    </div>
                </form>
            </div>
                                <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NTU=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="<?php echo base_url(); ?>images/gallery/55_20220425104302a57cf7a405.jpg" alt="Meeting of the Planning and Monitoring Board" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Meeting of the Planning and Monitoring Board</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NTQ=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="<?php echo base_url(); ?>images/gallery/202204251039104ed61eec84.jpg" alt="Earth Day 2022 at MGCU" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Earth Day 2022 at MGCU</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NTM=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="<?php echo base_url(); ?>images/gallery/202204251035212d1add8dd0.jpg" alt="Hon'ble Chancellor's Visit" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Hon'ble Chancellor's Visit</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NTI=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="<?php echo base_url(); ?>images/gallery/2022012810334761d20a4470.jpg" alt="Celebration of Azadi ka Amrit Mahotsav" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Celebration of Azadi ka Amrit Mahotsav</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NTE=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20220128103139c58ae40b5e.jpg" alt="Inaugural function of celebration of 75th years of India's Independence- Azadi Ka Amrit Mahotsav" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Inaugural function of celebration of 75th years of India's Independence- Azadi Ka Amrit Mahotsav</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NTA=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/202112171554202d687d2fc7.jpeg" alt="Special Lecture organised by Dept. of Gandhian & Peace Studies, MGCU (16 December 2021)" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Special Lecture organised by Dept. of Gandhian & Peace Studies, MGCU (16 December 2021)</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NDk=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/202111261609076977cd32d2.jpg" alt="राष्ट्रीय एकता दिवस पर आयोजित संगोष्ठी (31 October 2021)" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">राष्ट्रीय एकता दिवस पर आयोजित संगोष्ठी (31 October 2021)</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NDg=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/202110231009144ea56064b9.jpeg" alt="A Meeting of all administrative officers & Deans with the Hon'ble Vice Chancellor Prof. Sanjeev Kumar Sharma  (21 October 2021)" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">A Meeting of all administrative officers & Deans with the Hon'ble Vice Chancellor Prof. Sanjeev Kumar Sharma  (21 October 2021)</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NDc=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/2021101012340947c7eca3d9.jpeg" alt="Building and Planning Monitoring Board Meeting (8 October 2021)" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Building and Planning Monitoring Board Meeting (8 October 2021)</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NDY=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/202110101232490158969499.jpeg" alt="Academic Council Meeting  (9 October 2021)" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Academic Council Meeting  (9 October 2021)</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NDU=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/2021101012280824c27fb30f.jpeg" alt="महर्षि पाणिनि ज्ञान वांग्मय शोध पीठ" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">महर्षि पाणिनि ज्ञान वांग्मय शोध पीठ</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NDQ=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/202110071142438fa83fc2d3.jpg" alt="विश्वविद्यालय के पंचम स्थापना दिवस पर आयोजित हवन (3 October 2021)" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">विश्वविद्यालय के पंचम स्थापना दिवस पर आयोजित हवन (3 October 2021)</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NDM=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/2021100711391868dce41ef7.jpg" alt="विश्वविद्यालय के पंचम स्थापना दिवस पर विश्वकर्मा वनस्पति वीथिका उद्घाटन (3 October 2021)" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">विश्वविद्यालय के पंचम स्थापना दिवस पर विश्वकर्मा वनस्पति वीथिका उद्घाटन (3 October 2021)</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NDI=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20211007113618921bc1fd03.jpg" alt="विश्वविद्यालय के पंचम स्थापना दिवस पर चरक औषध उद्यान का उद्घाटन (3 October 2021)" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">विश्वविद्यालय के पंचम स्थापना दिवस पर चरक औषध उद्यान का उद्घाटन (3 October 2021)</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NDE=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20211007112940c116a84662.jpeg" alt="गाँधी जयन्ती पर आयोजित विभिन्न प्रतियोगिताएं (2 October 2021)" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">गाँधी जयन्ती पर आयोजित विभिन्न प्रतियोगिताएं (2 October 2021)</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NDA=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20211007112150ce3d966141.jpg" alt="गाँधी जयन्ती पर आयोजित राष्ट्रीय संगोष्ठी (2 October 2021)" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">गाँधी जयन्ती पर आयोजित राष्ट्रीय संगोष्ठी (2 October 2021)</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('Mzk=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20211007110148c08c83e7d7.jpg" alt="विश्वविद्यालय के पंचम् स्थापना दिवस पर आयोजित अन्य कार्यक्रम" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">विश्वविद्यालय के पंचम् स्थापना दिवस पर आयोजित अन्य कार्यक्रम</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('Mzg=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/202110071004212592df9f26.JPG" alt="5th Foundation Day " style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">5th Foundation Day </h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('Mzc=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20211007095909000757320d.jpg" alt="गाँधी जयंती (2 October 2021)" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">गाँधी जयंती (2 October 2021)</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MzY=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20211001160156fa7c91b839.jpeg" alt="EBSB" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">EBSB</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MzU=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20211001155314ae16db7b70.jpeg" alt="EBSB" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">EBSB</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MzQ=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/2021082308404511d2f63c50.jpeg" alt="Independence Day 15th August 2021 " style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Independence Day 15th August 2021 </h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MzM=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/202011271159299e0c5d4c84.jpg" alt="Constitution Day Celebration 2020" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Constitution Day Celebration 2020</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MzI=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/202010050621267ff9c691c9.jpg" alt="4th Foundation Day " style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">4th Foundation Day </h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MzE=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20200923071512066c554bd2.jpg" alt="Foundation Stone of  Main Gate and Boundary Wall" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Foundation Stone of  Main Gate and Boundary Wall</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MzA=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20200923065625533dbdddb2.jpg" alt=" Unveil the Bust of Mahatma Gandhi " style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center"> Unveil the Bust of Mahatma Gandhi </h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('Mjk=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20200817055402ee35b59f11.JPG" alt="Independence Day 2020" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Independence Day 2020</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('Mjg=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/202008050815146eb581d8f2.jpg" alt="E-Workshop & Brainstorming Session on 'Roadmap for National Education Policy2020'" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">E-Workshop & Brainstorming Session on 'Roadmap for National Education Policy2020'</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('Mjc=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20200730080320af601c06fd.jpg" alt="National Conference : Contemporary Polity and Governance in India: Inequality & Exclusion " style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">National Conference : Contemporary Polity and Governance in India: Inequality & Exclusion </h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MjY=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/202007141020423a76447c19.jpg" alt=" National Webinar on 'Sant Sahitya - Samajik Awam Sanskritik Sandarbh'" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center"> National Webinar on 'Sant Sahitya - Samajik Awam Sanskritik Sandarbh'</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MjU=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20200702032640b24ac1fde9.jpg" alt="18th Meeting of Executive Council" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">18th Meeting of Executive Council</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MjQ=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20200702032519572ea54682.jpg" alt="3rd Meeting of Planning and Monitoring Board" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">3rd Meeting of Planning and Monitoring Board</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MjM=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20200622030522c9d655ed5f.jpg" alt="Online Yoga Shivir on International Day of Yoga (IDY)-2020" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Online Yoga Shivir on International Day of Yoga (IDY)-2020</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MjE=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20200314070132ffeb326838.jpg" alt="International Women day- Programmes " style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">International Women day- Programmes </h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MjA=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20200314065346cbcf6ca6b2.jpg" alt="Annual Sports Meet 2020" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Annual Sports Meet 2020</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MTk=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20200314065219ef51327a70.jpg" alt="'International Conference on the Frontier Areas (ICFAC) Conference" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">'International Conference on the Frontier Areas (ICFAC) Conference</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MTg=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/20200204060438c5adad831a.jpg" alt="Faculty Induction Programme- Jan-2020" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Faculty Induction Programme- Jan-2020</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MTc=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/2020020405580678bd3b3e53.jpg" alt="Republic Day 2020" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Republic Day 2020</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MTY=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Inauguration Ceremony of Gandhi Bhawan" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Inauguration Ceremony of Gandhi Bhawan</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MTU=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Constitution Day 2019" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Constitution Day 2019</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MTQ=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Swachhata Pakhwada 2019" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Swachhata Pakhwada 2019</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MTM=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Fit India Movement-2019" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Fit India Movement-2019</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MTI=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Orientation Programme -2019" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Orientation Programme -2019</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MTE=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="First sports week" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">First sports week</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MTA=')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Inagural Function" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Inagural Function</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('OQ==')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Gandhi Sangrahalaya Champaran" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Gandhi Sangrahalaya Champaran</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('OA==')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Campus Life" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Campus Life</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('Nw==')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="First foundation week at MGCUB" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">First foundation week at MGCUB</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('Ng==')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="NCRI Workshop" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">NCRI Workshop</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NQ==')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Exhibition on Mahatma Gandhi in collaboration with DAVP" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Exhibition on Mahatma Gandhi in collaboration with DAVP</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('NA==')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Film Festival on Mahatma Gandhi in collaboration with DFF" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Film Festival on Mahatma Gandhi in collaboration with DFF</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('Mw==')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Run for Champaran: Satyagraha se Swachhagrahatak" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Run for Champaran: Satyagraha se Swachhagrahatak</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('Mg==')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Release of books published by MGCUB on Champaran Satyagraha" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Release of books published by MGCUB on Champaran Satyagraha</h5>
                            </div>
                        </a>
                    </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12">
                        <a href="javascript:;" onclick="viewFun('MQ==')">
                            <div class="single-imgs galleryThum relative">		
                                <div class="relative">				
                                    <img class="img-fluid" src="images/gallery/" alt="Inauguration of Book Exhibition" style="min-height: 188px; max-height: 188px;">		
                                </div>
                                <h5 class="text-center">Inauguration of Book Exhibition</h5>
                            </div>
                        </a>
                    </div>
                                <div class="clearfix"></div>

        </div>
    </div>	
</section>

 <?php $this->load->view("frontend/footer.php");?>



<form id="frm" method="post" action="gallery.php"><input type="hidden" id="g_name" name="g_name" value="" /><button type="submit" style="display: none;"></button>
</form>
<script>
    function viewFun(id) {
        $("#g_name").val(id);
        $('#frm').submit();
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        document.title = "Gallery - Mahatma Gandhi Central University, Motihari (Bihar)";
    });

    function getGalleryName() {
        var year = $("#year").val();
        $.ajax({
            url: 'get_data.php',
            data: { year: year },
            dataType: 'html',
            type: 'post',
            success: function (data) {
                $("#gallery_name").html(data);
            }
        });
    }
</script>