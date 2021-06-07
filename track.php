<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<html>

  <head>
    <title>Food RAiL</title>

    <link href="bundles/css2f44.css?v=ak8myr1U515jmNEOm5ZghmDw3CmFyw69XKU6BKKmk001" rel="stylesheet"/>

    <link href="bundles/style276a.css?v=PcN-MjikeyW3xpqAhRyazEdzdKH7btSwUytrF2_ocnk1" rel="stylesheet"/>

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
            <li class="active"><a href="track.php"><span class="glyphicon glyphicon-cutlery"></span> TRAIN TRACK </a></li>
             <li ><a href="food-train.php"><span class="glyphicon glyphicon-cutlery"></span> Food order </a></li>
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
            <li class="active"><a href="track.php">Track Train</a></li>
            <li><a href="customerlogin.php">food order</a></li>
            
            </li>

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
</head>
<body>


<section class="innerfood" style="background-image:url('Content/Images/inner.png');">
    <div class="container"><h1>.</h1>
        <h1 class="h1-heading">
        Track the train Live</h1>
    </div>
</section>
<section>
<div class="container">
    <div class="col-md-12 pdn">
        <aside class="payment-filters" style="padding: 30px 10px;">
            <div class="tabstop">
                <div class="container">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                Train detials</p>
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent" style="background-image:url('Content/Images/tabsback.png');">
                        <div class="tab-pane fade active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="opacity: 1;">
                            <div class="formto">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Train Name or No." name="name" id="txtTrainNoName">
                                </div><br>
                                <div class="form-group">
                                    <div class='input-group date'>
                                        <input type='text' placeholder="Date" class="" id="txtTrainStartDatePicker" readonly="readonly" />
                                        <span class="input-group-addon" id="btndateimg">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                <a href="order.php"  >  <button class="btn sumotdate" id="btnSearch" >Search</button></a>
                                </div>
                            </div>
                            


                        </div>
                    </div>
                </div>
            </div>
            <br />
            <br />
    </div>
</div>

<script src="bundles/jquery/Common05ee?v=_fDrUdfW2PhRyLXoboGlIe3IezhbxlEn7euilWStyZY1"></script>

<script async src="js/FoodDeliveryinTrain.js"></script>

</section>
    <footer class="main-footer wow fadeInUp" data-wow-duration="1s">
        
    </footer>
    <div class="footer-bottom black-bg">
        <div class="container clearfix">
            <div class="footer-copyright float-left">© 2017 - 2021 Foodrail. All rights reserved</div>
            <ul class="terms-service float-right">
                <li><a href="#"><img src='Content/Images/payment-footer.png' alt="payment-footer" title="payment-footer"></a></li>
            </ul>
        </div>
    </div>
</body>
</html>
