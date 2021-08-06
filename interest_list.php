
<html lang="en">
	<head>
    <link rel="icon" href="./image/favicon.png" type="image/png">
		<ma charset="utf-8">
    <teta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Hostel 2 || The Wild Ones</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="slideshow.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min2.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		
	</head>
	<body>
  
<?php
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");

if (isset($_GET['id'])) {
	$genre=$_GET['id'];

}
if (isset($_GET['id2'])) {
	$table=$_GET['id2'];

}

$query1="SELECT * FROM `genres` WHERE `genre`='$genre'";
$result1=mysqli_query($conn, $query1); 
$row1=mysqli_fetch_assoc($result1);
echo '<div class="container">
   
    <div class=" panel panel-body" style="border-style:none none none solid; border-width: 10px;border-color:   green;">
	    <H1>'.str_replace("_", " ", $genre).'</H1>
	     <hr>
	
	     <ul>
	     <li>'.$row1['description'].'</li>  
	</div>
</div>
<hr>
 ';
  ?>
  <div class="slideshow-container" >

<div class="mySlides" >
 
  <img class="img-thumbnail" src="./uploads/<?php echo $row1['Image1'];  ?>" style="width:100%;">
   <div class="text"><h2>Hostel 2</h2>
  	<h2><?php echo $row1['ImgDes1'];  ?></h2></div>
  
</div>

<div class="mySlides">
  <!-- <div class="numbertext">2 / 3</div> -->
  <img class="img-thumbnail"  src="./uploads/<?php echo $row1['Image2']; ?>" style="width:100%;">
  <div class="text"><h2>About</h2>
  	<h2><?php echo $row1['ImgDes2'];  ?></h2></div>
</div>

<div class="mySlides">
  <img class="img-thumbnail" src="./uploads/<?php echo $row1['Image3']; ?>" style="width:100%;">
  <div class="text"><h2>Culture</h2>
  	<h2><?php echo $row1['ImgDes3'];  ?></h2></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br><hr>
  <?php

echo '<div class="container" >';
  
     				
  

$query="SELECT * FROM $table WHERE $genre=1";
$result=mysqli_query($conn, $query); 
$count=1;
While($row=mysqli_fetch_assoc($result))
{
	$LDAP=$row['LDAP'];
	$query2="SELECT * FROM `Profiles` WHERE `Roll_No`='$LDAP'";
	$result2=mysqli_query($conn, $query2);
	$row2=mysqli_fetch_assoc($result2);

	if($count%2==0)
	{echo "<div class='col-sm-6'></div>";}
	$Roll_No=$row2['Roll_No'];

?>				
				
				  
				  	
				    <!-- <div class="col-sm-12 "> -->
				  <div class="col-sm-6  panel-info" >
				    <div class=" panel-heading"><?php echo"<a href='profile.php?id=$Roll_No'>";?> <h4><?php echo $row2['Username']; ?></h4></a></div>
				  
				    
				    
				       <div class=" panel-body" style="border-style:none none none solid ; border-width: 10px;border-color: #EEE8AA;">
				    		<table >
						        <tr>
						           <td><label> Name</label></td><td>:</td><td><label><?php echo $row2['Name']; ?></label></td>
						        </tr>

						        <img src="uploads/<?php echo $row2['Image'] ;?>" align="right" class="img-thumbnail" style="display: inline-block; width:180px; height:150px;">
						        <tr>

						          <td><label>Wing</label></td><td>:</td><td><label> <?php echo $row2['Wing']; ?></label></td> 
						        </tr>
						        <tr> 
						          <td><label>Contact</label></td><td>:</td><td><label> <?php echo $row2['Phone']; ?></label></td> 
						         </tr>
					        </table>
				  		</div>
				  		<br>
				</div>

				  
				
<?php 
$count=$count+1;
}

?>



</div><!--/center-->
  <div><br><br></div>
  <!-- Slideshow container -->
	
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("dot");
				  for (i = 0; i < slides.length; i++) {
				    slides[i].style.display = "none";  
				  }
				  slideIndex++;
				  if (slideIndex > slides.length) {slideIndex = 1}    
				  for (i = 0; i < dots.length; i++) {
				    dots[i].className = dots[i].className.replace("active", "");
				  }
				  slides[slideIndex-1].style.display = "block";  
				  dots[slideIndex-1].className += " active";
				  setTimeout(showSlides, 5000); // Change image every 2 seconds
					}
		</script>
	</body>
</html>
