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
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="shortcut icon" href="images/icon.png">
		<title>EVENTS</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<style>
			tr, tr.a {
			background-color: transparent;
			}
			td {
			color:#03675a;
			text-shadow: green 1px .5px 1px;
			font-weight:400;
			height:30px;
			font-variant: small-caps;
			}
			table, td {
			text-align:center;
			}
			th {
			color:#450002;
			text-align:center;
			height:35px;
			}
			h1 {
			text-align:center;
			color:brown;
			text-shadow: white 0.075em 0.075em 0.1em;
			}
			table.table-bordered {
			border-color:blue;
			}
			tr.a:hover {
			background-color:#210002;
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
	
	<body style="background-color:#210002;background-image: url('images/keyart-mobile.jpg');background-size: cover; background-repeat: no-repeat; background-position:center;">
		<nav>
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
</nav>
		<div class="container-fluid" style="background-color:transparent;padding-top:25px">
			<h1 style="padding-bottom:35px">Events for You</h1>
			<table class="table-responsive table-bordered" style="text-align:center;padding-top:25px">
				<thead>
				<tr>
				<th>Category</th>
				<th>Name</th>
				<th>Description</th>
				<th>Points</th>
				<th>Created By</th>
				</tr>
				</thead>
				<tbody>
					<?php
				$sql2="SELECT * FROM `Events`;";
						$cursur1=mysqli_query($conn,$sql2);
						$projects = array();
						
						while ($project = $cursur1->fetch_assoc())
						{
				 $result=mysqli_query($conn, $sql);
				 $cat=$project["Category"];
				 $name=$project["Event_Name"];
				 $desc=$project["Description"];
				 $points=$project["Points"];
				 $created=$project["Created_By"];

				?>
				<tr class="a">
				<td><?php  echo $cat; ?></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $desc; ?></td>
				<td><?php echo $points; ?></td>
				<td><?php echo $created; ?></td>
				</tr>
				<?php } ?>
				</tbody>
			</table>