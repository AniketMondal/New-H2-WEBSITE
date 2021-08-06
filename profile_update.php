<?php
session_start();
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
$image_check = false;
$roll=$_SESSION['rolln'];

$query = "SELECT * FROM `Profiles` WHERE `Roll_No`='$roll'";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
$row=mysqli_fetch_array($result); 
$Name = $row['Name'];
$Username=$row['Username'];
$Email=$row['Email'];
$Image = $row['Image'];
$Room_No=$row['Room_No'];
$Roll_No=$row['Roll_No'];
$Phone=$row['Phone'];
$Wing=$row['Wing'];
$Block=$row['Block'];
$fb=$row['fb'];
$pwd=$row['MD5'];

// $sql = "SELECT * from `Interests_Sports` Where `LDAP`=$roll";
// $result=mysqli_query($conn, $sql); 
// $sports= mysqli_fetch_assoc($result);


$sql = "SELECT * from `Interests_Cult` Where `LDAP`=$roll";
$result=mysqli_query($conn, $sql); 
$cult= mysqli_fetch_assoc($result);


$sql = "SELECT * from `Interests_Tech` Where `LDAP`=$roll";
$result=mysqli_query($conn, $sql); 
$tech= mysqli_fetch_assoc($result);
// if(isset($_POST['esubmit'])) {
//   $email = mysqli_real_escape_string($link,$_POST['email']);
//   if($s_loggedin){
//     $query1 = "SELECT * FROM tsc_students WHERE username='$username'";
//   $result1=mysqli_query($link,$query1) or die(mysqli_error($link));
//   $row2=mysqli_fetch_assoc($result1);
//   if(empty($row2)) {
//   $query1 = "INSERT INTO tsc_students (username,course_id,fullname,roll,department,email) VALUES ('$username','$value','".$fullname."','".$roll."','".$mydepartment."','".$email."')";
//   $result1=mysqli_query($link,$query1) or die(mysqli_error($link));
// }
//   else
//   {
//      $query1 = "UPDATE tsc_students SET fullname='$fullname',roll='$roll',department='$mydepartment',email='$email' WHERE username='$username'";
//   $result1=mysqli_query($link,$query1) or die(mysqli_error($link));
//   }
//                 }
//   if($t_loggedin){
//     $query1 = "UPDATE tsc_ta SET email_id='$email' WHERE username='$username'";
//   $result1=mysqli_query($link,$query1) or die(mysqli_error($link));
//   }
// }
// if(isset($_POST['submit'])) 
// {
//     $target_dir = "./uploads/";
//     $target_file = $target_dir . basename($_FILES["image"]["name"]);
//     $image = $_FILES['image']['tmp_name'];
//     $temp = explode(".", $_FILES['image']['name']);
//     $newfilename = $username.'.'.end($temp);
//   if ((!empty($image)) && ($_FILES['image']['size'] <= 2000000)) 
//   {
//     $allowedTypes = array(IMAGETYPE_JPEG);
//     $detectedType = exif_imagetype($_FILES['image']['tmp_name']);
//     $errorim = !in_array($detectedType, $allowedTypes);
//     if (!$errorim) 
//     {
//     if(file_exists($newfile)) 
//     {
//       chmod($file,0755); //Change the file permissions if allowed
//       unlink($file); //remove the file
//     }
  
//     $upload = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$newfilename);
//     if ($upload) {} else $image_check = true;
//    }
//     else {$image_check = true;}
//   } else {$image_check = true;}
// }

?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>The Wild Ones | Hostel 2 | IIT Bombay</title>
  <link rel="icon" type="image/png" href="appdata/icon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link href="css/pgwslideshow.css" rel="stylesheet">
  <link href="css/pgwslideshow_light.css" rel="stylesheet">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="http://getbootstrap.com/docs/4.1/examples/carousel/carousel.css" rel="stylesheet">
  <style>    

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body style="background-color: #424242" >

