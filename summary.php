<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Cafe Meadows</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
       

        <!-- Favicon -->
        <link href="img/logo.jpeg" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!-- website Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Cafe <span>Meadows</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
				  <?php
                  if(!isset($_SESSION))
                          {session_start();}
                    $users = $_SESSION['username'];
                  $_SESSION['users']=$users;
                    echo "[$users]";
                 ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
       
<!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <h2>Your Bill is Ready!</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <br>
        <!--- Summary start -->
        <?php
			$sum = 0;
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'cafe';
	$conn = mysql_connect($host, $user, $pass, $db);
	mysql_select_db($db);
	
			if(mysqli_connect_errno()) {  
				die("Failed to connect with MySQL: ". mysqli_connect_error());  
			}
			else{
				$sql1 = "select * from cart where cust = '$users';";
				$retval = mysql_query( $sql1, $conn );
               
				if(! $retval )
				{	
								die('Could not get data: ' . mysql_error());	
				} 
				else
				{	
					echo "<table border=1 align='center' cellpadding='10' width='70%'>";
					echo "<tr align='center' bgcolor='#000099' style='color:#fff'><th>ITEM</th><th>Price</th> <th> Qty</th> <th> Amount </th></tr>";
					while($row = mysql_fetch_array($retval, MYSQL_NUM))
					{ 	
						$amt = $row[2]*$row[3];
						$sum = $sum + $amt;
						echo "<tr align='center'>";
						echo "<td> $row[1] </td>";	
						echo "<td> $row[2] </td>";
						echo "<td> $row[3] </td>";
						echo "<td> $amt </td>";
						echo "</tr>";
					}
					echo "<tr align='center' bgcolor='#CCCCCC'><th colspan='3'> Total </th><th> $sum </th> </tr>";
					echo "</table>";
				}		
			}
		?><br>
        <div class="container">
  <div class="row">
    <div class="col">
       <div align="center">
        <form method="post" action="rem_cart.php">
        <input type="submit" Value="Re-Order" style="padding:10px; background-color:#000099; width:200px; font-weight:bold; color:#FFF;">
        </form> &nbsp;
        
        <form method="post" action="con_cart.php">
        <input type="submit" Value="Place your order" style="padding:10px; background-color:#000099; width:200px; font-weight:bold; color:#FFF;">
        </form>
        </div>
        </div>
        <br>
    </div>
    <br>
    <div class="col">
       <div>
    <center>
    
              <button onclick="window.print();" class="btn custom-btn" >Download</button></CENTER> 
                        </div>
    </div>
        </div>  
       
        <!--- Summary end -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>9, DDA Market 1, IP Extn., New Delhi</p>
                                    <p><i class="fa fa-phone-alt"></i>+911122231074</p>
                                    <p><i class="fa fa-envelope"></i>cafemeadows@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="feature.php">Feature</a>
                                    <a href="menu.php">Menu</a>
                                    <a href="booking.php">Bookings</a>
                                    <a href="contact.php">Contact Us</a>
                                    <a href="explore.php">Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <div class="footer-link">
                            <h2>Opening Hours</h2>
                                    <a href="">Monday  -Friday</a>
                                    <a href="">9:00am- 10:30pm</a>
                                    <a href="">Saturday & Sunday</a>
                                    <a href="">9:00am- 11:00pm</a>
                        </div></div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">Cafe Meadows 2021.</a> All Rights Reserved.</p>
                    </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

        