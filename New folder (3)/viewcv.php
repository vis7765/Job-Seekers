<?php
include('connection.php');
$username=$_GET['id'];

$sql="SELECT * FROM jobseeker_details WHERE username='$username' ";
$qry=mysqli_query($con,$sql);
$bag=mysqli_fetch_array($qry)

?>
<!DOCTYPE html>
<html>
<head>
	<title>cv</title>
</head>
<body>
	
<object width="1500" height="900" data="<?php echo $bag['cv']?>">
</object>
<a href="employer_activity.php">click here to go back</a>
</body>
</html>