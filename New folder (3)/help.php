<?php
$host="localhost";
$user="root";
$pass="";
$db="jobportal";
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
$email=$_SESSION["user"];
$sql="SELECT * FROM jobapplied WHERE username='$email' ";
$qry=mysqli_query($con,$sql);
if($qry){
  $cnt=mysqli_num_rows($qry);
    if($cnt>0){
$bag=mysqli_fetch_array($qry);
$id= $bag['job_id'];
$sql1="SELECT * FROM jobdetails WHERE job_id='$id' ";
$qry1=mysqli_query($con,$sql1);
while($bag1=mysqli_fetch_array($qry1)){
$x=$bag1['companyname'];
}
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