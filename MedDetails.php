<?php
include 'conn.php';
header("Location:submit.html");
 
 if (isset($_POST['dp'])){
	$a=$_POST["insotype"];
	$b=$_POST["claimno"];
	$p=$_POST["passno"];
	$r=$_POST["tdest"];
	$s=$_POST["name"];
	$u=$_POST["clnm"];
	$c=$_POST["email"];
	$d=$_POST["phone"];
	$e=$_POST["description"];
	$f=$_POST["place"];
	$g=$_POST["blossdate"];
	$h=$_POST["time"];
	$i=$_POST["hosp"];
	$j=$_POST["rc"];
	$k=$_POST["prior"];
	$l=$_POST["physician"];
	$m=$_POST["list"];
	echo $a;
	$q="insert into Medclaim(itype,claimno,passno,dest,name,cname,email,phone,descrip,place,accdate,time,hosp,medex,prior,phy,list)
	    values('$a','$b','$p','$r','$s','$u','$c','$d','$e','$f','$g','$h','$i',$j,'$k','$l','$m');";
	mysqli_query($con,$q) or die(mysqli_error);
	}
	else{echo "Not working";}
?>