<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>
<html>

  <head>
    <title>Food RAiL</title>
    <link rel="shortcut icon" type="image/jpg" href="/Food-Rail/images/android-chrome-512x512.png"/>

    <link href="bundles/css2f44.css?v=ak8myr1U515jmNEOm5ZghmDw3CmFyw69XKU6BKKmk001" rel="stylesheet"/>

    <link href="bundles/style276a.css?v=PcN-MjikeyW3xpqAhRyazEdzdKH7btSwUytrF2_ocnk1" rel="stylesheet"/>
 <link href="bundles/style276a.css?v=PcN-MjikeyW3xpqAhRyazEdzdKH7btSwUytrF2_ocnk1"> 
    <link href="Content/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="shortcut icon" type="image/jpg" href="/Food-rail/images/android-chrome-512x512.png"/>


  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">

    
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

  
  <!-- <body> -->  
  </head>
  <body>

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
            <li><a href="index.php">Home</a></li>
        
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
             <li class="active"><a href="food-train.php"><span class="glyphicon glyphicon-cutlery"></span> Food order </a></li>
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
            <li><a href="customerlogin.php">food order</a></li>
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              
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


<section class="innerfood" style="background-image:url('Content/Images/inner.png');">
    <div class="container">
      <h3 class="h1-heading">------------------------------------------------------------------<h3>
        <h1 class="h1-heading">
                             Order Yummy Food In Train
        </h1>
         <h3 class="h1-heading">------------------------------------------------------------------<h3>
    </div>
</section>
<section class="trainpoit">
    <div class="rightside">
        <div class="col-md-12">
        <div class="rightimg" style="background-image:url('Content/Images/rightback.jpg');">
            <table class="table" id="GrdDetails">
                <thead>
            <tr>
                  <th>No</th>
                <th>Station</th>
                <th>Arrival Time</th>
                <th>Departure Time</th>
                <th></th>
            </tr>
        </thead>
      <tbody>
              <tr >
                        <td width="5%">1.</td>
                  <td>
                        <img src="Content/Images/board.png"> 
                        <span class="stations">Vadodara Junction (BRC)</span>
                  </td>
                       <td width="10%"> 02:30 </td>
                      <td width="10%"> 02:35  </td>
                       <td><a  href="foodlist.php" class="booknowbtn" style="cursor: pointer;">Order Now</a></td>
               </tr>
                     <tr >
                        <td width="5%">2. </td>
                        <td>
                        <img src="Content/Images/board.png"> 
                        <span class="stations">Anand Junction (ANND)</span>
                       <td width="10%">03:06  </td>
                      <td width="10%">03:08   </td>
                       <td><a  href="foodlist.php" class="booknowbtn" style="cursor: pointer;">Order Now</a></td>
                    </tr>
                     <tr>
                        <td width="5%">3. </td>
                    <td>
                        <img src="Content/Images/board.png"> 
                        <span class="stations">Ahmedabad Jn (ADI)</span>
                  </td>
                      <td width="10%"> 04:45  </td>
                      <td width="10%">05:05 </td>
                       <td><a  href="foodlist.php" class="booknowbtn" style="cursor: pointer;">Order Now</a></td>
                    </tr>
                  <tr>
                        <td width="5%">4.  </td>
                    <td>
                      <img src="Content/Images/board.png"> <span class="stations">RAJKOT JN (RJT)</span>
                    </td>
                       <td width="10%">10:05     </td>
                      <td width="10%">  10:30     </td>
                       <td><a  href="foodlist.php" class="booknowbtn" style="cursor: pointer;">Order Now</a></td>
              </tr>
              <tr>
                   <td width="5%">5.</td>
                   <td>
                        <img src="Content/Images/board.png"> 
                        <span class="stations">Jamnagar (JAM)</span>
                   </td>
                         <td width="10%"> 12:07     </td>
                         <td width="10%">12:09     </td>
                         <td><a  href="foodlist.php" class="booknowbtn" style="cursor: pointer;">Order Now</a></td>
                 </tr>
                   <tr >
                        <td width="5%">6.</td>
                        <td>
                              <img src="Content/Images/board.png"> 
                              <span class="stations">Dwarka (DWK)</span>
                        </td>
                        <td width="10%">14:46    </td>
                        <td width="10%">14:48    </td>
                       <td><a  href="foodlist.php" class="booknowbtn" style="cursor: pointer;">Order Now</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

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
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

</body>

</html>
