<?php
$id = $_GET["id"];
$user = $_GET["user"]; //PHP 변수명 $user
//HTML Input명 "user"
$time = time();
echo date("Y/m/d G:i:s", $time); 
$time2 = date("Y/m/d G:i:s", $time);
$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); //나중에 자기 계정 변경
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
} else { //DB 컬럼명 user
$sql = "INSERT INTO MEMO(id, user, time)
VALUES ('$id', '$user', '$time2')"; //PHP 변수명 user
$res = mysqli_query($mysqli, $sql);
if ($res === TRUE) {
echo "<p>A record has been inserted.";
} else {
printf("Could not insert record: %s\n", mysqli_error($mysqli));
}
mysqli_close($mysqli);
}
?>

