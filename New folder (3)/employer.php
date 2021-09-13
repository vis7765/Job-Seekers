<?php   
include('connection.php');

 ?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css">
<style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {
  padding: 16px;
  font-weight: bold;
}
</style>
<body background="employer2.jpg">

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#"><img src="https://www.w3schools.com/images/w3schools.png" style="width:80%;"></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button w3-teal" href="employer.php">Home</a>
  <?php 

   if(isset($_SESSION['user'])){
    $email=$_SESSION["user"];
 
                                                $sql="SELECT * FROM employer WHERE username='$email'";
                                            $qry=mysqli_query($con,$sql);
                                            $bag=mysqli_fetch_array($qry);

                                        
                                        echo'<a class="w3-bar-item w3-button" href="employer_profile.php">&#8226Profile</a>';

                                        echo'<a class="w3-bar-item w3-button" href="employer_activity.php">&#8226My Activity</a>';
                                        echo'<a class="w3-bar-item w3-button" href="logout.php">&#8226Logout</a>';
                                      }
                                      else{

                                        echo'<a class="w3-bar-item w3-button" href="employer_login.html">&#8226Employer Login</a>';
                                         echo'<a class="w3-bar-item w3-button" href="employeer_register.php">&#8226Employer Signup</a>';
                                    
                                        ?><hr>
                                           
                                        
                                        <?php
                                      }
   ?>
   
  
      
  

  
      
    
     
   
   
  </div><hr>
  <a class="w3-bar-item w3-button" href="#">About Us</a>
  <a class="w3-bar-item w3-button" href="#">Contact</a>
  <a class="w3-bar-item w3-button" href="#">Category</a>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity"  ></div>

<div class="w3-main" style="margin-left:250px;" style="margin-bottom: 100px">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
   <a class="w3-bar-item w3-button" href="employee.html">Our partners</a>
     
</div>


<div class="w3-container" style="padding:40px" >
  <br>
   <?php if(isset($_SESSION['user'])){

  
   echo '<img src="'.$bag['logo'].'" width="100px" height="100px"  align="left"  border="10px "padding: 5px;>';
    echo'<h1><a class="w3-bar-item w3-button" href="#">&#8226Welcome,'.$bag['companyname'].'</a></h1>';
  }
  ?>
<br>

<h1>Want to upload job </h1><a class="w3-bar-item w3-button" href="jobupload.php">Click here</a> 


</div>



<footer class="w3-container w3-theme" style="padding:32px">
  <p>Footer information goes here</p>
</footer>
     
</div>


     
</body>
</html> 
