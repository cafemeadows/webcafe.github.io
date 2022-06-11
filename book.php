
<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$_SESSION["mobile"]=$_POST['mobile'];
$date=date('y-m-d',strtotime($_POST['date']));
$time=$_POST['time'];
$guest=$_POST['guest'];

//Database connection
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
	$stmt=$conn->prepare("insert into book(name,email,mobile,date,time,guest)values(?,?,?,?,?,?)");
	$stmt->bind_param("ssisss",$name,$email,$_SESSION["mobile"],$date,$time,$guest);
	$stmt->execute();
	include 'bookconfirm.php';
	$stmt->close();
}
} 
?>