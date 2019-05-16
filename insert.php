<?php
//insert.php
if(isset($_POST["subject"]))
{
 include("connect.php");
 $subject = mysqli_real_escape_string($con, $_POST["subject"]);
 $sender = mysqli_real_escape_string($con, $_POST["sender"]);
 $comment = mysqli_real_escape_string($con, $_POST["comment"]);
 $query = "
 INSERT INTO notification(subject, message, sender)
 VALUES ('$subject', '$comment', '$sender')
 ";
 mysqli_query($con, $query);
}

?>