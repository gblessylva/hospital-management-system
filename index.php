<?php 
	include 'function.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HMS Project</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="assets/styles/css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/jquery.js"></script>

</head>
<script type="text/javascript" src="scripts/js/bootstrap.min.js"></script>
<body id="loginbody"> 
	<div class="container" id="form-wrapper">
		<div class="card">
			<center>
			<h3>Staff Log </h3></center>
			<img src="images/analysis.jpg" alt="" height="200px">
			<div class="card-body">
				<form action="function.php" class="form-group" method="post">
					
					<input type="text" placeholder="Your Username" name="username" class="form-control">
					<input type="password" placeholder="Your password" name="password" class="form-control"> <br>
					<div class="form-group">
						<label for="type"><span>Account Type</span></label>
						<select name="type" id="" class="form-control">
							<option value="doctor" class="form-control">Doctor</option>
							<option value="doctor" class="form-control">Admin</option>
							<option value="doctor" class="form-control">Nurse</option>
							<option value="doctor" class="form-control">Account</option>
						</select>
					</div>
					<center>
					<input type="submit" name="submit" class="btn btn-primary" id="loginbtn"></center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<script>
	
</script>