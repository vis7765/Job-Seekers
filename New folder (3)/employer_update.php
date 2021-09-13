<?php
$host="localhost";
$user="root";
$pass="";
$db="jobportal";
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
if(isset($_POST['update'])){
$cname=$_POST['companyname'];
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$type=$_POST['type'];
$about=$_POST['about'];
$photo=$_FILES['photo']['name'];
$target="image/";
	$filename1=$target.basename($photo);

$sql="UPDATE EMPLOYER SET companyname='$cname',mobile='$mobile',logo='$filename1',address='$address',type='$type',about='$about' WHERE username='$username'";
$qry=mysqli_query($con,$sql);
if($qry){
	$upload1=move_uploaded_file($_FILES['photo']['tmp_name'],$filename1);
        $message="successfully uploaded";
         echo "<script type='text/javascript'>alert('$message');
         window.location='employer.php';</script>";}
     else{
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
         
 }
     }
?>