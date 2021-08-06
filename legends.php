<?php
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123","hostel2");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="shortcut icon" href="images/icon.png">
		<title>True Legends of H2</title>
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
th.a1 {
  border: 3px solid #dddddd;
  text-align: center;
  padding: 8px;
  color: white;
}
thead.a1 {
  border: 1px solid #dddddd;
  text-align: center;
  color: white;
}
td.a1 {
	border: 3px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr.a1,tr.b:nth-child(even) {
  background-color: #ffaf00;
  color: 210002;
  font-weight: 900;
}
tr.b:nth-child(odd) {
  background-color: #ff9800;
  color: #210002;
  font-weight: 900;
}
tr.b:hover {
background-color:#fff6b0;
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
		
	<body style="background-color:#210002;">
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
		<div class="jumbotron" style="background-color:#210002;background-image: url('images/keyart-mobile.jpg');background-size: cover; background-repeat: no-repeat; background-position: 60% 100%;">
				<a href="" style="text-align:center; color:green;">
					<h1><i class='fas fa-award'></i>Legends</h1>
				</a>
				<p style="color:green;text-align:center;font-weight: 300;">The more difficult the victory, the greater the happiness in winning</p>
		</div>

		<div style="text-align:center; color:#ffaf00;">
			<h1>Freedom of The Hall</h1>
		</div>
		<div class="container" style="margin-top:90px;">
			<table class=" table table-responsive table-bordered table-hover table-condensed">
				<thead style="color:white;text-align:center; border-style:solid solid solid solid; border-color:white">
					<tr>
					<th>Name</th>
					<th>Year</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM legends WHERE scroll ='FL' ORDER BY YEAR DESC";
					$dg = mysqli_query($conn,$sql);
					$dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
					foreach($dr as $people):
					?>
					<tr class="b">
					<td><?php echo $people["Name"]?></td>
					<td><?php echo $people["Year"]?></td>				
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<br><br>
		<div style="text-align:center; color:#ffaf00;">
			<h1>GC / PAF Victiries</h1>
		</div>
		<div class="container" style="margin-top:90px;">
			<table class=" table table-responsive table-bordered table-hover table-condensed">
				<thead style="color:white;text-align:center; border-style:solid solid solid solid; border-color:white">
					<tr>
					<th>Name</th>
					<th>Year</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM legends WHERE scroll ='PAF' ORDER BY YEAR DESC";
					$dg = mysqli_query($conn,$sql);
					$dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
					foreach($dr as $people):
					?>
					<tr class="b">
					<td><?php echo $people["Name"]?></td>
					<td><?php echo $people["Year"]?></td>				
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<br><br>
		<div style="text-align:center; color:#ffaf00;">
			<h1>Cultural Scroll</h1>
		</div>
		<div class="container" style="margin-top:90px;">
			<table class=" table table-responsive table-bordered table-hover table-condensed">
				<thead style="color:white;text-align:center; border-style:solid solid solid solid; border-color:white">
					<tr>
					<th>Name</th>
					<th>Year</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM legends WHERE scroll ='CS' ORDER BY YEAR DESC";
					$dg = mysqli_query($conn,$sql);
					$dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
					foreach($dr as $people):
					?>
					<tr class="b">
					<td><?php echo $people["Name"]?></td>
					<td><?php echo $people["Year"]?></td>				
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<br><br>
		<div style="text-align:center; color:#ffaf00;">
			<h1>Sports Scroll</h1>
		</div>
		<div class="container" style="margin-top:90px;">
			<table class=" table table-responsive table-bordered table-hover table-condensed">
				<thead style="color:white;text-align:center; border-style:solid solid solid solid; border-color:white">
					<tr>
					<th>Name</th>
					<th>Year</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM legends WHERE scroll ='FC' ORDER BY YEAR DESC";
					$dg = mysqli_query($conn,$sql);
					$dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
					foreach($dr as $people):
					?>
					<tr class="b">
					<td><?php echo $people["Name"]?></td>
					<td><?php echo $people["Year"]?></td>				
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<br><br>
		<div style="text-align:center; color:#ffaf00;">
			<h1>Cult. Man Of The Year</h1>
		</div>
		<div class="container" style="margin-top:90px;">
			<table class=" table table-responsive table-bordered table-hover table-condensed">
				<thead style="color:white;text-align:center; border-style:solid solid solid solid; border-color:white">
					<tr>
					<th>Name</th>
					<th>Year</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM legends WHERE scroll ='CM' ORDER BY YEAR DESC";
					$dg = mysqli_query($conn,$sql);
					$dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
					foreach($dr as $people):
					?>
					<tr class="b">
					<td><?php echo $people["Name"]?></td>
					<td><?php echo $people["Year"]?></td>				
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<br><br>
		<div style="text-align:center; color:#ffaf00;">
			<h1>Sportsman Of The Year</h1>
		</div>
		<div class="container" style="margin-top:90px;">
			<table class=" table table-responsive table-bordered table-hover table-condensed">
				<thead style="color:white;text-align:center; border-style:solid solid solid solid; border-color:white">
					<tr>
					<th>Name</th>
					<th>Year</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM legends WHERE scroll ='SY' ORDER BY YEAR DESC";
					$dg = mysqli_query($conn,$sql);
					$dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
					foreach($dr as $people):
					?>
					<tr class="b">
					<td><?php echo $people["Name"]?></td>
					<td><?php echo $people["Year"]?></td>				
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<br><br>
		<div style="text-align:center; color:#ffaf00;">
			<h1>General Secretary</h1>
		</div>
		<div class="container" style="margin-top:90px;">
			<table class=" table table-responsive table-bordered table-hover table-condensed">
				<thead style="color:white;text-align:center; border-style:solid solid solid solid; border-color:white">
					<tr>
					<th>Name</th>
					<th>Year</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM legends WHERE scroll ='GS' ORDER BY YEAR DESC";
					$dg = mysqli_query($conn,$sql);
					$dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
					foreach($dr as $people):
					?>
					<tr class="b">
					<td><?php echo $people["Name"]?></td>
					<td><?php echo $people["Year"]?></td>				
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<br><br>
		<div style="text-align:center; color:#ffaf00;">
			<h1>Best Office Bearer</h1>
		</div>
		<div class="container" style="margin-top:90px;">
			<table class=" table table-responsive table-bordered table-hover table-condensed">
				<thead style="color:white;text-align:center; border-style:solid solid solid solid; border-color:white">
					<tr>
					<th>Name</th>
					<th>Year</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM legends WHERE scroll ='OB' ORDER BY YEAR DESC";
					$dg = mysqli_query($conn,$sql);
					$dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
					foreach($dr as $people):
					?>
					<tr class="b">
					<td><?php echo $people["Name"]?></td>
					<td><?php echo $people["Year"]?></td>				
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<br><br>
		<div style="text-align:center; color:#ffaf00;">
			<h1>Best Secretary</h1>
		</div>
		<div class="container" style="margin-top:90px;">
			<table class=" table table-responsive table-bordered table-hover table-condensed">
				<thead style="color:white;text-align:center; border-style:solid solid solid solid; border-color:white">
					<tr>
					<th>Name</th>
					<th>Year</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM legends WHERE scroll ='BC' ORDER BY YEAR DESC";
					$dg = mysqli_query($conn,$sql);
					$dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
					foreach($dr as $people):
					?>
					<tr class="b">
					<td><?php echo $people["Name"]?></td>
					<td><?php echo $people["Year"]?></td>				
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<br><br>
	</body>
</html>
			


					