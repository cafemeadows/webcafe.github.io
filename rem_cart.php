<?php
		session_start();
     	$users = $_SESSION['users'];
        $_SESSION['users']=$users;
	/* delete from cart */
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'cafe';
	$conn = mysql_connect($host, $user, $pass, $db);
	mysql_select_db($db);
	
	$retval = mysql_query( "delete from CART where cust = '$users'", $conn );
	
	include "ordermenu.php"; 
	
?>

















