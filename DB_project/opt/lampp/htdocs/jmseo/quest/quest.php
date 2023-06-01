<?php
$Q1 = $_GET["Q1"];
if (isset($_GET["Q2"])) $Q2 = $_GET["Q2"]; else $Q2 = 'null';
if (isset($_GET["Q3-1"])) $Q3_1 = $_GET["Q3-1"]; else $Q3_1 = 'null';  
if (isset($_GET["Q3-2"])) $Q3_2 = $_GET["Q3-2"]; else $Q3_2 = 'null';
if (isset($_GET["Q4-1"])) $Q4_1 = $_GET["Q4-1"]; else $Q4_1 = 'null';
if (isset($_GET["Q4-2"])) $Q4_2 = $_GET["Q4-2"]; else $Q4_2 = 'null';
if (isset($_GET["Q4-3"])) $Q4_3 = $_GET["Q4-3"]; else $Q4_3 = 'null';
if (isset($_GET["Q4-4"])) $Q4_4 = $_GET["Q4-4"]; else $Q4_4 = 'null';     
$Q4_S1 = $_GET["Q4-S1"];  
$Q4_S2 = $_GET["Q4-S2"]; 
$Q4_S3 = $_GET["Q4-S3"];                            
$Q4_S4 = $_GET["Q4-S4"]; 
//check되어있으면 1 아니면 0
if (isset($_GET["Q5-1"])) $Q5_1 = 1; else $Q5_1 = 0;    
if (isset($_GET["Q5-2"])) $Q5_2 = 1; else $Q5_2 = 0;
if (isset($_GET["Q5-3"])) $Q5_3 = 1; else $Q5_3 = 0;
if (isset($_GET["Q5-4"])) $Q5_4 = 1; else $Q5_4 = 0;
if (isset($_GET["Q5-5"])) $Q5_5 = 1; else $Q5_5 = 0;
$Q5_T = $_GET["Q5-T"];
$Q6 = $_GET["Q6"];

$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) {
		printf("데이터베이스 접속에 실패하였습니다.: %s\n", mysqli_connect_error());
		exit();
} else {
 		$sql = "INSERT INTO QUEST
			VALUES ('$Q1', $Q2, $Q3_1, $Q3_2, $Q4_1, $Q4_2, $Q4_3, $Q4_4,
			$Q4_S1, $Q4_S2, $Q4_S3, $Q4_S4, $Q5_1, $Q5_2, $Q5_3, $Q5_4, $Q5_5,
			'$Q5_T', '$Q6');";
		$res = mysqli_query($mysqli, $sql);
	if ($res === TRUE) {
		echo "<p>설문 결과가 성공적으로 입력되었습니다. 감사합니다.";
	} else {
		printf("설문 결과 입력에 실패하였습니다.: %s\n", mysqli_error($mysqli));
	}
	echo "<p>$sql";
	mysqli_close($mysqli);
}
?>





