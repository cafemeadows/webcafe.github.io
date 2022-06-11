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
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
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
                        <a href="feature.php" class="nav-item nav-link">Feature</a>
                        <a href="menu.php" class="nav-item nav-link active">Menu</a>
                        <a href="booking.php" class="nav-item nav-link">Booking</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="explore.php" class="nav-item nav-link">Explore More</a>
                         <?php 
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
        echo"
          <div class='user'>
            <a class='nav-item nav-link'href='logout.php'>$_SESSION[username]-LOGOUT</a>
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
                        <a href="index.php">Home</a>
                        <a href="menu.php">Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Food Start -->
        <div class="food mt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="food-item">
                           <i class="fas fa-ice-cream"></i>
                            <h2>Ice-creams</h2>
                            <p>
                               We've got an ice cream joke for every occasion. Every spoonful brings me closer to heaven. Enjot the chilly little thing !
                            </p>
                            <a href="menu.php">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class='fas fa-hamburger'></i>
                            <h2>Snacks</h2>
                            <p>
                                I'm here for the snaks. Good taste, Good mood! Eat, sleep, snack and repeat. See you next time when you crave again.
                            </p>
                            <a href="menu.php">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class='fas fa-cocktail'></i>
                            <h2>Beverages</h2>
                            <p>
                                One sip of this will bathe the drooping spirits in delight, beyond the bliss of dreams. It's never too cold for a frozen drink.
                            </p>
                            <a href="menu.php">View Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Food End -->
        

        <!-- Menu Start -->
        <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Menu</p>
                    <h2>Delicious Food Menu</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#burgers">Beverages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">Snacks</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">Ice Cream Scoops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">Ice Cream Shakes</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#beverages">Cakes/ Pastry</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="burgers" class="container tab-pane active">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Bev/1.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Tea</span> <strong>Rs.10</strong></h3>
                                            </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Bev/2.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Coffee</span> <strong>Rs.25</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Bev/3.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Ice Tea</span> <strong>Rs.30</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Bev/4.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Cafe Coffee</span> <strong>Rs.20</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Bev/5.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Black Coffee</span> <strong>Rs.30</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Bev/6.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Cappuccino</span> <strong>Rs.30</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Bev/7.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Cold Coffee</span> <strong>Rs.50</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Bev/8.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Tomato Soup</span> <strong>Rs.30</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Bev/9.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Veg Soup</span> <strong>Rs.30</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Bev/10.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Chicken Soup</span> <strong>Rs.50</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Bev/11.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Soupy Noodles</span> <strong>Rs.40</strong></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block"><br>
                                    <img src="img/bev.jpg" alt="Image"><br><br><br><br>
                                    <img src="img/bev1.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="snacks" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Snk/1.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Aloo Tikki - Spicy fried Aloo</span> <strong>Rs.40</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Snk/2.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Veg. Patty</span> <strong>Rs.25</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Snk/3.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Veg. Sandwhich</span> <strong>Rs.30</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Snk/4.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Veg. Burger</span> <strong>Rs.40</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Snk/5.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Veg. Roll</span> <strong>Rs.60</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Snk/6.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Chicken Grilled Sandwhich</span> <strong>Rs.50</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Snk/7.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Chicken Burger</span> <strong>Rs.50</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Snk/8.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Chicken Roll</span> <strong>Rs.60</strong></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/s1.jpg" alt="Image"><br><br><br>
                                    <img src="img/s2.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="beverages" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/CP/1.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Pineapple  Patry</span> <strong>Rs. 30</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/CP/2.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Blackforest Patry</span> <strong>Rs.35</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/CP/3.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Chocolate Truffle</span> <strong>Rs.40</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/CP/4.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Brownie</span> <strong>Rs.50</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/CP/5.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Pineapple cake</span> <strong>Rs.500</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/CP/6.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Chocolate cake</span> <strong>Rs.600</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/CP/7.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Choco Truffle cake</span> <strong>Rs.650</strong></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/cp1.jpg" alt="Image"><br><br>
                                    <img src="img/cp2.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
