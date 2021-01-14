<?php
session_start();
?>


<html>
<html lang="en-US">
<meta name=”viewport” content=”width=device-width, initial-scale="1.0">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel=”stylesheet” href=”css/bootstrap.css”>
<link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
<style>
hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

span{
     word-spacing:page;
}

.Title{
  text-align: center;
  color: black;
  font-size: 6vw;
  font-weight: bold;

}

</style>

<body>
  <div class = "Title"> STEAMFLEET </div>
<?php
$servername = "127.0.0.1";
              $username = "root";
              $password = "Foofoo1234";     
              $dbname = "asharsdata";
              $conn = new mysqli($servername, $username, $password, $dbname);
              
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
$email_user = $_SESSION['email'];
             $query = "SELECT FirstName FROM ArchLogin WHERE Email = '".$email_user."';";
      if ($result = mysqli_query($conn, $query)) {
          $row = mysqli_fetch_row($result); 
            $rowval = "$row[0]";

          echo "<h1 style = 'text-align: center; font-size: 2vw; color: navy;'>Welcome, $rowval</h1>";

            }

            if($email_user == ''){
              header("Location:/main/Authentication/loginonly.php");
            }
        mysqli_close($conn);
                

?>
<hr/>


<nav class="nav nav-pills nav-justified" style = "color:darkseagreen">
  <a class="nav-item nav-link" href="/main/Authentication/main_storyboard/feed.php" style = "font-size: 2vw; color:darkseagreen" id = "1">Feed</a>
  <a class="nav-item nav-link" href="/main/Authentication/main_storyboard/creationyard.php" style = "font-size: 2vw; color:darkseagreen" id = "2">CreationYard</a>
  <a class="nav-item nav-link" href="/main/Authentication/main_storyboard/friends.php" style = "font-size: 2vw; color:darkseagreen" id = "3">Friends</a>
  <a class="nav-item nav-link" href="/main/Authentication/main_storyboard/messages.php" style = "font-size: 2vw; color:darkseagreen" id = "4">Messages</a>
  <a class="nav-item nav-link" href="/main/Authentication/main_storyboard/account.php" style = "font-size: 2vw; color:darkseagreen" id = "5">Account</a>

</nav>

<script> 
        $("#4").css('color', 'red'); 
  </script>



</body>
</html>
