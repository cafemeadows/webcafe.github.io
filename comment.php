<?php
$name=$_POST['name'];
$email=$_POST['email'];
$website=$_POST['website'];
$message=$_POST['message'];

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
	$stmt=$conn->prepare("insert into reviews(name,email,website,message)values(?,?,?,?)");
	$stmt->bind_param("ssss",$name,$email,$website,$message);
	$stmt->execute();
    include "explore.php";
	$stmt->close();
	$conn->close();
}
}
?>