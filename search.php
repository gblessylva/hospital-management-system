<?php
	include('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patient Details</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="assets/styles/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/scripts/jquery.js"></script>

</head>
<script type="text/javascript" src="assets/scripts/js/bootstrap.min.js"></script>
<body>
	<div class="jumbotron"  id="dero">
		<center> <h2>Brick House Hospital Admin</h2>
			<h3>Patient Details</h3></center>
	</div>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-2">
				<div class="list-group">
					<a href="admin.php" class="list-group-item ">
						Home
					</a>
					<a href="" class="list-group-item active" id="listactive">
						Patient	Details					
					</a>
					<a href="admin.php" class="list-group-item">
						Add Patient						
					</a>
					<a href="" class="list-group-item">
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
					<a href="add_patient.php" class="list-group-item">
						Add Staff						
					</a>
					<a href="" class="list-group-item">
						Remove Staff						
					</a>
				</div>
			</div>
			<div class="col-md-10" >
				
				<form action="search.php" class="form-group" method="post">
				<div class="row">
					<div class="col-md-10">
					<input type="text" class="form-control" placeholder="Search for Patient using Doctor's name, Patient's Name or Email" name="searchhere">
					</div>
					<div class="col-md-2">
					<input type="submit" name="patient-search" class="btn btn-primary" value="Search"></div>
				</div>
			</form>
			<div class='card'>
	<div class='card-body' id='cardbody'>

                    <table class='table table-hover' >
                    	<thead>			
						
						
								<?php 									
								if (isset($_POST['patient-search'])) 
{						
										$NAME=$_POST['searchhere'];
										

										$query = "SELECT * from appointments where
										 FN LIKE '%{$NAME}%'";
										$display=mysqli_query($con, $query);



									while 
										($rows=mysqli_fetch_array($display)) {

		echo "
                            <tr>
                                <td>$rows[FN]</td>
                                <td>$rows[LN]</td>
                                <td>
								<a href='edit-patient.php?update={$rows['id']}' class='btn btn-primary'>
									Edit
								</a> 
								<a href='patients-detials.php?del_id=$rows[id];' class='btn btn-danger'>
									Delete
								</a>
					
					</td>
                                


                            <tr/>  
                          </tbody>  
            " ; 
           
      
            
            
        }



    }

 
?>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-1">
				
			</div>
		</div>
	</div>






 </body>
</html>
<style>
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
	font-size: 16px;
}





</style>