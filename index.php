
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Welcome to Mudunuru Limited and its group companies</title>



  <link rel="shortcut icon" href="./assets/img/favicon.png">
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- Google tag (gtag.js) --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-60834238-1"></script> 
<script> 
  window.dataLayer = window.dataLayer || []; 
  function gtag(){dataLayer.push(arguments);} 
  gtag('js', new Date()); 
 
  gtag('config', 'UA-60834238-1'); 
</script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script type="text/javascript">
    function getprofile(id) {
        $("#result").html('');
        $.ajax({
            type: "POST",
            url: 'ajax/getprofile.php',
            data: {
                id: id
            },
            success: function(data) {
                // console.log(data);
                //$("#result").html('');
                $("#result").html(data);
            }
        });
    }
    </script>
  
</head>


<style type="text/css">
  .navbar-stick:not(.navbar-dark) {
    box-shadow: 0 0 1.25remrgba(30,34,40,.06) ;
    background: rgba(102, 104, 102, 0.97);
}
.navbar-light .navbar-nav .nav-link {
    color: #ffffff !important;
}

.bg-gray {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-gray-rgb),var(--bs-bg-opacity))!important;
}
.wrapper.bg-light.angled.lower-end:after, .wrapper.bg-light.angled.upper-end:before {
    /* border-right-color: #fefefe; */
}

.swiper-container.dots-closer .swiper-pagination {
    bottom: 0rem !important;
}

.swiper-controls .swiper-navigation .swiper-button {
    background: rgb(63 120 224) !important;
    color: #ffffff !important;
    border: 0;
    box-shadow: 0 .25rem .75remrgba(30,34,40,.02);
    width: 2.2rem;
    height: 2.2rem;
    line-height: inherit;
    border-radius: 100%;
    text-shadow: none;
    transition: all .2s ease-in-out;
}

</style>
  

 
<body>

  <div class="content-wrapper">
    
    
   <?php include("header.php") ?>
   
    <section class="wrapper bg-dark">
      <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg7.jpg">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                    <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We bring solutions to make life easier.</h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We are a creative company that focuses on long term relationships with customers.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg8.jpg">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                    <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We are trusted by our customers.</h2>
                     <!-- <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Here a few reasons why our customers choose us.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div> -->
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="./assets/img/photos/bg9.jpg">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                    <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Just sit and relax.</h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We make sure your spending is stress free so that you can have the perfect control.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </section>
    <section class="wrapper bg-light angled lower-end">
      <div class="container py-14 ">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
          <div class="col-lg-6 position-relative order-lg-2">
            <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
            <div class="overlap-grid overlap-grid-2">
              <div class="item">
                <figure class="rounded shadow"><img src="./assets/img/photos/about2.jpg" srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
              </div>
              <div class="item">
                <figure class="rounded shadow"><img src="./assets/img/photos/about3.jpg" srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <img src="./assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-3">Who Are We?</h2>
            <p class="lead fs-lg">Mudunuru Limited was acquired by M S Raju in June,2022 through an Open offer with the goal of steering the company to be a leading provider of ICT products & solutions using cutting edge technologies, which are relevant to the local &amp; international clients including Private, Public &amp; Government Enterprises. The company aims at achieving this by being customer focused and working towards creating value for its customers by delivering innovative solutions that meet their requirements.</p>
           
            <p class="mb-6">Mudunuru Limited has its headquarters in India and offices in USA, Middle East, UK and Australia. It is a pioneer in the application development of leading edge technologies, including face, finger and iris based biometrics recognition; IOT solutions that connect devices to enterprise systems; cyber security services for companies threatened with data breaches or attacks by hackers (including penetration testing); smart city initiatives designed to improve quality of life through technology-based innovation; Cyber Security & Big Data Analytics—all of which it provides as cloud-based solutions.  </p>
            <p class="mb-6">Mudunuru has deep expertise in a variety of block chain technologies, data centre cloud services, managed services, as well as other areas such as business process outsourcing and knowledge process outsourcing. The company has successfully implemented projects in countries around the world, including many that have been national or international.</p>
            <div class="row gy-3 gx-xl-8">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>It has a judicious mix of fine people with experience in design, development, implementation of Software &amp; Hardware solutions.</span></li>
                  
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span class="mb-6">Leadership team having 200+ man years of experience in ICT, Education &amp; Identity &amp; Access Management</span>.</li>
                  
                </ul>
              </div>
              <!--/column -->
				
            </div>
            <!--/.row -->
			  
          </div>
          <!--/column -->
			
        </div>
        <!--/.row --><!-- /.row --><!--/.row -->
