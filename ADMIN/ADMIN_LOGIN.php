
<?php
require 'connection.php';
?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title> ADMIN LOGIN </title>
</head>
<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#cc66ff,#000099);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #000099;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

h2{
color: #9999ff;
font-family: 'Nunito', sans-serif;
font-size: 30px;
    line-height: 0px;
    font-weight: 700;
}
span{
color:#cc66ff;
}
h3{
color: #000099;	
}
body {
  background-color: #cc66ff;
  background-image: linear-gradient(45deg,#cc66ff,#000099);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
	</style>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h2>Cafe <span>Meadows</span></h2>
            <h3>Admin login</h3>
          </div>
        </div>
        <form class="login-form" method="post">
          <input type="text" placeholder="username" name="adminname"/>
          <input type="password" placeholder="password" name="adminpassword"/>
          <button name="login">login</button>
        </form>
      </div>
    </div>
   <?php
   
   if(isset($_POST['login'])){
    $choose=$_POST['adminname'];
   $pass=$_POST['adminpassword'];
   $sql="SELECT * FROM `admin_login` WHERE `admin_name`='$choose'";
  if($result=mysqli_query($con,$sql)){
    while ($row=mysqli_fetch_row($result)){
    $username=$row[0];
    $psw=$row[1];
    }
    if(empty($pass)){
      header('Location:cpanellogin.php');
    }
    else if($pass!=$psw){
      $X="NOT VALID!!!";
      header("Location:cpanellogin.php?&N=$X");
      
    }
    else{
      session_start();
      $_SESSION['Adminloginid']=$choose;
    header('location:dashboard.php'); 
    }
  }
}?>
</body>
</html>
