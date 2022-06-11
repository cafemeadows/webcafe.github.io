<?php	session_start();
$users = $_SESSION['username'];
$_SESSION['users']=$users;

$a1=$_POST['t1'];
$a2=$_POST['t2'];
$a3=$_POST['t3'];
$a4=$_POST['t4'];
$a5=$_POST['t5'];
$a6=$_POST['t6'];
$a7=$_POST['t7'];
$a8=$_POST['t8'];
$a9=$_POST['t9'];
$a10=$_POST['t10'];
$a11=$_POST['t11'];
$a12=$_POST['t12'];
$a13=$_POST['t13'];
$a14=$_POST['t14'];
$a15=$_POST['t15'];
$a16=$_POST['t16'];
$a17=$_POST['t17'];
$a18=$_POST['t18'];
$a19=$_POST['t19'];
$a20=$_POST['t20'];
$a21=$_POST['t21'];
$a22=$_POST['t22'];
$a23=$_POST['t23'];
$a24=$_POST['t24'];
$a25=$_POST['t25'];
$a26=$_POST['t26'];

	/* insert into cart */
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'cafe';
	$conn = mysql_connect($host, $user, $pass, $db);
	mysql_select_db($db);
	
	if($a1>0){ $retval = mysql_query( "insert into CART values('$users', 'Tea', 40, $a1)", $conn );}
	if($a2>0){ $retval = mysql_query( "insert into CART values('$users', 'Coffee', 25, $a2)", $conn );}
	if($a3>0){ $retval = mysql_query( "insert into CART values('$users', 'Ice Tea', 30, '$a3')", $conn );}
	if($a4>0){ $retval = mysql_query( "insert into CART values('$users', 'Cafe Coffee', 20, '$a4')", $conn );}
	if($a5>0){ $retval = mysql_query( "insert into CART values('$users', 'Black Coffee', 30, '$a5')", $conn );}
	if($a6>0){ $retval = mysql_query( "insert into CART values('$users', 'Cappuccino', 30, '$a6')", $conn );}
	if($a7>0){ $retval = mysql_query( "insert into CART values('$users', 'Cold Coffee', 50, '$a7')", $conn );}
	if($a8>0){ $retval = mysql_query( "insert into CART values('$users', 'Tomato Soup', 30, '$a8')", $conn );}
	if($a9>0){ $retval = mysql_query( "insert into CART values('$users', 'Veg Soup', 30, '$a9')", $conn );}
	if($a10>0){ $retval = mysql_query( "insert into CART values('$users', 'Chicken Soup', 50, '$a10')", $conn );}
	if($a11>0){ $retval = mysql_query( "insert into CART values('$users', 'Soupy Noodles', 40, '$a11')", $conn );}
	if($a12>0){ $retval = mysql_query( "insert into CART values('$users', 'Aloo Tikki - Spicy fried Aloo', 40, '$a12')", $conn );}
	if($a13>0){ $retval = mysql_query( "insert into CART values('$users', 'Veg. Patty', 25, '$a13')", $conn );}
	if($a14>0){ $retval = mysql_query( "insert into CART values('$users', 'Veg. Sandwhich', 30, '$a14')", $conn );}
	if($a15>0){ $retval = mysql_query( "insert into CART values('$users', 'Veg. Burger', 40, '$a15')", $conn );}
	if($a16>0){ $retval = mysql_query( "insert into CART values('$users', 'Veg. Roll', 60, '$a16')", $conn );}
	if($a17>0){ $retval = mysql_query( "insert into CART values('$users', 'Chicken Grilled Sandwhich', 50, '$a17')", $conn );}
	if($a18>0){ $retval = mysql_query( "insert into CART values('$users', 'Chicken Burger', 50, '$a18')", $conn );}
	if($a19>0){ $retval = mysql_query( "insert into CART values('$users', 'Chicken Roll', 60, '$a19')", $conn );}
	if($a20>0){ $retval = mysql_query( "insert into CART values('$users', 'Pineapple Patry', 30, '$a20')", $conn );}
	if($a21>0){ $retval = mysql_query( "insert into CART values('$users', 'Blackforest Patry', 35, '$a21')", $conn );}
	if($a22>0){ $retval = mysql_query( "insert into CART values('$users', 'Chocolate Truffle', '$a22')", $conn );}
	if($a23>0){ $retval = mysql_query( "insert into CART values('$users', 'Brownie', 50, '$a23')", $conn );}
	if($a24>0){ $retval = mysql_query( "insert into CART values('$users', 'Pineapple cake', 500, '$a24')", $conn );}
	if($a25>0){ $retval = mysql_query( "insert into CART values('$users', 'Chocolate cake', 600, '$a25')", $conn );}
	if($a26>0){ $retval = mysql_query( "insert into CART values('$users', 'Choco Truffle cake', 650, '$a26')", $conn );}

	include "address.php"; 
	
?>

















