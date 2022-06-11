<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$landmark=$_POST['landmark'];
$cate=$_POST['cate'];
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
	$stmt=$conn->prepare("insert into infor(name,email,phonenumber,address,pincode,landmark,cate)values(?,?,?,?,?,?,?)");
	$stmt->bind_param("ssisiss",$name,$email,$phonenumber,$address,$pincode,$landmark,$cate);
	$stmt->execute();
	include 'summary.php';
	$stmt->close();
}
} 
?>