</div>
</section>
<section class="wrapper bg-gray" style="margin-top: 30px;">
  <div class="container py-14 py-md-16">
    <div class="row text-center">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <h2 class="fs-15 text-uppercase text-muted mb-3">Business Segments</h2>
        <h3 class="display-4 mb-9 px-xl-11">Mudunuru providing the simplest solution for the most complex problems</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row gx-lg-8 gx-xl-12 gy-8">
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="assets/img/icons/lineal/ENTERPRISING29.svg" class="svg-inject icon-svg icon-svg-sm text-aqua me-4" alt="" />
          </div>
        <div>
            <h4 class="mb-1">Enterprise Messaging </h4>
            <p class="mb-0">Enterprise Grade Secure, Scalable, Reliable Messaging Platform for Banks and Large Enterprises </p>
          </div>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/IDTECH29.svg" class="svg-inject icon-svg icon-svg-sm text-yellow me-4" alt="" />
          </div>
          <div>
            <h4 class="mb-1">IDTech </h4>
            <p class="mb-0">World Leading Biometrics(Face, IRIS, Fingerprint) using AI For Large Scale ID Solutions </p>
          </div>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/EDTECH 29.svg" class="svg-inject icon-svg icon-svg-sm text-red me-4" alt="" />
          </div>
          <div>
            <h4 class="mb-1">EdTech </h4>
            <p class="mb-0">Leading Edge AI based EdTech Products &amp; Solutions Skill Development with focus on AI &amp; ML </p>
          </div>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/FINTECH29.svg" class="svg-inject icon-svg icon-svg-sm text-pink me-4" alt="" />
          </div>
          <div>
            <h4 class="mb-1">FinTech</h4>
            <p class="mb-0">Banking, Insurance, Wealth Management and Fintech experts with pragmatic technology solutions</p>
          </div>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/SMART CITY29.svg" class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="" />
          </div>
          <div>
            <h4 class="mb-1">SmartCityTech </h4>
            <p class="mb-0">People, Assets, Surviellance for Any Smart City Powered by AI </p>
          </div>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img src="./assets/img/icons/lineal/RESEARCH AND DEVELOPMENT29.svg" class="svg-inject icon-svg icon-svg-sm text-purple me-4" alt="" />
          </div>
          <div>
            <h4 class="mb-1">Research &amp; Development </h4>
            <p class="mb-0">Huge Investments in R&amp;D in Leading Edge Technologies and Products </p>
          </div>
        </div>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->


		  
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    
    <section class="wrapper bg-light" id="team">
        <div class="row mb-3">
                    <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center" style="padding-top:50px;">
                        <img src="./assets/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                            alt="" />
                        <h2 class="display-4 mb-3 px-lg-14">Our Leadership Team</h2>
                    </div>
                    <!--/column -->
                </div>
      <div class="container px-md-6">
        <div class="swiper-container blog grid-view mb-17 mb-md-19" data-margin="30" data-nav="true" data-dots="true" data-items-xxl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('1')">
              <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-3"
                                                    src="assets/img/team/MSRaju_Profile-1.JPG"
                                                    srcset="assets/img/team/MSRaju_Profile-1.JPG 2x" alt=""
                                                    style="height: 97px;" />
                                                <h4 class="mb-1">MS Raju Mudunuru </h4>
                                                <div class="meta mb-2">Founder &amp; Chairman </div>
                                                <p class="mb-2" style="display:none">National Award Winner – From
                                                    President of India Best Entrepreneur Category – 2010 Serial
                                                    Entrepreneur M.S. (Software Engineering) from BITS, Pilani Advanced
                                                    Management Program, IIM-Bangalore Holds Software Patent Founded and
                                                    Nurtured Multiple companies in diverse segments </p>
                                                <nav class="nav social mb-0">
                                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                                </nav>
                                                <!-- /.social -->
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('2')">
              <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-3" src="assets/img/team/kiran.png"
                                                    srcset="assets/img/team/kiran.png 2x" alt="" />
                                                <h4 class="mb-1">Kiran Thummalapalli </h4>
                                                <div class="meta mb-2">Co-Founder &amp; Director </div>
                                                <p class="mb-2" style="display:none">MS(Software Engineering) BITS,
                                                    Pilani Extensive expertise in Technology, Product Development and
                                                    National Scale Solutions Invited Speaker at International Forums
                                                    like IBF, UN-FAO Worked with Telecom Majors Ericsson (Sweden), 3Com
                                                    (USA) Extensive expertise in Technology, Product Development and
                                                    National Scale Solutions </p>
                                                <nav class="nav social mb-0">
                                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                                </nav>
                                                <!-- /.social -->
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('3')">
              <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-3"
                                                    src="assets/img/team/Mudraganam_Chandrashekar_3.JPG"
                                                    srcset="assets/img/team/Mudraganam_Chandrashekar_3.JPG 2x" alt=""
                                                    style="height: 102px;object-fit: cover;" />
                                                <h4 class="mb-1">M Chandrasekhar </h4>
                                                <div class="meta mb-2">Director Global Business </div>
                                                <p class="mb-2" style="display:none">MS(Computer Engineering) Wayne
                                                    University, USA Enabler of people empowerment and prosperity
                                                    Entrepreneur and Motivator Strategy &amp; Business development
                                                    specialist Network builder and Eco-system developer Connecting India
                                                    and Africa Founder &amp; Director of Arziki Consultech Worked in Key
                                                    Roles at Tata Trusts, Intelliasia Software, MGRM Net, Infronics,
                                                    TCS, Danlaw </p>
                                                <nav class="nav social mb-0">
                                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                                </nav>
                                                <!-- /.social -->
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('4')">
              <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-3" src="assets/img/team/devasen.png"
                                                    srcset="assets/img/team/devasen.png 2x" alt="" />
                                                <h4 class="mb-1">Dr. Devsen Kruthiventi </h4>
                                                <div class="meta mb-2">Director EdTech - Strategy </div>
                                                <p class="mb-2" style="display:none">20+ years in IT (Information
                                                    Technology) 17 years of teaching and research in mathematics,
                                                    computer science Retd. CTO Tata Trusts Director At Reinvision Labs ,
                                                    Advisor , Adani Power, Coromandel, Unitol Solutions Visiting Faculty
                                                    at IIMA &amp; ASCI Global Knowledge Management Leader” by World
                                                    Education Congress 2016. 50 Most Influential People in Knowledge
                                                    Management Professionals Award” by WEC in 2015. </p>

                                                <nav class="nav social mb-0">
                                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                                </nav>
                                                <!-- /.social -->
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('5')">
              <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-3" src="assets/img/team/ramesh.png"
                                                    srcset="assets/img/team/ramesh.png 2x" alt="" />
                                                <h4 class="mb-1">Ramesh Gopal </h4>
                                                <div class="meta mb-2">Director EdTech Products &amp; Solutions</div>
                                                <p class="mb-2" style="display:none">MSc(Information Technology and
                                                    Management) Technocrat and Entrepreneur Over 2 Decades of expertise
                                                    in building robust products and solutions for Various Domains and
                                                    Customers. Has been a Guest Lecturer, Digital Artist, Expert
                                                    Photographer, Archaeologist, Business Analyst Strong footing in Web
                                                    Based Graphical Domain based on Mathematical Models Pioneered in
                                                    Several Products in EdTech Domain starting from Education
                                                    Intelligence to Learning Management Systems Built Advanced Products
                                                    in EdTech – Unique Assessment Products, Outcome Based Learning
                                                    Systems, Strategic Planning and Event Mgmt Products for Advanced
                                                    Display and Teaching Tools </p>
                                                <nav class="nav social mb-0">
                                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                                </nav>
                                                <!-- /.social -->
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('6')">
              <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-3" src="assets/img/team/ramesh2.png"
                                                    srcset="assets/img/team/ramesh2.png 2x" alt="" />
                                                <h4 class="mb-1">Ramesh Annam Reddy </h4>
                                                <div class="meta mb-2">Advisor </div>
                                                <p class="mb-2" style="display:none">Leading Serial Entrepreneur based
                                                    out of USA President at Sneha Media CEO at GEMS Inc(Global
                                                    Enterprise Management Solutions) for Over 2 Decades MBA from
                                                    University of Virginia Darden School of Business </p>
                                                <nav class="nav social mb-0">
                                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                                </nav>
                                                <!-- /.social -->
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
              </div>
              <!--/.swiper-slide -->
              <!-- <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('7')">
                    <div class="item-inner">
                                <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-3" src="assets/img/team/suganya.jpg"
                                                srcset="assets/img/team/suganya.jpg 2x" alt="" />
                                            <h4 class="mb-1">Suganya Ramesh </h4>
                                            <div class="meta mb-2">Advisor </div>
                                            <p class="mb-2" style="display:none">Leading Serial Entrepreneur based out
                                                of USA President at Sneha Media CEO at GEMS Inc(Global Enterprise
                                                Management Solutions) for Over 2 Decades MBA from University of Virginia
                                                Darden School of Business </p>
                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                           
                                        </div>
                                       
                                    </div>
                                   
                        </div>
              </div> -->
              <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.container-fluid -->
    </section>
	  




   
   
  </div>

  <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <!--  <div class="modal-header">
        
      
        
      </div> -->
                <!-- Modal body -->
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    <div id="result"></div>

                </div>


                <!-- Modal footer -->
                <!--  <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div> -->

            </div>
        </div>
    </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>



</body>

</html>