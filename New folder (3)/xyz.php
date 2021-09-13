
<?php
$host="localhost";
$user="root";
$pass="";
$db="jobportal";
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
session_start();
if(!isset($_SESSION['user'])){
	$message="Login First";
    echo "<script type='text/javascript'>alert('$message');
    
    window.location='jobseeker_login.html';
    </script>";
}
else{
$email=$_SESSION["user"];
echo $email;
if(isset($_POST['submit'])){
	$x= $_POST["submit"];

		 $sql="SELECT * FROM jobdetails WHERE job_id='$x' ";
		 $qry=mysqli_query($con,$sql);
		 $bag=mysqli_fetch_array($qry);
		 if($bag['status']==1){

		 	$message="Job is no more Available";
    echo "<script type='text/javascript'>alert('$message');
    
    window.location='home.php';
    </script>";
		 }
		 else{
		 $q=$bag['qualification'];
 		 $p=$bag['percentage'];
 		 $c=$bag['companyname'];
//echo $c;
$sql1="SELECT * FROM jobseeker_details WHERE username ='$email' ";
$qry1=mysqli_query($con,$sql1);
		 $bag1=mysqli_fetch_array($qry1);
		 $q1=$bag1['qualification'];
		 $p1= $bag1['percentage'];

		  if($q==$q1 && $p1>=$p ){
		  	//echo "fdhgfxh";
		  $sql2="INSERT INTO jobapplied VALUES ('$x','$email','0','$c')" ;
		  $qry2=mysqli_query($con,$sql2);
		  if($qry2){
			
			
				require 'PHPMailerAutoload.php';
				require 'credential.php';
	
				$mail = new PHPMailer;
	
				// $mail->SMTPDebug = 4;                               // Enable verbose debug output
	
				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = EMAIL;                 // SMTP username
				$mail->Password = PASS;                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to
	
				$mail->setFrom(EMAIL);
				$mail->addAddress('vkm789mahto@gmail.com');     // Add a recipient
	
				$mail->addReplyTo(EMAIL);
				// print_r($_FILES['file']); exit;
			
				$mail->isHTML(true);                                  // Set email format to HTML
	
				$mail->Subject = 'Hello dear';
				$mail->Body    = '<div style="border:2px solid red;">Thank you for register u got a notification through the mail you provide"</div>';
				$mail->AltBody = "hey";
	
				if(!$mail->send()) {
					echo 'Message could not be sent.';
					echo 'Mailer Error: ' . $mail->ErrorInfo;
				} else {
					echo 'Message has been sent';
				}
			
	
	 	

		  	$message="Your Application Submitted";
    		echo "<script type='text/javascript'>alert('$message');
    	    window.location='home.php';
			</script>";
			
		  }
		 
		  else{
		  	  		  	$message="You already applied";
    echo "<script type='text/javascript'>alert('$message');
    
    window.location='home.php';
    </script>";
		  }
		  }
		  else{
		  		  	$message="You are not Eligible";
    echo "<script type='text/javascript'>alert('$message');
    
    window.location='home.php';
    </script>";
		  }
}
}
}
?>