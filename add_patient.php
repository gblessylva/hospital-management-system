<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<link rel="stylesheet" href="assest/styles/styles.css">
	<link rel="stylesheet" href="assets/styles/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/scripts/jquery.js"></script>

</head>
<script type="text/javascript" src="scripts/js/bootstrap.min.js"></script>
<body>
	<div class="jumbotron"  id="dero">
		<center> <h2>Brick House Hospital Admin</h2>

			<h3>Add New Patient</h3></center>
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
					<a href="add_patient.php" class="list-group-item active" id="listactive">
						Add Patient						
					</a>
					<a href="payment.php" class="list-group-item">
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
			<div class="col-md-6">
				<div class="card">
					<div class="card-body" id="cardbody">
						<form action="function.php" class="form-group" method="post">
							<input type="text" class="form-control" placeholder="First Name" name="FN" required>
							<input type="text" class="form-control" placeholder="Last Name" name="LN" required>
							<input type="email" class="form-control" placeholder="Email Address" name="EM" required>
							<input type="tel" class="form-control" placeholder="Phone Number" name="PHN" required maxlength="11">
							<input type="text" class="form-control" placeholder="Address" name="addr" required>
							<select name="docapp" id="" class="form-control">
								<option value="Dr Strange">Dr Strange</option>
								<option value="Dr Obi"> Dr Obi</option>
								<option value="Dr Luke ">Dr Luke</option>
								<option value="Dr Lawson ">Dr Lawson</option>
							</select>
							<select name="time" id="" class="form-control">
								<option value="4pm to 10pm">4pm to 10pm</option>
								<option value="10pm to 2AM">10PM to 6AM</option>
								<option value="6AM to 10AM ">6AM to 10AM</option>
								<option value="10AM to 4PM">10AM to 4PM</option>
							</select>

							<input type="submit" value="Make Appointment" class="btn btn-primary" name="pat-sub">

						</form>
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
</style>