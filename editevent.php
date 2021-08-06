<?php
// Create connection
session_start();
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
$name=$_SESSION["Event_Name"];
$uname=$_SESSION["uname"];
$query="SELECT * FROM `Events` WHERE `Event_Name` = '$name' AND `Created_By` = '$uname'";
$result = mysqli_query($conn,$query);
if ($result->num_rows > 0) {
    // output data of each row
    while($output = $result->fetch_assoc()) {
        $desc = $output["Description"];
        $points = $output["Points"];
        $Category = $output["Category"];
    }
} else {
    echo "0 results";
}
?>
<form action="events1.php" method="POST">
	<h2>Category:</h2>
  <input type="radio" name="Category" value="sports" id="sports"> Sports<br>
  <input type="radio" name="Category" value="cult" id="cult"> Cult<br>
  <input type="radio" name="Category" value="tech" id="tech"> Tech  <br>
  <input type="radio" name="Category" value="others" id="others"> Others<br>
  <script type="text/javascript">document.getElementById("<?php echo $Category; ?>").checked = true;</script>
  <h2>Event Name:</h2>
  <input type="text" name="event" value="<?php echo $name; ?>">
  <h2>Event Description:</h2>
  <textarea name="Text1" cols="40" rows="5">"<?php echo $desc; ?>"</textarea>
  <h2>Points</h2>
  <input type="text" name="points" value="<?php echo $points; ?>"><br>
  <br>
  <button type="submit">Edit Event</button>
</form> 