<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New Staff</title>
	<link rel="stylesheet" href="assets/styles/styles.css">
	<link rel="stylesheet" href="assets/styles/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/scripts/jquery.js"></script>

</head>
<script type="text/javascript" src="assets/scripts/js/bootstrap.min.js"></script>
<body>
	<div class="jumbotron"  id="dero">
		<center> <h2>Brick House Hospital Admin</h2>

			<h3>Add New Staff</h3></center>
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
					<a href="add_staff.php" class="list-group-item">
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
							<input type="email" class="form-control" placeholder="Email Address" name="EM" required><br>
							<input type="tel" class="form-control" placeholder="Phone Number" name="PHN" required maxlength="11"><br>
							<input type="text" class="form-control" placeholder="Address" name="addr" required>
							
							

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