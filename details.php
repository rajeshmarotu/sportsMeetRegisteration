<?php
	$val=$_GET['val'];
		

?>
<html>
<head>
		  <title>Sports meet</title>
		  <!--<link rel="stylesheet" href="regcss.css">-->
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		body{
			font-size:1.9em;
		}
		
		

	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
			
			</div>
			<div class="col-sm-8">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<a class="navbar-brand" href="sports.php">IIIT Sports Meet 2K17</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="games.php">Games</a></li>
						<li><a href="contact.php">Contact</a></li>
      						
      						<li><a href="about.php">About</a></li>
					</ul>		
				</nav>
				<div class="details">
					<?php

						switch($val){
							case '1': echo 'it is cricket!! All details will be available soon<br><br><center><h2>UNDER CONSTRUCTION !! :)</h2></center>';
								  break;
							case '2': echo 'it is Volley ball!!All details will be available soon<center><h2>UNDER CONSTRUCTION !! :)</h2></center>';
								  break;
							case '3': echo 'it is football!!All details will be available soon<center><h2>UNDER CONSTRUCTION !! :)</h2></center>';
								  break;
							case '4': echo 'it is badminton!!All details will be available soon<center><h2>UNDER CONSTRUCTION !! :)</h2></center>';
								  break;
							case '5': echo 'it is Table tennis !! All details will be available soon<center><h2>UNDER CONSTRUCTION !! :)</h2></center>';
								  break;
						}
					
					?>
				</div>
				
			</div>
			<div class="col-sm-2">
			
			</div>
		</div>
	</div>
</body>
