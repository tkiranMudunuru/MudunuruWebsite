<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Welcome to Mudunuru Limited and its group companies</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="./assets/css/plugins.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <!-- Google tag (gtag.js) --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-60834238-1"></script> 
<script> 
  window.dataLayer = window.dataLayer || []; 
  function gtag(){dataLayer.push(arguments);} 
  gtag('js', new Date()); 
 
  gtag('config', 'UA-60834238-1'); 
</script>
   
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
.image-wrapper {

    z-index: 1 !important;

}

.navbar-stick:not(.navbar-dark) {
    box-shadow: 0 0 1.25remrgba(30, 34, 40, .06);
    background: rgba(102, 104, 102, 0.97);
}

.navbar-light .navbar-nav .nav-link {
    color: #ffffff !important;
}

.modal-lg {
    max-width: 80% !important;
}

/*.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 214% !important;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 0 solid rgba(0,0,0,.2);
  border-radius: .4rem;
  box-shadow: 0 .25rem .75rem rgba(30,34,40,.02);
  outline: 0;
  margin-left: -319px!important;
}*/

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

.bg-gray {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-gray-rgb),var(--bs-bg-opacity))!important;
    padding-bottom: 1px !important;
}
</style>

<body>
    <div class="content-wrapper">
        <?php include('header.php'); ?>
        <section class="wrapper image-wrapper bg-image bg-overlay text-white"
            data-image-src="./assets/img/photos/about18.jpg">
            <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                        <h1 class="display-1 text-white mb-3">About Us</h1>
                        <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">A company turning ideas into beautiful
                            things.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>


        <!-- /section -->
        <section class="wrapper bg-light angled upper-end lower-end">
            <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                    <div class="col-lg-6 position-relative order-lg-2">
                        <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                            style="top: 3rem; left: 5.5rem"></div>
                        <div class="overlap-grid overlap-grid-2">
                            <div class="item">
                                <figure class="rounded shadow"><img src="./assets/img/photos/about2.jpg"
                                        srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                            </div>
                            <div class="item">
                                <figure class="rounded shadow"><img src="./assets/img/photos/about3.jpg"
                                        srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <img src="./assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                            alt="" />
                        <h2 class="display-4 mb-3">About Us?</h2>
                        <p class="lead fs-lg">Mudunuru Limited was acquired by M S Raju in June,2022 through an Open offer with the goal of steering the company to be a leading provider of ICT products & solutions using cutting edge technologies, which are relevant to the local &amp; international clients including Private, Public &amp; Government Enterprises. The company aims at achieving this by being customer focused and working towards creating value for its customers by delivering innovative solutions that meet their requirements.</p>
           
           <p class="mb-6">Mudunuru Limited has its headquarters in India and offices in USA, Middle East, UK and Australia. It is a pioneer in the application development of leading edge technologies, including face, finger and iris based biometrics recognition; IOT solutions that connect devices to enterprise systems; cyber security services for companies threatened with data breaches or attacks by hackers (including penetration testing); smart city initiatives designed to improve quality of life through technology-based innovation; Cyber Security & Big Data Analytics—all of which it provides as cloud-based solutions.  </p>
           <p class="mb-6">Mudunuru has deep expertise in a variety of block chain technologies, data centre cloud services, managed services, as well as other areas such as business process outsourcing and knowledge process outsourcing. The company has successfully implemented projects in countries around the world, including many that have been national or international.</p>
           
                        <div class="row gy-3 gx-xl-8">
                            <div class="col-xl-12">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Information Technology Products
                                            and Services Focussed company.</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>A Bombay Stock
                                            Exchange (BSE) Listed company.</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Headquartered in
                                            Visakhapatnam.</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Branch office in
                                            Hyderabad.</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Global presence in
                                            USA, UK, Middle East and Africa.</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                            <div class="col-xl-6 d-none">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna
                                            mollis euismod.</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa
                                            vivamus faucibus amet euismod.</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
               
        </section>

        <section class="wrapper bg-gray" style="margin-top: -50px; padding-bottom:50px;" id="mission&values">
  <div class="container py-14 py-md-16">
            <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <!-- <h2 class="fs-15 text-uppercase text-muted mb-3">Business Segments</h2> -->
                <h3 class="display-4 mb-9 px-xl-11">Our Mission & Values </h3>
            </div>
            <!-- /column -->
            </div>
    <!-- /.row -->
    <div class="row gx-lg-8 gx-xl-12 gy-8">
                <div class="col-md-6 col-lg-6">
        
                    <h4 class="mb-1">Our Mission</h4>
                    <p class="mb-0">To provide enterprise-level solutions that are simple and intuitive and a joy to use.</p>
                </div>
        
      
      <!--/column -->
                    <div class="col-md-6 col-lg-6">
                        
                                    <h4 class="mb-1">Our Values</h4>
                                    <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span class="mb-6">Put clients first and appreciate their business.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span class="mb-6">Support colleagues and make a difference to customers every day.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span class="mb-6">Make complex things simple. </span></li>
                                <li><span><i class="uil uil-check"></i></span><span class="mb-6">Act with Integrity and always do the right thing.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span class="mb-6">Action is our first instinct.</span></li>
                        
                    </div>
      <!--/column -->
      
      <!--/column -->
      
      <!--/column -->
      
      <!--/column -->
      
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
        <!-- /section -->

        <!-- /section -->
        
        <section class="wrapper bg-light" id="team">
        <div class="row mb-3">
                    <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
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
             
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.container-fluid -->
    </section>


    <section class="wrapper bg-gray" id="boardofdirectors" >
        <div class="row mb-3">
                    <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
                        <img src="./assets/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                            alt="" />
                        <h2 class="display-4 mb-3 px-lg-14">Board Of Directors</h2>
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
                                                <div class="meta mb-2">Chairman &amp; Managing Director </div>
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
                                                <div class="meta mb-2">Executive Director </div>
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
                                                <div class="meta mb-2">Additional Director (Executive) </div>
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
                                onclick="getprofile('5')">
              <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-3" src="assets/img/team/ramesh.png"
                                                    srcset="assets/img/team/ramesh.png 2x" alt="" />
                                                <h4 class="mb-1">Ramesh Gopal </h4>
                                                <div class="meta mb-2">Additional Director (Executive)</div>
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

              <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('7')">
              <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-3" src="assets/img/team/suganya.jpg"
                                                srcset="assets/img/team/suganya.jpg 2x" alt="" />
                                            <h4 class="mb-1">Suganya Ramesh </h4>
                                            <div class="meta mb-2">Additional Director (Executive) </div>
                                            <p class="mb-2" style="display:none">Leading Serial Entrepreneur based out
                                                of USA President at Sneha Media CEO at GEMS Inc(Global Enterprise
                                                Management Solutions) for Over 2 Decades MBA from University of Virginia
                                                Darden School of Business </p>
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

              <!--/.swiper-slide -->
              <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('6')">
              <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-3" src="assets/img/team/ramesh2.png"
                                                    srcset="assets/img/team/ramesh2.png 2x" alt="" />
                                                <h4 class="mb-1">Venkata Ramesh Annamreddy </h4>
                                                <div class="meta mb-2">Additional Director (Independent) </div>
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

              <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('4')">
              <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-3" src="assets/img/team/devasen.png"
                                                    srcset="assets/img/team/devasen.png 2x" alt="" />
                                                <h4 class="mb-1">Dr. Devsen Kruthiventi </h4>
                                                <div class="meta mb-2">Additional Director(Non- Executive) </div>
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

              <!-- <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('8')"> -->
                                <div class="swiper-slide">
              <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-3" src="assets/img/team/men.png"
                                                    srcset="" alt="" />
                                                <h4 class="mb-1">R.C. Rahul </h4>
                                                <div class="meta mb-2">Independent Director </div>
                                                <p class="mb-2" style="display:none"> </p>

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
                                onclick="getprofile('9')"> -->
                                <div class="swiper-slide">
              <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-3" src="assets/img/team/men.png"
                                                    srcset="" alt="" />
                                                <h4 class="mb-1">R.C. Ratul </h4>
                                                <div class="meta mb-2">Independent Director </div>
                                                <p class="mb-2" style="display:none"> </p>

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
              
              
             
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.container-fluid -->
    </section>

    
    <!-- /section -->
    <!-- <section class="wrapper bg-soft-primary">
        <div class="container py-14 py-md-16">
            <div class="row mb-10">
                <div class="col-xl-10 mx-auto">
                    <div class="row align-items-center counter-wrapper gy-6 text-center">
                        <div class="col-md-3">
                            <img src="./assets/img/icons/lineal/check.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">250+</h3>
                            <p>Completed Projects</p>
                        </div>
                        
                        <div class="col-md-3">
                            <img src="./assets/img/icons/lineal/user.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">283</h3>
                            <p>Satisfied Customers</p>
                        </div>
                      
                        <div class="col-md-3">
                            <img src="./assets/img/icons/lineal/briefcase-2.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">200+</h3>
                            <p>Expert Employees</p>
                        </div>
                        
                        <div class="col-md-3">
                            <img src="./assets/img/icons/lineal/award-2.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">8</h3>
                            <p>Awards Won</p>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
           
        </div>
        
    </section> -->
    <!-- /section -->

    <!-- /section -->
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