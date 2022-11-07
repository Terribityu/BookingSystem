<?php
require ('../connect.php');

	// $id = $_POST['id'];
	$name = $_POST['name'];
	$inclu = $_POST['inclusion'];
	$desc = $_POST['description'];
	$price = $_POST['price'];
	$trailer = $_POST['trailer'];

	$uploadDir = '../../../assets/destinations/'; 
	$uploadedFile = ''; 
	$fileName = basename($_FILES["image"]["name"]); 
    $targetFilePath = $uploadDir . $fileName; 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
	$uploadedFile = $fileName; 
	
	$query = "INSERT INTO destination VALUES(null,'$name','$inclu','$desc','$price','$uploadedFile','$trailer')";
	mysqli_query($connection , $query);
	$query= null;
?>