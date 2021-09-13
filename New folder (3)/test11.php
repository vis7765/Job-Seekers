<?php
$host="localhost";
$user="root";
$pass="";
$db="jobportal";
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
$sql="SELECT * FROM jobdetails WHERE  jobtitle='kolkata' or type='kolkata' or joblocation='kolkata' ";
$qry=mysqli_query($con,$sql);
   $bag=mysqli_fetch_array($qry);
   echo $bag['companyname'];
   echo $bag['salary'];
?>

