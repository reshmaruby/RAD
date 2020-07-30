<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Medical Emergency Claim</title>
  <link rel="stylesheet" href="style4.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <h1 class="brand"><span>Claim</span> Here</h1>
    <div class="wrapper animated bounceInLeft">
      <div class="company-info">
        <h2 align="center" style="color: #E5E4E2; text-shadow: 2px 2px 5px black;">Medical Emergency Claim</h2><hr>
		<br>
		<i class="fa fa-heartbeat" style="font-size:200px;color:#E5E4E2;"></i>
	  </div>
      <div class="contact">
        <h3>Travel Details</h3>
        <form id="med" action="MedDetails.php" method="post" onsubmit="return validateForm()">
		  <p>
            <label>Insurance Type</label>
            <select name="insotype" style="width: 100%; background: white;padding:1em;border:1px solid #c9e6ff;" required>
              <option hidden disabled selected value> Select an option </option>
            <option value="platinum">Platinum</option>
            <option value="gold">Gold</option>
            <option value="silver">Silver</option>
          </select>
          </p>
		  <p>
            <label>Claim No.</label>
            <input type="text" name="claimno" id="clai" required>
          </p>
		  <p>
            <label>Passport No.</label>
            <input type="text" name="passno" id="pas" required>
          </p>
		  <p>
            <label><i class="fa fa-plane" aria-hidden="true"></i> Trip Destination</label>
            <input type="text" name="tdest" required>
          </p>
		  
		  <h3>Details of Insured</h3><br>
          <p>
		    <label><i class="fa fa-user" aria-hidden="true"></i> Name</label>
            <input type="text" name="name" id="myname" required>
          </p>
          <p>
            <label><i class="fa fa-user" aria-hidden="true"></i> Claimant's Name</label>
            <input type="text" name="clnm" id="cname" required>
          </p>
          <p>
            <label><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</label>
            <input type="email" name="email" required>
          </p>
          <p>
            <label><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
            <input type="text" name="phone" id="phoneno" required>
          </p>
          
		  
		  
		  <h3>Medical Emergency Details</h3><br>
	      <p>
            <label><i class="fa fa-heartbeat" aria-hidden="true"></i> Medical Condition Description</label>
            <input type="text" name="description" required>
          </p>
		    <p>
            <label><i class="fa fa-map-marker" aria-hidden="true"></i> Place of Accident</label>
            <input type="text" name="place" required>
          </p>
		  <p>
            <label><i class="fa fa-calendar" aria-hidden="true"></i> Date of Accident</label>
            <input type="Date" name="blossdate" required>
          </p>
		  <p>
            <label><i class="fa fa-clock-o" aria-hidden="true"></i> Time</label>
            <input type="time" name="time" required>
          </p>
		   <p>
            <label><i class="fa fa-hospital-o" aria-hidden="true"></i> Hospital</label>
            <input type="text" name="hosp" required>
          </p>
		  <p>
            <label><i class="fa fa-money" aria-hidden="true"></i> Medical Expenses (in <i class="fa fa-inr" aria-hidden="true"></i>)</label>
            <input type="Number" name="rc" required>
          </p>
		 
		  
		 
		  <p class="full">
            <label>Did the insured have any injury or illness prior to the accident or to the insured's present condition? If yes, please describe.</label>
            <input type="text" name="prior">
          </p>
		   <p class="full">
            <label><i class="fa fa-user-md" aria-hidden="true"></i> Details of the physician.</label>
			<input type="text" name="physician">
          </p>
		  <p class="full">
            <label>List the procedures if any surgeries were performed.</label>
			<input type="text" name="list">
          </p>
		  <p class="full">
		    <button name="dp">Submit</button>
          </p>
        </form>
      </div>
    </div>
  </div>

<script type="text/javascript">
    
 function validateForm(){
   var y = document.forms["med"]["phoneno"].value;
    var x = document.forms["med"]["clai"].value;
    var z = document.forms["med"]["pas"].value;
    var a = document.forms["med"]["cname"].value;
    var b = document.forms["med"]["myname"].value;

 document.getElementById("phoneno").style.borderColor = '#c9e6ff';
 document.getElementById("clai").style.borderColor = '#c9e6ff';  
 document.getElementById("pas").style.borderColor = '#c9e6ff'; 
 document.getElementById("cname").style.borderColor = '#c9e6ff';

    
      if (isNaN(x) || x.length < 8 || x.length > 8) {
        document.getElementById("clai").style.borderColor = 'red';
      return false;
      }
      
      if (isNaN(z) || z.length < 10 || z.length > 10) {
        document.getElementById("pas").style.borderColor = 'red';
      return false;
      }

      if (b==a) {
        document.getElementById("cname").style.borderColor = 'red';
      return false;
      }
      if (isNaN(y) || y.length < 10 || y.length > 10) {
        document.getElementById("phoneno").style.borderColor = 'red';
      return false;
      }
      
 }
</script>


</body>
</html>