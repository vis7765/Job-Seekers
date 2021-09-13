<?php
include('connection.php');
$id=$_GET['id'];
$sql="UPDATE jobdetails SET status='1' WHERE job_id='$id'";

$qry=mysqli_query($con,$sql);

header("location: employer_activity.php");


?>