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
 

  
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
</head>
<style type="text/css">
  .navbar-stick:not(.navbar-dark) {
    box-shadow: 0 0 1.25remrgba(30,34,40,.06) ;
    background: rgba(102, 104, 102, 0.97);
}
.navbar-light .navbar-nav .nav-link {
    color: #ffffff !important;
}


/* .container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    padding: 30px 50px;
} */

/* .gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
} */

.tz-gallery {
    /* padding: 40px;
    height:618px; */
}

/* Override bootstrap column paddings */
.tz-gallery .row > div {
    /* padding: 2px; */
}

.tz-gallery .lightbox img {
    /* width: 82%; */
    border-radius: 0;
    position: relative;
    height: 63%;
    object-fit: contain;
}



/* .tz-gallery .lightbox:before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: #fff;
    font-size: 26px;
    font-family: 'Glyphicons Halflings';
    content: '\e003';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}


.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(46, 132, 206, 0.7);
    content: '';
    transition: 0.4s;
} */

/* .tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
} */

.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    width: 100%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,0.1rem) !important;
    margin-right: auto;
    margin-left: auto;
}


</style>
<body>
  <div class="content-wrapper">
    <?php include('header.php'); ?>
    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./assets/img/photos/bg1.jpg">
        <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
          <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
              <h1 class="display-1 text-white mb-3">Our Certifications</h1>
              <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">Here are the latest company news from our blog that got the most attention.</p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
      <!-- /.container -->
    </section>
   
    <section class="wrapper bg-light" id="certificate">
  
  
    <div class="container py-14 py-md-16">
    <div class="container gallery-container" >

  
      <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-4 col-md-4" >
                <a class="" href="./assets/img/photos/cartification.png">
                    <img src="./assets/img/photos/cartification.png" alt="" style="height:75%">
                </a>
            </div>
            <div class="col-sm-4 col-md-4">
                <a class="" href="./assets/img/photos/cartification1.png">
                    <img src="./assets/img/photos/cartification1.png" alt="" style="height:75%">
                </a>
            </div>
            
        </div>  

      </div>

    </div>

</div>

    </section>



    
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
  </div>
  <!-- /.container -->
</section>
    <!-- /section -->
    
    <!-- /section -->
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