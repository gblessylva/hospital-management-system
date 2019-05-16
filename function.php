<?php 
$con=mysqli_connect("localhost", "root", "", "hmsdb");
if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$type=$_POST['type'];

$query="select * from login where username='$username' and password='$password'" ;
$result=mysqli_query($con,$query);
if (mysqli_num_rows($result)==1) {
	header("Location:admin.php");
}
else 
		echo "<script>document.getElementById('invalid').style.display='block';</script>";
	echo "<script>window.open('login.php', '_self');</script>";

}

if (isset($_POST['pat-sub'])) {
	$FN=$_POST['FN'];
	$LN=$_POST['LN'];
	$EM=$_POST['EM'];
	$PHN=$_POST['PHN'];
	$addr=$_POST['addr'];
	$docapp=$_POST['docapp'];
	$time=$_POST['time'];


	$query= "INSERT into appointments (FN, LN, EM, PHN, address, docapp, Time) values('$FN', '$LN', '$EM','$PHN', '$addr', '$docapp', '$time' )";
	$result=mysqli_query($con, $query);

	if ($result) {
		
		echo "<script>alert('Appointment Added');</script>";
	header("Location:payment.php");
	}
	else echo "Not Added";
	
}


 //User Pages
//
//

if (isset($_POST['add_user'])) {
	$UN=$_POST['username'];
	$pws=$_POST['password'];
	$type=$_POST['type'];	

	$query= "insert into login (username, password, type) values('$UN','$pws','$type')";
	$result=mysqli_query($con, $query);

	if ($result) {
		
		echo "<script>alert('User Added');</script>";
		header("Location:admin.php");
	}
}

function getPatientDetails()
{
	global $con;

	$query ="SELECT * FROM appointments";
	$result = mysqli_query($con, $query);

	echo "			
							<th>
								UID
								</th>
								<th>
								First Name
								</th>
								<th>
									Last Name
								</th>
								<th>
									Email
								</th>
								<th>
									Phone
								</th>
								<th>
									Address
								</th>
								<th>
									Doctor
								</th>
								<th>
									Time
								</th>
								<th>
									VED
								</th>


							</thead>
                        <tbody>
                ";
                $sc="BHS";
                $incr=1;
                $id=$sc.$incr;
	while ($rows=mysqli_fetch_array($result)) {

		echo "
                            <tr>
                                <td>$id</td>
                                <td>$rows[FN]</td>
                                <td>$rows[LN]</td>
                                <td>$rows[EM]</td>
                                <td>$rows[PHN]</td>
                                <td>$rows[address]</td>
                                <td>$rows[docapp]</td>
                                <td>$rows[Time]</td>
                                <td>
								<a href='edit-patient.php?update={$rows['id']}' class='btn btn-primary'>
									E 
								</a> 
								<a href='patients-detials.php?del_id=$rows[id];' class='btn btn-danger'>
									D
								</a>



					
					</td>
                                


                            <tr/>  
                          </tbody>  
            " ;    
            
            $id++;
           
	


	}


}

if (isset($_GET['del_id'])) 
{
   $del= "delete from appointments where id='$_GET[del_id]'";
   $delete = mysqli_query($con, $del);
        if ($delete) {
            echo "<div style='padding:10px; bacground:red; '> <p> Deleted  <a href='patients-detials.php' btn btn-primary> &times</a></p> </div>";
                }
       
   }

 ?>
