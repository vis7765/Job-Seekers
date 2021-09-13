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
 table td,table th{
                border: 2px solid black;
                padding: 10px;
                font-family:monospace;
                background-color: white;

                
            }
            table th{
              background-color: orange;
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

                                        echo'<a class="w3-bar-item w3-button" href="#">&#8226My Activity</a>';
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
    echo'<h1><a  >&#8226Welcome,'.$bag['companyname'].'</a></h1>';
    $name=$bag['companyname'];
  }
  ?>
<h2 align="center">Your Activities</h2>

<p align="center">Companies You Applied for</p>

 <table align="center" cellpadding="20" cellspacing="5" border="3"  >  
<thead>
  <tr>
     <th>SL NO</th>
        <th>COMPANY NAME</th>
        <th>JOB TITILE</th>
        <th>JOB DESCRIPTION</th>
                <th>INDUSTRY</th>
                <th>JOB LOCATION</th>
                <th>SALARY</th>
                   <th>STATUS</th>
                   <th>VIEW CANDIDATES APPLIED</th>

       
    </tr>
</thead>

<tbody>
<?php

$sql1="SELECT * FROM jobdetails WHERE companyname='$name' ";
$qry1=mysqli_query($con,$sql1);
$sl=1;
if($qry1){
  $cnt=mysqli_num_rows($qry1);
    if($cnt>0){
while($bag1=mysqli_fetch_array($qry1)){
  ?>
<tr>
     <td><?php echo $sl?></td>
        <td><?php echo $bag1['companyname'] ?></td>
        <td><?php  echo $bag1['jobtitle'] ?></td>
        <td><?php  echo $bag1['jobdescription'] ?></td>
        <td><?php  echo $bag1['type'] ?></td>
        <td><?php  echo $bag1['joblocation'] ?></td>
        <td><?php  echo $bag1['salary'] ?></td>
     <td><?php if( ($bag1['status']) ==0) 
    { ?>      

    <a href="deactivate.php?id=<?php echo $bag1['job_id']; ?>"> <button type="submit" name="submit" class="button" > Deactivate</button></a>   <?php }
    else
    {
       ?>    <a href="activate.php?id=<?php echo $bag1['job_id']; ?>"> <button type="submit" name="submit" class="button" > Activate</button></a>
     
            <?php
    }
       ?> </td>
   <td><a href="viewcandidates.php?id=<?php echo $bag1['job_id']; ?>"> click here</a></td>
       
    </tr>
<?php
$sl++;
}

?>
<?php
}

else{
  echo "<h1> no activities</h1>";

}
}
else
{
  echo "string";
 echo mysqli_error($con);
}
 
?>


</tbody>
      

</table>

</div>



<footer class="w3-container w3-theme" style="padding:32px">
  <p>Footer information goes here</p>
</footer>
     
</div>


     
</body>
</html> 
