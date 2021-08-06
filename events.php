<?php
// Create connection
session_start();
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
$owner = $_SESSION["uname"];
$name = $_POST["event"];
$desc = $_POST["Text1"];
$points = $_POST["points"];
$category = $_POST["category"];
if($name!=NULL){
$sql = "INSERT INTO `Events` (`Category`, `Event_Name`, `Description`, `Points`, `Created_By`) VALUES ('$category', '$name', '$desc', '$points', '$owner')";
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