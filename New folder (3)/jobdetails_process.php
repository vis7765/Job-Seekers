<?php
$host="localhost";
$user="root";
$pass="";
$db="jobportal";
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
if(isset($_POST['submit'])){
$cname=$_POST['cname'];
$username=$_POST['uname'];
$mobile=$_POST['mobile'];
$type=$_POST['type'];
$jobtitle=$_POST['jobtitle'];
$jobdescription=$_POST['jdescription'];
$joblocation=$_POST['location'];
$salary=$_POST['salary'];
$vacancies=$_POST['Vacancies'];
$qualification=$_POST['Qualification'];
$percentage=$_POST['Percentage'];
$postedon=$_POST['postdate'];
$lastdate=$_POST['lastdate'];

$sql="INSERT INTO jobdetails VALUES('$cname','$username','$mobile','$type','$jobtitle','$jobdescription','$joblocation','$salary','$vacancies','$qualification','$percentage','$postedon','$lastdate','0','0')";
$qry=mysqli_query($con,$sql);
if($qry){
	 
        $message="successfully uploaded";
         echo "<script type='text/javascript'>alert('$message');
        window.location='employer.php';</script>";
    }
     else{
     	
       echo "Error: " . $sql . "<br>" . mysqli_error($con);
         
 }
}
?>