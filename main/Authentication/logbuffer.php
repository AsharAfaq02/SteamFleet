
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

             $login= "INSERT INTO ArchLogin(FirstName, LastName, Email, Password) VALUES ('".$firstname."','".$lastname."', '".$email."', '".$password."')";

             $conn->query($login);

             $_SESSION['email']= $email;

             header('Location: /main/Authentication/main_storyboard/storyboard.php');
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