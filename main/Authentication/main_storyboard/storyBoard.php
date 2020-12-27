<?php
session_start();


$servername = "127.0.0.1";
              $username = "root";
              $password = "Foofoo1234";     
              $dbname = "asharsdata";
              $conn = new mysqli($servername, $username, $password, $dbname);
              
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

             $query = "SELECT FirstName FROM ArchLogin WHERE Email = '".$_SESSION['email']."';";
			if ($result = mysqli_query($conn, $query)) {
    			$row = mysqli_fetch_row($result);	
        		$rowval = "$row[0]";

        	echo "<h1>Login Successful, welcome $rowval</h1>";

        					
        				
}
				mysqli_close($conn);
        				

?>


