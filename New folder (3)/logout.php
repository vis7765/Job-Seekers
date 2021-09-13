<?php
session_start();

session_destroy();
if(session_destroy){
    echo "Session value: ".$_SESSION['user'];
      header('location: home.php');
}

?>