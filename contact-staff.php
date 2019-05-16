<!DOCTYPE html>
<html>
 <head>
  <title>Contact Staff</title>
  <link rel="stylesheet" href="aasets/styles/styles.css">
	<link rel="stylesheet" href="assets/styles/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/scripts/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>

  <div class="jumbotron"  id="dero">
		<center> <h2>Brick House Hospital Admin</h2>

			<h3>Contact Staff</h3></center>
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
					<a href="add_patient.php" class="list-group-item">
						Add Patient						
					</a>
					<a href="payment.php" class="list-group-item ">
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
					<a href="contact.php" class="list-group-item active" id="listactive">
						Contact Staff						
					</a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-body" id="cardbody">
						
					<form method="post" id="comment_form">
				    <div class="form-group">
				     <label>Enter Subject</label>
				     <input type="text" name="subject" id="subject" class="form-control">
				    </div>
					<div class="form-group">
				     <label>Sender Name</label>
				     <input type="text" name="sender" id="subject" class="form-control">
				    </div>
				    <div class="form-group">
				     <label>Enter Comment</label>
				     <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
				    </div>
				    <div class="form-group">
				     <input type="submit" name="post" id="post" class="btn btn-primary" value="Post" />
				    </div>
				   </form>

						
					</div>
				</div>
			</div>
			<div class="col-md-1">
				
			</div>
		</div>
	</div>
 </body>
</html>

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
