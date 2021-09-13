<?php   
include('connection.php');
if(!isset($_SESSION['user']))
{
    
    header('Location: employer_login.html');
    exit();
}
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
<div class="w3-container" style="padding:50px" align="left">
 
  <?php if(isset($_SESSION['user'])){

  
   echo '<img src="'.$bag['logo'].'" width="100px" height="100px"  align="left"  border="10px "padding: 5px;>';
    echo'<h1><a class="w3-bar-item w3-button" href="#">&#8226Welcome,'.$bag['companyname'].'</a></h1>';
  }
  ?>
</div>
<div class="w3-container" style="padding:50px" align="center">
 
<h2 align="center">Please fill the rest Details</h2>

<p align="center"><-Your few Data has been preloaded-></p>
  <form method="post" action="jobdetails_process.php" enctype="multipart/form-data">

    <table border="0" cellpadding="5" cellspacing="0">
     <p align="center">Company Details</p><hr>
<tr> <td style="width: 50%">

<label for="First_Name">Company name *</label><br />
<?php echo '<input type="text" name="cname" readonly="9" class="form-control" style="width: 260px"  value='.$bag['companyname'].'>'; ?>
</td> <td style="width: 50%">
<label for="Last_Name">Email Id  *</label><br />
<?php echo '<input type="text" name="uname" readonly="9" class="form-control" style="width: 260px"  value='.$bag['username'].'>'; ?>
</td> </tr> 
<tr> <td style="width: 50%">
<label for="Email_Address">Mobile</label><br />
<?php echo '<input type="text" name="mobile" readonly="9" class="form-control" style="width: 260px"  value='.$bag['mobile'].'>'; ?>
<tr> <td style="width: 50%">
<label for="Email_Address">Company Type *</label><br />
<?php echo '<input type="text" name="type" readonly="9" class="form-control" style="width: 260px"  value='.$bag['type'].'>'; ?>
 

</td> </tr><tr> <td colspan="2">
<label for="Position">Job Title*</label><br />
<input name="jobtitle" type="text" style="width: 535px"maxlength="100" required="" />
</td> </tr> 
<tr> <td colspan="2">
<label for="Position">Job Description</label><br />
<textarea name="jdescription" type="text" style="width: 535px"maxlength="500" rows="7" cols="40"required="" ></textarea>
</td> </tr> <tr> <td colspan="2">
<label for="Portfolio">Location</label><br />
<select style="width: 260px" name="location" required="">
  <option value="chennai" >chennai</option>
  <option value="Hyderabad">Hyderabad</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Pune">Pune</option>
  <option value="Delhi">Delhi</option>
</select>
  
</td> </tr> <tr> <td colspan="2">
<label for="Position">Salary</label><br />
<input name="salary" type="number" style="width: 260px"maxlength="10" required="" />
</td> </tr>
<tr> <td colspan="2">
<label for="Organization">No of Vacancies</label><br />
<input name="Vacancies" type="number" maxlength="50" style="width:260px" />
</td> </tr> <tr> <td colspan="2">
<tr> <td colspan="2">
  <p align="left"><b>Eligibility</b></p><hr>
<label for="Portfolio">Highest Qualification</label><br />
<select style="width: 260px" name="Qualification" required="">
  <option value="MASTERS" >MASTERS</option>
  <option value="BACHELOR">BACHELOR</option>
  <option value="PHD">PHD</option>
  <option value="OTHERS">OTHERS</option>
</select>
</td> </tr>
<tr> <td colspan="2">
<label for="Organization">Overall Percentage</label><br />
<input name="Percentage" type="number" maxlength="4" style="width:260px" />
</td> </tr >
<tr> <td colspan="2">
<label for="Organization">Posted on </label><br />
<input name="postdate" type="date" maxlength="4" style="width:260px" value="" />
</td> </tr>
<tr> <td colspan="2">
<label for="Organization">Last Date</label><br />
<input name="lastdate" type="date" maxlength="4" style="width:260px" />
</td> </tr>
<tr> <td colspan="2" style="text-align: center;">

<input name="submit" type="submit" class="button" />
</td> </tr>
</table>



  </form>
</div>

<footer class="w3-container w3-theme" style="padding:32px">
  <p>Footer information goes here</p>
</footer>
     
</div>


     
</body>
</html> 
