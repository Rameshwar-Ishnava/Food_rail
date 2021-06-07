  <!DOCTYPE html>   
<html>

  <head>

		<title>Food Rail</title>

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
        <h1 class="h1-heading">
            Live Train Status
        </h1>
    </div>
</section>
<center>

                <h1 title="Saurashtra Mail">
                  <strong>19215/Saurashtra Express</strong>
                  
                  <span>( Mumbai Central to Okha )</span>
                   
                </h1>
</center>
<center><label>Service Days:</label> 
                    Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday</center>


<section class="trainpoit">
    <div class="rightside">
        <div class="col-md-12">
        <div class="rightimg" style="background-image:url('Content/Images/rightback.jpg');">
            <table class="table" id="GrdDetails">
                <thead>
                  <th>No</th>
                <th>Station</th>
                <th>Arrival Time</th>
                <th>Departure Time</th>
                <th>Stop Time</th>
                <th>Emergency Contact</th>
                </thead>
                
          
         <tbody>

          <tr >

              <td width="10%">1</td>
              <td width="30%" class="stationName" > Mumbai Central (BCT)</td>
              <td width="10%"><strong>Starts</strong></td>
              <td width="10%">20:25</td>
              <td width="10%"> 0</td>
              <td width="10%"> 9925632265,0269233566</td>
               
              
           </tr>
          <tr >
              <td width="5%">2</td>
              <td width="30%" class="stationName" > Dadar (DDR) </td>
              <td width="10%">20:36</td>
              <td width="10%"> 20:38                      </td>
              <td width="10%">2 min</td>
              <td width="10%"> 9925632265,0269233566</td>
              
          </tr>

          <tr >

                        <td width="5%">3 </td>
                        <td width="30%" class="stationName" >
                         Borivali (BVI)
                       </td>
                       <td width="10%">
                        21:14                      </td>
                      <td width="10%">
                        21:16                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                      
                      
                    </tr>

                      <tr >

                        <td width="5%">4                        </td>


                        <td width="30%" class="stationName" >
                        Palghar (PLG)
                       </td>
                       <td width="10%">
                        22:05                      </td>
                      <td width="10%">
                        22:07                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                      
                    </tr>

                      <tr >

                        <td width="5%">5                        </td>
                        <td width="30%" class="stationName" >
                        Vapi (VAPI)
                       </td>
                       <td width="10%">
                        23:05                      </td>
                      <td width="10%">
                        23:07                      </td>
                      <td width="10%">2 min </td>
                      <td width="10%"> 9925632265,0269233566</td>
                      
                    </tr>

                      <tr >
                        <td width="5%">6                        </td>
                        <td width="30%" class="stationName" >
              Valsad (BL)
                       </td>
                       <td width="10%">
                        23:32                      </td>
                      <td width="10%">
                        23:34                      </td>
                      <td width="10%">2 min</td>
                      <td width="10%"> 9925632265,0269233566</td>
                      
                    </tr>

                      <tr >

                        <td width="5%">7                        </td>
                        <td width="30%" class="stationName" >
                      Surat (ST)
                       </td>
                       <td width="10%"> 00:37                      </td>
                      <td width="10%"> 00:42                      </td>
                      <td width="10%"> 5 min </td>
                      <td width="10%"> 9925632265,0269233566</td>
                      
                    </tr>

                      <tr ><td width="5%">8                        </td>
                        <td width="30%" class="stationName" >
                    Bharuch Junction (BH)
                       </td>
                       <td width="10%">01:31                      </td>
                      <td width="10%">01:33                      </td>
                      <td width="10%"> 2 min</td>
                      <td width="10%"> 9925632265,0269233566</td>
                      
                    </tr>
                    <tr ><td width="5%">9                        </td>
                     <td width="30%" class="stationName" >