<div>
  <div class="col-sm-2"></div>
  <!-- centre -->
  <div class=" container-fluid panel panel-default col-sm-8">
    <div class=" container-fluid panel panel-body">
      <div class="col-sm-24">
        
      
      
      
      <h2 class="panel panel-head" style="font-family:helvetica light;text-align:center; border-style:none none solid  none; border-width: 5px; border-color: orange;">Your Details</h2>
      <div class="col-sm-4">
      <?php   
                    echo '<img src="uploads/'.$Image.'" class="img-thumbnail" style="height:250px;">';
                    ?></div>
                  <div class="col-sm-8">
      <table class="table" style="text-align: center;" >
        <form style="margin:auto" action="hello.php" method="post" enctype="multipart/form-data">

        <tr class="form-field">
          <td><label for="Name">Name  </label></td>
          <td><input type="text" name="Name" id="Name" value="<?php echo $Name; ?>" ></td>
        </tr>
        
        <tr class="form-field">
          <td><label for="Room_No">Room No  </label></td>
          <td><input type="number" name="Room_No" id="Room_No" value="<?php echo $Room_No; ?>" ></td>
        </tr>
        
        <tr class="form-field">
          <td><label for="Wing">Wing  </label></td>
          <td><span><?php echo $Wing; ?></span></td>
        </tr>

        <tr class="form-field">
          <td><label for="Block">Block </label></td>
          <td><span><?php echo $Block; ?></span></td>
        </tr>
        
        <tr class="form-field">
          <td><label for="Roll_No">Roll No  </label></td>
          <td><input type="text" name="Roll_No" id="Roll_No" value="<?php echo $Roll_No; ?>" ></td>
        </tr>

        <tr class="form-field">
          <td><label for="Phone">Phone  </label></td>
          <td><input type="tel" name="Phone" id="Phone" value="<?php echo $Phone; ?>" ></td>
        </tr>
        
        <tr class="form-field">
          <td><label for="Username">Username </label></td>
          <td><input type="text" name="Username" id="Username" value="<?php echo $Username; ?>" ></td>
        </tr>
        <tr class="form-field">
          <td><label for="pwd">Password </label></td>
          <td><input type="password" name="pwd" id="pwd" value="" ></td>
        </tr>
        <tr>
          <td><label for="pwd-repeat"><b>Repeat Password</b></label>
          <td><input type="password" placeholder="Repeat Password" name="pwd-repeat" ></td>
        </tr>

        <tr class="form-field">
          <td><label for="Email">Email Id  </label></td>
          <td><input type="email" name="Email" id="Email" value="<?php echo $Email; ?>" ></td>
        </tr>
         <tr class="form-field">
          <td><label for="fb">Facebook Link  </label></td>
          <td><input type="URL" name="fb" id="fb" value="<?php echo $fb; ?>" ></td>
        </tr>
        
        <!-- <tr>
          <td ><b>Name</b> </td>
          <td colspan="2"><input type="" name=""><?php echo $Name?></td>
        </tr>
        <tr>
          <td><b>Roll No.</b></td>
          <td colspan="2"><?php echo $roll;?></td>
        </tr>
        <tr>
          <td><b>Room No.</b></td>
          <td colspan="2"><?php echo $mydepartment;?></td>
        </tr>  -->
        
        <tr class="form-field">
          <td><label for="Image">User Picture </label></td>
          <td ><input style="display: inline;" type="file" name="Image" id="Image">
         <button class="btn btn-success" name="update_profile">Add/Update</button></td>
        </tr>
        <tr>
          <td colspan="3">
            <b>Note: </b>Upload file of type <b>jpg</b> only and with size <b>not</b> more than 2MB
          </td>
        </tr>         
      </form></table>
      <br> <br>
    </div>
  </div></div>
  <!--/centre-->
<hr>

<!-- <div class="container-fluid panel panel-default" > 
  <H3 class="container-fluid  panel panel-head " style="font-family:helvetica light;text-align: center; border-style:none none solid  none ; border-width: 5px; border-color: green;">Interests</H3>
  <table class="table table-striped table-bordered table-hover table-condensed">
    <tr>
      <td><h5>Sports</h5></td>
      <td>
        <?php 
              $sql = "SELECT * from `Interests_Sports` Where `LDAP`=$roll";
              $result=mysqli_query($conn, $sql); 
              
              $query = "SHOW COLUMNS FROM Interests_Sports";
              $result1=mysqli_query($conn, $query);
              
          while($sports=mysqli_fetch_assoc($result))
          {
            while($Field=mysqli_fetch_assoc($result1))
            {
            $x=$Field['Field'];
            if($sports[$x]!=0 && $x!='LDAP' && $x!='ID')
            {
              echo "<a href='#'>".str_replace("_", " ", $x)."</a>"." ";
            }
          
            }
          }
        ?>
      </td>
    </tr>

    <tr>
      <td><h5>Culturals</h5></td>
      <td><?php 
              $sql = "SELECT * from `Interests_Cult` Where `LDAP`=$roll";
              $result=mysqli_query($conn, $sql); 
              
              $query = "SHOW COLUMNS FROM Interests_Cult";
              $result1=mysqli_query($conn, $query);
          while($sports=mysqli_fetch_assoc($result))
          {
            while($Field=mysqli_fetch_assoc($result1))
            {
            $x=$Field['Field'];
              if($sports[$x]!=0 && $x!='LDAP' && $x!='ID')
              {
                echo "<a href='#'>".str_replace("_", " ", $x)."</a>"." ";
              }
            }
          }
        ?></td>
    </tr>
    
    <tr>
      <td><h5>Technical</h5></td>
      <td><?php 
              $sql = "SELECT * from `Interests_Tech` Where `LDAP`=$roll";
              $result=mysqli_query($conn, $sql); 
              
              $query = "SHOW COLUMNS FROM Interests_Tech";
              $result1=mysqli_query($conn, $query);
          while($sports=mysqli_fetch_assoc($result))
          {
            while($Field=mysqli_fetch_assoc($result1))
            {
            $x=$Field['Field'];
              if($sports[$x]!=0 && $x!='LDAP' && $x!='ID')
              {
                echo "<a href='#'>".str_replace("_", " ", $x)."</a>"." ";
              }
            }
          }
        ?></td>
    </tr>
  </table>

</div>
</div>
 -->
</div>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>