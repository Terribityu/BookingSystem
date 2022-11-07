<?php
require ('../connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM blogs WHERE blogID = $id";
	mysqli_query($connection , $query);
?>