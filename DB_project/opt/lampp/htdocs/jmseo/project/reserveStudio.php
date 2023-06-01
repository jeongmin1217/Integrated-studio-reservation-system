<HTML>
<HEAD><TITLE>Studio Reservation</TITLE></HEAD>
<BODY>
<?php
session_start();
$session_id = $_SESSION[ 'id' ];
$studio_name = $_POST["studio_name"];
$date = $_POST["date"];
//$datetime = $_GET["datetime"];

$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
		//echo "<br>예약자 이름 : $user <br>";
		//echo "예약 영화 아이디 : $movieId <br>";
 		$sql = "INSERT INTO P_RESERVATION(user_id, studio_name, date)
			VALUES ('$session_id', '$studio_name', '$date');";
		$res = mysqli_query($mysqli, $sql);
	if ($res === TRUE) {
		echo "<script>window.alert('$session_id 님! $studio_name 에서의 $date 예약이 성공했습니다.');</script>";
		mysqli_close($mysqli);
		include "showReserveList.php";
	} else {
		printf("<p>스튜디오 예약 실패: %s\n", mysqli_error($mysqli));
		mysqli_close($mysqli);
		// include "showMovieList.php";
	}
	//echo "<p>".$sql;
}
?>
</BODY>
</HTML>