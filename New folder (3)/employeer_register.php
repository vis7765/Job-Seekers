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
   <a class="w3-bar-item w3-button" href="employer_login.html">&#8226Employer Login</a>
   <a class="w3-bar-item w3-button" href="employeer_register.php">&#8226Employer Signup</a>
  </div>
  <hr>
  <a class="w3-bar-item w3-button" href="#">About Us</a>
  <a class="w3-bar-item w3-button" href="#">Contact</a>
  <a class="w3-bar-item w3-button" href="#">Category</a>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity"  ></div>

<div class="w3-main" style="margin-left:250px;" style="margin-bottom: 100px">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
   <a class="w3-bar-item w3-button" href="employee.html">Our partners</a>
     
</div>


<div class="w3-container" style="padding:50px" align="center" >


<form action="employer_process.php" method="post" enctype="multipart/form-data">
  <h3>EMPLOYEER</h3>
  <h4>REGISTER YOURSELF</h4>
  <label for="fname">CompanyName</label>
  <input type="text"  name="companyname" placeholder="Enter company name" required="">
  <br><label for="fname">User Name</label>
  &nbsp&nbsp&nbsp&nbsp&nbsp<input type="email"  name="uname" placeholder="Enter  Email-id" required="">
 <br> <label for="fname">*Password</label>
 &nbsp&nbsp&nbsp&nbsp&nbsp <input type="Password"  name="psd" placeholder="Enter Password">
 <br> <label for="lname">*Mobile</label>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number"  name="mobile" placeholder="Enter Mobile">
   <br> <label for="address">Company Address</label>
  <input type="text"  name="address" placeholder="Enter company Address" required="">
  <br><label for="Portfolio"><b>Company Type </label><br />
<select style="width: 300px" name="ctype" required="" style="align-self: left">
  <option value="IT" >IT</option>
  <option value="CONSULTING">CONSULTING</option>
  <option value="HOSPITAL MANAGEMENT">HOSPITAL MANAGEMENT</option>
  <option value="OTHERS">OTHERS</option>
</select>
<br> <label for="address">About Company</label>
  <input type="text" style="width: 415px" name="about" placeholder="About Company" required="">
 <br><label for="Reference">Upload LOGO</label><br />
<input type="file" name="photo" style="color: black;" required="">
  <br><br><button type="submit" name="submit" value="Submit" class="button">Submit</button
</form>
</div>




<footer class="w3-container w3-theme" style="padding:32px">
  <p>Footer information goes here</p>
</footer>
     
</div>


     
</body>
</html> 
