<html>
<?php
$lerrs="";
$lerr="";
$lerr1="";
$lerrs1="";

 include 'conn.php';
if (isset($_POST['loginp'])){
	$a=$_POST["usernamel"];
	$b=$_POST["passl"];
	if(($a=="ayush777" && $b=="ayush777")||($a=="reshma777" && $b=="reshma777")||($a=="darrel777" && $b=="darrel777")){
		header('Location:admin.html');
	}
	else{
		$q="select pass from signup where userid='$a';";
		$result = mysqli_query($con,$q);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
	        $check=$row["pass"];
	        	if($check==$b){
	        		session_start();
	        		$_SESSION['user']=$a;
	        		$lerr=$lerrs=$lerr1=$lerrs1="";
	        		header('Location:user.php');
	        		
	       		 }
	       		 else{
	       		 	$lerr="Invalid Password!";
	       		 }
	    	}
		}
		else {
			$lerr="Invalid UserID!";
		}
	}
}

elseif(isset($_POST['signup'])){
	$a=$_POST["username"];
	$b=$_POST["email"];
	$c=$_POST["pass"];
	$q="select email from signup where userid='$a';";
	$result = mysqli_query($con,$q);
	if (mysqli_num_rows($result) > 0) {
    $lerr="Registration Failed !";
    $lerr1="Username taken !";
    }
	else {
	$lerrs="Registration Successfull !";
	$lerrs1="Login Below !";
	$q="insert into signup(userid,email,pass) values('$a','$b','$c');";
	mysqli_query($con,$q) or die(mysqli_error);


	}
}
?>

<head>
<title>Login & Registration </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link rel="stylesheet" href="log.css">

</head>
<body>
	<div class="hero">
	<div class="form-box">
		<div class="button-box">
			<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="reg()">Register</button>
		</div>
		<form id="log" class="input-group" method="post" action="#" onsubmit="">
			<p id="le" class="error"><?php echo ($lerr."<br>".$lerr1);?></p><p id="le" class="success"><?php echo ($lerrs."<br>".$lerrs1);?></p>
			<input type="text" class="input-field" name="usernamel" placeholder="User Id" required>
			<input type="Password" class="input-field" name="passl" placeholder="Password" required>
			<input type="checkbox" class="c-box"><span>Remember Password</span>
			<button type="submit" class="submit-btn" name="loginp">Log In</button>	
		</form>

		<form id="register" class="input-group" method="post" action="#" onsubmit="return validateForm()">
			<p id="seu" class="error"></p><p id="sep" class="error"></p>
			<input type="text" class="input-field" name="username" placeholder="User Id" id="usercheck">
			<input type="Email" class="input-field" name="email" placeholder="Email Id" required>
			<input type="Password" class="input-field" name="pass" placeholder="Password" required>
			<input type="checkbox" class="c-box-reg" required><span>I agree to the terms and conditions</span>
			<button type="submit" class="submit-btn" name="signup">Register</button><br>
		</form>
	</div></div>
	<script>

			$(document).ready(function(){
		    $("#usercheck").blur(function(){
		    var txt = $("#usercheck").val();
		    $.post("checkusername.php", {url: txt}, function(result){
		     $("#seu").text(result);
		    });
		  });
		});

		var x=document.getElementById("log");
		var y=document.getElementById("register");
		var z=document.getElementById("btn");

		function reg() {
			x.style.left="-400px";
			y.style.left="50px";
			z.style.left="110px";
			document.getElementById("le").innerHTML = "";
		}

		function login() {
			x.style.left="50px";
			y.style.left="450px";
			z.style.left="0px";
		}

		function validateForm() {
		  var x = document.forms["register"]["username"].value;
		  var y = document.forms["register"]["pass"].value;
		
		  if (x.length < 8) {
			document.getElementById("seu").innerHTML = "Username should be atleast 8 characters !";
			return false;
		  }
		  if (y.length < 8) {
			document.getElementById("sep").innerHTML = "Password should be minimum 8 characters !";
			return false;
		  }
		  if (!(y.match(/[0-9]/g))) {
			document.getElementById("sep").innerHTML = "Password should contain a Number !";
			return false;
		  }
		  
		 
		  
		}
</script>
</body>
</html>