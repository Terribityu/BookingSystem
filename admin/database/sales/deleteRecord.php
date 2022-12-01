<?php
require ('../connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM sales WHERE saleID = $id";
	mysqli_query($connection , $query);
?>