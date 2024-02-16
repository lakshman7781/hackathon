<?php 

include('connect.php');
session_start();
 date_default_timezone_set("Asia/Calcutta");

$paymentid=$_POST['payment_id'];
$dt=date('Y-m-d h:i:s');

$sql="insert into xorders (payment_id,added_date) values ('".$paymentid."','".$dt."')";

$result=mysqli_query($conn,$sql);

if($result)
{
	echo 'done';
	$_SESSION['paymentid']=$paymentid;
}
else 
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>