<html>
<head>
		  <title>Sports meet</title>
		  <!--<link rel="stylesheet" href="regcss.css">-->
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		img{
			width:500px;
			height:250px;
		}
		body{
			font-size:1.9em;
		}
		button{
			background-color:#FFFFFF;
		}
		.button1:hover,.button2:hover,.button3:hover,.button4:hover.button5:hover{
				background-color:#00b8d4;
			}
		a {
			text-decoration:none;
		}
		.button1,.button2,.button3,.button4,.button5{position:relative;right: -130px; bottom: -100px;}
		.names{
			color:#000080;
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
				<div class="well game1">
					<span class="names">Cricket</span></span><br>
					<img src="images/cricket.jpg" alt="cricket" >
					<a href="finalteam.php?val=1"><button type ="button" class=" btn button1" id="next_button">
						Click to see Final team</button>
					</a><br><br>
				</div>
				<div class="well game2">
					<span class="names">Volley ball</span><br>
					<img src="images/valleyball03.jpg" alt="volleyball" >
					<a href="finalteam.php?val=2"><button type ="button" class=" btn button2" id="next_button">
						Click to see Final team</button>
					</a><br><br>
				</div>
				<div class="well game3">
					<span class="names">Football</span><br>
					<img src="images/foot.jpeg" alt="football" >
					<a href="finalteam.php?val=3"><button type ="button" class=" btn button3" id="next_button">
						Click to see Final team</button>
					</a><br><br>
				</div>
				<div class="well game4">
					<span class="names">Badminton</span><br>
					<img src="images/shuttle.jpeg" alt="cricket" >
					<a href="finalteam.php?val=4"><button type ="button" class=" btn button4" id="next_button">
						Click to see Final team</button>
					</a><br><br>
				</div>
				<div class="well game5">
					<span class="names">Table tennis</span><br>
					<img src="images/images.png" alt="cricket" >
					<a href="finalteam.php?val=5"><button type ="button" class=" btn button5" id="next_button">
						Click to see Final team</button>
					</a>
				</div>
				</div>
			</div>
			<div class="col-sm-2">
			
			</div>
		</div>
	</div>
</body>
</html>

