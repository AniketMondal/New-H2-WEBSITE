<?php
// Create connection
session_start();
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
$name1=$_SESSION["Event_Name"];
$owner = $_SESSION["uname"];
$name = $_POST["event"];
$desc = $_POST["Text1"];
$points = $_POST["points"];
$Category = $_POST["Category"];
if($name!=NULL){
$sql = "UPDATE `Events` SET `Category`='$Category' , `Event_Name`='$name' , `Description`='$desc' , `Points` = '$points' WHERE `Event_Name` = '$name1' AND `Created_By` = '$owner'";
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo "Your Event is created";
}
else {echo "Event Name not given";}
?>
<br>
<a href="https://gymkhana.iitb.ac.in/~hostel2/home.php">
	<button>home</button>
</a>