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
		<title>LEADERBOARD</title>
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
					<h1><i class='fas fa-award'></i> Leader Board</h1>
				</a>
				<p style="color:green;text-align:center;font-weight: 300;">The more difficult the victory, the greater the happiness in winning</p>
		</div>
		
		<div class="container-fluid">
		<div class="col-lg-3 col-md-6 col-sm-12" style="background-color:default;margin-top:10px">
			<table>
				<tr onclick="document.getElementById('id01').style.display='block'">
					<th  class="a1">1<sup>st</sup> Block <i class='fas fa-spider'></i></th>

					    <div id="id01" class="w3-modal">
					      <div class="w3-modal-content w3-animate-top w3-card-4">
					        <header class="w3-container w3-teal"> 
					          <span onclick="document.getElementById('id01').style.display='none'" 
					          class="w3-button w3-display-topright">&times;</span>
					          <h2>Block 1</h2>
					          </header>
					        <div class="w3-container" allign="center">
					          <?php
					          $sql="SELECT * FROM `Leaderboard` WHERE `Block` = 'First';"; 
					          		$cursur1=mysqli_query($conn,$sql);
					          		$projects = array();
					          		while ($project = $cursur1->fetch_assoc())
					          		{
					           $wing=$project["Wing"];
					           $point=$project["Points"];
					          ?>
					          <p><?php echo $wing;
					          echo " : ";
					          echo $point;
					          echo " Points"?></p>
					      <?php }?>
					        </div>
					        
					      </div>
					    </div>
