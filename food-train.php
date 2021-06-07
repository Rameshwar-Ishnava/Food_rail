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
            <li><a href="track.php"><span class="glyphicon glyphicon-cutlery"></span> TRAIN TRACK </a></li>
             <li class="active"><a href="food-train.php"><span class="glyphicon glyphicon-cutlery"></span> Food Order </a></li>
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

    
  
    

</head>
<body>


<section class="innerfood" style="background-image:url('Content/Images/inner.png');">
    <div class="container"><h1>.</h1>
        <h1 class="h1-heading">
        Food delivery in Train </h1>
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
                                Order food in trains</p>
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
                                        <input type='text' placeholder="Delivery Date" class="" id="txtTrainStartDatePicker" readonly="readonly" />
                                        <span class="input-group-addon" id="btndateimg">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="Station.php"  >
                                    <button class="btn sumotdate" id="btnSearch">Search</button></a>
                                </div>
                            </div>
                            <p>foodrail is an online food in train delivery service that offers fresh and delicious food to Indian railway passengers delivered by Fssai certified best and famous restaurants of different stations across India on passenger train seats. foodrail -Food delivery in train app provides an easy way to book and get your online train food order delivery on your seat. For train food, there is a wide variety in menu to choose your  favorite food like Thali- Veg thali, South veg Thali, Chinese, Pizza, Salad.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
        </br>
            <p>
                <strong>  Food delivery in train at your seat:</strong>
            </p>
            
            <p>
                Train passenger can order food in train from certified FSSAI restaurant and get food delivery at train seat with all necessary safety measure. We are currently deliver food on train. We at Foodrail believe to serve   best quality, hygienic & tasty food in economical prices to train passenger. We are thankful to our renowned food delivery partners who make it possible to deliver delicious food order in train.
            </p>
            <br />
            <p>
                Select Book & Get delivery of your choice meal at train berth. Enjoy Train food service with Foodrail!!
            </p>
            <br />
            <p>
                <strong>Our team follows some important step to do less or zero cancelation as below:</strong>
            </p>
            
            <ul class="ul-padding">
                <li>
                    1. Customer can place online order through Web or App. Our team verifies the filled details by customer through call in order to make it successfully delivery.
                </li>
                <li>
                    2. We track train live status time to time so that order can be dispatch accordingly, hot and yummy food can be deliver at customer train seat.
                </li>
                <li>
                    3. Our team is available here to connect with our customer for better support.
                </li>
                <li>
                    4. We welcome feedback and suggestion from customer for their order so as to improve our services.
                </li>
            </ul>
            <br />
            <p>
                <strong>How to food order in train:</strong>
            </p>
           
            <ul class="ul-padding">
                <li>
                    1. Visit on our website: <a href="index.html"> food-rail </a>
                </li>
                <li>
                    2. Insert train number and train start date, click on submit.
                </li>
                <li>
                    3. Select particular station from given station list, where you want to enjoy delicious food.
                </li>
                <li>
                    4. Choose the item from the menu list of selected station .Then, fill the require train details to get your order on time.
                </li>
                <li>
                    5. Select mode of payment as per your convience, cod (Cash on Delivery) or Online.
                </li>
            </ul>
            <br />
            <p>
                <strong>Type of food Foodrail delivery in train at your seat:</strong>
            </p>
       
            <ul class="ul-padding">
                <li>
                    1. Pure Jain food delivery in train.
                </li>
                <li>
                    2. Diabetic  food in train.
                </li>
                <li>
                    3. Pure Veg food delivery on train.
                </li>
                <li>
                    4. Non-Veg food on train.
                </li>
                <li>
                    5. South Indian food.
                </li>
                <li>
                    6. Traditional food like Guajarati food, Punjabi food, Rajasthan food, Bengali food etc.
                </li>
                <li>
                    7. Chinese food like noodles, momo’s, fried rice ,Chinese Bhel, Manchurian etc.
                </li>
                <li>
                    8. Italian food like pizza, burger, pasta, risotto etc.
                </li>
                <li>
                    9. Cake for special occasion like Birthday of your dear one.
                </li>
                <li>
                    10. Bulk food in trains.
                </li>
            </ul>
            <br />
            <p><strong>Popular railway station where we deliver food as below:</strong> Vadodara ,Anand ,Ahmedabad ,Rajkot ,Jamnagar ,Dwarka and so on ..</p>
        </aside>
    </div>
</div>
<script src="bundles/jquery/Common05ee?v=_fDrUdfW2PhRyLXoboGlIe3IezhbxlEn7euilWStyZY1"></script>

<script async src="js/FoodDeliveryinTrain.js"></script>

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
