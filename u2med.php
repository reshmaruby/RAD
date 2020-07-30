<?php
session_start();
include 'conn.php';
$a=$_SESSION['user'];
$q="select claimno from signup where userid='$a';";

$result = mysqli_query($con,$q);
$row = mysqli_fetch_assoc($result);

    if (!($row["claimno"])) {
        header('Location:user.php');
      }
    else{
    	header('Location:medclaim.php');
    }
?>