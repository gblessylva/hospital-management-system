<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Write Report</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="assets/styles/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/scripts/jquery.js"></script>

</head>
<script type="text/javascript" src="assets/scripts/js/bootstrap.min.js"></script>
<body>
	<div class="jumbotron"  id="dero">
		<center> <h2>Brick House Hospital Admin</h2>

			<h3>Reports</h3></center>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="" class="list-group-item active" id="listactive">
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
						
			</form>
				<div class="card">

					<center>
					<div class="card-body" id="cardbody">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  id="btns">Birth Certificate</button>

						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deathModal"  id="btns">Death Certificate</button>
						

						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#labModal"  id="btns">Lab Report</button>

						<br>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewBirthModal"  id="btns">View <br>Birth Certificates</button>

						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewdeathModal"  id="btns">View <br>Death Certificates</button>
						

						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#labModal"  id="btns">View <br>Lab Reports</button>
							
							<!---Modal for Birth--->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Birth Cerificate</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <form method="post" class="form-group" action="reportfunction.php">
					          
					          <input type="text" name="PatName" class="form-control" placeholder="Baby's Name" >
					           <input type="text" name="FaName" class="form-control" placeholder="Father's Name" >
								<input type="text" name="MoName" class="form-control" placeholder="Mother's Name" >
								<input type="text" class="form-control" placeholder="Address" name="addr">
								<label for="dob">Date of Birth</label>
								<input type="date" class="form-control" name="dob">
								<label for="tob" class="form-control">Time of Birth</label>
								<input type="time" class="form-control" name="tob">
								<label for="delivered" class="form-control">Delivered By</label>
								<select name="delivered" id="" class="form-control" >
									<option value="Dr Strange">Dr Strange</option>
									<option value="Dr Obi"> Dr Obi</option>
									<option value="Dr Luke ">Dr Luke</option>
									<option value="Dr Lawson ">Dr Lawson</option>
								</select>
								<input type="text" name="weight" class="form-control" placeholder="Weight At Birth">
								<label for="NxtVisit" class="form-label">Date of Next Visit</label class="form-control">
								<input type="date" class="form-control" name="dnv">
								<input type="text" name="remark" placeholder="Remark" class="form-control">

								 <div class="modal-footer">
					        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <input type="submit" class="btn btn-primary" name="save_birth_report" value="Save Report">
					      </div>
					        </form>
					      </div>
					     
					    </div>
					  </div>
					</div>
					
			<!---Modal  to view Birth Cert--->
					


					<!---Modal for Death Cert--->
					<div class="modal fade" id="deathModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Death Certificate</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <form method="post" class="form-group" action="reportfunction.php">
					          
					          <input type="text" name="PatName" class="form-control" placeholder="Name of Patient" required="" >
					           <input type="text" name="PatLastName" class="form-control" placeholder="Last Name" required>
					           <input type="text" class="form-control" placeholder="Address" name="addr">
								<input type="text" name="cause" class="form-control" placeholder="Cause of Death" required>
								<label for="dod" >Date of Death</label>
								<input type="date" class="form-control" name="dod" required>
								<label for="tod">Time of Death</label>
								<input type="time" class="form-control" name="tod" required>
								<label for="called"  required>Called By</label>
								<select name="called" id="" class="form-control" >
									<option value="Dr Strange">Dr Strange</option>
									<option value="Dr Obi"> Dr Obi</option>
									<option value="Dr Luke ">Dr Luke</option>
									<option value="Dr Lawson ">Dr Lawson</option>
								</select>
								<label for="delivered" >Witnessed By</label>
								<input type="text" name="witness" class="form-control" placeholder="Write the Name of Nurse Present" >
								<input type="text" name="fam" class="form-control" placeholder="Name of family Member Present">
								<textarea name="remark" id="" class="form-control" placeholder="Remark"></textarea>
								<div class="modal-footer">
					        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        	<input type="submit" class="btn btn-primary" name="deathreport" value="Save Report">
					      		</div>
					        </form>
					      </div>
					      
					    </div>
					  </div>
					</div>
					<!---Modal for Lab Reports--->
					<div class="modal fade" id="labModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Lab Reports</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <form method="post" class="form-group" action="reportfunction.php">
					          
					          <input type="text" name="PatFName" class="form-control" placeholder="Patient's Frist Name" >
					           <input type="text" name="PatLName" class="form-control" placeholder="Patient's Last Name" >
								<input type="number" name="age" class="form-control" placeholder="Age">
								<input type="text" class="form-control" placeholder="Address" name="addr">
								<textarea name="samplename" class="form-control" placeholder="Samples Collected"></textarea>
								<label for="doC">Date of Collection</label>
								<input type="date" class="form-control" name="DoC" placeholder="Date of Collection">
								<label for="toC">Time of Collection</label>
								<input type="time" class="form-control" name="toC">
								<label for="DD">Date Due</label>
								<input type="date" class="form-control" name="DD" placeholder="Date of Collection">
								<label for="TD" class="form-control">Time Retrieved</label>
								<input type="time" class="form-control" name="TD">
								<label for="Collected" class="form-control">Collected By</label>
								<input type="text" name="collector" class="form-control" placeholder="Collected By">
								<textarea name="result" id="" cols="30" rows="10" class="form-control" placeholder="Result of sample."></textarea>
								<div class="modal-footer">
					       		 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        	<input type="submit" class="btn btn-primary" name="labreport"  value="Save Report">
					      </div>
					    </div>
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
	<div class="modal fade" id="viewBirthModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%; background: whitesmoke; ">
					  <div class="modal-dialog" role="document" style="width: 600px;" >
					    <div class="modal-content"  style="width: 700px;">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">View Birth Cerificates</h5> <br>
					       
					        
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
			<?php   echo " 		        
			<table class='table table-hover'>
                    			<thead>			
						";
						?>
								<?php
								$con=mysqli_connect("localhost", "root", "", "hmsdb");
								

						$query ="SELECT * FROM labreport";
						$result = mysqli_query($con, $query);

						echo "			
												<th>
													First Name
													</th>
													<th>
														Last Name
													</th>
													<th>
														Age
													</th>
													<th>
														Address
													</th>
													<th>
														Sample Collected
													</th>
													<th>
														Date Collected
													</th>
													<th>
														Received By
													</th>


												</thead>
					                        <tbody>
					                ";
					               
						while ($rows=mysqli_fetch_array($result)) {

							echo "
					                            <tr>
					                               
					                                <td>$rows[name]</td>
					                                <td>$rows[lastname]</td>
					                                <td>$rows[age]</td>
					                                <td>$rows[address]</td>
					                                <td>$rows[sample]</td>
					                                <td>$rows[DoC]</td>
					                                <td>$rows[received]</td>
					                                                                

					                            <tr/>  
					                          </tbody> 
					            " ;    
					           					

					            	echo "";
						}
								?>
						</table>

								 <div class="modal-footer">
					        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>

