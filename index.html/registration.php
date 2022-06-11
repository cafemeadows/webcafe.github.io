 <?php
$name=$_POST['name'];

$username=$_POST['username'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$gender=$_POST['gender'];


//Database connection
if($password==$confirmpassword)
{
$conn= new mysqli('localhost','root','','cafe');
if($conn->connect_error)
{
	die('connection failed : ' .$conn->connect_error);
}

else{
	if (!preg_match ("/^[a-zA-z ]*$/", $name) ) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.";  
             echo $ErrMsg;  
}
else
{
  $stmt=$conn->prepare("insert into user(name,username,email,phonenumber,password,confirmpassword,gender)values(?,?,?,?,?,?,?)");
  $stmt->bind_param("sssisss",$name,$username,$email,$phonenumber,$password,$confirmpassword,$gender);
  $stmt->execute();
  include "mainlogin.php";
  $stmt->close();
  $conn->close();
}
}
}
else{
	echo"your password donot match";
}
  ?>
