<?php
// Create connection
session_start();

$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_SESSION["uname"];
$query="SELECT * FROM `Announcements` WHERE `given_by` = '$name'";
$output=mysqli_query($conn,$query);
if ($output->num_rows > 0) {
    // output data of each row
    while($row = $output->fetch_assoc()) {
        echo "Announcement: " . $row["Announcement"].  "<br>";
        ?>
        <a href="https://gymkhana.iitb.ac.in/~hostel2/editannounce.php">
        	<button onclick="<?php $_SESSION["Announcement"]=$row["Announcement"] ?>">edit</button>
        </a>
        <br>
        <?php
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
//
   
?>