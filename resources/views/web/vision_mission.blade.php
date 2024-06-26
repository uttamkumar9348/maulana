@include('web.layouts.header')


      <section class="banner-area relative about-banner" id="home">
         <div class="overlay overlay-bg"></div>
         <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
               <div class="about-content col-lg-12">
                  <h1 class="text-white">
                     About Us
                  </h1>
                  <p class="text-white link-nav"><a href="{{route('index')}}">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> About</a> <span class="lnr lnr-arrow-right"></span> <a class="orange-text">Our Vision & Mission</a></p>
               </div>
            </div>
         </div>
      </section>
      <section class="events-list-area section-gap event-page-lists">
         <div class="container">
            <div class="row">
               <div class="col-sm-9 col-md-9 col-xs-12">
                  <div class="page-title">
                     <h2><span>Our</span> Vision & Mission</h2>
                  </div>
                  <div class="mb-20">
                     <div class="detials">
                        <h4 class="inner-title">Vision</h4>
                        <ul class="custom-list-style">
                           <li><i class="fa fa-caret-right"></i>Be an internationally acclaimed University recognized for excellence in teaching, research and outreach.</li>
                           <li><i class="fa fa-caret-right"></i>Remain dedicated and steadfast in the pursuit of the best and the excellent in the realm of the material and the spiritual aligned with the Motto of the University.</li>
                           <li><i class="fa fa-caret-right"></i>Blossoming of manifold skills & competence among our learners.</li>
                           <li><i class="fa fa-caret-right"></i>Harnessing the Youths of the country for building a sustainable & integrated nation towards an enlightened World-order.</li>
                        </ul>
                     </div>
                  </div>
                  <div class="detials">
                     <h4 class="inner-title">Mission</h4>
                     <ul class="custom-list-style">
                        <li><i class="fa fa-caret-right"></i>Empowering of budding youths through imparting high quality</li>
                        <li><i class="fa fa-caret-right"></i>Education, training and research.</li>
                        <li><i class="fa fa-caret-right"></i>Fostering innovation in teaching, learning, research and compulsory services.</li>
                        <li><i class="fa fa-caret-right"></i>Enabling the students towards emerging as living and powerful harbingers of social change.</li>
                        <li><i class="fa fa-caret-right"></i>Bringing about all round development of students and contributing towards establishing the age-old ideas of ‘Vasudhaiv kutumbakam.’</li>
                        <li><i class="fa fa-caret-right"></i>Furnishing our learners with holistic development to be blessed with unending prosperity of name, fame and riches as enshrined in the motto.</li>
                     </ul>
                  </div>
               </div>
               <div class="col-sm-3 col-md-3 col-xs-12">
                  <div class="single-feature">
                     <div class="title MGCUB_bg">
                        <h4>Quick Links</h4>
                     </div>
                     <div class="desc-wrap marquee_text">
                        <ul class="custom-list-style">
                           <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('about')}}"> History of MGCU</a></li>
                           <hr>
                           <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('missionVision')}}"> Vision & Mission</a></li>
                           <hr>
                           <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href=""> Hon'ble Visitor</a></li>
                           <hr>
                           <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('chancellor')}}"> Chancellor</a></li>
                           <hr>
                           <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('vc')}}"> Vice Chancellor</a></li>
                           <hr>
                           <!--                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="pro_vc.php"> Pro Vice-Chancellor</a></li>
                              <hr>-->
                           <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('legacy')}}"> Legacy of Champaran</a></li>
                           <hr>
                           <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('logo')}}"> Logo</a></li>
                           <hr>
                           <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('actStatutes')}}"> Act & Statutes</a></li>
                           <hr>
                           <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('ordinances')}}"> Ordinance</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>




      @include('web.layouts.footer')







<script type="text/javascript">
   $(document).ready(function () {
       document.title = "Maulana Mazharul Haque Arabic and Persian University, Patna :: Vision and Mission";
   });
</script>
