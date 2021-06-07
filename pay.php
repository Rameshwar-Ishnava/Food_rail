<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>

  <head>
    <title> Cart | FOOD RAiL </title>
    <link rel="shortcut icon" type="image/jpg" href="/Food-Rail/images/android-chrome-512x512.png"/>
  </head>


    <link rel="shortcut icon" type="image/jpg" href="/Food-rail/images/android-chrome-512x512.png"/>


    <link href="bundles/css2f44.css?v=ak8myr1U515jmNEOm5ZghmDw3CmFyw69XKU6BKKmk001" rel="stylesheet"/>

    <link href="bundles/style276a.css?v=PcN-MjikeyW3xpqAhRyazEdzdKH7btSwUytrF2_ocnk1" rel="stylesheet"/>
  <link rel="stylesheet" type = "text/css" href ="css/contactus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

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
            <!--<li><a href="aboutus.php">About</a></li>-->
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
              <li><a href="track.php">Track Train</a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Menu </a></li>
            <li class="active"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
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
    <br>
    
    <div class="container">
          <div class="jumbotron">
            <h1>Enter Delivery details</h1>
          </div>
      </div>
      
  <<div class="container" >
    <div class="col-md-5" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form method="post" action="payment.php">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;">  Confirm your details</h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     

          <div class="form-group">
            <input type="Number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="Train_No" name="Train_No" placeholder="Train Number or Name" required>
          </div>

           <div class="form-group">
            <input type="Number" class="form-control" id="Coach" name="Coach" placeholder="coach" required>
          </div>
           <div class="form-group">
            <input type="text" class="form-control" id="Seat" name="Seat" placeholder="seat" required>
          </div>


          <input type="submit" name="submit" type="button" id="submit" name="submit" value="procced" class="btn btn-primary pull-right"/>    
        </form>

        
      </div>
    </div>
      
    </div>

     <?php
if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$Name = $conn->real_escape_string($_POST['name']);
$Email_Id = $conn->real_escape_string($_POST['email']);
$Mobile_No = $conn->real_escape_string($_POST['mobile']);
$Train_No = $conn->real_escape_string($_POST['Train_No']);
$Coach = $conn->real_escape_string($_POST['Coach']);
$Seat = $conn->real_escape_string($_POST['Seat']);

$query = "INSERT into details(Name,Email,Mobile,Train_No,Coach,Seat) VALUES('$Name','$Email_Id','$Mobile_No','$Train_No','$Coach','Seat')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>



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
</body>
</html>