<?php
require ('../connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM bookings WHERE bookID = $id";
	mysqli_query($connection , $query);
?>