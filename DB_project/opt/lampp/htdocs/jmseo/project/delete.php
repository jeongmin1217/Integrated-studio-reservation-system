<?php
session_start();
$session_id = $_SESSION[ 'id' ];
$user_id = $_GET["user_id"];
$reservation_id = $_GET["reservation_id"];

$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "DELETE FROM P_RESERVATION "; 
    $sql .= " WHERE reservation_id='".$reservation_id."'";
	$res = mysqli_query($mysqli, $sql);
	if($user_id == $session_id) {
	
		if ($res) {
		   echo "<script>window.alert('$reservation_id 번 예약이 성공적으로 삭제되었습니다.');</script>";
		   include "showReserveList.php";
		} else {
		   echo "<script>window.alert('예약 삭제에 실패하였습니다.');</script>";
		}
	}	else {
		echo "<script>window.alert('다른 사람의 예약건은 삭제할 수 없습니다.');</script>";
		include "showReserveList.php";

	}
}
?>



