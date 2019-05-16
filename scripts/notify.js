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
, fn, mn, address, dob, tob, delivered, weight, dnv, remark

, '$FaName', '$MoName', '$addr', '$dob', '$tob', '$delivered', '$weight', '$dnv', '$remark'


, lastname, address, cause, tod, called, nursewitness, famwitness, remark
, '$LaName', '$addr', '$cause', '$tod', '$wit', '$familymember',  '$remark'


CREATE TABLE `hmsdb`.`labreport` ( `id` INT(100) NOT NULLAUTO_INCREMENT , PRIMARY KEY (`id`) , `name` VARCHAR(200) NOT NULL , `lastname` VARCHAR(200) NOT NULL , `age` VARCHAR(3) NOT NULL , `address` INT(200) NOT NULL , `DoC` VARCHAR(100) NOT NULL , `toc` VARCHAR(10) NOT NULL , `due` VARCHAR(10) NOT NULL , `duetime` VARCHAR(10) NOT NULL , `received` VARCHAR(20) NOT NULL , `remark` VARCHAR(10000) NOT NULL ) ENGINE = InnoDB;

, lastname, age, address, sample,  DoC, toc, due, duetime, received, remark

, '$LaName', '$age', '$sample', '$DoC', '$toc', '$duedate', '$duetime', '$received', '$remark'