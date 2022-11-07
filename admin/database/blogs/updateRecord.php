<?php
require ('../connect.php');
$id = $_POST['id'];
$title = $_POST['blogtitle'];
$author = $_POST['blogauthor'];
$desc = $_POST['blogbody'];


		$query = "UPDATE blogs set blogTitle ='$name' , blogAuthor = '$inclu' , blogDesc = '$desc' WHERE blogID = $id";
		mysqli_query($connection , $query);
?>