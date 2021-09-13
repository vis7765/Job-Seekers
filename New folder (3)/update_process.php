<?php
$host="localhost";
$user="root";
$pass="";
$db="jobportal";
session_start();
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
if(isset($_POST['submit'])){
	$username=$_SESSION['user'];
	$qualification=$_POST['Qualification'];
	$coursename=$_POST['course'];
	$collname=$_POST['collname'];
	$percentage=$_POST['percentage'];
	$specialized=$_POST['area'];
	$relocate=$_POST['relocate'];
	$organisation=$_POST['organization'];
	$address=$_POST['address'];
	$cv=$_FILES['cv']['name'];
	$photo=$_FILES['photo']['name'];
	$target="image/";
	$filename1=$target.basename($photo);
	$filename2=$target.basename($cv);

	
$sql="UPDATE  jobseeker_details SET qualification='$qualification',coursename= '$coursename', collname='$collname',percentage= '$percentage',WHERE username='$username'";

	//$sql="INSERT INTO  jobseeker_details VALUES('$username','$qualification','$coursename','$collname','$percentage','$specialized','$relocate','$organisation','$address','$filename1','$filename2')";


if (mysqli_query($con, $sql)) {
      echo " Record updated successfully";
      echo "<br />\n";
echo "redirecting to home page";
 $upload1=move_uploaded_file($_FILES['photo']['tmp_name'],$filename1);
$upload2=move_uploaded_file($_FILES['cv']['tmp_name'],$filename2);

echo "<script> window.location='home.php';</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
}


?