<?php
	$val=$_GET['val'];
	switch($val){
	case '1': $game= 'Cricket';
		  break;
	case '2': $game= 'Volleyball';
		  break;
	case '3': $game= 'Foot ball';
		  break;
	case '4': $game= 'Badminton';
		  break;
	case '5': $game= 'Table tennis';
		  break;
	
	}
		

?>
<html>
<head profile="http://localhost/betateam/finalteam.php?val=<?php echo $val ?>">
		  <title>Sports meet</title>
		  <link rel="icon" href="ground.jpg" type="image/jpg">
		  <!--<link rel="stylesheet" href="regcss.css">-->
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		body{
			font-size:1.9em;
		}
		table td,th{text-align:center;}
		

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
						$localhost='localhost';
						$root='root';
						$password="marotu";
						if(mysql_connect($localhost,$root,$password)){
							mysql_select_db('sports');
							
						}
						$query="SELECT `name`,`roll` FROM `participants` WHERE `1st`='$val'";
						$res=mysql_query($query);
						echo mysql_error();
						echo '<h3>'.$game.' as First preference</h3>';
						echo '<table class="table table-condensed">';
						echo '<thead><tr><th>S.No</th><th>Student Name</th><th>Roll No</th></tr></thead>';
						echo '<tbody>';
						$i=1;
						while($row=mysql_fetch_assoc($res))
						{
							echo '<tr><td>'.$i.'</td><td>'.$row['name'].'</td><td>'.$row['roll'].'</td></tr>';
							$i++;
						}
						echo '</tbody></table>';

						echo '<br></br>';
						$query="SELECT `name`,`roll` FROM `participants` WHERE `2nd`='$val'";
						$res=mysql_query($query);
						echo mysql_error();


						echo '<h3>'.$game.' as second preference</h3>';
						echo '<table class="table table-condensed">';
						echo '<thead><tr><th>S.No</th><th>Student Name</th><th>Roll No</th></tr></thead>';
						echo '<tbody>';
						$i=1;
						while($row=mysql_fetch_assoc($res))
						{
							echo '<tr><td>'.$i.'</td><td>'.$row['name'].'</td><td>'.$row['roll'].'</td></tr>';
							$i++;
						}
						echo '</tbody></table>';

						echo '<br></br>';
						$query="SELECT `name`,`roll` FROM `participants` WHERE `3rd`='$val'";
						$res=mysql_query($query);
						echo mysql_error();

						echo '<h3>'.$game.' as third preference</h3>';
						echo '<table class="table table-condensed">';
						echo '<thead><tr><th>S.No</th><th>Student Name</th><th>Roll No</th></tr></thead>';
						echo '<tbody>';
						$i=1;
						while($row=mysql_fetch_assoc($res))
						{
							echo '<tr><td>'.$i.'</td><td>'.$row['name'].'</td><td>'.$row['roll'].'</td></tr>';
							$i++;
						}
						echo '</tbody></table>';
					?>
				</div>
				
			</div>
			<div class="col-sm-2">
			
			</div>
		</div>
	</div>
</body>
