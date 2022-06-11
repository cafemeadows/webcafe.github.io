<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
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
	$stmt=$conn->prepare("insert into contact(name,email,subject,message)values(?,?,?,?)");
	$stmt->bind_param("ssss",$name,$email,$subject,$message);
	$stmt->execute();
   include "message.html";
	$stmt->close();
	$conn->close();
}
}
?>