<?php
include('connection.php'); 
$del_id = $_GET['id'];

	$sql ="delete from hotel where booking_id='$del_id'";
$query = mysqli_query($link,$sql);

if($query>0)
{
	//echo "Data deleted successfully"
	header("location:admin_hotels.php");
}
?>