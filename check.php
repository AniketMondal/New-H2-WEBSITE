<?php
// Create connection
session_start();
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$Username=$_POST["Username"];
$pwd=$_POST["password"];
session_start();
$_SESSION['Username'] = $Username;
$sql = "SELECT `MD5` FROM `Profiles` WHERE `Username` = '$Username';";
$result=mysqli_query($conn, $sql);
if($result->num_rows == 0) {
    header("Location: login.php?id=Err");
	// die("Wrong Username or Password entered");
} else {
    $result_info = $result->fetch_assoc();// do other stuff...
    // echo $result_info["MD5"];
    // echo md5($pwd);
    if($result_info["MD5"]==md5($pwd)){
    	header("Location: home.php");
    }else{
        header("Location: login.php?id=Err");
    	// die("Wrong Username or Password entered");
    }
}


mysqli_close($conn);
?>