<HTML>
<HEAD><TITLE>스튜디오 예약 목록</TITLE>
<link rel="stylesheet" href="showReserveList.css" />
</HEAD>
<BODY>
	<div class="form-body">
	      <div class="row">
	        <div class="form-holder">
	          <div class="form-content">
	            <div class="form-items">
					<h3>Studio Reservation List</h3>
					<div class="goToMainBtn"><button href="#" onclick="location.href='reservation.php'">예약 화면으로 돌아가기</button></div>
						<?php 
						$mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 

						if (mysqli_connect_errno()) { 
							printf("Connect failed: %s\n", mysqli_connect_error()); 
							exit(); 
						} else { 
							$sql = 
						    "SELECT * FROM P_RESERVATION
						      JOIN P_STUDIO on P_STUDIO.studio_name = P_RESERVATION.studio_name
						      JOIN P_USER on P_USER.id = P_RESERVATION.user_id
							  order by reservation_id desc";
							$res = mysqli_query($mysqli, $sql); 
						 	if ($res) {
								echo "<table class='fixed_headers'>";
								echo "<thead><tr><TH>Reservation ID</TH>  <TH>User ID</TH> <TH>Studio Name</TH> <TH>Date</TH> </tr></thead>";
						 		while ($newArray = mysqli_fetch_array($res, MYSQLI_NUM)){
									$reservation_id = $newArray[0]; 
						 			$user_id = $newArray[1]; 
						 			$studio_name = $newArray[2];
									$date = $newArray[3];
						 			echo "<TD><CENTER>".$reservation_id."</CENTER></TD>";
						 			echo "<TD><CENTER>".$user_id."</CENTER></TD>";
						 			echo "<TD><CENTER>".$studio_name."</CENTER></TD>";
						  			echo "<TD><CENTER>".$date."</CENTER></TD>";
						 			echo "<TR>\n"; 
						 		}
						 		echo "</table>\n";
						 	} else { 
						 		printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
						 	} 
						 	mysqli_free_result($res); 
						 	mysqli_close($mysqli); 
						} 
						?> 
					</div>
				</div>
			</div>
		</div>
	</div>
</BODY>
</HTML>