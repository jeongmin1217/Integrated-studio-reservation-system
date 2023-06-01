<html>
<head><title>PHP Multiplication</title></head>
<body>
두 가지 방식(텍스트, 표)으로 구구단을 만들어봅시다.<br>

<br>구구단 계산(텍스트)<br>
<?php
//$a = 2;
//$b = 1;
for($a = 2; $a < 10; $a++){
	echo "&lt;".$a."단&gt;<br>\n";
	for($b = 1; $b < 10; $b++){
		echo "$a * $b = " . ($a*$b) . " <br>\n";
	}
}
?>

<br>테이블 예제<br>
<table border=1>
<th>1단</th> <th>2단</th> <th>3단</th> <th>4단</th>
<tr>
<td>11</td> <td>12</td> <td>13</td> <td>14</td>
<tr>
<td>21</td> <td>22</td> <td>23</td> <td>24</td>
</table>

<br>구구단 테이블(표 방식)<br>
<table border=2>
<?php
for($a=2; $a<10; $a++){
	echo "<th>$a 단</th>\n";
}
echo "<tr>";
for($a = 2; $a < 10; $a++){
	echo "<td>";
	for($b = 1; $b < 10; $b++){
		echo "$a * $b = " . ($a*$b) . " <br>\n";
	}
	echo "</td>";
}
?>
</table>

</body>
</html>