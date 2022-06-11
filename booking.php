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
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
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
                        <a href="ordermenu.php" class="nav-item nav-link">Order</a>
                        <a href="booking.php" class="nav-item nav-link active">Booking/Menu</a>
                        <a href="contact.php" class="nav-item nav-link">Contact/Reviews</a>
                          <?php session_start();
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
                        <h2>Book A Table</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="booking.php">Booking</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- Booking Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p><b>Book A Table</b></p>
                                <h3>THE FONDEST <i>Memories</i> ARE MADE WHEN <i>Gathered</i> AROUND A TABLE!</h3>
                            </div>
                            <div class="about-text">
                                 <p>
                                    We all know that families should eat together, but sometimes it’s tough to find the time. Work, school, sports practices and other obligations all seem to get in the way. But studies show that families who dine at home together are happier and healthier. </p>
                                    <p>Whether your family mealtime happens every night or only once a week, in the morning before school or late-night for just dessert, it's important to take advantage of whatever opportunity you have to nourish the mind, soul and stomach of everyone at the table. Keep reading for some fresh ideas for planning family meals, keeping everyone healthy, sparking meaningful conversations and taking the stress out of the family table.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="booking-form">
                            <form action="book.php" method="post">
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="User Name" required="required" name="name" title="Only alphabets and white space are allowed" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Email" required="required" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Mobile" required="required" name="mobile" maxlength="10" minlength="10" pattern="\d{0,10}" title="must be a vaild phone number" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group date" id="date" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker" name="date"  />
                                        <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group time" id="time" data-target-input="nearest">
                                        <input type="time" class="form-control datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker" name="time"/>
                                        <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <select class="custom-select form-control" name="guest">
                                            <option selected>Guest</option>
                                            <option value="1">1 Guest</option>
                                            <option value="2">2 Guest</option>
                                            <option value="3">3 Guest</option>
                                            <option value="4">4 Guest</option>
                                            <option value="5">5 Guest</option>
                                            <option value="6">6 Guest</option>
                                            <option value="7">7 Guest</option>
                                            <option value="8">8 Guest</option>
                                            <option value="9">9 Guest</option>
                                            <option value="10">10 Guest</option>
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn custom-btn" type="submit">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
        
        
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
                                            <h3><span>Black Coffe</span> <strong>Rs.30</strong></h3>
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
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/Snk/9.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Chicken Pizza</span> <strong>Rs.120</strong></h3>
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
