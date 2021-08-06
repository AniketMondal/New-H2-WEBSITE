<?php
session_start();
$conn = mysqli_connect("10.105.177.5","hostel2","hostel2$123", "hostel2");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$roll=$_SESSION['rolln'];

if(isset($_POST['submit']))
{
  $sql = "SELECT * from `Interests_Sports` Where `LDAP`='$roll'";
  $result=mysqli_query($conn, $sql);
  if(!mysqli_fetch_assoc($result))
  {
  
    $query= "INSERT INTO `Interests_Sports` (`LDAP`) VALUES ('$roll')";
    mysqli_query($conn, $query);
    $query= "INSERT INTO `Interests_Cult` (`LDAP`) VALUES ('$roll')";
    mysqli_query($conn, $query);
    $query= "INSERT INTO `Interests_Tech` (`LDAP`) VALUES ('$roll')";
    mysqli_query($conn, $query);
  }

  $chSports=$_POST['sports'];
  $chCult=$_POST['cult'];
  $chTech=$_POST['tech'];
  echo $chSports[0];

  $sql = "SHOW COLUMNS FROM Interests_Sports";
  $result=mysqli_query($conn, $sql);
  $i=0;
  while($row = mysqli_fetch_assoc($result))
          {
            if($row['Field']!='LDAP' && $row['Field']!='ID')
             
             { 
                  $field=$row['Field']; 
                  if($row['Field']==$chSports[$i] )
                  {
                      $query = "UPDATE `Interests_Sports` SET $field=1 WHERE `LDAP`='$roll' "; 
                      mysqli_query($conn, $query);
                      $i=$i+1;  
                  }
                  else
                   {
                      $query = "UPDATE `Interests_Sports` SET $field=0 WHERE `LDAP`='$roll'"; 
                      mysqli_query($conn, $query);
                    }
              }
          }


  $sql = "SHOW COLUMNS FROM Interests_Cult";
  $result=mysqli_query($conn, $sql);
  $i=0;
  while($row = mysqli_fetch_assoc($result))
          {
            if($row['Field']!='LDAP' && $row['Field']!='ID')
             
             { 
                  $field=$row['Field']; 
                  if($row['Field']==$chCult[$i] )
                  {
                      $query = "UPDATE `Interests_Cult` SET $field=1 WHERE `LDAP`='$roll' "; 
                      mysqli_query($conn, $query);
                      $i=$i+1;  
                  }
                  else
                   {
                      $query = "UPDATE `Interests_Cult` SET $field=0 WHERE `LDAP`='$roll' "; 
                      mysqli_query($conn, $query);
                    }
              }
          }


  $sql = "SHOW COLUMNS FROM Interests_Tech";
  $result=mysqli_query($conn, $sql);
  $i=0;
  while($row = mysqli_fetch_assoc($result))
          {
            if($row['Field']!='LDAP' && $row['Field']!='ID')
             
             { 
                  $field=$row['Field']; 
                  if($row['Field']==$chTech[$i] )
                  {
                      $query = "UPDATE `Interests_Tech` SET $field=1 WHERE `LDAP`='$roll' "; 
                      mysqli_query($conn, $query);
                      $i=$i+1;  
                  }
                  else
                   {
                      $query = "UPDATE `Interests_Tech` SET $field=0 WHERE `LDAP`='$roll' "; 
                      mysqli_query($conn, $query);
                    }
              }
          }
header("Location: profile.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
    {
      body{
        background-color: white;
      }
    }
  </style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="carousel.css" rel="stylesheet">
 </head>


<body>
  
<main>
 <form action="interests.php" method="post">
	<div class="jumbotron " style="display:table;">
		 <div class="panel panel-default " align="center" style=" font-family: serif; font-size: 15px; border-style:none none none solid; border-width: 10px;border-color:   green;">
  		 <h1 >INTERESTS</h1>
  		 <p>Have awesome skills? Wants to explore anything new? You are at the right way. Just fill your details of interests and you will be notified specifically about everything you are interested in, let it be sports, cultural or tech. You will get all GC and other informations based on your interests so that you can contribute your efforts for the glory of our beloved <strong>HOSTEL-2</strong> aka<strong> "THE WILD ONES"</strong>.</p>
  		 <br>
  	 </div>


	<div class="container" style="display:table;">
		<img class="col-sm-6 img-thumbnail"  src="images/ssp.jpg" alt="Sports" width=100%>
	
	
	
    <div class="container-fluid col-sm-6 panel panel-default" >
      <h2 class="text-center panel panel-head " style="border-style:none  solid none solid ; border-width: 10px;border-color: red;"><strong>Sports</strong></h2>
      <div class="row-inline" style="text-align: left; font-size: 15px;  border-style:none solid none none ; border-width: 10px;border-color: orange;">

    	 
           <?php
           $sql = "SHOW COLUMNS FROM Interests_Sports";
            $result=mysqli_query($conn, $sql);

            $sql2 = "SELECT * from `Interests_Sports` Where `LDAP`=$roll";
            $result2=mysqli_query($conn, $sql2); 
            $row2 = mysqli_fetch_assoc($result2);

            while($row = mysqli_fetch_assoc($result))
            {
              if($row['Field']!='LDAP' && $row['Field']!='ID')
              {
                $field=$row['Field'];
                
                  echo '
                      <label>
                         <input type="checkbox"  name="sports[]" value='.$row["Field"].' class="filled-in"';
                          if($row2[$field]==1){ echo "checked";} 
                echo ' />
                        <span style=" font-size: 15px;">'.str_replace("_", " ", $row["Field"]).'</span>
                      </label>
                      <br>
                      ';
              }

            }
            ?> 
          
        </div>
    </div>
  </div>
    <hr>
    
   
	<div class="container">
		<img class=" img-thumbnail col-sm-6" src="images/cultural.jpg" alt="Sports" width=100%>
		



	<div class="container-fluid col-sm-6 panel panel-default" style="text-align: left;">
    <h2 class="text-center panel panel-head " style="border-style:none  solid none solid ; border-width: 10px;border-color: red;"><strong>Culturals</strong></h2>
    <div class="row-inline" style="text-align: left;  font-size: 15px;  border-style:none solid none none ; border-width: 10px;border-color: orange;">
  	 
         <?php
        $sql = "SHOW COLUMNS FROM Interests_Cult";
        $result=mysqli_query($conn, $sql);

        $sql2 = "SELECT * from `Interests_Cult` Where `LDAP`=$roll";
        $result2=mysqli_query($conn, $sql2); 
        $row2 = mysqli_fetch_assoc($result2);

        while($row = mysqli_fetch_assoc($result))
        {
          if($row['Field']!='LDAP'&& $row['Field']!='ID')
          {$field=$row['Field'];
          echo '
              <label>
                <input type="checkbox"  name="cult[]" value='.$row["Field"].' class="filled-in"';
                if($row2[$field]==1){ echo "checked";} 
                echo ' />
                <span style=" font-size: 15px;">'.str_replace("_", " ", $row["Field"]).'</span>
              </label>
              <br>
              ';
          }
        }
        ?> 
      
    </div>
  </div>
</div>
  <hr>
    
    <br>
	<div class="container ">
		<img class="col-sm-6 img-thumbnail" src="images/tech.jpg" alt="Sports" width=100%>
		
	
	
	<div class="container-fluid col-sm-6 panel panel-default" style="text-align: left;">
    <h2 class="text-center panel panel-head " style="border-style:none  solid none solid ; border-width: 10px;border-color: red;"><strong>Technical</strong></h2>
    <div class="row-inline" style="text-align: left;  font-size: 15px;  border-style:none solid none none ; border-width: 10px;border-color: orange;">
      
       <?php
        $sql = "SHOW COLUMNS FROM Interests_Tech";
        $result=mysqli_query($conn, $sql);
        
        $sql2 = "SELECT * from `Interests_Tech` Where `LDAP`=$roll";
        $result2=mysqli_query($conn, $sql2); 
        $row2 = mysqli_fetch_assoc($result2);
        while($row = mysqli_fetch_assoc($result))
        {
          if($row['Field']!='LDAP' && $row['Field']!='ID')
          {
            $field=$row['Field'];
          echo '
        
              <label>
                <input type="checkbox"  name="tech[]" value='.$row["Field"].' class="filled-in"';
                if($row2[$field]==1){ echo "checked";} 
                echo ' />
                <span style=" font-size: 15px;">'.str_replace("_", " ", $row["Field"]).'</span>
              </label>
              <br>
              ';
          }

        }
        ?>
      
    </div>
  </div>
  <button  type="submit" class="btn btn-primary pull-right "   name="submit" value="submit" >Submit</button>
  <!-- <button type="button" class="btn btn-warning" align="Left">Cancel</button> -->
</div>
   
</div>
</form >
</main>


</body>