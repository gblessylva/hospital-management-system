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
					<a href="patients-detials.php" class="list-group-item active" id="listactive">
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
					<input type="text" class="form-control" id="search_text" placeholder="Search for Patient using HSM number, Name or Email" name="search">
					</div>
					<div class="col-md-2">
					<input type="submit" name="patient-search" class="btn btn-primary" value="Search"></div>
				</div>
			</form>
			<div class='card' id="result">
				

			</div>
</html>

<script>
	$(document).ready(function () {
		$('search_text').keyup(function(){
			var txt= $(this).val();
				if (!txt='') 
				{
					
									
				}//end of if statement

			

			else {
				$('result').html('');
					$.ajax({
								url:'fetch.php',
								method: 'post',
								data:{search:text},
								dataType:'text',
								succes:function(data)
								{
									$('result').html(data);
								}
							});
			}//end of else statement
				
		});
	});

</script>
<?php 
$con=mysqli_connect("localhost", "root", "", "hmsdb");
$output='';
$query= "select * from appointments where FN like '%' .POST ['search'].'%' ";
$result = mysqli_query($con, $query);
if (mysqli_num_rows ($result) > 0 ) {
	$output .="
			<div class='card'>
	<div class='card-body' id='cardbody'>

                    <table class='table table-hover' >
                    	<tr>
                    		<th> BHID</th>			
							<th> First Name</th>
							<th> Last Name</th>
							<th> Addres </th>
							<th> Edit</th>
							<th> Delete</th>

						</tr>
								
						
	";
	while ($row = mysqli_fetch_array($result)) {
		$output.=
		"
                            <tr>
                            	<td>$rows[FN]</td>
                                <td>$rows[LN]</td>
                                <td>$rows[address]</td>
                             	<td>
								<a href='edit-patient.php?update={$rows['id']}' class='btn btn-primary'>
									Edit 
								</a> 
								<a href='patients-detials.php?del_id=$rows[id];' class='btn btn-danger'>
									Delete
								</a>



					
					</td>
                                


                            <tr/>  
                          </tbody> </table>
					</div>
				</div>
			</div> 
            " ;    
	}
	echo "$output";
}
else {
	echo "No Result Found";
}
 ?>
