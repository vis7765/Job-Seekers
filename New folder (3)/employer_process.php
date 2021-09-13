<?php
$host="localhost";
$user="root";
$pass="";
$db="jobportal";
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
if(isset($_POST['submit'])){
$cname=$_POST['companyname'];
$username=$_POST['uname'];
$password=$_POST['psd'];
$password=md5($password);
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$type=$_POST['ctype'];
$about=$_POST['about'];
$photo=$_FILES['photo']['name'];
$target="image/";
	$filename1=$target.basename($photo);


$sql="INSERT INTO employer VALUES('$cname','$username','$password','$mobile','$address','$type','$about','$filename1','0')";
$qry=mysqli_query($con,$sql);
if($qry){
	 $upload1=move_uploaded_file($_FILES['photo']['tmp_name'],$filename1);
        $message="successfully uploaded";
         echo "<script type='text/javascript'>alert('$message');
        window.location='employer.php';</script>";
    }
     else{
     	echo "Already Registered";
      // echo "Error: " . $sql . "<br>" . mysqli_error($con);
         
 }
     }
?>