<?php
$err=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>H2 E-Certificate Portal</title>
<link rel="stylesheet" href="css/materialize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap.css">
<link rel="shortcut icon" href="images/h20.png">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<style>
    button:hover {
    opacity: 0.8;
	background-color: #ffaf00;
    }
</style>
</head>
<body style="background-color: #210002;background-image:url('images/keyart-mobile.jpg'); background-size:cover; background-repeat: no-repeat; background-position:center;">
	<div class="container-fluid">
		<div class="Logo" style="text-align: center;">
			<img src="images/h2.png" alt="H2 Icon" style="height: 200px;">
			<br><br>
			<h1 style="color:green; size: 10px;font-weight:800;font-family:Klavika Bold;text-align:center">Hostel 2</h1>
        </div>
        <h2 style="text-align:center;color:white;font-weight:500">E-Certificate For Hostel Awards</h2>
		<br>
		  <form action="certicheck.php" method = "POST" style="background-color:default;text-align:center">
				<div class="form-group">
				<label for="uid"><h2 style="color:green;text-align:center">Certificate ID</h2></label>
				<input type="text" placeholder="Enter Certificate ID" onfocus="this.placeholder" name="uid" required style="font-size: 2em; color:#ffaf00; background-color:transparent;text-align:center">
                </div>
                <?php
					if($err=="Err")
					{
						echo "<h3 style='color:red;'>Enter Valid Certificate ID</h3>";
					}
				?>
                <br><br><br>
				<div class="container-fluid">
				<button class="btn btn-outline-warning" type="submit" style="font-weight:900;text-align:center">Get Certificate</button>
				</div>
          </form>
	</div>
</body>
</html>