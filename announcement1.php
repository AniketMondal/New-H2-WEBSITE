<?php
// Create connection
session_start();
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 	
session_start();
$value=$_POST["Text1"];
$name=$_SESSION["uname"];
$old = $_SESSION["Announcement"];
if($value!=NULL){
$sql="UPDATE `Announcements` SET `Announcement`='$value' WHERE `Announcement`='$old'";
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo "Your Announcement is broadcasted";
}
else {echo "Not a valid Announcement";}
?>
<br>
<a href="https://gymkhana.iitb.ac.in/~hostel2/home.php">
	<button>home</button>
</a>