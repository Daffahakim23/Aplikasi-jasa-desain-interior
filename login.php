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
    <link rel="stylesheet" href="./styles/font-style.css" />
    <link rel="stylesheet" href="./styles/style.css" />
    </head>

    <body>
    <!-- container-wrapper -->
    <div class="content-wrapper animsition-overlay">

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

    
<section class="breadcumb" aria-label="breadcumb" style="background-image: url('img/headerlogin.jpg');">
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">
      <div class="main">
        <div class="bread">
          <div class="bread-title">Sign in to start your session</div>
        </div>
        <div>
        </div> 
      </div>
    </div>
   </div>
 </div>
</section>

<section class="promo2 helvebold">
  <form class="inputtext" method="POST" action="./aksi/login.php" col="10">
    <input
      type="text"
      name="email"
      id="email"
      placeholder="Email"
    />
    <input
      type="text"
      name="password"
      id="password"
      placeholder="Password"
    />
    <div class="submit">
    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>
    <p align="center">
      <a href=#>I forgot my password</a>
    </p>
    <p align="center">
      <a href="registrasi.php" class="text-center">Register a new membership</a>
    </p>
    </form>
</section>


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