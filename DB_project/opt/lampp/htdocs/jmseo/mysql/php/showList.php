<?php 
$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); //나중에 자기 계정 변경
if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "SELECT * FROM MEMO"; 
	$res = mysqli_query($mysqli, $sql); 
	if ($res) { 
		echo "<Table border=1>\n";
		echo "<TH>ID</TH><TH>User</TH><TH>Time</TH><TR>\n";
		while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
			$id = $newArray['id']; 
			$user = $newArray['user']; 
			$time = $newArray['time']; 
			echo "<TD>".$id."</TD><TD>".$user."</TD><TD>".$time."</TD><TR>\n"; 
		}
		echo "</Table>\n";
	} else { 
		printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
	} 
	mysqli_free_result($res); 
	mysqli_close($mysqli); 
} 
?> 
