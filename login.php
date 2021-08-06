<?php
$err=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Login/Sign Up</title>
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
<!-- body {font-family: Arial, Helvetica, sans-serif;} -->

<!-- input[type=text], input[type=password] { -->
    <!-- width: 100%; -->
    <!-- padding: 12px 20px; -->
    <!-- margin: 8px 0; -->
    <!-- display: inline-block; -->
    <!-- border: 1px solid #ccc; -->
    <!-- box-sizing: border-box; -->
<!-- } -->

<!-- button { -->
    <!-- background-color: #4CAF50; -->
    <!-- color: white; -->
    <!-- padding: 14px 20px; -->
    <!-- margin: 8px 0; -->
    <!-- border: none; -->
    <!-- cursor: pointer; -->
    <!-- width: 100%; -->
<!-- } -->

button:hover {
    opacity: 0.8;
	background-color: #ffaf00;
}

<!-- .cancelbtn { -->
    <!-- width: auto; -->
    <!-- padding: 10px 18px; -->
    <!-- background-color: #f44336; -->
<!-- } -->

<!-- .imgcontainer { -->
    <!-- text-align: center; -->
    <!-- margin: 24px 0 12px 0; -->
<!-- } -->
img.avatar {
    width: 40%;
    border-radius: 50%;

<!-- .container { -->
    <!-- padding: 16px; -->
<!-- } -->

<!-- span.psw { -->
    <!-- float: center; -->
    <!-- padding-top: 16px; -->
<!-- } -->

<!-- /* Change styles for span and cancel button on extra small screens */ -->
<!-- @media screen and (max-width: 300px) { -->
    <!-- span.psw { -->
       <!-- display: block; -->
       <!-- float: center; -->
    <!-- } -->
    <!-- .cancelbtn { -->
       <!-- width: 100%; -->
    <!-- } -->
}
</style>
</head>
<body style="background-color: #210002;background-image:url('images/keyart-mobile.jpg'); background-size:cover; background-repeat: no-repeat; background-position:center;">
	<div class="container-fluid">
		<div class="Logo" style="text-align: center;">
			<img src="images/h2.png" alt="H2 Icon" style="height: 200px;">
			<br><br>
			<h1 style="color:green; size: 10px;font-family:Klavika Bold;text-align:center">Hostel 2</h1>
	    </div>
		
		<h2 style="text-align:center;color:green;">Login</h2>
		<br>
		  <form action="check.php" method = "POST" enctype = "multipart/form-data" style="background-color:default;text-align:center">
				<div class="form-group">
				<label for="Username"><h2 style="color:#ffaf00;text-align:center">Username</h2></label>
				<input type="text" placeholder="Enter Username" onfocus="this.placeholder = ''" name="Username" required style="font-size: 2em; color:#ffaf00; background-color:transparent;text-align:center">
				</div>
				<div class="form-group">
				<label for="psw"><h2 style="color:#ffaf00;text-align:center">Password</h2></label>
				<input type="password" placeholder="Enter Password" onfocus="this.placeholder = ''" name="password" required style="font-size: 2em; color:#ffaf00; background-color:transparent; text-align:center">
				</div>
				<?php
					if($err=="Err")
					{
						echo "<h3 style='color:red;'>Wrong Username or Password entered</h3>";
					}
				?>
				<br><br><br>
				<div class="container-fluid">
				<button class="btn btn-outline-warning" type="submit" style="font-weight:900;text-align:center">login</button>
				</div>
		  </form>

			<div class="col-lg-6 col-md-6 col-xs-6">	
				<a href="https://gymkhana.iitb.ac.in/~hostel2/forgotpassword.html">
				<button class="btn btn-outline-warning" style="color:#ffaf00;font-weight:900;background-color:transparent">Forgot password?</button>
				</a>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-6">
				<a href="https://gymkhana.iitb.ac.in/~hostel2/sso.php">
				<button class="btn btn-outline-warning" style="color:#ffaf00;font-weight:900;background-color:transparent">Sign Up</button>
				</a>
			</div>
	</div>
</body>
</html>	
