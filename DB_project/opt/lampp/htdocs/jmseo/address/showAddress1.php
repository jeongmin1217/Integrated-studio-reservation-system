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
			echo "<FORM action=editAddress.php method=post>\n";
				echo "<input type=hidden name=stuNum value=".$stuNum.">";
				echo "<TD><input type=text name=newStuNum value='".$stuNum."'></TD>";
				echo "<TD><input type=text name=name value='".$name."'></TD>";
				echo "<TD><input type=text name=phone value='".$phone."'></TD>";
				echo "<TD><input type=text name=email value='".$email."'></TD>";
				echo "<input type=hidden name=stuNum value=".$stuNum.">";
				echo "<TD><input type=submit value=update></TD>";
				echo "<TR>\n"; 
			echo "</Form>\n";
 		}
 		echo "</Table>\n";
 	} else { 
 		printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
 	} 
 	mysqli_free_result($res); 
 	mysqli_close($mysqli); 
} 
?> 
