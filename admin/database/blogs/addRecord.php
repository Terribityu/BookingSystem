<?php
require ('../connect.php');

	// $id = $_POST['id'];
	$title = $_POST['blogtitle'];
	$author = $_POST['blogauthor'];
	$desc = $_POST['blogbody'];

	$query = "INSERT INTO destination VALUES(null,'$title','$author', now(), '$desc')";
	mysqli_query($connection , $query);
	$query= null;
?>