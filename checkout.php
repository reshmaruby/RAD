<!DOCTYPE html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background:#92bde7;
     color:#485e74;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid black;
  border-radius: 3px;
}

input[type=text],[type=email] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<script src="checkout.js"></script>
</head>
<body>

<h2 style="color: black;">Payment</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="success1.php" method="post" id="f" onsubmit="return validateForm()">
      
        <div class="row">
          <div class="col-50">
            <h3>User Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Darrel N" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="dar@gmail.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="102 SV Road Borivali" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Mumbai" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Goa" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zi" placeholder="400006" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Darrel Noronha" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>

            <select name="expmonth" style="width: 100%; background: white;padding:12px;border: 1px solid #ccc; border-radius: 3px;" required>
              <option hidden disabled selected value> Select an option </option>
            <option value="january">January</option>
            <option value="february">February</option>
			<option value="march">March</option>
            <option value="april">April</option>
			<option value="may">May</option>
            <option value="june">June</option>
			<option value="july">July</option>
            <option value="august">August</option>
			<option value="september">September</option>
            <option value="october">October</option>
			<option value="november">November</option>
            <option value="december">December</option>
       
          </select>
            <div class="row">
              <div class="col-50">
              	<p>
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyea" placeholder="2020" required>
              </p></div>
              <div class="col-50">
                <p>
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cv" placeholder="352" required>
              </p>
            </div>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Do not save my details.
        </label>
        <button type="submit" value="Continue to checkout" class="btn">Continue to checkout</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>