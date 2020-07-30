<?php

 include 'conn.php';
	$q="select claimno,name from bagclaim;";
	$q1="select claimno,name from medclaim;";
	$result = mysqli_query($con,$q);
	$result1 = mysqli_query($con,$q1);

if(mysqli_num_rows($result) > 0 || mysqli_num_rows($result1) > 0) 
	{
		echo "<b>Pending claims are: <br><br></b>";
	

	if (mysqli_num_rows($result) > 0) {
		echo "<table cellpadding='8' cellspacing='5'>";
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
 			 echo "<td style='background-color: #3399ff; color:white;'>".'<a style="color:white; text-decoration:none; " href="bpend.php?claimno='. $row["claimno"] .'&name='. $row["name"] .'">'. $row["claimno"] .'</a>'."</td>";
  			echo "<td style='background-color: white; width:150px;'>" . $row["name"] . "</td>";
 			 echo "</tr>";
 			}
 			 echo "</table>";	
}
	if (mysqli_num_rows($result1) > 0) {
			echo "<table cellpadding='8' cellspacing='5'>";
		while($row1 = mysqli_fetch_array($result1)) {
			echo "<tr>";
 			 echo "<td style='background-color: #3399ff; color:white;'>".'<a style="color:white; text-decoration:none; " href="mpend.php?claimno='. $row1["claimno"] .'&name='. $row1["name"] .'">'. $row1["claimno"] .'</a>'."</td>";
  			echo "<td style='background-color: white; width:150px;'>" . $row1["name"] . "</td>";
 			 echo "</tr>";
 			}
 			 echo "</table>";

	}
}
else 
	{
		echo "<b>No more pending claims<br><br></b>";
	}


?>