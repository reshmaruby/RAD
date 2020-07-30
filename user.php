<html>
<?php
session_start();

?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" href="https://www.w3schools.com/w3css/4/w3.css">
<title>USER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background:#92bde7;
  color:#485e74;
}
.header {
  padding: 10px;
  text-align: center; 
   background:#55ACEE;
  color: white;
}
.header h1 {
  font-size: 40px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
}
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}
.navbar a.right {
  float: right;
  background-color:red;
}
.navbar a:hover {
  background-color: #ddd;
  color: black;
}
.navbar input[type=text] {
  padding: 6px;
  border: none;
  margin-top: 8px;
margin-left: 850px;
  font-size: 17px;
  position: absolute;
}
.sec{
  padding: 22px;
  display: table;
  position: relative;
  margin: 1.3% auto;
  left:150px;
}
.footer {
  margin: 0% auto;
  bottom: 0%;
  padding: 2px;
  text-align: center;
  background: #ddd; 
}
.wrapper{
  width: 1000px;
  height: 500px;
  padding: 5px;
}
.single-price{
  width:33%;
  background: #262626;
  float: left;
  box-shadow: 1px 1px 20px rgba(0,0,0,0.5);
  text-align: center;
  transition: 0.9s;
}
.price{
  width: 150px;
  height: 150px;
  border-radius: 50%;
  border: 2px solid #0760a8;
  margin: 7% auto 0 auto;
  text-align: center;
}
.deals{
  margin-top: 8%;
}
.single-price h1{
  font-size: 18px;
  color: #fff;
  line-height: 3;
  text-transform: uppercase;
  padding: 5px;
}
.price h2{
  font-size: 38px;
  color:#fff;
  padding: 5px;
}
.deals h4{
  font-size: 14px;
  font-weight: normal;
  text-align: center;
  color: #fff;
  padding: 4px;
}
.single-price:hover{
  background: #0760a8;
  color: #fff;
  box-shadow: 0 0 15px rgba(0,0,0,1);
  transform: scale(1.1);
  z-index: 1;
  border-radius: 25px;
}
.single-price:hover .price{
  border-color: #fff;
}
.single-price a{
  text-decoration: none;
  background: #0760a8;
  color: #fff;
  padding: 10px 60px;
  display: inline-block;
  margin: 10% auto;
  text-transform: uppercase;
  border: none;
  width: 85%;
  padding: 10px 30px;
  cursor: pointer;
  display: block;
  outline: none;
  border-radius: 30px;
  font-weight: bold;
}
.single-price:hover a{
  background: #262626;
  color: #fff;
}
</style>
<body>
  <div class="header">
  <h1>Welcome USER</h1>
</div>

<div class="navbar">
  <a href="#">Home</a>

  <a href="login.php" class="right">Logout</a>
</div>
<div class="sec">
<div class="wrapper">
        <div class="single-price">
           <div class="price">
           <h2><br>BUY</h2>
       </div>
       <div class="deals">
           <hr>
           <h4><br>Buy Insurance<br></h4><hr>
           <h4><br>Affordable rates<br></h4><hr>
           <h4><br>100% coverage<br></h4><hr>
       </div>
             <a href="insurance.html">BUY</a> <br><br><br><br>      
           </div>
       <div class="single-price">
           <div class="price">
           <h2><br>CLAIM</h2>
       </div>
       <div class="deals">
            <hr>
           <h4><br>Claim<br></h4><hr>
           <h4><br>Baggage loss<br></h4><hr>
           <h4><br>& Medical<br></h4><hr>
         </div>
           <a href="u2med.php">Medical</a>
           <a href="u2bag.php">Baggage</a>
              </div>     
</div>
</div>
<div class="footer">
  <p><i class="fa fa-facebook" aria-hidden="true" style="color:#3b5999;"> RAD</i>-----<i class="fa fa-instagram" aria-hidden="true" style="color:#e4405f;"> @RAD</i> </p>
<p><i class="fa fa-font-awesome" aria-hidden="true"> RAD Pvt Ltd.</i></p>
</div>
<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
</body>
</html>