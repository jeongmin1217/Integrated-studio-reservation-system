<HTML>
<HEAD><TITLE>영화 예매</TITLE></HEAD>
<BODY>
<?php 
$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "SELECT * FROM MOVIE ORDER BY Rank;"; 
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) {
 		echo "<FORM action=reserveMovie.php method=get>\n";
 		echo "<Table border=1>\n";
 		echo "<TH>예매 순위</TH>  <TH>영화 제목</TH> <TH>선택</TH> <TR>\n";
 		while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
			$id = $newArray['ID']; 
 			$rank = $newArray['Rank']; 
 			$title = $newArray['Title']; 
 			echo "<TD><CENTER>".$rank."</CENTER></TD>";
 			echo "<TD>".$title."</TD>";
 			echo "<TD><center><input type=radio name=id value=$id></center></TD>";
 			echo "<TR>\n"; 
 		}
 		echo "</Table>\n";
 		echo "<input type=text name=user value=사용자이름>";
		echo "<input type=submit value=예약>";
 		echo "</FORM>";
 	} else { 
 		printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
 	} 
 	mysqli_free_result($res); 
 	mysqli_close($mysqli); 
} 
?> 

</BODY>
</HTML>