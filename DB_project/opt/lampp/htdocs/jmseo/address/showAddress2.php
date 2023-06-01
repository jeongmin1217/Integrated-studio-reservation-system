<?php 
$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "SELECT * FROM Address"; 
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) { 
 		echo "<Table border=1>\n";
 		echo "<TH>Student Number</TH>  <TH>Name</TH>  <TH>Phone</TH>  <TH>Email</TH> <TH>Update</TH> <TR>\n";
 		while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
			$stuNum = $newArray['stuNum']; 
 			$name = $newArray['name']; 
			$phone = $newArray['phone']; 
			$email = $newArray['email']; 
			echo "<TD>".$stuNum."</TD>";
 			echo "<TD>".$name."</TD>";
 			echo "<TD>".$phone."</TD>";
 			echo "<TD>".$email."</TD>";
 			echo "<TD><FORM action=deleteAddress.php method=post>\n";
			echo "<input type=hidden name=stuNum value=".$stuNum.">";
			echo "<input type=submit value=delete>";
			echo "</Form></TD>\n";
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
