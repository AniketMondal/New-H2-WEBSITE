<?php
      require_once('sso_handler.php');

$CLIENT_ID = "72FFTmON1mXnoy6Wz7vu0o0Tia8aemNDqrcJYCiM";
$CLIENT_SECRET = "9YYKw6Wp06LODMokxhit0Q0G55CwkPO7Y0OoTMwTuJs6PbwsmaEjMHRC93Mj3419ijxUL0H1jT6sZ7pKwzoAPIlmgjKufTzYGNqe2N4KZ2OAqUvL4rpH1e4x8k4Vil8C";
$sso_handler = new SSOHandler($CLIENT_ID, $CLIENT_SECRET);
$response_type = 'code';
$required_fields = array('username', 'email', 'roll_number');
$permissions = 'basic profile ldap';
$required_scopes=array('basic');
$state = 'user_login';
$REDIRECT_URI = "https://gymkhana.iitb.ac.in/~hostel2/signup.php";
echo $sso_handler->validate_state($_GET);
if ($sso_handler->validate_code($_GET)) {


  $response = $sso_handler->default_execution($_GET, $REDIRECT_URI, $required_scopes, $required_fields);
}
if (!isset($response['error']) && isset($response['access_information']) && isset($response['user_information'])) {
  $access_token = $response['access_information']['access_token'] ;
  $roll = $response['user_information']['roll_number'];
  $email = $response['user_information']['email'];
  $usid = $response['user_information']['username'];
  /*echo $access_token.$roll.$email.$usid;*/
  $fp = fopen('all.txt','r');
  if (!$fp) {echo 'ERROR: Unable to open files';}
    $tag  = 0;
    while(!feof($fp)) {
      $line = fgets($fp,1024);
      $broken=explode(',',$line);
      if(strcmp($broken[0],$roll)==0){
        $tag=1;
        break;
      }
    }
    fclose($fp);
    if($tag!=1){
      echo "Intruder!!! you do not belong here!";
      die;
    }
  }

  else {
    echo $response['error'];
    echo "<br> You have not authorized the app properly";
    die;
  }
  session_start();
   $_SESSION['rolln'] = $roll;
?>
<!DOCTYPE html>
<html>
<style>

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}



body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<form action="hello.php" method = "POST" enctype = "multipart/form-data" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account<span>
    </span></p>
    <hr>
    <table>
    <tr>
      <td><label for="Name"><b>First Name</b></label></td>
      <td><input type="text" name="Name" placeholder="Enter Name"  required></td>
    </tr>
    
    <tr>
      <td><label for="Username"><b>User ID</b></label></td>
      <td><input type="text" placeholder="Enter User ID you want to keep for your profile" name="Username" required></td>
    </tr>
    <!--<label for="Roll"><b>LDAP</b></label>
    <input type="text" placeholder="Enter your LDAP" name="roll" required>-->
    <tr>
      <td><label for="Room_No"><b>Room No.</b></label></td>
      <td><input type="text" placeholder="Enter Room no." name="Room_No" required></td>
    </tr>
    <tr>
      <td><label for="Phone"><b>Phone No.</b></label></td>
      <td><input type="tel" placeholder="Enter Contact no." name="Phone" required></td>
    </tr>
     
    <tr>
      <td><label for="email"><b>Email</b></label></td>
      <td><input type="text" placeholder="Enter Email" name="Email" required></td>
    </tr>
    <tr>
      <td><label for="pwd"><b>Password</b></label>
      <td><input type="password" placeholder="Enter Password" name="pwd" required></td>
    </tr>
    <tr>
      <td><label for="pwd-repeat"><b>Repeat Password</b></label>
      <td><input type="password" placeholder="Repeat Password" name="pwd-repeat" required></td>
    </tr>
    <tr>
      <td><label for"fb-link"><b>Facebook link</b></label>
      <td><input type="url" placeholder="Paste your FB profile link" name="fb" required></td>
    </tr>
    <tr>
      <td><label for="Image"><b>Profile Picture</b></label>
      <td><input type="file" name="Image"/></td>
    </tr>
    <tr>
      <td><label>
      <td><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label></td>
    </tr>
    </table>


    <div class="clearfix">
      <a href="home.php"><button type="button" class="cancelbtn" >Cancel</button></a>
      <button type="submit" class="signupbtn" href="hello.php" name="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>
