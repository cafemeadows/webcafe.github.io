<?php
		session_start();
     	$users = $_SESSION['users'];
        $_SESSION['users']=$users;

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'cafe';
	$conn = mysql_connect($host, $user, $pass, $db);
	mysql_select_db($db);

	$item="";
	$sum="";
	$dt = date("Y-m-d") ;
			if(mysqli_connect_errno()) {  
				die("Failed to connect with MySQL: ". mysqli_connect_error());  
			}
			else{
				$sql1 = "select * from cart where cust = '$users';";

				$retval = mysql_query( $sql1, $conn );
				if(! $retval )
				{	
								die('Could not get data: ' . mysql_error());	
				} 
				else
				{	
					while($row = mysql_fetch_array($retval, MYSQL_NUM))
					{ 	
						$amt = $row[2]*$row[3];
						$sum = $sum + $amt;
						if($item == "")
							$item = $row[1];
						else
							$item = $item.", ".$row[1];	
					}
				}	
			}
			$sql2 = "insert into porder (cust, item, amt, date) values ('$users', '$item', $sum, '$dt');";
			/*echo "<h1>$sql2</h1>";*/
			$sql3 = "delete from cart where cust = '$users'";
	
			if($sum>0) 
			{
				mysql_query( $sql2, $conn );
				mysql_query( $sql3, $conn );
			}
			
			echo "<script> alert('Order Placed Succussfully'); </script>";
			
			include "history.php"; 
?>

















