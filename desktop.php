<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Wild Ones | Hostel 2 | IIT Bombay</title>
  <link rel="icon" type="image/png" href="appdata/icon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.css">
  <link href="css/pgwslideshow.css" rel="stylesheet">
  <link href="css/pgwslideshow_light.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="http://getbootstrap.com/docs/4.1/examples/carousel/carousel.css" rel="stylesheet">
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body style="background-color: #424242">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">The Wild Ones</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="council/index.html">Council</a></li>
        <li><a href="mess/index.php">Mess</a></li>
        <li><a href="maint/index.html">Maint</a></li>
        <li><a href="alumni/index.html">Alumni</a></li>
        <li><a id="submenu2" style="text-decoration : none;" class="mdl-navigation__link mdl-typography--text-uppercase" href="#">Portals</a>
                        <!-- sub menu only visible when clicked on the link above -->
                        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="submenu2" style="background-color: #17202A;">
                            <a class="hover" href="portals/kfc/"><li class="mdl-menu__item" class="mdl-navigation__link" ><b>KFC</b></li></a>
                            <a class="hover" href="portals/messrebate/"><li class="mdl-menu__item" class="mdl-navigation__link" ><b>Mess Rebate</b></li></a>
                            <a class="hover" href="portals/lancomplaints/"><li class="mdl-menu__item" class="mdl-navigation__link" ><b>Lan Complaints</b></li></a>
                        </ul>
                      </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>
          <?php
          session_start();
          if($_SESSION['Username']==NULL){header("Location: login.html");}
          echo $_SESSION['Username'] ;
          ?>
        </a></li>
      </ul>
    </div>
  </div>
</nav>
<img src="images/wall.jpg"  width="100%" height="50%" style="border-radius: 5px; overflow: hidden; margin-top: -20px">
<div class="container text-center" style="margin-top: 16px;background-color: #424242;">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p>
          <?php
          $Username=$_SESSION['Username'];
          // Create connection
          session_start();

          $conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
          // Check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          $sql = "SELECT * FROM `Profiles` WHERE `Username` = '$Username';";
          $result=mysqli_query($conn, $sql);
          $result_info = $result->fetch_assoc();
          echo $result_info["Name"];
          $roll=$result_info["Roll_No"];
          
          $fb = $result_info["fb"];
          $filename=$result_info["Image"];
          $default="uploads/";
          $final=$default . $filename ;
          $_SESSION['rolln']=$roll;
          
          ?>
        </p>
        <img src="<?php echo $final;?>" height="200" width="200" alt=<?php echo"No Profile Photo found";?> >
      </div>
      <div class="well">
        <p>Interests</p>
         <?php
             
        $sql1 = "SELECT * FROM `Interests_Sports` WHERE `LDAP` = '$roll';";
        $cursur=mysqli_query($conn,$sql1);
        $cursur_result=$cursur->fetch_assoc();
        $interests = array($cursur_result["Cricket"],$cursur_result["Football"],$cursur_result["Badminton"],$cursur_result["Vollyball"],$cursur_result["Basketball"],$cursur_result["Table tennis"],$cursur_result["Swimming"],$cursur_result["KhoKho"],$cursur_result["Athletics"],$cursur_result["Squash"],$cursur_result["Chess"],$cursur_result["Carron"],$cursur_result["Pool"],$cursur_result["WeightLifting"]);
        $sports = array("Cricket","Football","Badminton","Vollyball",["Basketball"],"Table tennis","Swimming","KhoKho","Athletics","Squash","Chess","Carron","Pool","WeightLifting");
        ?>
        <p>
          <span id="demo"></span>
          <script type="text/javascript">
          var cars = <?php echo json_encode($interests); ?>;
          var all = <?php echo json_encode($sports); ?>;
          var text = "";
          var i;
          for (i = 0; i < cars.length; i++) {
            if(cars[i]=="on"){
             text += all[i] + "<br>";
            }
          }
        document.getElementById("demo").innerHTML = text;
        </script>
        </p>
      </div>
      <p><a href="<?php echo $fb;?>">Facebook Link</a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
        </div>
      </div>
      <?php
      $sql2="SELECT * FROM `Announcements`";
      $cursur1=mysqli_query($conn,$sql2);
      $projects = array();
      while ($project = $cursur1->fetch_assoc())
      {
      ?>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p><?php echo $project["given_by"];?></p>
           <?php
           $myvar = $project["given_by"];
           $sql3 = "SELECT * FROM `Secretaries` WHERE `Name` = '$myvar';";
           $nikhil=mysqli_query($conn,$sql3);
           if($nikhil->num_rows == 0) {
            die("Problem");
            } else {
              $resultnikhil=$nikhil->fetch_assoc();
              $path="council/images/";
            }
           ?>
           <img src="<?php echo $path . $resultnikhil["photo"];?>" height="55" width="55" alt=<?php echo $path . $resultnikhil["photo"];?> >
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p><?php echo $project["Announcement"];?></p>
          </div>
        </div>
      </div>
      <?php
        }
    ?> 
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Leaderboard</p>
        <img src="download.jpeg" alt="trophy" width="400" height="300">
        <p><strong>Trophy</strong></p>
        <a href="https://gymkhana.iitb.ac.in/~hostel2/leaderboard.php">
        <button class="btn btn-primary">Info</button></a>
      </div>
    </div>
  </div>
</div>

<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Developed By: Web Council, Hostel 2</h5>
                <!--<p class="grey-text text-lighten-4">B.Nikhil and Aniket Mondel</p> -->
              </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright Text
            </div>
          </div>
        </footer>
            
  </body>
</html>
