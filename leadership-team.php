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

.swiper-controls .swiper-pagination {
    bottom: -0.8rem;

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
                        <h1 class="display-1 text-white mb-3">Leadership Team</h1>
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

        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row text-center">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Testimonials</h2>
                        <h3 class="display-4 mb-9 px-xl-11">What our Clients say about our Services</h3>
                    </div>
                    <div class="row gx-lg-8 gx-xl-12 gy-6 align-items-center">

                        <div class="col-lg-7 position-relative">
                            <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1"
                                style="top: 0; left: -1.4rem; z-index: 0;"></div>
                            <div class="row gx-md-5 gy-5">
                                <div class="col-md-6">
                                    <figure class="rounded mt-md-10 position-relative"><img
                                            src="./assets/img/photos/g5.jpg" srcset="./assets/img/photos/g5@2x.jpg 2x"
                                            alt=""></figure>
                                </div>
                                <!--/column -->
                                <div class="col-md-6">

                                    <div class="row gx-md-5 gy-5">
                                        <div class="col-md-12 order-md-2">
                                            <figure class="rounded"><img src="./assets/img/photos/g6.jpg"
                                                    srcset="./assets/img/photos/g6@2x.jpg 2x" alt=""></figure>
                                        </div>
                                        <!--/column -->
                                        <div class="col-md-10">
                                            <div class="card bg-pale-primary text-center">
                                                <div class="card-body py-11 counter-wrapper">
                                                    <h3 class="counter text-nowrap">285+</h3>
                                                    <p class="mb-0">Satisfied Clients</p>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!--/.card -->
                                        </div>
                                        <!--/column -->
                                    </div>
                                    <!--/.row -->
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-5 mt-5">
                            <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <blockquote class="icon icon-top fs-lg text-center">
                                                <p>“ELG is very user friendly and easy to implement. 100% stress-free
                                                    and increase the speed of evaluation and scoring greatly to the
                                                    evaluators, as the system completely takes care of the question
                                                    paper generation process, test creation, scanning, uploading,
                                                    evaluating, scoring and analytical reports with less human
                                                    intervention.”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1">Abdur Rahman</h5>
                                                        <p class="mb-0">Controller of Examinations, Hakeem College
                                                            (Autonomous)</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide">
                                            <blockquote class="icon icon-top fs-lg text-center">
                                                <p>“We have used ELG for the last five years and the whole system
                                                    designed based on ground reality. It’s the most valuable, effective,
                                                    efficient, trustworthy, and reliable end-to-end examination tools.
                                                    Thank you ELG Developers”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1">Suresh Kumar</h5>
                                                        <p class="mb-0">Controller of Examinations, APCAS</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide">
                                            <blockquote class="icon icon-top fs-lg text-center">
                                                <p>“I highly recommended ELG for its functional efficiency, data
                                                    accuracy, data security and time-saving feature. As the College has
                                                    an overall strength of 2700 students, the total man hours required
                                                    will be 250 minutes (less than 4 and a half hours and not even one
                                                    full working day). Instant grade card and Consolidated ready with
                                                    immediate results with enormous time saved technology.”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1">F.Liakath Ali Khan</h5>
                                                        <p class="mb-0">Controller of Examinations,Islamaih College</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!--/.swiper-slide -->
                                    </div>
                                    <!--/.swiper-wrapper -->
                                </div>
                                <!-- /.swiper -->
                            </div>
                            <!-- /.swiper-container -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.container -->
            </div>
        </section>
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row mb-3">
                    <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
                        <img src="./assets/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                            alt="" />
                        <h2 class="display-4 mb-3 px-lg-14">Save your time and money by choosing our professional team.
                        </h2>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="position-relative mb-2">
                    <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1"
                        style="bottom: 0.5rem; right: -1.7rem;"></div>
                    <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1"
                        style="top: 0.5rem; left: -1.7rem;"></div>
                    <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xxl="4"
                        data-items-lg="3" data-items-md="2" data-items-xs="1">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                    onclick="getprofile('1')">
                                    <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-4"
                                                    src="assets/img/team/MSRaju_Profile.JPG"
                                                    srcset="assets/img/team/MSRaju_Profile.JPG 2x" alt=""
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
                                    <!-- /.item-inner -->
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                    onclick="getprofile('2')">
                                    <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-4" src="assets/img/team/kiran.png"
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
                                    <!-- /.item-inner -->
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                    onclick="getprofile('3')">
                                    <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-4"
                                                    src="assets/img/team/Mudraganam_Chandrashekar_2.JPG"
                                                    srcset="assets/img/team/Mudraganam_Chandrashekar_2.JPG 2x" alt=""
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
                                    <!-- /.item-inner -->
                                </div>
                                <!--/.swiper-slide -->

                                <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                    onclick="getprofile('4')">
                                    <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-4" src="assets/img/team/devasen.png"
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
                                    <!-- /.item-inner -->
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                    onclick="getprofile('5')">
                                    <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-4" src="assets/img/team/ramesh.png"
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
                                    <!-- /.item-inner -->
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                    onclick="getprofile('6')">
                                    <div class="item-inner">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="rounded-circle w-15 mb-4" src="assets/img/team/ramesh2.png"
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
                                    <!-- /.item-inner -->
                                </div>
                                <!--/.swiper-slide -->
                                   <!--/.swiper-slide -->
                            <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#myModal"
                                onclick="getprofile('7')">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="assets/img/team/suganya.jpg"
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
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
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
            <!-- /.position-relative -->
    </div>
    <!-- /.container -->
    </section>
    <!-- /section -->
  
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