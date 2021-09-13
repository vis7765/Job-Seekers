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

	 $sql="SELECT * FROM employer WHERE username='$username' AND password='$password'";
    $qry=mysqli_query($con,$sql);
 	$cnt=mysqli_num_rows($qry);
    if($cnt>0){
    
     while($bag=mysqli_fetch_array($qry)){

        $x=$bag['status'];

    }
    

   if($x==1){

   $message="you cant login";
    echo "<script type='text/javascript'>alert('$message');
    
    window.location='employer_login.html';
    </script>";
    }  
    else{
         $cnt=mysqli_num_rows($qry);
        if($cnt>0){
        $_SESSION['user']=$username;
        var_dump($_SESSION);
  
    
}

    	$message="redirecting to home page";
    echo "<script type='text/javascript'>alert('$message');
    
    window.location='employer.php';
    </script>";
    } 
}
else{
		$message="Not Registered";
    echo "<script type='text/javascript'>alert('$message');
    
    window.location='employeer_register.php';
    </script>";
}
   
}





?>