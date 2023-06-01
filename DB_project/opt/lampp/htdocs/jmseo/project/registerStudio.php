<?php
$studio_name = $_GET["studio_name"];
$address = $_GET["address"];
//if (isset($_GET["category"])) $category = $_GET["category"]; else $category = 'null';
$category = $_GET["category"];                    

$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 
                                            
if (mysqli_connect_errno()) {
		printf("", mysqli_connect_error());
		exit();
} else {
 		$sql = "INSERT INTO P_STUDIO (studio_name, address, category)                          
			VALUES ('$studio_name', '$address', '$category');";
		$res = mysqli_query($mysqli, $sql);
	if ($res === TRUE) {
		echo "<script>window.alert('스튜디오 등록에 성공하였습니다');</script>";
		echo "<script>location.replace('reservation.php')</script>";
	} else {
		printf("<p> 스튜디오 등록에 실패하였습니다.", mysqli_error($mysqli));
	}
	echo "<p>$sql";
	mysqli_close($mysqli);
}
?>





