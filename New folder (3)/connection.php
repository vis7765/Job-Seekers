<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="jobportal";
$con=mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($con));
?>