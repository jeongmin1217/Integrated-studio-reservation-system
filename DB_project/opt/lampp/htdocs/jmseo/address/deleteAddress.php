<?php
$stuNum = $_POST["stuNum"];

$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "DELETE FROM Address WHERE stuNum='".$stuNum."'";
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) {
 		echo "<br>success";
 		echo $sql;
 	} else {
 		echo "<br>fail";
 	}
}
?>



