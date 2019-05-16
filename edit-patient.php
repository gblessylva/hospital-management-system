<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Patient</title>
	<link rel="stylesheet" href="aasets/styles/styles.css">
	<link rel="stylesheet" href="assets/styles/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/scripts/jquery.js"></script>
</head>
<body>
	
	<div class="row">
		<div class="col-md-12 ">
			<div class="jumbotron" id="dero">
				<center> <h2>Brick House Hospital Admin</h2>
			<h3>Edit Patient</h3></center>
			</div>
			<div class="divB"> 
				<div >
					<?php
							$connection = mysqli_connect("localhost", "root", "", "hmsdb");
							
								if (isset($_GET['submit'])) {
								$id = $_GET['id'];
								$Fname = $_GET['FN'];
								$Lname = $_GET['LN'];
								$email = $_GET['EM'];
								$address = $_GET['address'];
								$mobile = $_GET['PHN'];
								$query = mysqli_query($connection, "update appointments set
								FN='$Fname', LN='$Lname', EM='$email', address='$address', PHN='$mobile'
								 where id='$id'");
								}
									$check = "SELECT * from appointments";
									$query = mysqli_query( $connection, $check);

									?>
				</div>
				<?php
			if (isset($_GET['update'])) {
				$update = $_GET['update'];
					$query1 = mysqli_query($connection, "select * from appointments where id=$update" );
					while ($row1 = mysqli_fetch_array($query1)) {
						echo "<form class='form-group col-md-5' method='get' id='center'>";
						echo "<h2>Update Form</h2>";
						echo "<hr/>";
						echo"<input class='form-control' type='hidden' name='id' value='{$row1['id']}'required='' />";
						echo "<br />";
						echo "<label>" . "Edit First Name:" . "</label>" . "<br />";
						echo"<input class='form-control' type='text' name='FN' value='{$row1['FN']}'required='' />";
						echo "<br />";
						echo "<label>" . "Edit Last Name:" . "</label>" . "<br />";
						echo"<input class='form-control' type='text' name='LN' value='{$row1['LN']}' required='' />";
						echo "<br />";
						echo "<label>" . "Edit Email:" . "</label>" . "<br />";
						echo"<input class='form-control' required= type='email' name='EM' value='{$row1['EM']}'required='' />";
						echo "<br />";
						echo "<label>" . "Edit Phone:" . "</label>" . "<br />";
						echo"<input class='form-control' type='text' name='PHN' value='{$row1['PHN']}'required='' maxlength='11'/>  ";
						echo "<br />";
						echo "<label>" . "Edit Address:" . "</label>" . "<br />";
						echo"<input class='form-control' type='text' name='address' value='{$row1['address']}' required='' />";
						echo "<br />";
		
						echo "<input class='btn btn-success' type='submit' name='submit' value='Update' id='updatebtn' />";
						echo "<a href='patients-detials.php' class='btn btn-secondary float-right' id='defaultbtn'>Cancel</a>";
						echo "</form>";
						}
						}
					if (isset($_GET['submit'])) {
						if ($query) {
							
							echo "<center >
								<div class='col-md-3'>
									<div class='alert alert-primary' role='alert'>
									  
									     <p>Profile Succesfully Updated.</p>
									    <a href='patients-detials.php' class='btn btn-primary'>Back</a>
									    </div>
								</div></center>";
						}

						else {
							echo "<center >
								<div class='col-md-3'>
									<div class='alert alert-primary' role='alert'>
									  
									     <p>Sorry Something went wrong </p>
									    <a href='patients-detials.php' class='btn btn-primary'>Back</a>
									    </div>
								</div></center>";
						}
					}
					?>

				</div>	
		</div>
	</div><?php
mysqli_close($connection);
?>
</body>
</html>
<style>
	#dero{
	background: url('images/brain.jpg');
	background-size: cover;
	height: 300px;
}
#dero h2, #dero h3{
	color: brown;
}
#center{
	margin: auto;
}

</style>
