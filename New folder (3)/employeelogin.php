<?php
$host="localhost";
$user="root";
$pass="";
$db="jobportal";
session_start();
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
if(isset($_POST['submit'])){
	$username=$_POST['uname'];
	$password=$_POST['psd'];
	$password=md5($password);

	 $sql="SELECT * FROM joobseeker_registration WHERE username='$username' AND password='$password'";
    $qry=mysqli_query($con,$sql);
    
    $cnt=mysqli_num_rows($qry);
    if($cnt>0){
        $_SESSION['user']=$username;
        var_dump($_SESSION);
    while($bag=mysqli_fetch_array($qry)){

    	$x=$bag['no_of_attempts'];

    }
    echo "$x";

   if($x==0){

   $message="1st time user";
    echo "<script type='text/javascript'>alert('$message');
    
    window.location='details.php';
    </script>";
    }  
    else{
    	$message="redirecting to home page";
    echo "<script type='text/javascript'>alert('$message');
    
    window.location='home.php';
    </script>";
    } 
   
}
else{
	$message="incorrect username/password";
     echo "<script type='text/javascript'>alert('$message');
   
    window.location='jobseeker_login.html';
     </script>";
}
}



?>