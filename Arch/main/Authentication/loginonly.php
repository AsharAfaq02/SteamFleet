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
	body{
		background-color: darkseagreen;
	}

  .signin_text{
    text-align: left;
    color:navy;
    font-size:3vw;
  }

	.headerborder{
		width:100%;
	height:8vw;
	padding:10px;
	background:white;
	}

	.title{
		text-align: center;
		font-weight: bold;
		color: navy;
		font-size: 5vw;
	}

	.signin{
	padding:10px;
	background:white;
}

.signinText{
	text-align:center;
	color:navy;
	font-size: 4vw;
}


.animation-target {
  -webkit-animation: animation 1000ms linear both;
  animation: animation 1000ms linear both;
}





</style>


<body>
          	<div class = "headerborder">
           
          	<div class = "title">STEAMFLEET</div>
            </div>
            </div>
            <br>
            <br>
            <br>
            <div class="modal" id="myModal">
   <div class="modal-dialog" style="width:1250px;">
      <div class="modal-content">
            ...

        </div>
     </div>
 </div>
            <div class = "container">
           
          	<div class="d-flex justify-content-center align-items-center">
          	<div class="shadow-lg p-3 mb-5 bg-white rounded" style = "width: 100%; height: 100ex">
                  
         
			       <div class = "animation-target">
			       <div class = "signinText">SIGN IN </div>
             </div>
            <br>

            <form action = "loginonly.php">
            <div class="form-group">
            <div class = "container">

                
            <div class = "signin_text">Enter Email</div>
            <input type="email" 
            class="form-control form-control-lg"
            id="Email"
            name="Email"
            placeholder="Enter Email"> 

            <div class = "exceptionEmail" style = "font-size: 12px"></div>
            <br>

            <div class = "signin_text">Enter Password</div>  
            <input type="password" 
            class="form-control form-control-lg" 
            id="EnterPassword" 
            name="EnterPassword"
            placeholder="Password">
            <div class = "exceptionPassword" style = "font-size: 12px"></div>
            <?php

error_reporting(0);

function rdirect($url){
   $string = "<script>window.location = '$url';</script>";
   echo $string;
  }
    
    $servername = "127.0.0.1";
    $username = "root";
    $password = "Foofoo1234";     
    $dbname = "asharsdata";
    $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
  }



              $email = mysqli_real_escape_string($conn,$_REQUEST['Email'] ?? '') ;
              $password = mysqli_real_escape_string($conn,$_REQUEST['EnterPassword'] ?? '') ;

              
      if($email != '' && $password != ''){
         $query = " SELECT Salt,Password FROM ArchLogin WHERE Email = '$email'";
        
        }
      if ($result = mysqli_query($conn, $query)) {
          $row = mysqli_fetch_row($result); 
          $dbSalt = "$row[0]";
          $dbHash = "$row[1]";
          $hashed_Password = hash('sha256', "$dbSalt+$password");
          
        }

      if($dbHash == $hashed_Password && $password != ''){
      rdirect('/main/Authentication/main_storyboard/feed.php');
        }
      if($dbHash != $hashedPassword){
      echo " <h1 style = 'color:red; text-align:left; font-size: 1.5vw'>INVALID CREDENTIALS, PLEASE TRY AGAIN </h1>";
        }

        mysqli_close($conn);
        
        $_SESSION['email']= $email;
                  
           
          ?>
            
        
            <br>
            <div class="text-center">
            <input type="submit" name = "submit" value="Submit" class="btn btn-outline-success" style = "font-size: 2vw">
            

            
              
            <br><br><br>
              <h1 style = "font-size: 2vw"><a href = "/main">Back to Sign Up</a></h1>
            </div>

            </form>
            
            <br>
        
            <script>
            $(document).on("submit", "form", function(e){

             
              var email = $("#Email").val();
              var password = $("#EnterPassword").val();


              if(!password){
                e.preventDefault();
                  $(".exceptionPassword").empty().append("*PLEASE ENTER PASSWORD*").css( "color", "red" );                  
                }
              if(!email){
                e.preventDefault();
                  $(".exceptionEmail").empty().append("*PLEASE ENTER EMAIL*").css( "color", "red" );                  
                        }
             

            });    

            </script>


            
              <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
   







	</body>
</html>
</html>