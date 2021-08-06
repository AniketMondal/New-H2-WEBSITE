<?php
session_start();
            $Username=$_SESSION['Username'];
          // Create connection

          $conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
          // Check connection
          $Username=$_SESSION['Username'];
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
            $sql = "SELECT * FROM `Profiles` WHERE `Username` = '$Username';";
            $result=mysqli_query($conn, $sql);
            $result_info = $result->fetch_assoc();
            $roll=$result_info["Roll_No"];
            $_SESSION['rolln']=$roll;
						if($_SESSION['Username']==NULL){header("Location: login.php");}
?>
<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="shortcut icon" href="images/icon.png">
		<title>Home of The Wild One</title>
		<meta charset="utf-8">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'>
		<link rel="stylesheet" href="css/firewatchlaunch.css" type="text/css" media="screen" charset="utf-8">
		<link rel="stylesheet" href="css/camponav.css" type="text/css" media="screen" charset="utf-8">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<script type="text/javascript">
				  !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
				  arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
				  d.src='//d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
				  insertBefore(d,q)}(window,document,'script','_gs');
				  
				  _gs('GSN-517995-G');
				</script>
		<style> 
			#myDIV {
			  -webkit-animation: mymove 6s infinite; /* Chrome, Safari, Opera */
			  animation: mymove 6s infinite;
			}

			/* Chrome, Safari, Opera */
			@-webkit-keyframes mymove {
			  50% {text-shadow: 1px 1px 50px red;}
			}

			/* Standard syntax */
			@keyframes mymove {
			  50% {text-shadow: 1px 1px 50px red;}
			}
		</style>
		
	</head>

	<body class="firewatch launch withxbone">
			
			<ul class="navbar-top">
					
					<li id="nav-company"><a href="https://gymkhana.iitb.ac.in/~hostel2/"><h1><strong >The Wild Ones </strong></h1></a></li>
					<li id="nav-review"><a href="maint/index.html"><strong><span>Maint</span></strong></a></li>
					<li id="nav-store"><a href="mess/index.php"><strong><span>Mess</span></strong></a></li>
					<li id="nav-blog"><a href="alumni/index.html"><strong><span>Alumni</span></strong></a></li>
					<li id="nav-blog"><a href="portals/kfc/"><strong><span>KFC</span></strong></a></li>
					<li id="nav-blog"><a href="portals/messrebate/"><strong><span>Mess Rebate</span></strong></a></li>
					<li id="nav-blog"><a href="portals/lancomplaints/"><strong><span>LAN</span></strong></a></li>
					<li id="nav-game"><a href="#"><strong><span>Home</strong></a></li>
					<li id="nav-review"><a href="council/index.php"><strong><span>Council</span></strong></a></li>
					<li id="nav-blog"><a href="legends.php"><strong><span>Legends</span></strong></a></li>
			</ul>		
				<script type="text/javascript">document.getElementById("nav-game").className += " current";</script>
			

		<div id="page">

			

			<div class="keyart" id="nonparallax">
			</div>
			<div class="keyart" id="parallax">

				<div class="keyart_layer parallax" id="keyart-0" data-speed="2"></div>		<!-- 00.0 -->
				<div class="keyart_layer parallax" id="keyart-1" data-speed="5"></div>	<!-- 12.5 -->
				<div class="keyart_layer parallax" id="keyart-2" data-speed="11"></div>		<!-- 25.0 -->
				<div class="keyart_layer parallax" id="keyart-3" data-speed="16"></div>	<!-- 37.5 -->
				<div class="keyart_layer parallax" id="keyart-4" data-speed="26"></div>		<!-- 50.0 -->
				<div class="keyart_layer parallax" id="keyart-5" data-speed="36"></div>	<!-- 62.5 -->
				<div class="keyart_layer parallax" id="keyart-6" data-speed="49"></div>		<!-- 75.0 -->
				<div class="keyart_layer" id="keyart-scrim"></div>
				<div class="keyart_layer parallax" id="keyart-7" data-speed="69"></div>		<!-- 87.5 -->
				<div class="keyart_layer" id="keyart-8" data-speed="100"></div>		<!-- 100. -->
			</div>

			<div id="maincontain"><div id="main">

				<div class="section buy">
					<h2 class="banner nobackground">
					<em style="font-weight: 800;">Welcome &nbsp;&nbsp;
						<?php
						echo $_SESSION['Username'] ;
						?> <i class='fas fa-smile'></i>
					</em>
					</h2>
				</div>

				<div class="section internallinks gridwithicons">
					<ul class="links smalllinks">
						<li class="link media"><a href="https://gymkhana.iitb.ac.in/~hostel2/leaderboard.php">
							<h4 class="banner"><span class="oneline"><i class='fas fa-award'></i> Leader Board</span></h4>
						</a></li>
						<li class="link faq"><a href="https://gymkhana.iitb.ac.in/~hostel2/events_home.php">
							<h4 class="banner"><span class="oneline"><i class='fas fa-gamepad'></i> Events <i class='fas fa-theater-masks'></i></span></h4>
						</a></li>
					</ul>
					<ul class="links smalllinks">
						<li class="link media"><a href="https://gymkhana.iitb.ac.in/~hostel2/ann.php">
							<h4 class="banner"><span class="oneline"><i class='fas fa-bullhorn'></i> Announcements</span></h4>
						</a></li>
						<li class="link faq"><a href="https://gymkhana.iitb.ac.in/~hostel2/profile.php">
							<h4 class="banner"><span class="oneline"><i class='fas fa-user-circle'></i> Manage Profile</span></h4>
						</a></li>
						</a></li>
						
					</ul>
				</div>				
				<div class="section description">
				
				<ul>
					<?php 
						$sql2="SELECT * FROM `Announcements` ORDER BY `Time_Stamp` DESC LIMIT 4";
						$cursur1=mysqli_query($conn,$sql2);
						$projects = array();
						
						while ($project = $cursur1->fetch_assoc())
						{
						?>
							<li>
							<h5>
							<i class='fas fa-caret-square-right'></i>
							<?php $myvar = $project["given_by"];
							$sql3 = "SELECT * FROM `Secretaries` WHERE `Name` = '$myvar';";
							$nikhil=mysqli_query($conn,$sql3);
							if($nikhil->num_rows == 0) {
								echo "There is no news, all is known";
								}
							else {
								  $resultnikhil=$nikhil->fetch_assoc();
								  $path="council/images/";
								}

								echo $project["Announcement"];
								echo " - ";
								echo $project["given_by"];
						?>
							</h5>
							</li><br>
					<?php
					};
					?>
				</ul>
				</div>
				</br>
				<div class="section screenshots">
					<ul class="thumbnails">
						<li>
							<a href="gallery/IMG_0141.JPG"><img alt="Gallery Preview" src="gallery/IMG_0141.JPG"></a>
						</li><li>
							<a href="gallery/gyra.jpeg"><img alt="Gallery Preview" src="gallery/gyra.jpeg"></a>
						</li><li>
							<a href="gallery/IMG_0211.JPG"><img alt="Gallery Preview" src="gallery/IMG_0211.JPG"></a>
						</li><li>
							<a href="Igallery/MG_0115.JPG"><img alt="Gallery Preview" src="gallery/IMG_0115.JPG"></a>
						</li>
						<li><a href="gallery/index.html">Show More...</a></li>
					</ul>
				</div>
				<div class="section pressquote big">
					<h3 id="myDIV">Insti ka BAAP H2!H2!!!</h3>
				</div>
				<div class="section copyright">
					<p id="myDIV">&copy;<span id="year">2019</span> Hostel 2| IIT Bombay| Web Council 2018-2019</p>
				</div>

				<div class="section companylinks">
					<ul class="companies">
						<li class="campo"><a href="https://gymkhana.iitb.ac.in/~hostel2/council/index.html">
							<h1></h1>
						</a></li>
						<li class="panic"><a href="http://iitb.ac.in/">
							<h1></h1>
						</a></li>
					</ul>
				</div>

			</div></div>

		</div>

		<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="js/magnific.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>

		<script type="text/javascript" src="js/firewizard.js"></script>
	</body>

</html>
