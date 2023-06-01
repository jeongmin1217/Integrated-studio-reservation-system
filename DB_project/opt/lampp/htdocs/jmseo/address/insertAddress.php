<?php
$stuNum = $_POST["stuNum"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
 		$sql = "INSERT INTO Address (stuNum, name, phone, email)
			VALUES ('$stuNum', '$name', '$phone', '$email');";
		$res = mysqli_query($mysqli, $sql);
	if ($res === TRUE) {
		echo "<p>A record has been inserted.";
	} else {
		printf("Could not insert record: %s\n", mysqli_error($mysqli));
	}
	echo "<p>".$sql;
	mysqli_close($mysqli);
}
?>





