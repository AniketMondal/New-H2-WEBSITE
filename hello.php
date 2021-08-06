<?php
// Create connection
session_start();

$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$Name=$_POST["Name"];
$Username=$_POST['Username'];
$fb=$_POST['fb'];
$Room_No=$_POST['Room_No'];
$roll= $_SESSION['rolln'];
$email=$_POST['Email'];
$Phone=$_POST['Phone'];

$Wing='Wild Ones';
$Block='Fourth';
if($Room_No<=23 && $Room_No>=1)
{
  $Wing="Elixirs";
  $Block='First';
}if($Room_No<=123 && $Room_No>=101)
{
  $Wing="Lesunous";
  $Block='First';
}if($Room_No<=223 && $Room_No>=201)
{
  $Wing="Ekies";
  $Block='First';
}if($Room_No<=47 && $Room_No>=24)
{
  $Wing="Libidos";
  $Block='second';
}if($Room_No<=147 && $Room_No>=124)
{
  $Wing="Cleops";
  $Block='second';
}if($Room_No<=247 && $Room_No>=224)
{
  $Wing="Double Nelson";
  $Block='second';
}if($Room_No<=69 && $Room_No>=48)
{
  $Wing="Zombies";
  $Block='Third';
}if($Room_No<=169 && $Room_No>=148)
{
  $Wing="Lamas";
  $Block='Third';
}if($Room_No<=269 && $Room_No>=248)
{
  $Wing="Our Souls";
  $Block='Third';
}if($Room_No<=91 && $Room_No>=70)
{
  $Wing="Buzzards";
  $Block='Fourth';
}if($Room_No<=191 && $Room_No>=170)
{
  $Wing="Phoenix";
  $Block='Fourth';
}if($Room_No<=291 && $Room_No>=270)
{
  $Wing="Holy Guns";
  $Block='Fourth';
}

$query="SELECT * FROM `Profiles` WHERE `Roll_No` = '$roll'";
$output=mysqli_query($conn,$query);
if(isset($_POST['signupbtn']))
{
  if($output->num_rows!=0 )
  {
  die("Username already Taken");
  }
  $query="SELECT * FROM `Profiles` WHERE `Roll_No` = '$roll'";
  $output=mysqli_query($conn,$query);
  if($output->num_rows!=0)
  {
  die("This Roll Number is already Registered");
  }
}  
$query="SELECT * FROM `Profiles` WHERE `Roll_No` = '$roll'";
$output=mysqli_query($conn,$query);
$row=mysqli_fetch_array($output); 
if($row!=Null)
{
  $file_name=$row['Image'];
  echo $file_name;
  $pwd=$row['MD5'];
}






if(isset($_POST['pwd']) && $_POST['pwd']!=Null)
{
  $pwd=md5($_POST['pwd']);
  echo $_POST['pwd']."asdasd";
  $pwd2=md5($_POST['pwd-repeat']);
  if($pwd!=$pwd2)
  {
      die("Please enter same passwords in both the password boxes");
  }
}

if(isset($_FILES['Image']) && $_FILES['Image']!=Null)
{
  
    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($_FILES["Image"]["name"]);
    $image = $_FILES['Image']['tmp_name'];
    $temp = explode(".", $_FILES['Image']['name']);
    $newfilename = $Username.'.'.end($temp);
  if ((!empty($image)) ) 
  {
    $allowedTypes = array(IMAGETYPE_JPEG);
    $detectedType = exif_imagetype($_FILES['Image']['tmp_name']);
    $errorim = !in_array($detectedType, $allowedTypes);
    if (!$errorim) 
    {
    if(file_exists($newfilename)) 
    {
      chmod($file,0755); //Change the file permissions if allowed
      unlink($file); //remove the file
    }
    $file_name=$newfilename;
    
    $upload = move_uploaded_file($_FILES['Image']['tmp_name'], $target_dir.$newfilename);
    if ($upload) {} else $image_check = true;
   }
    else {$image_check = true;}
  } else {$file_name='lion.jpg';}
}


if(isset($_POST['update_profile']))
{
 $sql = "UPDATE `Profiles` SET `Name`='$Name', `Username`='$Username', `Room_no`='$Room_No', `Wing`='$Wing', `Block`='$Block',`Phone`='$Phone', `Email`= '$email', `MD5`='$pwd', `Image`='$file_name',`fb`='$fb' WHERE `Roll_No`='$roll'";
}
else
{

  $sql = "INSERT INTO `Profiles` (`Name`, `Username`, `Room_no`, `Wing`, `Block`, `Roll_No`,`Phone`, `Email`, `MD5`, `Image`,`fb`) VALUES ('$Name', '$Username', '$Room_No', '$Wing', '$Block', '$roll','$Phone', '$email', '$pwd', '$file_name','$fb')";
}

if (mysqli_query($conn, $sql)) 
  {
     header("Location: profile.php"
   );
    // echo "suceess";
  } else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
//
   
?>