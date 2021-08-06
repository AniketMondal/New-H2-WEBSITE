<?php
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123","hostel2");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html lang="en">
    <head>
        <title>H2 Council</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="../images/icon.png">
    <style>
        nav {
            background-color: #210002;
            font-family: "futura-pt";
        }
        .navbar-toggler-icon {
            background-color: #ffaf00;
        }
        #a2:hover{
            background-color: #a34300;
            color: #ffaf00;
        }
        .h {
            background: linear-gradient(to bottom, #ff5200 29%, #ce0000 100%);
        }
        .w {
            background: linear-gradient(to bottom right, #33ccff -11%, #a200fd 74%);
        }
        .c {
            background: linear-gradient(to right, #00d5e7 -28%, #0066ff 94%);
        }
        .s{
            background: linear-gradient(to top right, #008000 0%, #dbfd16 132%);
        }
        .me{
            background: linear-gradient(to top right, #febd00 18%, #ff6600 99%);
        }
        .ma{
            background: linear-gradient(to bottom, #cc6600 0%, #800000 100%);
        }
        .t{
            background: linear-gradient(to bottom, #009999 3%, #000066 125%);
        }
        .i{
        	height: 350px;
        	max-height: 100%;
            border-radius: 175px;
        }    		
    	
    	.bg{
    	    background-image: url('https://drive.google.com/uc?id=1KyCtY5vj0satbIzwK5xPNuRsgh8nJnD3');
    	    background-repeat:no-repeat;
    	    background-attachment:fixed;
    	    background-position: center;
    	    background-size: cover;
    	    position: absolute;
    	    top:0px;
    	    left:0px;
    	    width: 100%;
    	    height: 100%;
    	   }


    </style>
    </head>
    <body class="bg">
        <nav class="navbar navbar-expand-sm">
			<a class="navbar-brand" href="../index.html"style="color:#ffaf00;"><img src="../images/h20.png" alt="logo" style="width: 40px">THE WILD ONES</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item"><a class="nav-link" href="../legends.php"style="color:#ffaf00;"id="a2">LEGENDS</a></li>                    
                    <li class="nav-item"><a class="nav-link" href="../home.php"style="color:#ffaf00;"id="a2">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="../portals/lancomplaints/"style="color:#ffaf00;"id="a2">LAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="../portals/kfc/"style="color:#ffaf00;"id="a2">KFC</a></li>
                    <li class="nav-item"><a class="nav-link" href="../alumni/index.html"style="color:#ffaf00;"id="a2">ALUMNI</a></li>
                    <li class="nav-item"><a class="nav-link" href="../maint/index.html"style="color:#ffaf00;"id="a2">MAINT</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid" style="text-align: center; background: linear-gradient(to bottom, #210002 37%, #ff5200 146%);">
            <h2 style="color: #ffaf00">
                Hostel-2 Council
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><h2 style="color: #ffaf00">2019-2020</h2></button>
                <div class="dropdown-menu" style="background: linear-gradient(to bottom, #210002 , #ffffcc,#210002);">
                        <a class="dropdown-item" href="https://gymkhana.iitb.ac.in/~hostel2/council/index1.html"><h2 style="color: #ffaf00">2018-2019</h2></a>
                        <a class="dropdown-item" href="https://gymkhana.iitb.ac.in/~hostel2/council/index0.html"><h2 style="color: #ffaf00">2017-2018</h2></a>
                </div>
            </h2>
            <h4 style="text-decoration: underline"><a href="https://gymkhana.iitb.ac.in/~hostel2/eresult.html">General Election Result</a><br></h4><br>
        </div>
        <div class="container-fluid" style="color: white;">
            <!-- heads part, 4 people -->
            <div class="row card-columns">
                <?php
                $sql = "SELECT * FROM council WHERE post ='Warden'";
                $dg = mysqli_query($conn,$sql);
                $dr = mysqli_fetch_assoc($dg);
                ?>
                    <div class="card col-sm-6 col-md-6 col-lg-3 mx-auto h">
                        <img class="card-img-top i" src="<?php echo $dr[photo];?>" alt="Profile photo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $dr["name"]?></h3>
                            <p class="card-text">
                                <strong>Post:-</strong> <?php echo $dr["post"]?>
                                <br><strong>E-mail Id:-</strong> <?php echo $dr["email"]?>
                            </p>
                            <a href="<?php echo $dr[fblink];?>" class="btn btn-primary">Website</a>
                        </div>
                    </div>
                <?php
                $sql = "SELECT * FROM council WHERE post ='Associate Warden'";
                $dg = mysqli_query($conn,$sql);
                $dr = mysqli_fetch_assoc($dg);
                ?>
                    <div class="card col-sm-6 col-md-6 col-lg-3 mx-auto h">
                        <img class="card-img-top i" src="<?php echo $dr[photo];?>" alt="Profile photo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $dr["name"]?></h3>
                            <p class="card-text">
                                <strong>Post:-</strong> <?php echo $dr["post"]?>
                                <br><strong>E-mail Id:-</strong> <?php echo $dr["email"]?>
                            </p>
                            <a href="<?php echo $dr[fblink];?>" class="btn btn-primary">Website</a>
                        </div>
                    </div>
                <?php
                $sql = "SELECT * FROM council WHERE startyear='2019' && (post='General Secretary' || post='Warden Nominee')";
                $dg = mysqli_query($conn,$sql);
                $dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
                foreach($dr as $people):
                ?>

                    <div class="card col-sm-6 col-md-6 col-lg-3 h">
                        <img class="card-img-top i" src="<?php echo $people[photo];?>" alt="Profile photo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $people["name"]?></h3>
                            <p class="card-text">
                                <strong>Post:-</strong> <?php echo $people["post"]?>
                                <br><strong>Phone No.:-</strong> <?php echo $people["phno"]?>
                                <br><strong>E-mail Id:-</strong> <?php echo $people["email"]?>
                                <br><strong>Room No.:-</strong> <?php echo $people["room"]?>
                            </p>
                            <a href="<?php echo $people[fblink];?>" class="btn btn-primary">Facebook</a>
                            <a href="<?php echo $people[manifesto];?>" class="btn btn-success">Manifesto</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><br>
            <!-- Web -->
            <div class="row card-columns">
                <?php
                $sql = "SELECT * FROM council WHERE startyear='2019' && team ='Web' ORDER BY post";
                $dg = mysqli_query($conn,$sql);
                $dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
                foreach($dr as $people):
                ?>
                    <div class="card col-sm-6 col-md-4 col-lg-3 mx-auto w">
                        <img class="card-img-top i" src="<?php echo $people[photo];?>" alt="Profile photo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $people["name"]?></h3>
                            <p class="card-text">
                                <strong>Post:-</strong> <?php echo $people["post"]?>
                                <br><strong>Phone No.:-</strong> <?php echo $people["phno"]?>
                                <br><strong>E-mail Id:-</strong> <?php echo $people["email"]?>
                                <br><strong>Room No.:-</strong> <?php echo $people["room"]?>
                            </p>
                            <a href="<?php echo $people[fblink];?>" class="btn btn-primary">Facebook</a>
                            <a href="<?php echo $people[manifesto];?>" class="btn btn-success">Manifesto</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><br>
            <!-- Cult part -->
            <div class="row card-columns">
                <?php
                $sql = "SELECT * FROM council WHERE startyear='2019' && (post='Cultural Councillor' || post='Events Nominee')";
                $dg = mysqli_query($conn,$sql);
                $dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
                foreach($dr as $people):
                ?>
                    <div class="card col-sm-6 col-md-6 col-lg-3 mx-auto c">
                        <img class="card-img-top i" src="<?php echo $people[photo];?>" alt="Profile photo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $people["name"]?></h3>
                            <p class="card-text">
                                <strong>Post:-</strong> <?php echo $people["post"]?>
                                <br><strong>Phone No.:-</strong> <?php echo $people["phno"]?>
                                <br><strong>E-mail Id:-</strong> <?php echo $people["email"]?>
                                <br><strong>Room No.:-</strong> <?php echo $people["room"]?>
                            </p>
                            <a href="<?php echo $people[fblink];?>" class="btn btn-primary">Facebook</a>
                            <a href="<?php echo $people[manifesto];?>" class="btn btn-success">Manifesto</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row card-columns">
                <?php
                $sql = "SELECT * FROM council WHERE startyear='2019' && team ='Cultural' && post !='Cultural Councillor' && post !='Events Nominee' ORDER BY post ";
                $dg = mysqli_query($conn,$sql);
                $dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
                foreach($dr as $people):
                ?>
                    <div class="card col-sm-6 col-md-6 col-lg-3 mx-auto c">
                        <img class="card-img-top i" src="<?php echo $people[photo];?>" alt="Profile photo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $people["name"]?></h3>
                            <p class="card-text">
                                <strong>Post:-</strong> <?php echo $people["post"]?>
                                <br><strong>Phone No.:-</strong> <?php echo $people["phno"]?>
                                <br><strong>E-mail Id:-</strong> <?php echo $people["email"]?>
                                <br><strong>Room No.:-</strong> <?php echo $people["room"]?>
                            </p>
                            <a href="<?php echo $people[fblink];?>" class="btn btn-primary">Facebook</a>
                            <a href="<?php echo $people[manifesto];?>" class="btn btn-success">Manifesto</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><br>
            <!-- Mess -->
            <div class="row card-columns">
                <?php
                $sql = "SELECT * FROM council WHERE startyear='2019' && team ='Mess' ORDER BY post";
                $dg = mysqli_query($conn,$sql);
                $dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
                foreach($dr as $people):
                ?>
                    <div class="card col-sm-6 col-md-4 col-lg-3 mx-auto me">
                        <img class="card-img-top i" src="<?php echo $people[photo];?>" alt="Profile photo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $people["name"]?></h3>
                            <p class="card-text">
                                <strong>Post:-</strong> <?php echo $people["post"]?>
                                <br><strong>Phone No.:-</strong> <?php echo $people["phno"]?>
                                <br><strong>E-mail Id:-</strong> <?php echo $people["email"]?>
                                <br><strong>Room No.:-</strong> <?php echo $people["room"]?>
                            </p>
                            <a href="<?php echo $people[fblink];?>" class="btn btn-primary">Facebook</a>
                            <a href="<?php echo $people[manifesto];?>" class="btn btn-success">Manifesto</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><br>
            <!-- sports -->
            <div class="row card-columns">
                <?php
                $sql = "SELECT * FROM council WHERE startyear='2019' && post ='Sports Councillor'";
                $dg = mysqli_query($conn,$sql);
                $dr = mysqli_fetch_assoc($dg);
                ?>
                    <div class="card col-sm-6 col-md-6 col-lg-3 mx-auto s">
                        <img class="card-img-top i" src="<?php echo $dr[photo];?>" alt="Profile photo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $dr["name"]?></h3>
                            <p class="card-text">
                                <strong>Post:-</strong> <?php echo $dr["post"]?>
                                <br><strong>Phone No.:-</strong> <?php echo $dr["phno"]?>
                                <br><strong>E-mail Id:-</strong> <?php echo $dr["email"]?>
                                <br><strong>Room No.:-</strong> <?php echo $dr["room"]?>
                            </p>
                            <a href="<?php echo $dr[fblink];?>" class="btn btn-primary">Facebook</a>
                            <a href="<?php echo $dr[manifesto];?>" class="btn btn-success">Manifesto</a>
                        </div>
                    </div>
            </div>
            <div class="row card-columns">
                <?php
                $sql = "SELECT * FROM council WHERE startyear='2019' && team ='Sports' && post !='Sports Councillor' ORDER BY post ";
                $dg = mysqli_query($conn,$sql);
                $dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
                foreach($dr as $people):
                ?>
                    <div class="card col-sm-6 col-md-6 col-lg-3 mx-auto s">
                        <img class="card-img-top i" src="<?php echo $people[photo];?>" alt="Profile photo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $people["name"]?></h3>
                            <p class="card-text">
                                <strong>Post:-</strong> <?php echo $people["post"]?>
                                <br><strong>Phone No.:-</strong> <?php echo $people["phno"]?>
                                <br><strong>E-mail Id:-</strong> <?php echo $people["email"]?>
                                <br><strong>Room No.:-</strong> <?php echo $people["room"]?>
                            </p>
                            <a href="<?php echo $people[fblink];?>" class="btn btn-primary">Facebook</a>
                            <a href="<?php echo $people[manifesto];?>" class="btn btn-success">Manifesto</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><br>
            <!-- tech -->
            <div class="row card-columns">
                <?php
                $sql = "SELECT * FROM council WHERE startyear='2019' && team ='Tech' ORDER BY post";
                $dg = mysqli_query($conn,$sql);
                $dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
                foreach($dr as $people):
                ?>
                    <div class="card col-sm-6 col-md-4 col-lg-3 mx-auto t">
                        <img class="card-img-top i" src="<?php echo $people[photo];?>" alt="Profile photo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $people["name"]?></h3>
                            <p class="card-text">
                                <strong>Post:-</strong> <?php echo $people["post"]?>
                                <br><strong>Phone No.:-</strong> <?php echo $people["phno"]?>
                                <br><strong>E-mail Id:-</strong> <?php echo $people["email"]?>
                                <br><strong>Room No.:-</strong> <?php echo $people["room"]?>
                            </p>
                            <a href="<?php echo $people[fblink];?>" class="btn btn-primary">Facebook</a>
                            <a href="<?php echo $people[manifesto];?>" class="btn btn-success">Manifesto</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><br>
            <!-- maint -->
            <div class="row card-columns">
                <?php
                $sql = "SELECT * FROM council WHERE startyear='2019' && team ='Maint' ORDER BY post";
                $dg = mysqli_query($conn,$sql);
                $dr = mysqli_fetch_all($dg, MYSQLI_ASSOC);
                foreach($dr as $people):
                ?>
                    <div class="card col-sm-6 col-md-6 col-lg-3 mx-auto ma">
                        <img class="card-img-top i" src="<?php echo $people[photo];?>" alt="Profile photo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $people["name"]?></h3>
                            <p class="card-text">
                                <strong>Post:-</strong> <?php echo $people["post"]?>
                                <br><strong>Phone No.:-</strong> <?php echo $people["phno"]?>
                                <br><strong>E-mail Id:-</strong> <?php echo $people["email"]?>
                                <br><strong>Room No.:-</strong> <?php echo $people["room"]?>
                            </p>
                            <a href="<?php echo $people[fblink];?>" class="btn btn-primary">Facebook</a>
                            <a href="<?php echo $people[manifesto];?>" class="btn btn-success">Manifesto</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><br>
            <!-- alumni is put in cult group -->
        </div>
        <nav class="navbar navbar-fixed-bottom" style="background: linear-gradient(to bottom, #800000 0%, #210002 100%);" >
            <h5 style="color: green;font-weight:900; text-align:centre;">&copy <span>2019</span> Hostel 2| IIT Bombay| Web Council 2019-2020</h5>
            <h5 style="color:green;font-weight:900; text-align: center;">Developed by - Aniket Mondal & Akshit Srivastava</h5>
        </nav>
    </body>
</html>           