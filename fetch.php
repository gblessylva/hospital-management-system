 
<?php
include('connect.php');


if(isset($_POST['view'])){



if($_POST["view"] != '')
{
    $update_query = "UPDATE notification SET status = 1 WHERE status=0";
    mysqli_query($con, $update_query);
}
$query = "SELECT * FROM notification ORDER BY id DESC LIMIT 5";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
   <li>
   <a href="#">
   <strong>'.$row["subject"].'</strong><br />
   <small><em>'.'From '.$row["sender"].'</em></small><br />
   <small><em>'.$row["message"].'</em></small>
   </a>
   </li>
   ';

 }
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}



$status_query = "SELECT * FROM notification WHERE status=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}

?>

