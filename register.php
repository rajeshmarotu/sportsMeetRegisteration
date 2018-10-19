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
			/*background-image:url('g2.jpg');
			background-size: 800px, 230px;*/
		}
		.form{
			margin-left:6px;
		}
		.well{background-color:#ffee58}

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
				<div class="well form">
					<form action="register.php" method="POST">
						Name&nbsp;&nbsp;
						<input type="text" name="name" required><br><br>
						Roll No
						<input type="text" name="rno" required><br><br>
						
						1st preference:<br>
						<input type="radio" name="game1" value="1" required>&nbsp;Cricket&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game1" value="2" required>&nbsp;Volley ball&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game1" value="3" required>&nbsp;Football&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game1" value="4" required>&nbsp;Badminton&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game1" value="5" required>&nbsp;Table tennis
						<br><br>
						2nd preference:<br>
						<input type="radio" name="game2" value="1" required>&nbsp;Cricket&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game2" value="2"required>&nbsp;Volley ball&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game2" value="3" required>&nbsp;Football&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game2" value="4" required>&nbsp;Badminton&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game2" value="5" required>&nbsp;Table tennis
						<br><br>
						3rd preference:<br>
						<input type="radio" name="game3" value="1" required>&nbsp;Cricket&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game3" value="2" required>&nbsp;Volley ball&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game3" value="3" required>&nbsp;Football&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game3" value="4" required>&nbsp;Badminton&nbsp;&nbsp;&nbsp;
						<input type="radio" name="game3" value="5" required>&nbsp;Table tennis
						<br><br>
						<input type="submit" name="submit" value="Submit">
					<form>						
				</div>
				
			</div>
			<div class="col-sm-2">
			
			</div>
		</div>
	</div>
</body>
</html>
<?php
	$user='root';
	$password='marotu';
	$localhost="localhost";
	if(mysql_connect($localhost,$user,$password)){
		$database=mysql_select_db('sports');
		echo mysql_error();
		}
	if(isset($_POST['name'])&&isset($_POST['rno'])&&isset($_POST['game1'])&&isset($_POST['game2'])&&isset($_POST['game3'])&&isset($_POST['submit']))
	{
		if(!empty($_POST['name'])&&!empty($_POST['rno'])&&!empty($_POST['game1'])&&!empty($_POST['game2'])&&!empty($_POST['game3']))
		{
			$name=trim($_POST['name']);
			$rno=trim($_POST['rno']);
			$game1=$_POST['game1'];
			$game2=$_POST['game2'];
			$game3=$_POST['game3'];
	         if(!(strlen($name)<2)){
		   if(strlen($rno)==11){
			$val=substr($rno,3,1);echo $val;
			switch($val){
				case '5': $l=substr($rno,9,11);
					  if($l<=35&&$l>=1){
							if(preg_match("/^2015BCS00[0-3][0-9]$/",$rno)){
								$flag=1;
								}
							else{$flag=0;}
						}
					  else{
							$flag=0;	
						}
					  break;
				case '6': $l=substr($rno,9,11);
					  if($l<=32&&$l>=1){
							if(preg_match("/^2016BCS00[0-3][0-9]$/",$rno)){
								$flag=1;
								}
							else{$flag=0;}
						}
					  else{
							$flag=0;	
						}
					  break;
				default: $flag=0;
					 break;
			 	}
			
			  if (!$flag | !preg_match("/^[a-zA-Z ]+$/",$name))
			  {
				echo '<center>Use correct roll number or Don\'t use alpha numperic name !!</center> ';
      			  }
			  else
			  {
		    		if((($game1!=$game2)&&($game2!=$game3)&&($game3!=$game1)))
		    		{
					$query="SELECT * FROM `participants` WHERE `roll`='$rno'";
					$res=mysql_query($query);
					echo mysql_error();
					$row=mysql_fetch_assoc($res);
					echo mysql_error();
					if(!$row)
					{
						$query="INSERT INTO `participants`(`name`, `roll`, `1st`, `2nd`, `3rd`) VALUES ('$name','$rno','$game1','$game2','$game3')";
						$res=mysql_query($query);
						echo mysql_error();
				
						if($res)
						{
							echo '<center>Succesfully registered!!</center>';
						}	
					}else{
						echo '<center>You have already regstered!!</center>';
		
					}
		   		}else{
					echo "<center>Don't select a game which is already selcted</center>";
					}
		        }
		        
	     }
	     else{
			echo '<center>Invalid roll!!</center>';
		}
		}else{
			echo '<center>Use full name DUDE  :D :D</center>';

			}
	
		    
		} 

		
	}
	


?>

