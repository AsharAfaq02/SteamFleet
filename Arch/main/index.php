
<?php
session_start();
?>


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
    font-size:2vw;
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
	font-size: 2vw;
}


.animation-target {
  -webkit-animation: animation 1000ms linear both;
  animation: animation 1000ms linear both;
}


@-webkit-keyframes animation { 
  0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  3.4% { -webkit-transform: matrix3d(1.316, 0, 0, 0, 0, 1.407, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.316, 0, 0, 0, 0, 1.407, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  4.7% { -webkit-transform: matrix3d(1.45, 0, 0, 0, 0, 1.599, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.45, 0, 0, 0, 0, 1.599, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  6.81% { -webkit-transform: matrix3d(1.659, 0, 0, 0, 0, 1.893, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.659, 0, 0, 0, 0, 1.893, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  9.41% { -webkit-transform: matrix3d(1.883, 0, 0, 0, 0, 2.168, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.883, 0, 0, 0, 0, 2.168, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  10.21% { -webkit-transform: matrix3d(1.942, 0, 0, 0, 0, 2.226, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.942, 0, 0, 0, 0, 2.226, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  13.61% { -webkit-transform: matrix3d(2.123, 0, 0, 0, 0, 2.332, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.123, 0, 0, 0, 0, 2.332, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  14.11% { -webkit-transform: matrix3d(2.141, 0, 0, 0, 0, 2.331, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.141, 0, 0, 0, 0, 2.331, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  17.52% { -webkit-transform: matrix3d(2.208, 0, 0, 0, 0, 2.239, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.208, 0, 0, 0, 0, 2.239, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  18.72% { -webkit-transform: matrix3d(2.212, 0, 0, 0, 0, 2.187, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.212, 0, 0, 0, 0, 2.187, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  21.32% { -webkit-transform: matrix3d(2.196, 0, 0, 0, 0, 2.069, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.196, 0, 0, 0, 0, 2.069, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  24.32% { -webkit-transform: matrix3d(2.151, 0, 0, 0, 0, 1.96, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.151, 0, 0, 0, 0, 1.96, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  25.23% { -webkit-transform: matrix3d(2.134, 0, 0, 0, 0, 1.938, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.134, 0, 0, 0, 0, 1.938, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  29.03% { -webkit-transform: matrix3d(2.063, 0, 0, 0, 0, 1.897, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.063, 0, 0, 0, 0, 1.897, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  29.93% { -webkit-transform: matrix3d(2.048, 0, 0, 0, 0, 1.899, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.048, 0, 0, 0, 0, 1.899, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  35.54% { -webkit-transform: matrix3d(1.979, 0, 0, 0, 0, 1.962, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.979, 0, 0, 0, 0, 1.962, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  36.74% { -webkit-transform: matrix3d(1.972, 0, 0, 0, 0, 1.979, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.972, 0, 0, 0, 0, 1.979, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  41.04% { -webkit-transform: matrix3d(1.961, 0, 0, 0, 0, 2.022, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.961, 0, 0, 0, 0, 2.022, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  44.44% { -webkit-transform: matrix3d(1.966, 0, 0, 0, 0, 2.032, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.966, 0, 0, 0, 0, 2.032, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  52.15% { -webkit-transform: matrix3d(1.991, 0, 0, 0, 0, 2.006, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.991, 0, 0, 0, 0, 2.006, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  59.86% { -webkit-transform: matrix3d(2.006, 0, 0, 0, 0, 1.99, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.006, 0, 0, 0, 0, 1.99, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  63.26% { -webkit-transform: matrix3d(2.007, 0, 0, 0, 0, 1.992, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.007, 0, 0, 0, 0, 1.992, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  75.28% { -webkit-transform: matrix3d(2.001, 0, 0, 0, 0, 2.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.001, 0, 0, 0, 0, 2.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  85.49% { -webkit-transform: matrix3d(1.999, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.999, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  90.69% { -webkit-transform: matrix3d(1.999, 0, 0, 0, 0, 1.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.999, 0, 0, 0, 0, 1.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  100% { -webkit-transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); } 
}

@keyframes animation { 
  0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  3.4% { -webkit-transform: matrix3d(1.316, 0, 0, 0, 0, 1.407, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.316, 0, 0, 0, 0, 1.407, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  4.7% { -webkit-transform: matrix3d(1.45, 0, 0, 0, 0, 1.599, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.45, 0, 0, 0, 0, 1.599, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  6.81% { -webkit-transform: matrix3d(1.659, 0, 0, 0, 0, 1.893, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.659, 0, 0, 0, 0, 1.893, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  9.41% { -webkit-transform: matrix3d(1.883, 0, 0, 0, 0, 2.168, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.883, 0, 0, 0, 0, 2.168, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  10.21% { -webkit-transform: matrix3d(1.942, 0, 0, 0, 0, 2.226, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.942, 0, 0, 0, 0, 2.226, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  13.61% { -webkit-transform: matrix3d(2.123, 0, 0, 0, 0, 2.332, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.123, 0, 0, 0, 0, 2.332, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  14.11% { -webkit-transform: matrix3d(2.141, 0, 0, 0, 0, 2.331, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.141, 0, 0, 0, 0, 2.331, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  17.52% { -webkit-transform: matrix3d(2.208, 0, 0, 0, 0, 2.239, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.208, 0, 0, 0, 0, 2.239, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  18.72% { -webkit-transform: matrix3d(2.212, 0, 0, 0, 0, 2.187, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.212, 0, 0, 0, 0, 2.187, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  21.32% { -webkit-transform: matrix3d(2.196, 0, 0, 0, 0, 2.069, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.196, 0, 0, 0, 0, 2.069, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  24.32% { -webkit-transform: matrix3d(2.151, 0, 0, 0, 0, 1.96, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.151, 0, 0, 0, 0, 1.96, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  25.23% { -webkit-transform: matrix3d(2.134, 0, 0, 0, 0, 1.938, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.134, 0, 0, 0, 0, 1.938, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  29.03% { -webkit-transform: matrix3d(2.063, 0, 0, 0, 0, 1.897, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.063, 0, 0, 0, 0, 1.897, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  29.93% { -webkit-transform: matrix3d(2.048, 0, 0, 0, 0, 1.899, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.048, 0, 0, 0, 0, 1.899, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  35.54% { -webkit-transform: matrix3d(1.979, 0, 0, 0, 0, 1.962, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.979, 0, 0, 0, 0, 1.962, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  36.74% { -webkit-transform: matrix3d(1.972, 0, 0, 0, 0, 1.979, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.972, 0, 0, 0, 0, 1.979, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  41.04% { -webkit-transform: matrix3d(1.961, 0, 0, 0, 0, 2.022, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.961, 0, 0, 0, 0, 2.022, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  44.44% { -webkit-transform: matrix3d(1.966, 0, 0, 0, 0, 2.032, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.966, 0, 0, 0, 0, 2.032, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  52.15% { -webkit-transform: matrix3d(1.991, 0, 0, 0, 0, 2.006, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.991, 0, 0, 0, 0, 2.006, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  59.86% { -webkit-transform: matrix3d(2.006, 0, 0, 0, 0, 1.99, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.006, 0, 0, 0, 0, 1.99, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  63.26% { -webkit-transform: matrix3d(2.007, 0, 0, 0, 0, 1.992, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.007, 0, 0, 0, 0, 1.992, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  75.28% { -webkit-transform: matrix3d(2.001, 0, 0, 0, 0, 2.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2.001, 0, 0, 0, 0, 2.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  85.49% { -webkit-transform: matrix3d(1.999, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.999, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  90.69% { -webkit-transform: matrix3d(1.999, 0, 0, 0, 0, 1.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.999, 0, 0, 0, 0, 1.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  100% { -webkit-transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); } 
}





.animation-target1 {
  -webkit-animation: animationx 1800ms linear both;
  animation: animationx 1800ms linear both;
}



@-webkit-keyframes animationx { 
  0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -500, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -500, 0, 0, 1); }
  1.78% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.621, 1, 0, 0, 0, 0, 1, 0, -282.728, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.621, 1, 0, 0, 0, 0, 1, 0, -282.728, 0, 0, 1); }
  3.56% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.829, 1, 0, 0, 0, 0, 1, 0, -149.309, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.829, 1, 0, 0, 0, 0, 1, 0, -149.309, 0, 0, 1); }
  5.34% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.695, 1, 0, 0, 0, 0, 1, 0, -72.484, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.695, 1, 0, 0, 0, 0, 1, 0, -72.484, 0, 0, 1); }
  7.06% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.477, 1, 0, 0, 0, 0, 1, 0, -31.997, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.477, 1, 0, 0, 0, 0, 1, 0, -31.997, 0, 0, 1); }
  7.12% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.47, 1, 0, 0, 0, 0, 1, 0, -31.079, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.47, 1, 0, 0, 0, 0, 1, 0, -31.079, 0, 0, 1); }
  10.51% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.146, 1, 0, 0, 0, 0, 1, 0, -1.766, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.146, 1, 0, 0, 0, 0, 1, 0, -1.766, 0, 0, 1); }
  10.68% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.135, 1, 0, 0, 0, 0, 1, 0, -1.214, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.135, 1, 0, 0, 0, 0, 1, 0, -1.214, 0, 0, 1); }
  14.01% { -webkit-transform: matrix3d(1, 0, 0, 0, -0.003, 1, 0, 0, 0, 0, 1, 0, 2.88, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, -0.003, 1, 0, 0, 0, 0, 1, 0, 2.88, 0, 0, 1); }
  14.24% { -webkit-transform: matrix3d(1, 0, 0, 0, -0.007, 1, 0, 0, 0, 0, 1, 0, 2.886, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, -0.007, 1, 0, 0, 0, 0, 1, 0, 2.886, 0, 0, 1); }
  17.46% { -webkit-transform: matrix3d(1, 0, 0, 0, -0.033, 1, 0, 0, 0, 0, 1, 0, 1.99, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, -0.033, 1, 0, 0, 0, 0, 1, 0, 1.99, 0, 0, 1); }
  31.36% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.002, 1, 0, 0, 0, 0, 1, 0, 0.01, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.002, 1, 0, 0, 0, 0, 1, 0, 0.01, 0, 0, 1); }
  36.48% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.001, 1, 0, 0, 0, 0, 1, 0, -0.003, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.001, 1, 0, 0, 0, 0, 1, 0, -0.003, 0, 0, 1); }
  44.34% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.001, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.001, 0, 0, 1); }
  44.44% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.001, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.001, 0, 0, 1); }
  45.27% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -7.992, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -7.992, 0, 1); }
  46.45% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.001, -15.312, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.001, -15.312, 0, 1); }
  48.45% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.001, -19.275, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.001, -19.275, 0, 1); }
  50.95% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -15.606, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -15.606, 0, 1); }
  53.4% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -9.111, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -9.111, 0, 1); }
  55.56% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -4.058, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -4.058, 0, 1); }
  55.9% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -3.395, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -3.395, 0, 1); }
  58.35% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.013, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.013, 0, 1); }
  62.35% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -1.622, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -1.622, 0, 1); }
  72.25% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.002, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.002, 0, 1); }
  76.25% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.137, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.137, 0, 1); }
  86.15% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  90.16% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.011, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.011, 0, 1); }
  100% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); } 
}

@keyframes animationx { 
  0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -500, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -500, 0, 0, 1); }
  1.78% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.621, 1, 0, 0, 0, 0, 1, 0, -282.728, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.621, 1, 0, 0, 0, 0, 1, 0, -282.728, 0, 0, 1); }
  3.56% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.829, 1, 0, 0, 0, 0, 1, 0, -149.309, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.829, 1, 0, 0, 0, 0, 1, 0, -149.309, 0, 0, 1); }
  5.34% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.695, 1, 0, 0, 0, 0, 1, 0, -72.484, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.695, 1, 0, 0, 0, 0, 1, 0, -72.484, 0, 0, 1); }
  7.06% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.477, 1, 0, 0, 0, 0, 1, 0, -31.997, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.477, 1, 0, 0, 0, 0, 1, 0, -31.997, 0, 0, 1); }
  7.12% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.47, 1, 0, 0, 0, 0, 1, 0, -31.079, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.47, 1, 0, 0, 0, 0, 1, 0, -31.079, 0, 0, 1); }
  10.51% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.146, 1, 0, 0, 0, 0, 1, 0, -1.766, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.146, 1, 0, 0, 0, 0, 1, 0, -1.766, 0, 0, 1); }
  10.68% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.135, 1, 0, 0, 0, 0, 1, 0, -1.214, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.135, 1, 0, 0, 0, 0, 1, 0, -1.214, 0, 0, 1); }
  14.01% { -webkit-transform: matrix3d(1, 0, 0, 0, -0.003, 1, 0, 0, 0, 0, 1, 0, 2.88, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, -0.003, 1, 0, 0, 0, 0, 1, 0, 2.88, 0, 0, 1); }
  14.24% { -webkit-transform: matrix3d(1, 0, 0, 0, -0.007, 1, 0, 0, 0, 0, 1, 0, 2.886, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, -0.007, 1, 0, 0, 0, 0, 1, 0, 2.886, 0, 0, 1); }
  17.46% { -webkit-transform: matrix3d(1, 0, 0, 0, -0.033, 1, 0, 0, 0, 0, 1, 0, 1.99, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, -0.033, 1, 0, 0, 0, 0, 1, 0, 1.99, 0, 0, 1); }
  31.36% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.002, 1, 0, 0, 0, 0, 1, 0, 0.01, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.002, 1, 0, 0, 0, 0, 1, 0, 0.01, 0, 0, 1); }
  36.48% { -webkit-transform: matrix3d(1, 0, 0, 0, 0.001, 1, 0, 0, 0, 0, 1, 0, -0.003, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0.001, 1, 0, 0, 0, 0, 1, 0, -0.003, 0, 0, 1); }
  44.34% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.001, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.001, 0, 0, 1); }
  44.44% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.001, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.001, 0, 0, 1); }
  45.27% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -7.992, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -7.992, 0, 1); }
  46.45% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.001, -15.312, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.001, -15.312, 0, 1); }
  48.45% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.001, -19.275, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.001, -19.275, 0, 1); }
  50.95% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -15.606, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -15.606, 0, 1); }
  53.4% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -9.111, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -9.111, 0, 1); }
  55.56% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -4.058, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -4.058, 0, 1); }
  55.9% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -3.395, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -3.395, 0, 1); }
  58.35% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.013, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.013, 0, 1); }
  62.35% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -1.622, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -1.622, 0, 1); }
  72.25% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.002, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.002, 0, 1); }
  76.25% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.137, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.137, 0, 1); }
  86.15% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  90.16% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.011, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -0.011, 0, 1); }
  100% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); } 
}



