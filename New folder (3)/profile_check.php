<?php

$host="localhost";
$user="root";
$pass="";
$db="jobportal";
session_start();
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
  $email=$_SESSION["user"];
	 $sql="SELECT * FROM jobseeker_details WHERE username='$email' ";
    $qry=mysqli_query($con,$sql);
    
    $cnt=mysqli_num_rows($qry);
    if($cnt>0){
      $message="wait a moment";
    echo "<script type='text/javascript'>alert('$message');
    
    window.location='profile.php';
    </script>";
}
else{
	 $message="fill the details first";
    echo "<script type='text/javascript'>alert('$message');
    
    window.location='details.php';
   </script>";
}

















?>