Vadodara Junction (BRC)
                       </td>
                       <td width="10%">
                        02:30                      </td>
                      <td width="10%">
                        02:35                      </td>
                      <td width="10%">5 min</td>
                      <td width="10%"> 9925632265,0269233566</td>

                    </tr>

                      <tr >

                        <td width="5%">10                        </td>


                        <td width="30%" class="stationName" >
                Anand Junction (ANND)
                       </td>
                       <td width="10%">
                        03:06                      </td>
                      <td width="10%">
                        03:08                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">11                        </td>


                        <td width="30%" class="stationName" >
                    Nadiad Junction (ND)
                       </td>
                       <td width="10%">
                        03:23                      </td>
                      <td width="10%">
                        03:25                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">12                        </td>


                        <td width="30%" class="stationName" >
      Ahmedabad Junction (ADI)
                       </td>
                       <td width="10%">
                        04:45                      </td>
                      <td width="10%">
                        05:05                      </td>
                      <td width="10%">
                        20 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">13                        </td>


                        <td width="30%" class="stationName" >
                    Sanand (SAU)
                       </td>
                       <td width="10%">
                        05:35                      </td>
                      <td width="10%">
                        05:37                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">14                        </td>


                        <td width="30%" class="stationName" >
                Viramgam Junction (VG)
                       </td>
                       <td width="10%">
                        06:17                      </td>
                      <td width="10%">
                        06:19                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">15                        </td>


                        <td width="30%" class="stationName" >
                Lakhtar (LTR)
                       </td>
                       <td width="10%">
                        07:01                      </td>
                      <td width="10%">
                        07:03                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">16                        </td>


                        <td width="30%" class="stationName" >
              Surendranagar (SUNR)
                       </td>
                       <td width="10%">
                        07:21                      </td>
                      <td width="10%">
                        07:23                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">17                        </td>


                        <td width="30%" class="stationName" >
                      Than Junction (THAN)
                       </td>
                       <td width="10%">
                        08:21                      </td>
                      <td width="10%">
                        08:23                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">18                        </td>


                        <td width="30%" class="stationName" >
                Wankaner Junction (WKR)
                       </td>
                       <td width="10%">
                        08:58                      </td>
                      <td width="10%">
                        09:00                      </td>
                      <td width="10%">2 min</td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">19  </td>
                        <td width="30%" class="stationName" >
                            Rajkot Junction (RJT)
                       </td>
                       <td width="10%">10:05                      </td>
                      <td width="10%">10:30   </td>
                      <td width="10%">25 min</td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">20                        </td>


                        <td width="30%" class="stationName" >
                      Padadhari</a> (PDH)
                       </td>
                       <td width="10%">
                        10:52                      </td>
                      <td width="10%">
                        10:54                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">21                        </td>


                        <td width="30%" class="stationName" >
                    Jam Wanthali (WTJ)
                       </td>
                       <td width="10%">
                        11:27                      </td>
                      <td width="10%">
                        11:29                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">22                        </td>


                        <td width="30%" class="stationName" >
              Alia Bada (ALB)
                       </td>
                       <td width="10%">
                        11:40                      </td>
                      <td width="10%">
                        11:42                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">23                        </td>


                        <td width="30%" class="stationName" >
              Hapa (HAPA)
                       </td>
                       <td width="10%">
                        11:53                      </td>
                      <td width="10%">
                        11:55                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">24                        </td>


                        <td width="30%" class="stationName" >Jamnagar (JAM)
                       </td>
                       <td width="10%">
                        12:07                      </td>
                      <td width="10%">
                        12:09                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">25                        </td>


                        <td width="30%" class="stationName" >Kanalas Junction</a> (KNLS)
                       </td>
                       <td width="10%">
                        12:40                      </td>
                      <td width="10%">
                        12:42                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">26                        </td>


                        <td width="30%" class="stationName" >Khambhaliya (KMBL)
                       </td>
                       <td width="10%">
                        13:06                      </td>
                      <td width="10%">
                        13:08                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">27                        </td>


                        <td width="30%" class="stationName" >Bhatiya (BHTA)
                       </td>
                       <td width="10%">
                        14:08                      </td>
                      <td width="10%">
                        14:10                      </td>
                      <td width="10%">
                        2 min
                      </td>
                      <td width="10%"> 9925632265,0269233566</td>
                    </tr>

                      <tr >

                        <td width="5%">28                        </td>


                        <td width="30%" class="stationName" >Dwarka (DWK)
                       </td>
                       <td width="10%">
                        14:46                      </td>
                      <td width="10%">
                        14:48                      </td>
                      <td width="10%">
                        2 min </td>
                      <td width="10%"> 9925632265,0269233566</td>
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
</body>
</html>

           