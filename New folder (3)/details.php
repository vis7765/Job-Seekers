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
  back
}

</style>
<body background="img1.jpg">

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#"><img src="https://www.w3schools.com/images/w3schools.png" style="width:80%;"></a>

  <a class="w3-bar-item w3-button w3-teal" href="home.php">Home</a>
  <?php 

   if(isset($_SESSION['user'])){
    $email=$_SESSION["user"];
 
                                                $sql="SELECT * FROM joobseeker_registration WHERE username='$email'";
                                            $qry=mysqli_query($con,$sql);
                                            $bag=mysqli_fetch_array($qry);

                                        echo'<a class="w3-bar-item w3-button" href="#">'.$bag['fname'].'</a>';
                                           echo'<a class="w3-bar-item w3-button" href="profile_check.php">Profile</a>';

                                        echo'<a class="w3-bar-item w3-button" href="#">My Activity</a>';
                                        echo'<a class="w3-bar-item w3-button" href="logout.php">Logout</a>';
                                      }
                                      else{

                                        echo'<a class="w3-bar-item w3-button" href="jobseeker_login.html">JobSeeker Login</a>';
                                         echo'<a class="w3-bar-item w3-button" href="employee.html">JobSeeker Signup</a>';
                                    
                                        ?><hr><?php
                                           echo'<a class="w3-bar-item w3-button" href="jobseeker_login.html">Employer Login</a>';
                                        echo'<a class="w3-bar-item w3-button" href="employee.html">Employer Signup</a>';
                                        ?>
                                        <hr>
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


<div class="w3-container" style="padding:100px" align="center" >

  <h2 align="center">Please fill the rest Details</h2>

<p align="center"><-Your few Data has been preloaded-></p>
  <form method="post" action="details_register.php" enctype="multipart/form-data">

    <table border="0" cellpadding="5" cellspacing="0">
     <p align="center">Personal Details</p><hr>
<tr> <td style="width: 50%">

<label for="First_Name">First name *</label><br />
<?php echo '<input type="text" name="fname" readonly="9" class="form-control" style="width: 260px"  value='.$bag['fname'].'>'; ?>
</td> <td style="width: 50%">
<label for="Last_Name">Last name *</label><br />
<?php echo '<input type="text" name="lname" readonly="9" class="form-control" style="width: 260px"  value='.$bag['lname'].'>'; ?>
</td> </tr> 
<tr> <td style="width: 50%">
<label for="Email_Address">Email *</label><br />
<?php echo '<input type="text" name="username" readonly="9" class="form-control" style="width: 260px"  value='.$bag['username'].'>'; ?>

</td> <td style="width: 50%">
<label for="Mobile">Mobile *</label><br />
<?php echo '<input type="text" name="username" readonly="9" class="form-control" style="width: 260px"  value='.$bag['mobile'].'>'; ?>
</td></tr>

 <tr> <td colspan="2">
  <p align="left"><b>Academics</b></p><hr>
<label for="Portfolio">Highest Qualification</label><br />
<select style="width: 260px" name="Qualification" required="">
  <option value="MASTERS" >MASTERS</option>
  <option value="BACHELOR">BACHELOR</option>
  <option value="PHD">PHD</option>
  <option value="OTHERS">OTHERS</option>
</select>
  
</td> </tr><tr> <td colspan="2">
<label for="Position">Course Name*</label><br />
<input name="course" type="text" style="width: 535px"maxlength="100" required="" />
</td> </tr> 
<tr> <td colspan="2">
<label for="Position">University/College Name *</label><br />
<input name="collname" type="text" style="width: 535px"maxlength="10" required="" />
</td> </tr>  <tr> <td>
<label for="percentage">Percentage Obtained *</label><br />
<input name="percentage" type="number"style="width: 150px" maxlength="10" required="" />
</td> <td>
</td> </tr><tr> <td colspan="2">
<label for="Position">Specialized Area*</label><br />
<input name="area" type="text" style="width: 535px"maxlength="10" required="" />
</td> </tr>
 <tr> <td colspan="2">
<label for="Relocate">Are you willing to relocate?</label><br />
<input name="relocate" type="radio" value="Yes" checked="checked"   /> Yes      
<input name="relocate" type="radio" value="No" /> No      
<input name="relocate" type="radio" value="NotSure" /> Not sure
</td> </tr> <tr> <td colspan="2">
<label for="Organization">Last company you worked for(if any)</label><br />
<input name="organization" type="text" maxlength="50" style="width: 535px" />
</td> </tr> <tr> <td colspan="2">
<label for="Reference">Address</label><br />
<textarea name="address" rows="7" cols="40" style="width: 535px" required=""></textarea>
</td> </tr> <tr> <td colspan="2" >
<label for="Reference">Upload CV</label><br />
<input type="file" name="cv" style="color: black;" required="">
</td> </tr>
 <tr> <td colspan="2" >
<label for="Reference">Upload Photo</label><br />
<input type="file" name="photo" style="color: black;" required="">
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
