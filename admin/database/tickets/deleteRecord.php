<?php
require ('../connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM clienttickets WHERE ticketID = $id";
	mysqli_query($connection , $query);
?>