<?php
include './aksi/database.php';
$sql = "SELECT id_user, email_user, password_user FROM tb_user";
$result = $conn->query($sql);

?>

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
    
    <link rel="stylesheet" href="./styles/font-style.css">
    <link rel="stylesheet" href="./styles/Product.css">
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
    <section class="breadcumb" aria-label="breadcumb" style="background-image: url('img/breadcumb-blog.jpg');">
      <div class="container-fluid">
       <div class="row">
        <div class="col-12">
          <div class="main">
            <div class="bread">
              <div class="bread-title">DDI Solution</div>
              </div>
            </div>
          </div>
        </div>
       </div>
     </div>
    </section>
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
      
    <!-- header -->
    <header class="init">
      <!-- nav -->
      <div class="navbar-default-white navbar-fixed-top">
        <div class="container-fluid"><!-- container -->
            <!-- row -->  
            <div class="row p-3-vh">
                <!-- logo --> 
                <a class="logo centered"  href="index.php">
                <img class="h-100 init" alt="logo" src="img/logo.png">
                <img class="h-100 show" alt="logo" src="img/logo.png">
                </a> 
                <!-- logo end -->

                <!-- mainmenu start -->
                <div class="white menu-init" id="main-menu">
                  <nav id="menu-center">
                    <ul>
                      <li> 
                       <a href="index.php">Home
                       </a>
                      </li>
                      <li>
                       <a href="listuser.php">List User
                       </a>
                      </li>
                      <li>
                       <a href="listpemesanan.php">List Pemesanan
                       </a>
                      </li>
                      <li>
                       <a href="portofolio.php">Portofolio
                       </a>
                      </li>
                      <li>
                        <a class="actived" href="about.php">About Us</a>
                      </li>
                    </ul>
                  </nav>
                  </div>

                <div class="menu-right centered">
                  <ul class="iconright">
                    <li>
                        <ul class="shop" id="shopbags">
                          <li>
                            <a href="#">
                              <div class="img">
                                <img alt="cart" src="img/cart/1.jpg">
                              </div>
                              <div class="title">
                                Orange Leather Sofa   <span>1x</span>
                              </div>
                              <div class="price">
                                <span>$</span>390
                              </div>
                            </a>
                            <a href="#" class="xcancel">x</a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="img">
                                <img alt="cart" src="img/cart/2.jpg">
                              </div>
                              <div class="title">
                                Wood Lamp Room  <span>1x</span>
                              </div>
                              <div class="price">
                                <span>$</span>210
                              </div>
                            </a>
                            <a href="#" class="xcancel">x</a>
                          </li>
                          <li class="price">
                            Total <span>$600</span>
                          </li>
                          <li class="total">
                            <a href="#" class="viewcart">
                              VIEW CART
                            </a>
                            <a href="#" class="viewcart white">
                              CHECKOUT
                            </a>
                          </li>
                        </ul>
                    </li>
                    <li>
                      <a class="c-search" href="#"><span class="ti-search"></span></a>
                      <ul class="shop search" id="s-search">
                        <li>
                          <form role="search" method="get" class="search-form form" action="#">
                            <label>
                                <input type="search" class="search-field" placeholder="Search..." value="" name="s" title="" />
                            </label>
                              <input type="submit" class="search-submit button" value="GO" />
                          </form>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <div id="showside" class="d-none-mobile"><span class="ti-menu"></span></div>
                      <div id="showmobile"><span class="ti-menu"></span></div>
                    </li>
                  </ul>
                </div>

            </div>
            <!-- row end-->
        </div><!-- container end -->
      </div>
      <!-- nav -->
    </header>
    <!-- header end -->

    <div class="row" >
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data User</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
             <th>ID</th>
             <th>Email</th>
             <th>Password</th>
            </tr>
          </thead>

          <tbody>
            <?php
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                 // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            ?>
            <tr>
                <td><?=$row["id_user"]?></td>
                <td><?=$row["email_user"]?></td>
                <td><?=$row["password_user"]?></td>
            </tr>
            <?php
                }
                } else {
                echo "0 results";
                }
            ?>
         </tbody>
        </table>

    <!-- footer -->
    <?php include './assets/footer.php' ?>
    <!-- footer end -->

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