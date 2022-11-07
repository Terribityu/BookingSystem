<?php
require ('../connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM destination WHERE destID = $id";
	mysqli_query($connection , $query);
?>