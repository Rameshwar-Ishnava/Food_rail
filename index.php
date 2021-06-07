<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<html>

  <head>
    <title>Food RAiL</title>
    <link rel="shortcut icon" type="image/jpg" href="/Food-rail/images/android-chrome-512x512.png"/>


    <link href="bundles/css2f44.css?v=ak8myr1U515jmNEOm5ZghmDw3CmFyw69XKU6BKKmk001" rel="stylesheet"/>

    <link href="bundles/style276a.css?v=PcN-MjikeyW3xpqAhRyazEdzdKH7btSwUytrF2_ocnk1" rel="stylesheet"/>

    <link href="Content/css/font-awesome.min.css" rel="stylesheet" />
   
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
   
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">


  </head>
  <body  data-aos-easing="slide-up" data-aos-duration="800" data-aos-delay="0">

   <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
  
          <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php"><img src="images/logo.jpg" width="50" height="50"></a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
        
           <!-- <li><a href="aboutus.php">About</a></li> -->

            <li><a href="contactus.php">Feedback</a></li>

          </ul>
          
<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="track.php"><span class="glyphicon glyphicon-cutlery"></span> TRAIN TRACK </a></li>
             <li><a href="food-train.php"><span class="glyphicon glyphicon-cutlery"></span> Food order </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="track.php">Track Train</a></li>
            <li><a href="customerlogin.php">Food Order</a></li>
            

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Login <span class="caret"></span></a>
              
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <div class="slider-wrap">
     <section class="home-slider owl-carousel owl-loaded owl-drag">

        <div class="slider-item" style="background-image: url('images/hero_1.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
       
                <h1 data-aos="fade-up">Enjoy Your Food at Food RaiL</h1>
            
               </div>
            </div>
          </div>

        </div>

        <div class="slider-item" style="background-image: url('images/hero_2.jpg');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Delecious Food</h1>
              </div>
            </div>
          </div>
          
        </div>
		
		  <div class="slider-item" style="background-image: url('images/hero_3.jpg');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up" align="center">Have A Great Day</h1>
              </div>
            </div>
          </div>
          
        </div>

      </section>
    <!-- END slider -->
    </div> 
<footer class="site-footer" role="contentinfo">
       <div class="orderblock">
              <h2>Feeling Hungry?</h2>
              <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
        </div>


<section class="weoffer">
    <div class="container">
        <div class="wel_headerwhite wow fadeInUp" data-wow-duration="2s">
            <h2>We Offer Our Services</h2>
        </div>
        
            <div class="col-md-3 pdn">
                <div class="weofimg"  style="border-right: 2px solid #bfbfbf;">
                    <img src='Content/Images/food-menu.png' alt="food on train" title="food on train">
                    <h3>Food in Train</h3>
                    <p>Online order food in train and get best food delivery at  <br />your seat.</p>
                </div>
            </div>
            
            
            <div class="col-md-3 pdn">
                <div class="weofimg" style="border-right: 2px solid #bfbfbf;">
                     <img src='Content/Images/livestatus.png' alt="live train status" title="live train status">
                    <h3>Live Train Status</h3>
                    <p>Check real-time location of running trains through live train status of foodrail.</p>
                </div>
            </div>

            <div class="col-md-3 pdn">
                <div class="weofimg"  style="border-right: 2px solid #bfbfbf;">
                    <img src='Content/Images/food-menu.png' alt="food on train" title="food on train">
                    <h3>Food in Train</h3>
                    <p>Online order food in train and get best food delivery at  <br />your seat.</p>
                </div>
            </div>
            
            
            <div class="col-md-3 pdn">
                <div class="weofimg" style="border-right: 2px solid #bfbfbf;">
                     <img src='Content/Images/livestatus.png' alt="live train status" title="live train status">
                    <h3>Live Train Status</h3>
                    <p>Check real-time location of running trains through live train status of foodrail.</p>
                </div></div>
        </div>
    </div>
</section>


      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8 mb-5">
            <h3 text-align="center">About Us</h3>
            <p class="mb-5">There are numerous services to facilitate the passenger in a train. We provide one of the that have set an example towards the journey full of taste.</p>
          <!--  <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" alt="twitter"></a><li>
			        <li><a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" alt="facebook"></a></li>
             </ul>-->





              <div class="col-md-5 footer-logo footer-title footer-top">
                <div class="keepin">
                    <h3>Keep in touch</h3>
                    <ul class="social-links">
                        <li><a class="fb" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="tw" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="inlink" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="insta" href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>

          </div>
          <div class="col-md-4 mb-5">
            <div>
              <h3>Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Address:</span>
                  <span>Jamnagar, Gujarat, India</span></li>
                <li class="d-block"><span class="d-block text-black">Phone1:</span><span>+91 98244 00701</span></li>
				        <li class="d-block"><span class="d-block text-black">Phone2:</span><span>+91 81283 00365</span></li>
				        <li class="d-block"><span class="d-block text-black">Phone3:</span><span>+91 81281 91928</span></li>
                <li class="d-block"><span class="d-block text-black">Email:</span><span>foodrail@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

  <footer class="main-footer wow fadeInUp" data-wow-duration="1s">
    
    </footer>
    <div class="footer-bottom black-bg">
        <div class="container clearfix">
            <div class="footer-copyright float-left">© 2020 - 2021 Foodrail. All rights reserved</div>
            <ul class="terms-service float-right">
                <li><a href="#"><img src='Content/Images/payment-footer.png' alt="payment-footer" title="payment-footer"></a></li>
            </ul>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/boootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>

</body>
</html>