 <!DOCTYPE html>
<html lang="en">
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