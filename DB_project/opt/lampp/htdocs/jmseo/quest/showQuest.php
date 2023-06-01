<?php 
$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

if (mysqli_connect_errno()) { 
	printf("DB 접속에 실패하였습니다 : %s\n", mysqli_connect_error()); 
	exit(); 
} else {                                             
	$sum_Q1=0;$sum_Q2=0;$sum_Q3_1=0;$sum_Q3_2=0;$sum_Q4_1=0;$sum_Q4_2=0;$sum_Q4_3=0;$sum_Q4_4=0;
	$sum_Q4_S1=0;$sum_Q4_S2=0;$sum_Q4_S3=0;$sum_Q4_S4=0;$sum_Q5_1=0;$sum_Q5_2=0;$sum_Q5_3=0;$sum_Q5_4=0;
	$sum_Q5_5=0;$sum_Q5_T=0;$sum_Q6=0;

	$sql = "SELECT * FROM QUEST;"; 
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) { 
 		echo "<H3>설문 결과</H3>\n";
 		echo "<Table border=1>\n";
 		echo "<TH>No</TH><TH>Q1</TH><TH>Q2</TH><TH>Q3_1</TH><TH>Q3_2</TH>
 		<TH>Q4_1</TH><TH>Q4_2</TH><TH>Q4_3</TH><TH>Q4_4</TH>
 		<TH>Q4_S1</TH><TH>Q4_S2</TH><TH>Q4_S3</TH><TH>Q4_S4</TH>
 		<TH>Q5_1</TH><TH>Q5_2</TH><TH>Q5_3</TH><TH>Q5_4</TH><TH>Q5_5</TH>
 		<TH>Q5_T</TH><TH>Q6</TH><TR>\n";
 		$cnt = 0;
 		while ($newArray = mysqli_fetch_array($res, MYSQLI_NUM)){
			echo "<TD align=center>".++$cnt."</TD>";
 			echo "<TD align=center>".$newArray[0]."</TD>";         
 			echo "<TD align=center>".$newArray[1]."</TD>";  $sum_Q2 += $newArray[1];
 			echo "<TD align=center>".$newArray[2]."</TD>";  $sum_Q3_1 += $newArray[2];
 			echo "<TD align=center>".$newArray[3]."</TD>";  $sum_Q3_2 += $newArray[3];
 			echo "<TD align=center>".$newArray[4]."</TD>";  $sum_Q4_1 += $newArray[4];
 			echo "<TD align=center>".$newArray[5]."</TD>";  $sum_Q4_2 += $newArray[5];
 			echo "<TD align=center>".$newArray[6]."</TD>";  $sum_Q4_3 += $newArray[6];
 			echo "<TD align=center>".$newArray[7]."</TD>";  $sum_Q4_4 += $newArray[7];
 			echo "<TD align=center>".$newArray[8]."</TD>";  $sum_Q4_S1 += $newArray[8];
 			echo "<TD align=center>".$newArray[9]."</TD>";  $sum_Q4_S2 += $newArray[9];
 			echo "<TD align=center>".$newArray[10]."</TD>"; $sum_Q4_S3 += $newArray[10];
 			echo "<TD align=center>".$newArray[11]."</TD>"; $sum_Q4_S4 += $newArray[11];
 			echo "<TD align=center>".$newArray[12]."</TD>"; $sum_Q5_1 += $newArray[12];
 			echo "<TD align=center>".$newArray[13]."</TD>"; $sum_Q5_2 += $newArray[13];
 			echo "<TD align=center>".$newArray[14]."</TD>"; $sum_Q5_3 += $newArray[14];
 			echo "<TD align=center>".$newArray[15]."</TD>"; $sum_Q5_4 += $newArray[15];
 			echo "<TD align=center>".$newArray[16]."</TD>"; $sum_Q5_5 += $newArray[16];
 			echo "<TD align=center>".$newArray[17]."</TD>";     
 			echo "<TD align=center>".$newArray[18]."</TD>";                              
 			echo "<TR>\n";
 		}
 		echo "</Table>\n";
 		
 		echo "<H3>설문 통계</H3>\n";   
 		echo "총 $cnt 명이 설문에 응답하였습니다. <BR>\n";   
 		echo "<Table border=1>\n";
 		echo "<TH>Q1</TH><TH>Q2</TH><TH>Q3_1</TH><TH>Q3_2</TH>
 		<TH>Q4_1</TH><TH>Q4_2</TH><TH>Q4_3</TH><TH>Q4_4</TH>
 		<TH>Q4_S1</TH><TH>Q4_S2</TH><TH>Q4_S3</TH><TH>Q4_S4</TH>
 		<TH>Q5_1</TH><TH>Q5_2</TH><TH>Q5_3</TH><TH>Q5_4</TH><TH>Q5_5</TH>
 		<TH>Q5_T</TH><TH>Q6</TH><TR>\n";   
 		echo "<TD align=center>N/A</TD>";         
 		echo "<TD align=center>".number_format($sum_Q2/$cnt, 2)."</TD>";
 		echo "<TD align=center>".number_format($sum_Q3_1/$cnt, 2)."</TD>";
 		echo "<TD align=center>".number_format($sum_Q3_2/$cnt, 2)."</TD>";
 		echo "<TD align=center>".number_format($sum_Q4_1/$cnt, 2)."</TD>";
 		echo "<TD align=center>".number_format($sum_Q4_2/$cnt, 2)."</TD>";
 		echo "<TD align=center>".number_format($sum_Q4_3/$cnt, 2)."</TD>";
 		echo "<TD align=center>".number_format($sum_Q4_4/$cnt, 2)."</TD>";
 		echo "<TD align=center>".number_format($sum_Q4_S1/$cnt, 2)."</TD>";
 		echo "<TD align=center>".number_format($sum_Q4_S2/$cnt, 2)."</TD>";  
 		echo "<TD align=center>".number_format($sum_Q4_S3/$cnt, 2)."</TD>"; 
 		echo "<TD align=center>".number_format($sum_Q4_S4/$cnt, 2)."</TD>"; 
 		echo "<TD align=center>".number_format($sum_Q5_1/$cnt, 2)."</TD>"; 
 		echo "<TD align=center>".number_format($sum_Q5_2/$cnt, 2)."</TD>"; 
 		echo "<TD align=center>".number_format($sum_Q5_3/$cnt, 2)."</TD>"; 
 		echo "<TD align=center>".number_format($sum_Q5_4/$cnt, 2)."</TD>"; 
 		echo "<TD align=center>".number_format($sum_Q5_5/$cnt, 2)."</TD>"; 
 		echo "<TD align=center>N/A</TD>"; 
 		echo "<TD align=center>N/A</TD>";  
 		echo "</Table>\n";         
 		
 	} else { 
 		printf("설문 결과를 가져올 수 없습니다 : %s\n", mysqli_error($mysqli)); 
 	} 
 	mysqli_free_result($res); 
 	mysqli_close($mysqli); 
} 
?> 
