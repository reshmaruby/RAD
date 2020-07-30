<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Baggage Claim</title>
  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <h1 class="brand"><span>Claim</span> Here</h1>
    <div class="wrapper animated bounceInLeft">
      <div class="company-info">
        <h2 align="center" style="color: #E5E4E2; text-shadow: 2px 2px 5px black;">Baggage Loss</h2><hr>
		<br>
		<img src="bag.jpg" width=150 height=150 style="align-self: middle;">
      </div>
      <div class="contact">
        <h3>Travel Details</h3>
        <form id="bag" action="BagDetails.php" method="post" onsubmit="return validateForm()">
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
            <label>Claim No</label>
            <input type="text" name="claimno" id="clai" required>
          </p>
		  <p>
            <label>Passport</label>
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
            <input type="text" name="clnm" id="cname"  required>
          </p>
          <p>
            <label><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</label>
            <input type="email" name="email" required>
          </p>
          <p>
            <label><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
            <input type="text" name="phone" id="phoneno" required>
          </p>
          
		  
		  <h3>Baggage Loss Details</h3><br>
	      <p>
            <label><i class="fa fa-shopping-bag" aria-hidden="true"></i> Description of the item</label>
            <input type="text" name="description" required>
          </p>
		   <p>
            <label><i class="fa fa-money" aria-hidden="true"></i> Lost Item Worth</label>
            <input type="Number" name="liw" required>
          </p>
		  <p>
            <label><i class="fa fa-money" aria-hidden="true"></i> Replacement Cost/Estimated</label>
            <input type="Number" name="rc" required>
          </p>
		  <p>
            <label><i class="fa fa-map-marker" aria-hidden="true"></i> Place</label>
            <input type="text" name="place" required>
          </p>
		  <p>
            <label><i class="fa fa-calendar" aria-hidden="true"></i> Date of Loss</label>
            <input type="date" name="blossdate" required>
          </p>
		  <p>
            <label><i class="fa fa-clock-o" aria-hidden="true"></i> Time</label>
            <input type="time" name="time" required>
          </p>
		  
		 
		  <p class="full">
            <label>Was loss occurred while insured property in the custody of a commom carrier? If yes,then Name of the Carrier.</label>
            <input type="text" name="loss">
          </p>
		  <p>
		  <label>Was the carrier notified at the time of loss or damage?</label>
		  <label>Yes<input type="radio" name="radio" value="Yes" required>
		  </label>
		  <label>No<input type="radio" name="radio" value="No" required>
		  </label>
		  </p>
		  <p>
		   <label>Was loss reported to police or other authorities?</label>
		  <label>Yes<input type="radio" name="radio1" value="Yes" required>
		  </label>
		  <label>No<input type="radio" name="radio1" value="No" required>
		  </label>
		  </p>
		  <p class="full">
		    <button type="submit" name="pd">Submit</button>
          </p>
        </form>
      </div>
    </div>
  </div>

<script type="text/javascript">
    
 function validateForm(){
   var y = document.forms["bag"]["phoneno"].value;
    var x = document.forms["bag"]["clai"].value;
    var z = document.forms["bag"]["pas"].value;
    var a = document.forms["bag"]["cname"].value;
    var b = document.forms["bag"]["myname"].value;

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