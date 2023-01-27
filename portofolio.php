<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>DDI Solution</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- plugin css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- animsition -->
    <link href="css/animsition.min.css" rel="stylesheet">
    <!-- lightgallery -->
    <link href="css/css/lightgallery.css" rel="stylesheet">
    <!-- font themify CSS -->
    <link href="css/themify-icons.css" rel="stylesheet" >
    <!-- font awesome CSS -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
    <!-- owl -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <!-- main css -->
    <link href="css/animated-on3step.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/queriesstyle.css" media="all" rel="stylesheet">
    </head>

    <body class="bg-init">

    <!-- preloader -->
    <div id="preloader">
    <div class="loader">
        <div class="spinner"></div>
    </div>
    </div>
    <!-- preloader -->

    <!-- container-wrapper -->
    <div class="content-wrapper animsition-overlay">
    <!-- bgblock -->
    <div id="bgblock"></div>
      
    <header class="init"><!-- header -->
      <!-- nav -->
      <?php include './assets/navbar.php' ?>
      <!-- nav -->
    </header><!-- header end -->

<!-- breadcumb -->
<section class="breadcumb" aria-label="breadcumb" style="background-image: url('img/portoback.png');">
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">
      <div class="main">
        <div class="bread">
          <div class="bread-title">PORTOFOLIO</div>
          <div class="bread-subtitle">
            <a href="index.html">Home</a> 
              <span class="spacebread"></span> 
            <span>Portofolio</span>
          </div>
        </div>
      </div>
    </div>
   </div>
 </div>
</section>
<!-- breadcumb end -->

<!-- section gallery -->
<section aria-label="works" id="Gallery">
    <div class="container-fluid">
     <div class="row p-3-vh">

      <div class="col-12 centered mb-3">
        <div class="detailcontent text-center p-0">
           <div class="subheading">OUR WORKS</div>
           <div class="heading">Best Designs</div>
         </div>
      </div>

       <!-- filter project -->
       <div class="col-md-12 text-center">
        <ul id="filter-porto" class="d-block">
          <li class="filt-projects-w selected" data-project="*">All
          </li>
          <li class="filt-projects-w" data-project=".architect">Architecture
          </li>
          <li class="filt-projects-w" data-project=".furniture">Furniture
          </li>
          <li class="filt-projects-w" data-project=".interior">Interior
          </li>
          <li class="filt-projects-w" data-project=".decor">Decor
          </li>
        </ul>
      </div>
      <!-- filter project end -->

  <!-- project -->
  <div class="col-md-12 mt-3 px-md-0">
        <div id="w-gallery-column" class="w-gallery-container">
            <a class="w-gallery architect furniture" href="img/gallery/1.11.jpg">
                <img src="img/gallery/1.11.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>

            <a class="w-gallery interior furniture" href="img/gallery/1.21.jpg">
                <img src="img/gallery/1.21.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>

            <a class="w-gallery architect decor video" href="img/gallery/1.31.jpg">
                <img src="img/gallery/1.31.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>

            <a class="w-gallery architect" href="img/gallery/1.41.jpg">
                <img src="img/gallery/1.41.jpg" alt="" class="w-gallery-image">
                 <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>

            <a class="w-gallery furniture decor" href="img/gallery/1.51.jpg">
                <img src="img/gallery/1.51.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>

            <a class="w-gallery interior furniture decor" href="img/gallery/1.61.jpg">
                <img src="img/gallery/1.61.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
            <a class="w-gallery interior furniture decor" href="img/gallery/1.71.jpg">
                <img src="img/gallery/1.71.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
            <a class="w-gallery interior furniture decor" href="img/gallery/1.81.jpg">
                <img src="img/gallery/1.81.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
            <a class="w-gallery interior furniture decor" href="img/gallery/1.91.jpg">
                <img src="img/gallery/1.91.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
        </div>
        </div>
        <!-- project end -->
        </div>
    </div>
</section>
<!-- section gallery end -->
<!-- footer -->
  <?php include './assets/footer.php' ?>
<!-- footer end -->

<!-- container-wrapper end -->

    <!-- sidegalery-->
    <?php include './assets/side.php' ?>
    <!-- sidegalery end -->

    <!-- ScrolltoTop -->
    <div id="totop" class="init">
      <i class="fa fa-chevron-up"></i>
    </div>  

  <!-- plugin js -->
  <script  src="js/pluginson3step.js"></script>
  <script src='js/bootstrap.min.js'></script>
  <!-- slider revolution  -->
  <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <!-- velocity  -->
  <script  src="js/velocity.min.js"></script>
  <!-- velocity  -->
  <script  src="js/lightgallery.js"></script>
  <!-- main js -->
  <script  src="js/sticky.js"></script>
  <script src="js/on3step.js"></script>
  <script src="js/plugin-form.js"></script>
  </body>
</html>