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
    
  margin: 0;
  overflow-y: auto;
}
 table td,table th{
                border: 2px solid black;
                
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
<h2 align="center">Total Candidates Applied</h2>

<p align="center">Companies You Applied for</p>

 <table  cellpadding="10" cellspacing="5" border="3"  >  
    <col width="130">
<thead>
  <tr>
    
        
        <th>EMAIL-ID</th>
                <th>QUALIFICATION</th>
                <th>COURSENAME</th>
                <th>COLLEGENAME</th>
                   <th>PERCENTAGE</th>
                   <th>RELOCATION</th>
                   <th>ADDRESS</th>
                   <th>CV</th>

       
    </tr>
</thead>

<tbody>

<?php
$id=$_GET['id'];
$sql="SELECT * FROM jobapplied WHERE job_id ='$id' ";
$qry=mysqli_query($con,$sql);
if($qry){
  $cnt=mysqli_num_rows($qry);
    if($cnt>0){
while($bag=mysqli_fetch_array($qry)){
$email= $bag['username'];
$sql1="SELECT * FROM jobseeker_details WHERE username='$email' ";
$qry1=mysqli_query($con,$sql1);

while($bag1=mysqli_fetch_array($qry1)){
  ?>
<tr>
      
        <td><?php echo $bag1['username'] ?></td>
        <td><?php  echo $bag1['qualification'] ?></td>
        <td><?php  echo $bag1['coursename'] ?></td>
        <td><?php  echo $bag1['collname'] ?></td>
        <td><?php  echo $bag1['percentage'] ?></td>
       
     <td><?php  echo $bag1['relocate'] ?></td>
      <td><?php  echo $bag1['address'] ?></td>
         

       <td><a href="viewcv.php?id=<?php echo $bag1['username']; ?>"> click here</a></td>
           
    </tr>
<?php

}

}

?>
<?php
}

else{
  echo "no activity";

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


</div>

<footer class="w3-container w3-theme" style="padding:32px">
  <p>Footer information goes here</p>
</footer>
     



     
</body>
</html> 