<!-- 					  </div>
 -->					
				</tr>
				<tr class="a1"><td class="a1">
					 <?php
						$sql = "SELECT * FROM `Leaderboard` WHERE `Block`= 'First';";
						$cursur1=mysqli_query($conn,$sql);
						$projects = array();
						$total = 0;
						while ($row1=mysqli_fetch_assoc($cursur1))
						{
							
							$myvar = $row1['Points'];
							
							$total=$total+$myvar;

						}
						echo $total;
						
						?>
				</td></tr>
			</table>
		</div>
		
		<div class="col-lg-3 col-md-6 col-sm-12" style="background-color:default;margin-top:10px">
			<table>
				<tr onclick="document.getElementById('id02').style.display='block'" >
					<th class="a1">2<sup>nd</sup> Block <i class='fas fa-paw'></i></th>

					  <div id="id02" class="w3-modal">
					      <div class="w3-modal-content w3-animate-top w3-card-4">
					        <header class="w3-container w3-teal"> 
					          <span onclick="document.getElementById('id02').style.display='none'" 
					          class="w3-button w3-display-topright">&times;</span>
					          <h2>Block 2</h2>
					        </header>
					        <div class="w3-container" allign="center">
					          <?php
					          $sql="SELECT * FROM `Leaderboard` WHERE `Block` = 'second';"; 
					          		$cursur1=mysqli_query($conn,$sql);
					          		$projects = array();
					          		while ($project = $cursur1->fetch_assoc())
					          		{
					           $wing=$project["Wing"];
					           $point=$project["Points"];
					          ?>
					          <p><?php echo $wing;
					          echo " : ";
					          echo $point;
					          echo " Points"?></p>
					      <?php }?>
					        </div>
					      </div>
					    </div>
					  </div>
				</tr>
				<tr class="a1"><td class="a1"><?php
						$sql = "SELECT * FROM `Leaderboard` WHERE `Block`= 'Second';";
						$cursur1=mysqli_query($conn,$sql);
						$projects = array();
						$total = 0;
						while ($row1=mysqli_fetch_assoc($cursur1))
						{
							
							$myvar = $row1['Points'];
							
							$total=$total+$myvar;

						}
						echo $total;
						
						?></td></tr>
			</table>
		</div>
		
		<div class="col-lg-3 col-md-6 col-sm-12" style="background-color:default;margin-top:10px">
			<table>
				<tr onclick="document.getElementById('id03').style.display='block'">
					<th class="a1">3<sup>rd</sup> Block <i class='fas fa-dragon'></i></th>

					  <div id="id03" class="w3-modal">
					      <div class="w3-modal-content w3-animate-top w3-card-4">
					        <header class="w3-container w3-teal"> 
					          <span onclick="document.getElementById('id03').style.display='none'" 
					          class="w3-button w3-display-topright">&times;</span>
					          <h2>Block 3</h2>
					        </header>
					        <div class="w3-container" align="center">
					          <?php
					          $sql="SELECT * FROM `Leaderboard` WHERE `Block` = 'Third';"; 
					          		$cursur1=mysqli_query($conn,$sql);
					          		$projects = array();
					          		while ($project = $cursur1->fetch_assoc())
					          		{
					           $wing=$project["Wing"];
					           $point=$project["Points"];
					          ?>
					          <p><?php echo $wing;
					          echo " : ";
					          echo $point;
					          echo " Points"?></p>
					      <?php }?>
					        </div>
					        
					      </div>
					    </div>
					  </div>
				</tr>
				<tr class="a1"><td class="a1"><?php
						$sql = "SELECT * FROM `Leaderboard` WHERE `Block`= 'Third';";
						$cursur1=mysqli_query($conn,$sql);
						$projects = array();
						$total = 0;
						while ($row1=mysqli_fetch_assoc($cursur1))
						{
							
							$myvar = $row1['Points'];
							
							$total=$total+$myvar;

						}
						echo $total;
						
						?></td></tr>
			</table>
		</div>
		
		<div class="col-lg-3 col-md-6 col-sm-12" style="background-color:default;margin-top:10px">
			<table>
				<tr onclick="document.getElementById('id04').style.display='block'">
					<th class="a1">4<sup>th</sup> Block <i class='fas fa-crow'></i></th>

										  <div id="id04" class="w3-modal">
										      <div class="w3-modal-content w3-animate-top w3-card-4">
										        <header class="w3-container w3-teal"> 
										          <span onclick="document.getElementById('id04').style.display='none'" 
										          class="w3-button w3-display-topright">&times;</span>
										          <h2>Block 4</h2>
										        </header>
										        <div class="w3-container" align="center">
										          <?php
										          $sql="SELECT * FROM `Leaderboard` WHERE `Block` = 'Fourth';"; 
										          		$cursur1=mysqli_query($conn,$sql);
										          		$projects = array();
										          		while ($project = $cursur1->fetch_assoc())
										          		{
										           $wing=$project["Wing"];
										           $point=$project["Points"];
										          ?>
										          <p><?php echo $wing;
										          echo " : ";
										          echo $point;
										          echo " Points"?></p>
										      <?php }?>
										        </div>
										        
										      </div>
										    </div>
										  </div>
				</tr>
				<tr class="a1"><td class="a1"><?php
						$sql = "SELECT * FROM `Leaderboard` WHERE `Block`= 'Fourth';";
						$cursur1=mysqli_query($conn,$sql);
						$projects = array();
						$total = 0;
						while ($row1=mysqli_fetch_assoc($cursur1))
						{
							
							$myvar = $row1['Points'];
							
							$total=$total+$myvar;

						}
						echo $total;
						
						?></td></tr>
			</table>
		</div>
		</div>
		<div class="container-fluid" style="margin-top:90px;">
			<table class=" table table-responsive table-bordered table-hover table-condensed">
				<thead style="color:white;text-align:center; border-style:solid solid solid solid; border-color:white">
					<tr>
					<th>Sl. No.</th>
					<th>Name</th>
					<th>Points</th>
					<th>Block</th>
					<th>Wing</th>
					<th>Room No.</th>
					</tr>
				</thead>
				<tbody>

					<?php
				$sql="SELECT * FROM `Profiles` ORDER BY `Points` DESC LIMIT 5;";
				$cursur1=mysqli_query($conn,$sql);
						$x=1;
						while ($project = $cursur1->fetch_assoc())
						{
							?>
				<tr class="b">
				<td><?php 
				echo $x;
				$x=$x+1;
				?></td>
				<td><?php echo $project["Name"];?></td>
				<td><?php echo $project["Points"];?></td>
				<td><?php echo $project["Block"];?></td>
				<td><?php echo $project["Wing"];?></td>
				<td><?php echo $project["Room_No"];?></td>
				</tr>
				<?php 
			}
			?>

				</tbody>
				
			    <tbody class="collapse" id="collapse">
			    	<?php
				$sql="SELECT * FROM `Profiles` ORDER BY `Points` DESC";
				$cursur1=mysqli_query($conn,$sql);
						$x=1;
						while ($project = $cursur1->fetch_assoc())
						{
							if($x<=5){
								$x=$x+1;
							}
							else{
							?>
				<tr class="b">
				<td><?php 
				echo $x;
				$x=$x+1;
				?></td>
				<td><?php echo $project["Name"];?></td>
				<td><?php echo $project["Points"];?></td>
				<td><?php echo $project["Block"];?></td>
				<td><?php echo $project["Wing"];?></td>
				<td><?php echo $project["Room_No"];?></td>
				</tr>
				<?php 
			}
		}
			?>
				
				</tbody>
				<tbody><tr >
				<td colspan="6" data-toggle="collapse" data-target="#collapse" style="text-align: center;color:#ffaf00; cursor: pointer;">load More/less </td></tr>
			    </tbody>
			</table>
		</div>
		
		<div class="container-fluid" style="margin-top:60px;">
			<div class="col-lg-3 col-md-3 col-sm-6 panel row-inline" style="background-color:#210002;padding:30px">
				<span style="background-color:#210002"><h1 style="color:#ffaf00;"><i class='fas fa-user-alt' style="color:#ffaf00;size:100%;"></i> My Records</h1></span>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-6 panel row-inline" style="background-color:#210002;">
				<table class="table-responsive" style="border-bottom:solid white">
					<thead style="color:white;">
						<tr>
						<th style="text-decoration:underline;font-weight:900;font-weight:900">Event</th>
						<th style="text-decoration:underline;font-weight:900">Point</th>
						</tr>
					</thead>
					<?php
				$sql="SELECT * FROM `Points` WHERE `LDAP`=$roll";
				$cursur1=mysqli_query($conn,$sql);
						while ($project = $cursur1->fetch_assoc())
						{
							?>
					<thead style="color:#ffaf00;font-weight:800;">
						<tr>
						<td><?php echo $project["Event_Name"];?></td>
						<td><?php echo $project["points"];?></td>
						</tr>
					</thead>
					<?php 
				}
				?>
				</table>
			</div>
		</div>
		
	</body>
</html>
			


					