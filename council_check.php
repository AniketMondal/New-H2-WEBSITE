<?php
// Create connection
session_start();
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$uid = $_POST["uname"];
$pwd = $_POST["psw"];
echo $uid;
$sql = "SELECT * FROM `Secretaries` WHERE `Name` = '$uid';";
$result = mysqli_query($conn, $sql);
if($result->num_rows == 0) {
	die("Wrong Username or Password entered");
} else {
    // do other stuff...
    $num ="123";
    if($pwd=$uid . $num){
    	header("Location: input.php");
    }else{
    	die("Wrong Username or Password entered");
    }
}
session_start();
$_SESSION['uname'] = $uid;

mysqli_close($conn);
?>