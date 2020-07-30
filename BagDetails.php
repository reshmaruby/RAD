<?php
include 'conn.php';
header ("Location:submit.html");
 
 if (isset($_POST['pd'])){
	$a=$_POST["insotype"];

	$b=$_POST["claimno"];
	$p=$_POST["passno"];
	$r=$_POST["tdest"];
	$s=$_POST["name"];
	$u=$_POST["clnm"];
	$c=$_POST["email"];
	$d=$_POST["phone"];
	$e=$_POST["description"];
	$f=$_POST["liw"];
	$g=$_POST["rc"];
	$h=$_POST["place"];
	$i=$_POST["blossdate"];
	$j=$_POST["time"];
	
	$k=$_POST["loss"];
	$l=$_POST["radio"];
	$m=$_POST["radio1"];
	

	
	$q="insert into Bagclaim(itype,claimno,passno,dest,name,cname,email,phone,descrip,lostw,replacew,place,lossdate,time,losscarr,noticarr,police)
	    values('$a',$b,$p,'$r','$s','$u','$c',$d,'$e',$f,$g,'$h','$i','$j','$k','$l','$m');";
	mysqli_query($con,$q) or die(mysqli_error);
	}
	else{echo "Not working";}
?>