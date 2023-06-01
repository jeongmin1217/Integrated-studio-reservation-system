<HTML>
<HEAD><TITLE>영화 예매 목록</TITLE></HEAD>
<BODY>
<?php 
$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "SELECT * FROM RESERVATION ORDER BY ID DESC;"; 
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) {
 		echo "<Table border=1>\n";
 		echo "<TH>예매 번호</TH>  <TH>사용자</TH> <TH>영화 번호</TH> <TH>예약 일시</TH> <TR>\n";
 		while ($newArray = mysqli_fetch_array($res, MYSQLI_NUM)){
			$id = $newArray[0]; 
 			$user = $newArray[1]; 
 			$movieId = $newArray[2];
			$datetime = $newArray[3];
 			echo "<TD><CENTER>".$id."</CENTER></TD>";
 			echo "<TD><CENTER>".$user."</CENTER></TD>";
 			echo "<TD><CENTER>".$movieId."</CENTER></TD>";
  			echo "<TD><CENTER>".$datetime."</CENTER></TD>";
 			echo "<TR>\n"; 
 		}
 		echo "</Table>\n";
 	} else { 
 		printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
 	} 
 	mysqli_free_result($res); 
 	mysqli_close($mysqli); 
} 
?> 

</BODY>
</HTML>