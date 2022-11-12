<?php
require ('../connect.php');
$id = $_GET['id'];

		$query = "UPDATE blogs set status = 'approved' WHERE blogID = $id";
		mysqli_query($connection , $query);
?>