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
		<link rel="stylesheet" href="css/materialize.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'>
			<style>
			tr, tr.a {
			background-color: transparent;
			}
			td {
			color:#03675a;
			text-shadow: green 1px .5px 1px;
			font-weight:400;
			height:30px;
			}
			table, td {
			text-align:center;
			font-variant: small-caps;
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
			</style>
	</head>
	
	<body style="background-color:#210002;background-image: url('images/keyart-mobile.jpg');background-size: cover; background-repeat: no-repeat; background-position:center;">
		<div class="container-fluid" style="background-color:transparent;">
			<div style="text-align: center; align-content: middle">
			<h1 style="margin-bottom:1.5em;">Events for You</h1>
			<table class="table-responsive table-bordered" style="text-align:center;max-width: auto">
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
			</div>
		</div>
	</body>
	</html>