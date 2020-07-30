<?php

 include 'conn.php';
	
   $a = isset($_POST['url']) ? $_POST['url'] : null;
	$q="select email from signup where userid='$a';";
	$result = mysqli_query($con,$q);
	if (mysqli_num_rows($result) > 0) {
    echo "Username taken !";
    }
	else {
	echo "";
	}
?>