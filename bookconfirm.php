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
        <link href="css/style.css" rel="stylesheet" >
    <style>
table {
  width: 80%;
}

th {
  text-align: left;
  padding:20px;
  width:50%;

}
td{
    padding-right: 10px;
    padding-left: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    width:50%;
}
th {
  background-color: #000099;
  color: white;
}
.title{
    padding-left: 140px;
}

</style>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12" style="color: white;">
                        <h2>Your booking is confirmed!</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
         <?php
     
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe";
$mobile1=$_SESSION['mobile'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM book where mobile='$mobile1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " <center><table></tr>
    <th>CATEGORIES</th><th>INFORMATION</th></tr> <tr>
    <td> Booking Id </td><td>" . $row["booking_id"]. "</td>
    
  </tr> <tr>
    <td> Name </td><td>" . $row["name"]. "</td>
    
  </tr> <tr>
    <td> Email </td><td>" . $row["email"]. "</td>
    
  </tr>  <tr>
    <td> Mobile </td><td>" . $row["mobile"]. "</td>
    
  </tr><tr>
    <td> Date </td><td>" . $row["date"]. "</td>
    
  </tr> <tr>
    <td> Time</td><td>" . $row["time"]. "</td>
    
  </tr> <tr>
    <td> Guest </td><td>" . $row["guest"]. "</td>
    
  </tr></table></center>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<div>
    <center>
    
              <button onclick="window.print();" class="btn custom-btn" >Download</button></CENTER> 
                        </div>
         
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
