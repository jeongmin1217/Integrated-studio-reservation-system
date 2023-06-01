<?php
$stuNum = $_POST["stuNum"];
$newStuNum = $_POST["newStuNum"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "UPDATE Address ";
	$sql .= " SET stuNum='".$newStuNum."', name='".$name."', phone='".$phone."', email='".$email."'";
	$sql .= " WHERE stuNum='".$stuNum."'";
	echo $sql;
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) {
 		echo "<br>success";
 	} else {
 		echo "<br>fail";
 	}
}
?>



