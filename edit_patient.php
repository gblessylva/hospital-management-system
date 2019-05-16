<!DOCTYPE html>
<html>
<head>
<title> Update</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="container ">
			<div class="jumbotron">
				<h2>Update Data Using PHP</h2>
			</div>
			<div class="divB"> 
				<div >
						
							<?php
							$connection = mysql_connect("localhost", "root", "");
							$db = mysql_select_db("learnphp", $connection);
								if (isset($_GET['submit'])) {
								$id = $_GET['did'];
								$name = $_GET['dname'];
								$email = $_GET['demail'];
								$mobile = $_GET['dmobile'];
								$pass = $_GET['dpass'];
								$query = mysql_query("update users set
								name='$name', email='$email', contact='$mobile', password='$pass'
								 where id='$id'", $connection);
								}
									$query = mysql_query("select * from users", $connection);

									?>
				</div>
		<?php
			if (isset($_GET['update'])) {
				$update = $_GET['update'];
					$query1 = mysql_query("select * from users where id=$update", $connection);
					while ($row1 = mysql_fetch_array($query1)) {
						echo "<form class='form-group' method='get'>";
						echo "<h2>Update Form</h2>";
						echo "<hr/>";
						echo"<input class='form-control' type='hidden' name='did' value='{$row1['id']}' />";
						echo "<br />";
						echo "<label>" . "Name:" . "</label>" . "<br />";
						echo"<input class='form-control' type='text' name='dname' value='{$row1['name']}' />";
						echo "<br />";
						echo "<label>" . "Email:" . "</label>" . "<br />";
						echo"<input class='form-control' type='text' name='demail' value='{$row1['email']}' />";
						echo "<br />";
						echo "<label>" . "Address:" . "</label>" . "<br />";
						echo"<input class='form-control' type='text' name='dmobile' value='{$row1['contact']}' />";
						echo "<br />";
						echo "<label>" . "Password:" . "</label>" . "<br />";

						echo"<input class='form-control' type='text' name='dpass' value='{$row1['password']}' />";
						echo "<br />";
						echo "<input class='btn btn-success' type='submit' name='submit' value='Update' />";
						echo "</form>";
						}
						}
					if (isset($_GET['submit'])) {
						if ($query) {
							
							echo "<center >
								<div class='col-md-3'>
									<div class='alert alert-primary' role='alert'>
									  
									     <p>Profile Succesfully Updated.</p>
									    <a href='index.php' class='btn btn-primary'>Back</a>
									    </div>
								</div></center>";
						}

						else {
							echo "<center >
								<div class='col-md-3'>
									<div class='alert alert-primary' role='alert'>
									  
									     <p>Sorry Something went wrong </p>
									    <a href='index.php' class='btn btn-primary'>Back</a>
									    </div>
								</div></center>";
						}
					}
					?>

				</div>	
		</div>
	</div><?php
mysql_close($connection);
?>
</body>
</html>




