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
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="ordermenu.php" class="nav-item nav-link active">Order</a>
                        <a href="booking.php" class="nav-item nav-link ">Booking/Menu</a>
                        <a href="contact.php" class="nav-item nav-link">Contact/Reviews</a>
                          <?php 
                          if(!isset($_SESSION))
                          {session_start();}
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      { 
	  $users = $_SESSION['username'];
	  $_SESSION['users']=$users;
        echo"
          <div class='user'>
            <a class='nav-item nav-link'href='logout.php'>[$users] -LOGOUT</a>
          </div>
        ";
      }
      else
      {
        echo"
           <a href='mainlogin.php' class='nav-item nav-link'>Login/Registration</a>
        ";

      }
    
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
                        <h2>Menu</h2>
                    </div>
                    <div class="col-12">
                        <a href="index1.php">Book your Table</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
         <!-- Menu Start -->
         <form method="post" action="checkout.php">
        <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Delicious Food Menu</h2>
                </div>
                <h1 align="center"><hr>Beverages <hr></h1>
                <table border="0" cellpadding="10" width="100%">
                <tr align="center">
                	<td> <img src="img/Bev/1.jpg" alt="Image"> 
                    		<p> <strong>Tea</strong> <br> <strong>Rs.10</strong></p>
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t1" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Bev/2.jpg" alt="Image"> <br> 
                    		<p> <strong>Coffee</strong> <br> <strong>Rs.25</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t2" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Bev/3.jpg" alt="Image"> <br> 
                    		<p> <strong>Ice Tea</strong> <br> <strong>Rs.30</strong></p>  
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t3" title="Enter Qty b/w 1-9" required> </p>
                   
                    </td>
                    <td> <img src="img/Bev/4.jpg" alt="Image"> <br> 
                    		<p> <strong>Cafe Coffee</strong> <br> <strong>Rs.20</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t4" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                 </tr>
                 <tr align="center">
                    <td> <img src="img/Bev/5.jpg" alt="Image"> <br> 
                    		<p> <strong>Black Coffee</strong> <br> <strong>Rs.30</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t5" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Bev/6.jpg" alt="Image"> <br> 
                    		<p> <strong>Cappuccino</strong> <br> <strong>Rs.30</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t6" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Bev/7.jpg" alt="Image"> <br> 
                    		<p> <strong>Cold Coffee</strong> <br> <strong>Rs.50</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t7" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Bev/8.jpg" alt="Image"> <br> 
                    		<p> <strong>Tomato Soup</strong> <br> <strong>Rs.30</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t8" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                 </tr>
                 <tr align="center">
                    <td> <img src="img/Bev/9.jpg" alt="Image"> <br> 
                    		<p> <strong>Veg Soup</strong> <br> <strong>Rs.30</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t9" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Bev/10.jpg" alt="Image"> <br> 
                    		<p> <strong>Chicken Soup</strong> <br> <strong>Rs.50</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t10" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Bev/11.jpg" alt="Image"> <br> 
                    		<p> <strong>Soupy Noodles</strong> <br> <strong>Rs.40</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t11" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td>&nbsp;  </td>
                 </tr>
                 </table>
                 <!-------ni3-------->
                 <h1 align="center"><hr>Snacks <hr></h1>
                <table border="0" cellpadding="10" width="100%">
                 <tr  align="center">
                	<td> <img src="img/Snk/1.jpg" alt="Image"> <br> 
                    		<p> <strong>Aloo Tikki - Spicy fried Aloo</strong> <br> <strong>Rs.40</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t12" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Snk/2.png" alt="Image"> <br> 
                    		<p> <strong>Veg. Patty</strong> <br> <strong>Rs.25</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t13" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Snk/3.jpg" alt="Image"> <br> 
                    		<p> <strong>Veg. Sandwhich</strong> <br> <strong>Rs.30</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t14" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Snk/4.jpg" alt="Image"> <br> 
                    		<p> <strong>Veg. Burger</strong> <br> <strong>Rs.40</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t15" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                 </tr>
                 <tr align="center">  
                    <td> <img src="img/Snk/5.jpg" alt="Image"> <br> 
                    		<p> <strong>Veg. Roll</strong> <br> <strong>Rs.60</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t16" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Snk/6.jpg" alt="Image"> <br> 
                    		<p> <strong>Chicken Grilled Sandwhich</strong> <br> <strong>Rs.50</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t17" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Snk/7.jpg" alt="Image"> <br> 
                    		<p> <strong>Chicken Burger</strong> <br> <strong>Rs.50</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t18" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/Snk/8.jpg" alt="Image"> <br> 
                    		<p> <strong>Chicken Roll</strong> <br> <strong>Rs.60</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t19" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                  </tr>
                  </table>
                 <!-------ni3-------->
                <h1 align="center"><hr>Cakes/ Pastry<hr></h1>
                <table border="0" cellpadding="10" width="100%"> 
                 <tr align="center">	
                    <td> <img src="img/CP/1.jpg" alt="Image"> <br> 
                    		<p> <strong>Pineapple  Patry</strong> <br> <strong>Rs. 30</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t20" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/CP/2.jpg" alt="Image"> <br> 
                    		<p> <strong>Blackforest Patry</strong> <br> <strong>Rs.35</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t21" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/CP/3.png" alt="Image"> <br> 
                    		<p> <strong>Chocolate Truffle</strong> <br> <strong>Rs.40</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t22" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/CP/4.jpg" alt="Image"> <br> 
                    		<p> <strong>Brownie</strong> <br> <strong>Rs.50</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t23" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                  </tr>
                  <tr align="center">
                    <td> <img src="img/CP/5.jpg" alt="Image"> <br> 
                    		<p> <strong>Pineapple cake</strong> <br> <strong>Rs.500</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t24" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/CP/6.jpg" alt="Image"> <br> 
                    		<p> <strong>Chocolate cake</strong> <br> <strong>Rs.600</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t25" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                    <td> <img src="img/CP/7.jpg" alt="Image"> <br> 
                    		<p> <strong>Choco Truffle cake</strong> <br> <strong>Rs.650</strong></p> 
                            <p> <font color="#0066FF"> <strong>Quantity</strong></font> 
                            <input type="text" size="1" maxlength="1" value="0" name="t26" title="Enter Qty b/w 1-9" required> </p>
                    </td>
                 	<td>&nbsp;  </td>
                 </tr>
                 <tr>
                 	<td colspan="4" align="right"> 
                    <input type="submit" Value="Checkout" style="padding:10px; background-color:#000099; width:200px; color:#FFF;"> </td>
                 </tr>
                 </table>
                 
                 </div></div></form>               
        <!-- Menu End -->


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
