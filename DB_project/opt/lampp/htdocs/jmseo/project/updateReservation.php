<HTML>
<HEAD><TITLE>스튜디오 예약 날짜 변경</TITLE>
<link rel="stylesheet" href="showReserveList.css" />
</HEAD>
<BODY>
	<div class="form-body">
	      <div class="row">
	        <div class="form-holder">
	          <div class="form-content">
	            <div class="form-items">
				<h3>Studio Reservation UPDATE Date</h3>
				<!-- <p style="color:white;">본인의 예약 건만 변경할 수 있습니다. 다른 이의 예약 건은 변경 불가합니다. (경고창까지 구현)</p> -->
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
														;
						$res = mysqli_query($mysqli, $sql); 
					 	if ($res) { 
							echo "<table class='fixed_headers'>";
							echo "<thead><tr><TH>Reservation ID</TH>  <TH>User ID</TH>  <TH>Studio Name</TH>  <TH>Date</TH> <TH>Update</TH> </tr></thead>";
					 		while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
								$reservation_id = $newArray['reservation_id']; 
					 			$user_id = $newArray['user_id']; 
								$studio_name = $newArray['studio_name']; 
								$date = $newArray['date']; 
								echo "<FORM action=editReservation.php method=post>\n";
								echo "<TD>".$reservation_id."</TD>";
					            echo "<TD><input type=hidden name=user_id value=$user_id>".$user_id."</TD>";
					            echo "<TD>".$studio_name."</TD>";
					            echo "<TD>".$date."</TD>";
					            echo"<TD><CENTER><input type=radio name=reservation_id value=$reservation_id></CENTER></TD>";
								echo "<TR>\n"; 
					        }
					        echo "<div class='update-button'><input type=date name=date min=2020-01-01 max=2026-01-01>";
					        echo "<input type=submit value=update></div>";
					        echo "</Form>\n";
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
