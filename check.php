<?php
include 'conn.php';
//Insertion
$a=$_POST["firstname"];
$b=$_POST["email"];
$c=$_POST["address"];
$d=$_POST["city"];
$q="insert into eg values($a,'$b',$c,'$d');";
mysqli_query($conn,$q);
 
//Selection
/*$sql = "SELECT * from eg;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " Name: " . $row["name"]. " Age" . $row["age"]." Occupation" . $row["occu"]."<br>";
    }
} else {
    echo "0 results";
}
*/
echo mysqli_field_count($conn);

?>