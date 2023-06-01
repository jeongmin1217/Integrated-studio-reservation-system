<?php 
$mysqli = new mysqli("localhost","jmseo","2018100910","jmseo");

if (mysqli_connect_errno()) {         
                printf("Connect failed: %s\n", mysqli_connect_error()); 
                exit(); 
} else { 
                $sql = "CREATE TABLE Address ( 
                stuNum CHAR(15) Primary Key, 
                name CHAR(50) NOT NULL,
                phone CHAR(20) NOT NULL,
                email VARCHAR(100) NULL
                );"; 
        $res = mysqli_query($mysqli, $sql); 

if ($res === TRUE) { 
        echo "Table Address has successfully been created."; 
} else { 
        printf("Could not create table: %s\n", mysqli_error($mysqli)); 
} 

mysqli_close($mysqli); 
} 
?> 