<?php
session_start();
if($_SESSION['uname']==NULL){
	header("Location: secretaries.html");
}
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name=$_POST["myCountry"];
$event=$_POST["event"];
$share=$_POST["share"];
$year=$_POST["year"];
 if($name != NULL and $event!=NULL){
 	$sql="SELECT * FROM `Events` WHERE `Event_Name`='$event';";
 	$result=mysqli_query($conn, $sql);
 	$result_info = $result->fetch_assoc();
 	$points=$result_info["Points"]*$share/100;
 	$eventid=$result_info["ID"];
	$sql1="SELECT * FROM `Profiles` WHERE `Name`='$name';";
	$result1=mysqli_query($conn, $sql1);
	$result_info1 = $result1->fetch_assoc();
	if($result_info1==NULL)
	{
		$sql1="SELECT * FROM `Profiles` WHERE `Roll_No`='$name';";
	$result1=mysqli_query($conn, $sql1);
	$result_info1 = $result1->fetch_assoc();
	}
	$points1=$result_info1["Points"];
	$wing=$result_info1["Wing"];
	$block=$result_info1["Block"];
	$LDAP=$result_info1["Roll_No"];
	$var=(int)$points + (int)$points1;
	$value=(string)$var;
	$sql3="SELECT * FROM `Leaderboard` WHERE `Wing`='$wing' AND `Block`='$block';";
	$result3=mysqli_query($conn,$sql3);
	$result_info3 = $result3->fetch_assoc();
	$points3=$result_info3["Points"];
	$value1=(int)$points3+(int)$points;
	$var1=(string)$value1;
	$sql4="UPDATE `Leaderboard` SET `Points`='$var1' WHERE `Wing`='$wing' AND `Block`='$block';";
	$result3=mysqli_query($conn,$sql4);
	
	$sql2="UPDATE `Profiles` SET `Points`='$value' WHERE `Name`='$name';";
	$result2=mysqli_query($conn, $sql2);

	$sql2="UPDATE `Profiles` SET `Points`='$value' WHERE `Roll_No`='$name';";
	$result2=mysqli_query($conn, $sql2);

	$sql5 = "INSERT INTO `Points` (`Event_ID`, `Event_Name`, `LDAP`, `points`) VALUES ('$eventid', '$event', '$LDAP', '$points')";
if (mysqli_query($conn, $sql5)) {
} else {
    echo "Error: " . $sql5. "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
	echo "Updated Successfully";
}
?>