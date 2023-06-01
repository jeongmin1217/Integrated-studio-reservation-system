<?php
session_start();
$session_id = $_SESSION[ 'id' ];
$date = $_POST["date"];
$user_id = $_POST["user_id"];
$reservation_id = $_POST["reservation_id"];

$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "UPDATE P_RESERVATION ";
	$sql .= " SET date='".$date."'";
	$sql .= " WHERE reservation_id='".$reservation_id."'";
	$res = mysqli_query($mysqli, $sql);
		if ($res) {
		   echo "<script>window.alert('$reservation_id 번 예약이 $date 로 성공적으로 변경되었습니다.');</script>";
		   include "showReserveList.php";
		} else {
		   echo "<script>window.alert('예약 변경에 실패하였습니다.');</script>";
		}

}
?>



