<?php
include('connection.php'); 
$del_id = $_GET['id'];

	$sql ="delete from transport where booking_id='$del_id'";
$query = mysqli_query($link,$sql);

if($query>0)
{
	//echo "Data deleted successfully"
	header("location:My_bookings.php");
}
?>