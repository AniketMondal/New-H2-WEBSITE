<?php
session_start();
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
$image_check = false;
if(isset($_GET['id']))
{
  $roll=$_GET['id'];
}
else
{$roll=$_SESSION['rolln'];}

if(isset($_POST['submit_profile']))
{

}

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
  

// $sql = "SELECT * from `Interests_Sports` Where `LDAP`=$roll";
// $result=mysqli_query($conn, $sql); 
// $sports= mysqli_fetch_assoc($result);


// $sql = "SELECT * from `Interests_Cult` Where `LDAP`=$roll";
// $result=mysqli_query($conn, $sql); 
// $cult= mysqli_fetch_assoc($result);


// $sql = "SELECT * from `Interests_Tech` Where `LDAP`=$roll";
// $result=mysqli_query($conn, $sql); 
// $tech= mysqli_fetch_assoc($result);
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="http://getbootstrap.com/docs/4.1/examples/carousel/carousel.css" rel="stylesheet">
  <style>    

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
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
<body style="background-color: #210002" <?php if(isset($_POST['submit'])) {if ($image_check) { ?> onload="alert('Upload unsuccessful')"  
    <?php } else { ?> onload="alert('Successfully uploaded')" <?php }}?>>


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
<div>
  <div class="col-sm-2"></div>
  <!-- centre -->
  <div class=" container-fluid panel panel-default col-sm-8">
    <div class=" container-fluid panel panel-body">
      <div class="col-sm-24">
        
      
      
      
      <h2 class="panel panel-head" style="font-family:helvetica light;text-align:center; border-style:none none solid  none; border-width: 5px; border-color: orange;">Details</h2>
      <div class="col-sm-4">
      <?php   
                    echo '<img src="uploads/'.$Image.'" class="img-thumbnail" style="height:250px;"><br><h3 style="font-family:helvetica light;text-align:center;" >'.$Username.'</h3>';
                    ?></div>
                  <div class="col-sm-8">
      <table class="table" style="text-align: center;" >
        <form style="margin:auto" action="profile_update.php" method="post" enctype="multipart/form-data">

        <tr class="form-field">
          <td><label for="Name">Name  </label></td>
          <td><span><?php echo $Name; ?></span></td>
        </tr>
        
        <tr class="form-field">
          <td><label for="Room_No">Room No  </label></td>
          <td><span><?php echo $Room_No;  ?></span></td>
        </tr>
        
        <tr class="form-field">
          <td><label for="Wing">Wing  </label></td>
          <td><span><?php echo $Wing; ?></span></td>
        </tr>

        <tr class="form-field">
          <td><label for="Block">Block </label></td>
          <td><span><?php echo $Block; ?></span></td>
        </tr>
        <?php
        if($_SESSION['rolln']==$roll) 
        echo'
        <tr class="form-field">
          <td><label for="Roll_No">Roll No  </label></td>
          <td><span>'.$Roll_No.' </span></td>
        </tr>
        
        <tr class="form-field">
          <td><label for="Phone">Phone  </label></td>
          <td><span>'.$Phone.'</span></td>
        </tr>';
         ?> 
        <tr class="form-field">
          <td><label for="Email">Email Id  </label></td>
          <td><span><?php echo $Email; ?></span></td>
        </tr>
        <tr class="form-field">
          <td><label for="fb">Facebook Link  </label></td>
          <td><i class="fa fa-comment"><span><?php echo'<a href="'.$fb.'" target="_blank"> '.$fb.' </a>';?></span></i></td>
        </tr>
        <?php
         if($_SESSION['rolln']==$roll) 
        echo '<tr class="form-field">
          <td colspan="2">
         <button class="btn btn-success" name="submit">Update</button></td>
        </tr>';?>
      </form></table>
      <br> <br>
    </div>
  </div></div>
  <!--/centre-->


<div class="container-fluid panel panel-default" > 
  <H3 class="container-fluid  panel panel-head " style="font-family:helvetica light;text-align: center; border-style:none none solid  none ; border-width: 5px; border-color: green;">Interests</H3>
  <table class="table table-striped table-bordered table-hover table-condensed">
    <tr>
      <td><h5>Sports</h5></td>
      <td>
        <?php 
              $sql = "SELECT * from `Interests_Sports` Where `LDAP`='$roll'";
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
              echo "<a href='interest_list.php?id=$x&id2=Interests_Sports'>".str_replace("_", " ", $x)."</a>"."&emsp;";
            }
          
            }
          }
        ?>
      </td>
    </tr>

    <tr>
      <td><h5>Culturals</h5></td>
      <td><?php 
              $sql = "SELECT * from `Interests_Cult` Where `LDAP`='$roll'";
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
                echo "<a href='interest_list.php?id=$x&id2=Interests_Cult'>".str_replace("_", " ", $x)."</a>"."&emsp;";
              }
            }
          }
        ?></td>
    </tr>
    
    <tr>
      <td><h5>Technical</h5></td>
      <td><?php 
              $sql = "SELECT * from `Interests_Tech` Where `LDAP`='$roll'";
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
                echo "<a href='interest_list.php?id=$x&id2=Interests_Tech'>".str_replace("_", " ", $x)."</a>"."&emsp;";
              }
            }
          }
        ?></td>
    </tr>
  </table>

</div>
<?php
 if($_SESSION['rolln']==$roll) 
        echo '
<form action="interests.php" method="post">
<button class="btn btn-success pull-right" name="esubmit" >Add/Update</button><br><br><br>
</form>';
?>
</div>

</div>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <div class="container-fluid">
      <div class="col-lg-3 col-md-3 col-sm-6 panel row-inline" style="background-color:#210002;padding:10px">
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