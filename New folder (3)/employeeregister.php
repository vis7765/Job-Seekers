<?php
$host="localhost";
$user="root";
$pass="";
$db="jobportal";
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['uname'];
$password=$_POST['psd'];
$password=md5($password);
$mobile=$_POST['mobile'];


$sql="INSERT INTO joobseeker_registration VALUES('$username','$fname','$lname','$password','$mobile')";
$qry=mysqli_query($con,$sql);
if($qry){
        $message="successfully uploaded";
         echo "<script type='text/javascript'>alert('$message');
         window.location='home.php';</script>";}
     else{
     	echo "Error: " . $sql . "<br>" . mysqli_error($con);
         
 }
     }
?>