
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

             $firstname = mysqli_real_escape_string($conn,$_REQUEST['firstname'] ?? '') ;
             $lastname = mysqli_real_escape_string($conn,$_REQUEST['lastname'] ?? '') ;
             $email = mysqli_real_escape_string($conn,$_REQUEST['Email'] ?? '') ;
             $password = mysqli_real_escape_string($conn,$_REQUEST['EnterPassword'] ?? '') ;

             if($email != ''){
             $checkDuplicates = "SELECT 'Email', COUNT(*) FROM ArchLogin WHERE Email = '$email' HAVING COUNT(*) > 1;";
            }
            if ($result_d = mysqli_query($conn, $checkDuplicates)) {
            $row = mysqli_fetch_row($result_d); 
            $isDup = "$row[1]";
            
            }
                $DupBool = false;
          if($isDup > 0){
            $dupBool = true;
            $_SESSION['duplicate']= 1;
            header('Location: /main');
            }

            if($isDup == 0){
              header('Location: /main/Authentication/main_storyboard/feed.php');
            }

            
             $salt = base64_encode(openssl_random_pseudo_bytes(32, $secure));
            while(!$secure){
            $salt = base64_encode(openssl_random_pseudo_bytes(32, $secure));
            }
            $hashedPassword = hash('sha256', "$salt+$password");

            $login= "INSERT INTO ArchLogin(FirstName, LastName, Email, Password, Salt) VALUES ('".$firstname."','".$lastname."', '".$email."', '".$hashedPassword."', '".$salt."')";
            if($dupBool == false){
             $conn->query($login);
            }

             $_SESSION['email']= $email;

             
              exit;

mysqli_close($conn);
?>

<html>
<style>
	body{
		color:darkseagreen;
	}
<body>
	</body>
</html>