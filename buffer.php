<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
  <head>
    <title>Food Rail</title>
      <link rel="shortcut icon" type="image/jpg" href="/Food-rail/images/android-chrome-512x512.png"/>
      <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

  
  <!-- <body> -->  

  <link rel="stylesheet" type = "text/css" href ="css/index.css">


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
          <a class="navbar-brand" href="index.php">FOOD RAiL</a>
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
             <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food RAiL </a></li>
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
           
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              
              <li> <a href="customerlogin.php">Login</a></li>
              
             
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

<?php
  error_reporting(E_ALL ^ E_NOTICE);
    $t_no=$_GET['t_no'];
    $date=$_GET['date'];
    echo $t_no, "<br>";
    echo $date;
    $new_date=str_replace("-","", $date);
    echo "<br>".$new_date;
    $url="http://indianrailapi.com/api/v2/livetrainstatus/apikey/2c4cea61fb2ec5459c12bea7c24ea1f5/trainnumber/".$t_no."/date/".$new_date."/";
  $data=file_get_contents($url);
  $json=json_decode($data,true);
  $res=$json['ResponseCode'];
  echo "<br>".$res;
  $arr=json_encode($json['CurrentStation']['StationName']);
  //echo "<br> Current Position :".implode(" ",$json['CurrentStation']);
  echo "<br> Current Position=".$arr."<br>";
  $i=0;
  echo "STATION LIST <br>";
  echo "<table class=center border=2><tr><td>S.No.</td><td>Station Name</td><td>Delay In Arrival</td>  <td>emergency information</td><td> Schedule Time</tr>";
  while(isset($json['TrainRoute'][$i]['StationName'])){
  	$num=$i+1;
  	echo "<tr><td>".$num."</td>";
  	echo "<td>".$json['TrainRoute'][$i]['StationName']."</td>";
  	echo "<td>".$json['TrainRoute'][$i]['DelayInArrival']."</td>";
  	echo "<td>".$json['TrainRoute'][$i]['ScheduleArrival']."</td></tr>";
  	$i++;
  }
  echo "</table>";


?>
</body>
</html>