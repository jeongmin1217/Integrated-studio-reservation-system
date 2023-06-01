<html>
  <head>
    <title>PhotoStudio</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
  		<nav>
  			<div class='inner'>
  				<div class='nav-container'>
  					<button class='nav-title' href="#" onclick="location.href='main.html'">PhotoStudio</button>
  					<p class='nav-contact'>2018100910 서정민</p>
  				</div>
  			</div>
  		</nav>
  		<main>
  			<section id="category">
        <div class="inner">
          <div class="category-container">
            <div class="all-category">
              <button class="category-item" href="#" onclick="location.href='updateReservation.php'">예약 수정하기</button>
              <button class="category-item" href="#" onclick="location.href='deleteReservation.php'">예약 삭제하기</button>
			  <button class="category-item" href="#" onclick="location.href='reservation.php'">모든 사진관 보기</button>

            </div>
			<div class="category">
              <button class="category-item" id="black" href="#" onclick="location.href='black.php'">흑백사진관</button>
			  <button class="category-item" id="self" href="#" onclick="location.href='self.php'">셀프사진관</button>
			  <button class="category-item" id="profile" href="#" onclick="location.href='profile.php'">프로필사진</button>
			  <button class="category-item" id="body" href="#" onclick="location.href='body.php'">바디프로필</button>
            </div>
          </div>
         
          <?php
         	 $mysqli = new mysqli("localhost", "jmseo", "2018100910", "jmseo"); 
         	 if (mysqli_connect_errno()) { 
         	 	 printf("Connect failed: %s\n", mysqli_connect_error()); 
         	 	 exit(); 
         	 } else {
         	 	$sql1 = "SELECT * FROM P_STUDIO WHERE category='셀프사진관' ORDER BY studio_id desc;";    
               	$res = mysqli_query($mysqli, $sql1); 
               	if ($res) {
					echo "<div class='form-holder'>";
               		echo "<div class='form-content'>";                                
               		echo "<div class='form-items'>";
               		echo "<table class='fixed_headers'>";
               		echo "<thead><tr><th>Studio ID</th><th>Studio Name</th><th>Studio Address</th><th>Studio Category</th><th>Date</th><th>Reservation</th></tr></thead>";
               		echo "<tbody>";            
               		while ($newArray = mysqli_fetch_array($res, MYSQLI_NUM)){
						echo "<FORM action=reserveStudio.php method=POST>";
						$studio_id = $newArray[0];
               			$studio_name = $newArray[1]; 
 						$address = $newArray[2]; 
 						$category = $newArray[3];
 						echo '<TD><CENTER>'.$studio_id.'</CENTER></TD>'; 						
 						echo '<TD><CENTER><input type=hidden name=studio_name value='.$studio_name.'>'.$studio_name.'</CENTER></TD>';
 						echo '<TD class = "address-size"><CENTER>'.$address.'</CENTER></TD>';
 						echo '<TD><CENTER>'.$category.'</CENTER></TD>';
 						echo "<TD><CENTER><input type=date name=date min=2020-01-01 max=2026-01-01></CENTER></TD>";
 						echo "<TD><CENTER><input class='reservation-button' type=submit value=예약하기></CENTER></TD>";
 						echo '<tr>';
						echo "</FORM>";
 					}                                                 
					echo "</tbody>"; 
					echo "</table>";
 					echo "</div>";
					echo "</div>";            
					echo "</div>";
               	} else { 
               		printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
               	}    
               mysqli_free_result($res); 
               mysqli_close($mysqli); 
	   
			}                             
            ?>       
          </div>
        
          </section>
  		</main>
    
  </body>
</html>
