<?php
require ('../connect.php');

	// $id = $_POST['id'];
	$title = $_POST['blogtitle'];
	$author = $_POST['blogauthor'];
	$dest = $_POST['blogdestination'];
	$desc = mysqli_real_escape_string($connection, $_POST['blogbody']);

	$query = "INSERT INTO blogs VALUES(null,'$title','$author', now(), '$desc', 'pending', $dest)";
	echo mysqli_query($connection , $query);
	$query= null;
?>