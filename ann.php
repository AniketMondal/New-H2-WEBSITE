<!Doctype html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>H2 Announcements</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="shortcut icon" href="images/icon.png">
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
			nav {
	background-color: #210002;
	font-family: "futura-pt";
	height: auto;
	padding: 0;
}
span.icon-bar {
	background-color:#ffaf00;
}
#a2:hover{
	background-color: #a34300;
	color: #ffaf00;
}
		</style>
</head>
<body style="background-color:#260002">
	<div><nav class=" navbar navbar-static-top navbar-fixed-top">
			<div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" href="home.php"style="color:#ffaf00;">THE WILD ONES</a>
    		</div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="council/index.html" style="color:#ffaf00;"id="a2">COUNCIL</a></li>
        <li><a href="home.php"style="color:#ffaf00;"id="a2">HOME</a></li>
		<li><a href="portals/lancomplaints/"style="color:#ffaf00;"id="a2">LAN</a></li>
        <li><a href="portals/messrebate/"style="color:#ffaf00;"id="a2">MESS REBATE</a></li>
        <li><a href="portals/kfc/"style="color:#ffaf00;"id="a2">KFC</a></li>
        <li><a href="alumni/index.html"style="color:#ffaf00;"id="a2">ALUMNI</a></li>
        <li><a href="mess/index.php"style="color:#ffaf00;"id="a2">MESS</a></li>
        <li><a href="maint/index.html"style="color:#ffaf00;"id="a2">MAINT</a></li>
    </ul>
</div>
</nav></div>
		<div style="padding-top: 50px;text-align: center;"><h2 style="color:green; text-shadow:#green 1px 1px 2px; font-weight: 700">
		News & Announcements
		</h2></div>
	
	<div id="myDIV">
	<list class="list-group">
	<?php 
						$sql2="SELECT * FROM `Announcements` ORDER BY `Time_Stamp` DESC";
						$cursur1=mysqli_query($conn,$sql2);
						$projects = array();
						
						while ($project = $cursur1->fetch_assoc())
						{
							?>
	<li class="list-group-item" style="background-color:#260002; text-align:center;float: center;">
		<h3 style="color:orange; font-size-adjust:30pt;text-align: center;">
           <?php $myvar = $project["given_by"];
           $sql3 = "SELECT * FROM `Secretaries` WHERE `Name` = '$myvar';";
           $nikhil=mysqli_query($conn,$sql3);
           if($nikhil->num_rows == 0) {
            echo "No Important Announcements";
            } else {
              $resultnikhil=$nikhil->fetch_assoc();
              $path="council/images/";
            }
            
			 echo $project["Announcement"];
			 echo '<p class="pull-right"><span class="label label-default">'.$project["Time_Stamp"].' '.$project["given_by"].'</span></p>';
			 // echo '<p class="pull-right"><span class="label label-default">'.$project["given_by"].'</span></p>';
			?></h3></li>
	</br>
	<?php
	};  ?>
	</list>
	<br>
		</div>
		<hr>
	
	<nav class="navbar navbar-static-top navbar-fixed-bottom" style="text-align:center;background-color:#ffaf00; text-decoration-color;">
	<p style="color:green;font-weight:900">&copy <span>2019</span> Hostel 2| IIT Bombay| Web Council 2018-2019</p>
	</nav>
	
</body>
</html>