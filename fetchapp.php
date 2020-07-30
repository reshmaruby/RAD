<?php

 include 'conn.php';
	$q="select * from approvedb;";
	$result = mysqli_query($con,$q);
	if (mysqli_num_rows($result) > 0) {
		echo "<table cellpadding='8' cellspacing='5'>";
		while($row = mysqli_fetch_array($result)) {
 			 echo "<tr>";
 			 echo "<td style='background-color: #3399ff; color:white;'>" . $row["claimno"] . "</td>";
  			echo "<td style='background-color: white;  width:150px;'>" . $row["name"] . "</td>";
 			 echo "</tr>";
 			}
			echo "</table>";

}
?>