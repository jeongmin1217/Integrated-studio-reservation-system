<HTML>
<HEAD><TITLE>영화 예매 확인</TITLE></HEAD>
<BODY>
<?php
$movieId = $_GET["id"];
$user = $_GET["user"];
//$datetime = $_GET["datetime"];

$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
		//echo "<br>예약자 이름 : $user <br>";
		//echo "예약 영화 아이디 : $movieId <br>";
		$datetime = date("Y-m-d H:i:s", time());
 		$sql = "INSERT INTO RESERVATION(User, MovieID, Date)
			VALUES ('$user', $movieId, '$datetime');";
		$res = mysqli_query($mysqli, $sql);
	if ($res === TRUE) {
		echo "<p>$user 님의 $movieId 번의 새로운 영화 예약이 성공했습니다.<br>";
		mysqli_close($mysqli);
		include "showReserveList.php";
	} else {
		printf("<p>영화 예약 실패: %s\n", mysqli_error($mysqli));
		mysqli_close($mysqli);
		include "showMovieList.php";
	}
	//echo "<p>".$sql;
}
?>
</BODY>
</HTML>