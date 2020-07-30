<?php

 include 'conn.php';
	$q="select count(phone) as r from customer where itype='gold';";
	$q1="select count(phone) as r1 from customer where itype='silver';";
	$q2="select count(phone) as r2 from customer where itype='platinum';";
	$result = mysqli_query($con,$q);
	$result1 = mysqli_query($con,$q1);
	$result2 = mysqli_query($con,$q2);
	if (mysqli_num_rows($result) > 0||mysqli_num_rows($result1) > 0||mysqli_num_rows($result2) > 0) {
	    $row = mysqli_fetch_assoc($result);  
	    $row1 = mysqli_fetch_assoc($result1);  
	    $row2 = mysqli_fetch_assoc($result2);  
	    echo "<table cellpadding='8' cellspacing='5'>";

 			 echo "<tr>";
 			 echo "<td style='background-color: #3399ff; color:white;'>" . "GOLD" . "</td>";
  			echo "<td style='background-color: white; width:150px;'>" . $row["r"] . "</td>";
 			 echo "</tr>";
 			 echo "<tr>";
 			 echo "<td style='background-color: #3399ff; color:white;'>" . "SILVER" . "</td>";
  			echo "<td style='background-color: white; width:150px;'>" . $row1["r1"] . "</td>";
 			 echo "</tr>";
 			 echo "<tr>";
 			 echo "<td style='background-color: #3399ff; color:white;'>" . "PLATINUM" . "</td>";
  			echo "<td style='background-color: white; width:150px;'>" . $row2["r2"] . "</td>";
 			 echo "</tr>";
 			
			echo "</table>";
    
	}



?>