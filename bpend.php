 <!DOCTYPE html>
<html lang="en">
<?php
$claimno="";
  include 'conn.php';
  
    if(isset($_GET["claimno"])&&isset($_GET["name"]))
    {
        $claimno = $_GET["claimno"];
        $name = $_GET["name"];
    }
    if (isset($_POST['submit'])){
      $q="insert into approvedb (claimno, name) values ('$claimno','$name');";
      $q1="delete from bagclaim where claimno='$claimno';";
      mysqli_query($con,$q);
      mysqli_query($con,$q1);
      header('Location:admin.html');    }
  ?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Page Title</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link rel="stylesheet" href="admincss.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<div class="header">
  <h1>Admin</h1>
</div>

<div class="navbar">
  <a href="#">Home</a>
  <a href="#">Inspect</a>
 <input type="text" placeholder="Search..">
  <a href="#" class="right">Logout</a>
</div>


<div class="row">
  <div class="side">
<h1 class="center shadow">ADMINS</h1>
<hr>
    <h2 class="center s">Reshma</h2>
<img src="reshma.png" alt="Avatar" class="avatar">
<hr>
<h2 class="center s">Ayush</h2>
<img src="ayush1.jpeg" alt="Avatar" class="avatar">
<hr>
<h2 class="center s">Darrel</h2>
<img src="darrel.jpeg" alt="Avatar" class="avatar">

  </div>
  <div class="main">
    <div class="row1">
<H2>BAGGAGE  CLAIM</H2>
<?php

$q="select * from bagclaim where claimno='$claimno';";
$result = mysqli_query($con,$q);
echo "<table class='sample'  cellpadding='20' cellspacing='10'>";

$row = mysqli_fetch_array($result);

  echo "<tr>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Insurance Type</th>";
  echo "<td style='background-color: #ccc;'>" . $row['itype'] . "</td>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Destination</th>";
  echo "<td style='background-color: #ccc;'>" . $row['dest'] . "</td>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Date of Loss</th>";
  echo "<td style='background-color: #ccc;'>" . $row['lossdate'] . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Claim Number</th>";
  echo "<td style='background-color: #ccc;'>" . $row['claimno'] . "</td>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Description</th>";
  echo "<td style='background-color: #ccc;'>" . $row['descrip'] . "</td>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Time</th>";
  echo "<td style='background-color: #ccc;'>" . $row['time'] . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Passport Number</th>";
  echo "<td style='background-color: #ccc;'>" . $row['passno'] . "</td>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Lost Worth</th>";
  echo "<td style='background-color: #ccc;'>" . $row['lostw'] . "</td>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Name of Carrier</th>";
  echo "<td style='background-color: #ccc;'>" . $row['losscarr'] . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Name</th>";
  echo "<td style='background-color: #ccc;'>" . $row['name'] . "</td>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Replacement Worth</th>";
  echo "<td style='background-color: #ccc;'>" . $row['replacew'] . "</td>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Was the Carrier Notified?</th>";
  echo "<td style='background-color: #ccc;'>" . $row['noticarr'] . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Phone Number</th>";
  echo "<td style='background-color: #ccc;'>" . $row['phone'] . "</td>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Place</th>";
  echo "<td style='background-color: #ccc;'>" . $row['place'] . "</td>";
  echo "<th style='background-color: #3399ff;
  color: white;'>Was the Police Notified?</th>";
  echo "<td style='background-color: #ccc;'>" . $row['police'] . "</td>";
  echo "</tr>";


echo "</table>";
?>
<br>
   <form method="POST">
<button name="submit" style='background-color:#4CAF50;color: white;display: block; border-radius: 3px; padding: 12px;
  margin:  0 auto;
  border: none;
  width: 10%;'>APPROVE</button>
</form>
</div>
</div>
</div>

<div class="footer">
  <p><i class="fa fa-facebook" aria-hidden="true" style="color:#3b5999;"> RAD</i>-----<i class="fa fa-instagram" aria-hidden="true" style="color:#e4405f;"> @RAD</i> <p>
<p><i class="fa fa-font-awesome" aria-hidden="true"> RAD Pvt Ltd.</i></p>
</div>

<script type="text/javascript">
 $(document).ready(function(){ 
$("#user").click(function(){
$.post('fetchuser.php', { users : "" }, function(data)
{
$('#no').text("The Number of Users in the System are:"+data);
} );
} );

$("#cla").click(function(){
$.post('fetchapp.php', { users : "" }, function(data)
{
$('#no1').text("The Approved Claims in the System are:"+data);
} );
} );

$("#pend").click(function(){
$.post('fetchpend.php', { users : "" }, function(data)
{
$('#no2').html("The Pending Claims in the System are:<br>"+data);
} );
} );

});

</script>

</body>
</html>