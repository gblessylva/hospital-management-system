<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New User</title>
	<link rel="stylesheet" href="aasets/styles/styles.css">
	<link rel="stylesheet" href="assets/styles/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/scripts/jquery.js"></script>

</head>
<script type="text/javascript" src="aasets/scripts/js/bootstrap.min.js"></script>
<body>
	<div class="jumbotron"  id="dero">
		<center> <h2>Brick House Hospital Admin</h2>

			<h3>Add New User Dashboard</h3></center>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="admin.php" class="list-group-item active" id="listactive">
						Home
					</a>
					<a href="patients-detials.php" class="list-group-item">
						Patient	Details					
					</a>
					<a href="add_patient.php" class="list-group-item">
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
					<a href="add_staff.php" class="list-group-item">
						Staff	Details					
					</a>
					<a href="" class="list-group-item">
						Remove Staff						
					</a>
					<a href="add_user.php" class="list-group-item">
						Add Staff						
					</a>
				</div>
			</div>
						<div class="col-md-6">
				<div class="card">
					<center>
					<form action="function.php" class="form-group" method="post">
					
							<input type="text" class="form-control" placeholder="Username" name="username" required>
							
							<input type="password" class="form-control" placeholder="Password" name="password" required><br>
							
							<select name="type" id="" class="form-control">
								<option value="nurse">Nurse</option>
								<option value="doctor">Doctor</option>
								<option value="account">Account</option>


							</select>
							

							<input type="submit" value="Add" class="btn btn-primary" name="add_user">

						</form>
					</div>
				</div>
			</div>

					</div>
				</center>

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

#btns{
	height: 200px;
	width:  250px;
	font-size: 30px;
	padding-top: 70px;
	margin-bottom: 20px;
	margin-left: 20px;
}
	#dero{
	background: url('images/brain.jpg');
	background-size: cover;
	height: 300px;

	
}
listactive{
	background: darkblue;
	border-color: darkblue;
}
cardbody{
	
	color: white;
}
input[type=text], select{
	margin-bottom: 10px;
}
</style>