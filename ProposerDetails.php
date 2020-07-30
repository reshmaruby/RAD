<?php
include 'conn.php';
header("Location:checkout.php");
 
 if (isset($_POST['pd'])){
	
	$a=$_POST["name"];
	$b=$_POST["dob"];
	$p1=$_POST["dep"];
	$r=$_POST["dest"];
	$s=$_POST["from"];
	$u=$_POST["till"];
	$c=$_POST["email"];
	$d=$_POST["phone"];
	$e=$_POST["pincode"];
	$f=$_POST["state"];
	$g=$_POST["city"];
	$h=$_POST["residence"];
	$i=$_POST["name2"];
	$j=$_POST["dob2"];
	$k=$_POST["nr"];
	$l=$_POST["pno"];
	$m=$_POST["mdp"];
	$n=$_POST["age"];
	$o=$_POST["duration"];
	$p=$_POST["insotype"];
	$q="insert into customer(name,dob,dep,dest,fr,till,email,phone,pincode,state,city,residence,nname,ndob,nrelation,npno,mdp,age,duration,itype)
	    values('$a','$b','$p1','$r','$s','$u','$c','$d',$e,'$f','$g','$h','$i','$j','$k',$l,'$m',$n,'$o','$p');";
	mysqli_query($con,$q) or die(mysqli_error);
	}
	else{echo "Not working";}
?>