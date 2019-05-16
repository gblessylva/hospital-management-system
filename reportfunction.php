 <?php 
	include 'function.php';
 ?>

<?php
// Code for Birth Cert 
if (isset($_POST['save_birth_report'])) {
	$PatName=mysqli_escape_string($con, $_POST['PatName']); 
	$FaName=mysqli_escape_string($con, $_POST['FaName']); 
	$MoName=mysqli_escape_string( $con, $_POST['MoName']); 
	$addr=mysqli_escape_string($con, $_POST['addr']); 
	$dob=mysqli_escape_string($con, $_POST['dob']); 
	$tob=mysqli_escape_string($con, $_POST['tob']);
	$delivered=mysqli_escape_string($con, $_POST['delivered']); 
	$weight=mysqli_escape_string($con, $_POST['weight']);
	$dnv=mysqli_escape_string($con, $_POST['dnv']);
	$remark=mysqli_escape_string($con, $_POST['remark']); 

		$query= "insert into birthcert (bn, fn, mn, address, dob, tob, 	delivered, weight, next, remark ) values('$PatName', '$FaName', '$MoName', '$addr', '$dob', '$tob', '$delivered', '$weight', '$dnv', '$remark')";
		$result=mysqli_query($con, $query);

		if ($result) {
		
		echo "<span>Succesfully Added<span>";
		header("Location:report_type.php");
	}   
	else echo "Not Added";
	
}
 ?>
<?php 
// code for Death Cert

if (isset($_POST['deathreport'])) {
	$PatName=mysqli_escape_string($con, $_POST['PatName']); 
	$LaName=mysqli_escape_string($con, $_POST['PatLastName']); 
	$addr=mysqli_escape_string( $con, $_POST['addr']); 
	$cause=mysqli_escape_string($con, $_POST['cause']); 
	$tod=mysqli_escape_string($con, $_POST['tod']); 
	$called=mysqli_escape_string($con, $_POST['called']);
	$wit=mysqli_escape_string($con, $_POST['witness']); 
	$familymember=mysqli_escape_string($con, $_POST['fam']);
	$remark=mysqli_escape_string($con, $_POST['remark']); 	

		$query= "insert into deathcert (name, lastname, address, cause, tod, called, nursewitness, famwitness, remark ) values('$PatName', '$LaName', '$addr', '$cause', '$tod', '$called', '$wit', '$familymember', '$remark')";
		$result=mysqli_query($con, $query);

		if ($result) {
		
		echo "<span>Succesfully Added<span>";
		header("Location:report_type.php");
	}   
	else echo "Not Added";
	}
 ?>
<?php 
// code for Lab Report

if (isset($_POST['labreport'])) {
	$PatName=mysqli_escape_string($con, $_POST['PatFName']); 
	$LaName=mysqli_escape_string($con, $_POST['PatLName']); 
	$age=mysqli_escape_string( $con, $_POST['age']);
	$addr=mysqli_escape_string( $con, $_POST['addr']); 
	$sample=mysqli_escape_string($con, $_POST['samplename']);
	$DoC=mysqli_escape_string($con, $_POST['DoC']); 
	$toc=mysqli_escape_string($con, $_POST['toC']); 
	$duedate=mysqli_escape_string($con, $_POST['DD']);
	$duetime=mysqli_escape_string($con, $_POST['TD']); 
	$received=mysqli_escape_string($con, $_POST['collector']);
	$remark=mysqli_escape_string($con, $_POST['result']); 	

		$query= "insert into labreport (name, lastname, age, address, sample, DoC, toc, due, duetime, received, remark ) values('$PatName', '$LaName', '$age','$addr', '$sample', '$DoC', '$toc', '$duedate', '$duetime', '$received', '$remark' )";
		$result=mysqli_query($con, $query);

		if ($result) {
		
		echo "<span>Succesfully Added<span>";
		header("Location:report_type.php");
	}   
	else echo "Not Added";
	}
 ?>