</style>

<script>
   $(document).ready(function() {
      $('.container').hide().delay(1000).fadeIn(2200);
      
});
</script>
<body>
          	<div class = "headerborder">
            <div class = "animation-target1">
          	<div class = "title">STEAMFLEET</div>
            </div>
            </div>
            <br>
            <br>
            <br>
            <div class = "container">
            
            <div class = "animate__animated animate__fadeIn">
          	<div class="d-flex justify-content-center align-items-center">
          	<div class="shadow-lg p-3 mb-5 bg-white rounded" style = "width:100%; height: 100ex">
                  
         
			       <div class = "animation-target">
			       <div class = "signinText">SIGN UP</div>
             </div>
            <br>

            <form action = "main/Authentication/logbuffer.php">
            <div class="form-group">
            <div class = "container">
            <div class = "signin_text">Enter Name</div>
            <div class="row justify-content-start">
            <div class="col-4">
            <input type="text" 
            class="form-control form-control-lg"
            id="firstname"
            class = "firstname"
            name = "firstname"
            placeholder="First Name">
             </div>

            <div class="col-4">
            <input type="text" 
            class="form-control form-control-lg"
            id="lastname"
            class = "lastname"
            name = "lastname"
            placeholder="Last Name">
            </div>
            </div>

                
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
            
            <div class = "signin_text">Re-Enter Password</div>
            <input type="password" 
            class="form-control form-control-lg" 
            id = "repass"
            placeholder="Re-Enter Password">
            <div class = "exceptionREPassword" style = "font-size: 12px"></div>
            </div>

            
            <br>
            <div class="text-center">
            <input type="submit" name = "submit" value="Submit" class="btn btn-outline-success" style = "width: 30%; font-size: 2vw">
            </div>
            </form>
            <br>
            <div class = "alreadyLogin" style = "color:navy; font-size:2vw; text-align: center"><a href = "/main/Authentication/loginonly.php">Already have an account?</a></div>

            <script>

            $(document).on("submit", "form", function(e){

              var firstname = $("#firstname").val();
              var lastname = $("#lastname").val();
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
              if(password != $("#repass").val()){
                e.preventDefault();
                  $(".exceptionREPassword").empty().append("*PASSWORD DOES NOT MATCH*").css( "color", "red" );         
                }
            
         }); 


            </script>
            <?php 
            
            
            if(isset($_SESSION['duplicate'])== 1){
              echo "<h1 style = 'color:red; font-size 15px; text-align: center'>Email already exists, Log In?</h1>";
              $_SESSION['duplicate']= 0;
            }
           
           
            
            ?>
              <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
   


</script>

	</body>
</html>
