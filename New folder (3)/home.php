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
<body background="img1.jpg">

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#"><img src="https://www.w3schools.com/images/w3schools.png" style="width:80%;"></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button w3-teal" href="home.php">Home</a>
  <?php 

   if(isset($_SESSION['user'])){
    $email=$_SESSION["user"];
 
                                                $sql="SELECT * FROM joobseeker_registration WHERE username='$email'";
                                            $qry=mysqli_query($con,$sql);
                                            $bag=mysqli_fetch_array($qry);

                                        
                                        echo'<a class="w3-bar-item w3-button" href="profile.php">&#8226Profile</a>';

                                        echo'<a class="w3-bar-item w3-button" href="jobseeker_activity.php">&#8226My Activity</a>';
                                        echo'<a class="w3-bar-item w3-button" href="logout.php">&#8226Logout</a>';
                                      }
                                      else{

                                        echo'<a class="w3-bar-item w3-button" href="jobseeker_login.html">&#8226JobSeeker Login</a>';
                                         echo'<a class="w3-bar-item w3-button" href="employee.html">&#8226JobSeeker Signup</a>';
                                    
                                        ?><hr><?php
                                           echo'<a class="w3-bar-item w3-button" href="employer.php">&#8226Employer </a>';
                                       
                                        ?>
                                       
                                        <?php
                                      }
   ?>
   
  
      
  

  
      
    
     
   
   <hr>
  </div>
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
   <?php 
   if(isset($_SESSION['user'])){
$sql1="SELECT * FROM jobseeker_details WHERE username='$email'";
                                            $qry1=mysqli_query($con,$sql1);
                                            $bag1=mysqli_fetch_array($qry1);

   

 
   echo '<img src="'.$bag1['photo'].'" width="100px" height="100px"  align="left"  border="10px "padding: 5px;>';
    echo'<h1><a class="w3-bar-item w3-button" href="#">&#8226Welcome,'.$bag['fname'].'</a></h1>';
  }
  ?>
<h2 align="center">100+ Jobs Posted Last Week</h2>

<p align="center"><-Search Jobs Suited for you-></p>


<br>
    <?php

 
    ?>
<hr>
<form method="get" action="home.php">
<input type="text"  name="search" placeholder="Enter search keyword" required="">
 <input type="submit"   class="button" name="submit" />
</form>
<p align="left"><-Search by tags like:-Company name,Company Type,Location -></p>
<br>
<br>
<?php
$host="localhost";
$user="root";
$pass="";
$db="jobportal";
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
if(isset($_GET['submit'])){
  $search=$_GET['search'];
$sql1="SELECT * FROM jobdetails WHERE  jobtitle='$search' or type='$search' or joblocation='$search' ";
$qry1=mysqli_query($con,$sql1);
  $cnt=mysqli_num_rows($qry1);
echo '<h3>No of Search Result:  '.$cnt.' </h3>';
if($cnt>0){

 while($row=mysqli_fetch_array($qry1)){?>
   <form method="post" action="xyz.php">
       
<div class="">

                  <div class="title d-flex flex-row justify-content-between">
                    <div class="">
                    <h4><b><?php echo $row['jobtitle']; ?></b></h4>
                      <h6><b><?php echo $row['companyname']; ?></b></h6>         
                    </div>
                   
                  </div>
                  <p>
                    <h6><b>Job Desc:<?php echo $row['jobdescription']; ?></b></h6> 
                  </p>
                  <h5>Job Nature: Full time</h5>
                  <p class="address"><span ></span> <?php echo $row['joblocation']; ?></p>
                  <p class="address"><span ></span> <?php echo $row['salary']; ?></p>
                  <button type="submit" name="submit" value="<?php echo $row['job_id']; ?>"> Apply</button>
                </div>

               

                </form>
                    <br>
                <?php  
 }

 }
 else{
  echo "string";
 }
}

   
?>



  <h1 align="center">Featured Job Categories</h1>
  <div class="box-info">

</div>
    



</div>



<footer class="w3-container w3-theme" style="padding:32px">
  <p>Footer information goes here</p>
</footer>
     



     
</body>
</html> 
