<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Staff</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="assets/styles/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/scripts/jquery.js"></script>

</head>
<script type="text/javascript" src="assets/scripts/js/bootstrap.min.js"></script>
<body>
	<div class="jumbotron"  id="dero">
		<center> <h2>Brick House Hospital Admin</h2>

			<h3>Payment Portal</h3></center>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="admin.php" class="list-group-item ">
						Home
					</a>
					<a href="patients-detials.php" class="list-group-item">
						Patient	Details					
					</a>
					<a href="add_patient.php" class="list-group-item">
						Add Patient						
					</a>
					<a href="payment.php" class="list-group-item active" id="listactive">
						Payment						
					</a>
				</div>

			<hr>
			<div class="list-group">
					<a href="" class="list-group-item active" id="listactive">
						Staff List
					</a>
					<a href="" class="list-group-item">
						Staff	Details					
					</a>
					<a href="" class="list-group-item">
						Add Staff						
					</a>
					<a href="" class="list-group-item">
						Remove Staff						
					</a>
				
				</div>
			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-body" id="cardbody">
						
					<div class="card-body" id="cardbody">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  id="btns">Pay Cash</button>

						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cardModal"  id="btns">Pay with Debit/Credit Card</button>
						<center>

							<!--- Pay Cash modal--->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Pay Cash</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <form action="payment.php" class="form-group" method="post">
							<input type="text" class="form-control" placeholder="First Name" name="FN" required>
							<input type="text" class="form-control" placeholder="Last Name" name="LN" required>
							<input type="text" class="form-control" placeholder="Phone Number" name="PHN" required>
							<input type="text" class="form-control" placeholder="Address" name="addr" required>
							
							
						

				
					      </div>
					      <div class="modal-footer">
					      	<center>
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        
							<input type="submit" value="Confirm Payment" class="btn btn-primary" name="pay"></center>
						</form>
					      </div>
					    </div>
					  </div>
					</div>
					<!--- Pay with Card modal--->
					<div class="modal fade" id="cardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Pay With Card</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <form action="payment.php" class="form-group" method="post">

							<div class="form-group owner">
                        
                        <input type="text" class="form-control" id="owner" placeholder="Name on Card" name="name">

                        <input type="text" class="form-control" id="owner" placeholder="Address" name="address">
                    </div>
                    <div class="form-group CVV">
                      
                        <input type="text" class="form-control" id="cvv" placeholder="CCV" onkeypress='validate(event)' name="ccv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        
                        <input type="text" class="form-control" id="cardNumber" placeholder="Card Number" onkeypress='validate(event)' name="cardNumber">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select name="month" class="form-control" >
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select name="year" class="form-control">
                            
                            <option value="18"> 2018</option>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                            <option value="22"> 2022</option>
                            <option value="23"> 2023</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="images/visa.jpg" id="visa">
                        <img src="images/mastercard.jpg" id="mastercard">
                        <img src="images/verve.png" id="verve" width="70" height="40">
                    </div>
						
					      </div>
					      <div class="modal-footer">
					      	<center>
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        
							<input type="submit" value="Confirm Payment" class="btn btn-primary" name="pay"></center>
						</form>
					      </div>
					    </div>
					  </div>
					</div>

						
					</div>
				</div>
			</div>
			<div class="col-md-1">
				
			</div>
		</div>
	</div>

<?php 



 ?>
 </body>
</html>
<style>
	#dero{
	background: url('images/brain.jpg');
	background-size: cover;
	height: 300px;


	
}

#btns{
	height: 200px;
	width: 300px;
	font-size: 20px;
	padding-top: px;
	margin-bottom: 20px;
	margin-left: 20px;
}
#listactive{
	
}
cardbody{
	background: darkblue;
	border-color: darkblue;
	color: white;
}
input[type=text], select{
	margin-bottom: 10px;
}




.creditCardForm {
    max-width: 700px;
    background-color: #fff;
    margin: 100px auto;
    overflow: hidden;
    padding: 25px;
    color: #4c4e56;
}

.creditCardForm label {
    width: 100%;
    margin-bottom: 10px;
}

.creditCardForm .heading h1 {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    color: #4c4e56;
}

.creditCardForm .payment {
    float: left;
    font-size: 18px;
    padding: 10px 25px;
    margin-top: 20px;
    position: relative;
}

.creditCardForm .payment .form-group {
    float: left;
    margin-bottom: 15px;
}

.creditCardForm .payment .form-control {
    line-height: 40px;
    height: auto;
    padding: 0 16px;
}

.creditCardForm .owner {
    width: 63%;
    margin-right: 10px;
}

.creditCardForm .CVV {
    width: 35%;
}

.creditCardForm #card-number-field {
    width: 100%;
}

.creditCardForm #expiration-date {
    width: 49%;
}

.creditCardForm #credit_cards {
    width: 50%;
    margin-top: 25px;
    text-align: right;
}

.creditCardForm #pay-now {
    width: 100%;
    margin-top: 25px;
}

.creditCardForm .payment .btn {
    width: 100%;
    margin-top: 3px;
    font-size: 24px;
    background-color: #2ec4a5;
    color: white;
}

.creditCardForm .payment select {
    padding: 10px;
    margin-right: 15px;
}

.transparent {
    opacity: 0.2;
}

@media(max-width: 650px) {
    .creditCardForm .owner,
    .creditCardForm .CVV,
    .creditCardForm #expiration-date,
    .creditCardForm #credit_cards {
        width: 100%;
    }
    .creditCardForm #credit_cards {
        text-align: left;
    }
}


/*  Examples Section */

.examples {
	max-width: 700px;
	background-color: #fff;
	margin: 0 auto 75px;
	padding: 30px 50px;
	color: #4c4e56;
}

.examples-note{
    text-align: center;
    font-size: 14px;
    max-width: 370px;
    margin: 0 auto 40px;
    line-height: 1.7;
    color: #7a7a7a;
}

.examples table {
    margin: 5px 0 0 0;
    font-size: 14px;
}

</style>
<script>
	function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
    <script src="scripts/jquery.payform.min.js" charset="utf-8"></script>
    <script src="scripts/script.js"></script>