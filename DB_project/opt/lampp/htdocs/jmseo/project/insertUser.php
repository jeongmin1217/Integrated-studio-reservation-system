<?php
$id = $_POST["id"];
$name = $_POST["name"];
$password = $_POST["password"];

$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
 		$sql = "INSERT INTO P_USER (id, name, password)
			VALUES ('$id', '$name', '$password');";
		$res = mysqli_query($mysqli, $sql);
	if ($res === TRUE) {
		echo "<script>window.alert('회원가입 성공')</script>";
		echo "<script>location.replace('index.html');</script>";
	} else {
		echo "<script>window.alert('회원가입 오류 발생. 다시 시도해주세요.')</script>";
		echo "<script>location.replace('register.html');</script>";
	}
	echo "<p>".$sql;
	mysqli_close($mysqli);
}
?>





