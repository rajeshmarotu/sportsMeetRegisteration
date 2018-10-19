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
		.form{
			margin-left:6px;
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
				<div class="well form">
					<form action="reggirls.php" method="POST">
						Name&nbsp;&nbsp;
						<input type="text" name="name"><br><br>
						Roll No
						<input type="text" name="rno"><br><br>
						Select games you want to play:
						<br>
						<input type="radio" name="game1" value="1">&nbsp;Game 1 &nbsp;&nbsp;
						<br><br>
						<input type="radio" name="game2" value="2">&nbsp;Game 2&nbsp;&nbsp;&nbsp;
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
	if(isset($_POST['name'])&&isset($_POST['rno'])&&isset($_POST['submit'])&&isset($_POST['game1'])&&isset($_POST['game2']))
	{
		
		if(!empty($_POST['name'])&&!empty($_POST['rno'])){
			if(empty($_POST['game1'])&&empty($_POST['game2']))
			{
				echo 'select atleast one game!!';
			}
			else{
				$name=$_POST['name'];
				$rno=$_POST['rno'];
				$game1=$_POST['game1'];
				$game2=$_POST['game2'];
			
				$query="SELECT * FROM `girls` WHERE `username`='$name' AND `rno`='$rno'";
				$res=mysql_query($query);
				echo mysql_error();
				$row=mysql_fetch_assoc($res);
				echo mysql_error();
				echo 'ikkada';
				if(!$row)
				{
					$query="INSERT INTO `girls`(`username`, `rno`, `1st`, `2nd`) VALUES ('$name','$rno','$game1','$game2')";
					$res=mysql_query($query);
					echo mysql_error();
				
					if($res)
					{
						echo '<center>Succesfully registered!!</center>';
					}
					else{
						echo '<center>There\'s been some eror!!</center>';

					}	
				}else{
					echo '<center>You have already regstered!!</center>';
		
				     }
			  } 

		     }else{
				echo 'name and rno should not be empty!!';
			}
		}else{
				echo 'regagsjn';
			}
		
	


?>

