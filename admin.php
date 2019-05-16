<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Pages</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="assets/styles/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/scripts/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="scripts/notify.js"></script>
</head>
<script type="text/javascript" src="assets/scripts/js/bootstrap.min.js"></script>
<body >
  <div class="container col-md-12" id="notify" style="">
   <nav class="navbar navbar-right" style="">
     <ul class="nav navbar-nav navbar-right" id="listed" style="position: absolute; right: 20px; ">
      <li class="dropdown" style="height: 30px">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
    </div>
   </nav>
</div>
<div class="jumbotron" id="dero">
	<center><h2> Hospital Management System</h2></center>
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
					<a href="add_staff.php" class="list-group-item">
						Staff	Details					
					</a>
					<a href="" class="list-group-item">
						Add Staff						
					</a>
					<a href="" class="list-group-item">
						Remove Staff						
					</a>
					<a href="add_user.php" class="list-group-item">
						Add Staff						
					</a>
				</div>
			</div>
						<div class="col-md-9">
				<div class="card">
					<center>
					<div class="card-body" id="cardbody">
						<a href="patients-detials.php" class="btn btn-primary" id="btns">
							Patient Details
						</a>
						<a href="add_patient.php" class="btn btn-primary" id="btns">
							Add Patient
						</a>
						<a href="search.php" class="btn btn-primary" id="btns">
							Search Patient
						</a>
						<a href="payment.php" class="btn btn-primary" id="btns">
							Payment
						</a>
						<a href="report_type.php" class="btn btn-primary" id="btns">
							Write Report
						</a>
						<a href="contact-staff.php" class="btn btn-primary" id="btns">
							Contact Staff
						</a>

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
#nill{
	height: 50px;
	padding-bottom: 5px;
	padding-top: 5px;
	overflow-x: scroll;

}


</style>
<script>
	$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});


</script>