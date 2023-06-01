<?php
$id = $_POST["id"];
$password=$_POST["password"];

$mysqli = mysqli_connect("localhost", "jmseo", "2018100910", "jmseo");

$sql="SELECT * FROM P_USER WHERE id='$id' AND password='$password'";
$result = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_array($result);

if($row != null){
		session_start();
		$_SESSION[ 'id' ] = $id;
		echo "<script>location.replace('main.html')</script>";
		exit;
		}
		else{
		 	 echo "<script>window.alert('Invalid username or password');</script>";
		 	 echo "<script>location.replace('index.html');</script>";
		}
?>
