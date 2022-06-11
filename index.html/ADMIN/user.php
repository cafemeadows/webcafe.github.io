
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Cafe Meadows </title>
    <link rel="stylesheet" href="d_css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style >
     table {
  width: 80%;
}

th {
  text-align: left;
  padding:20px;
  width:50%;

}
td{
 text-align: left;
  padding:20px;
    width:50%;
}
th {
  background-color: #000099;
  color: white;
}

}
tbody {
  height: 5em;
  overflow: scroll;
}

</style> 
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Cafe Meadows</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
         <li>
          <a href="user.php" class="active">
             <i class='bx bxs-user'></i>
            <span class="links_name">User</span>
          </a>
        </li>
        <li>
          <a href="bookings.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Bookings</span>
          </a>
        </li>
        <li>
          <a href="comments.php">
             <i class='bx bxs-comment-detail' ></i>
            <span class="links_name">Comments</span>
          </a>
        </li>
        <li>
          <a href="queries.php">
             <i class='bx bx-question-mark' ></i>
            <span class="links_name">Queries</span>
          </a>
        </li>
        <li class="log_out">
          <a href="ADMIN_LOGIN.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Users</span>
      </div>
      
      <div class="profile-details">
        
        <span class="admin_name">Admin</span>
      </div>
    </nav>

    <div class="home-content">
      <center>  <table>
    <tr>
      <th>User_id</th>
    <th>Name</th>
    <th>UserName</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Password</th>
    <th>Gender</th>
  </tr>
  <?php
        
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "  <tr> <td>" . $row["user_id"]. "</td>
    <td>" . $row["name"]. "</td>
    
  <td>" . $row["username"]."</td><td>". $row["email"]."</td><td>". $row["phonenumber"]. " </td><td>". $row["password"]."</td><td>". $row["gender"]."</td></tr>";
  }
  echo "</table></center>";
} else {
  echo "0 results";
}
$conn->close();
?>
      </div>


  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