<div class="modal fade" id="viewdeathModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%; background: whitesmoke; ">
					  <div class="modal-dialog" role="document" style="width: 600px;" >
					    <div class="modal-content"  style="width: 700px;">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">View Birth Cerificates</h5> <br>
					       
					        
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
			<?php   echo " 		        
			<table class='table table-hover'>
                    			<thead>			
						";
						?>
								<?php
								$con=mysqli_connect("localhost", "root", "", "hmsdb");
								

						$query ="SELECT * FROM labreport";
						$result = mysqli_query($con, $query);

						echo "			
												<th>
													First Name
													</th>
													<th>
														Last Name
													</th>
													<th>
														Age
													</th>
													<th>
														Address
													</th>
													<th>
														Sample Collected
													</th>
													<th>
														Date Collected
													</th>
													<th>
														Received By
													</th>


												</thead>
					                        <tbody>
					                ";
					               
						while ($rows=mysqli_fetch_array($result)) {

							echo "
					                            <tr>
					                               
					                                <td>$rows[name]</td>
					                                <td>$rows[lastname]</td>
					                                <td>$rows[age]</td>
					                                <td>$rows[address]</td>
					                                <td>$rows[sample]</td>
					                                <td>$rows[DoC]</td>
					                                <td>$rows[received]</td>
					                                                                

					                            <tr/>  
					                          </tbody> 
					            " ;    
					           					

					            	echo "";
						}
								?>
						</table>

								 <div class="modal-footer">
					        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>

	




 </body>
</html>
<style>

#btns{
	height: 200px;
	width:  250px;
	font-size: 30px;
	padding-top: px;
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

