<?php
header("Location:submitted.php");
 include 'conn.php';
	$a=$_POST["policyno"];
	$b=$_POST["claimno"];
	$p=$_POST["passno"];
	$r=$_POST["tdest"];
	$s=$_POST["adate"];
	$u=$_POST["ddate"];
	$c=$_POST["name"];
	$d=$_POST["dob"];
	$e=$_POST["email"];
	$f=$_POST["phone"];
	$g=$_POST["addr"];
	$h=$_POST["name2"];
	$i=$_POST["name2"];
	$j=$_POST["dob2"];
	$k=$_POST["ir"];
	$l=$_POST["phone1"];
	$m=$_POST["description"];
	$n=$_POST["liw"];
	$o=$_POST["rc"];
	$la=$_POST["place"];
	$ma=$_POST["blossdate"];
	$na=$_POST["time"];
	$oa=$_POST["loss"];
	$pa=$_POST["radio"];
	$ra=$_POST["radio1"];
	
	$q="insert into claim(name,dob,email,phone,pincode,state,city,residence,nname,ndob,nrelation,npno,mdp,age,duration) 
	    values('$a','$b','$p','$r','$s','$u','c',$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$la','$ma','$na','$oa','$pa','$ra');";
	$result=mysqli_query($con,$q) or die(mysqli_error);
	
?>