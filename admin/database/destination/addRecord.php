<?php
require ('../connect.php');

	// $id = $_POST['id'];
	$name = $_POST['name'];
	$inclu = json_encode($_POST['inclusions']);
	$desc = mysqli_real_escape_string($connection, $_POST['description']);
	$price = $_POST['price'];
	$trailer = $_POST['trailer'];
	
	echo $inclu;
	$uploadDir = '../../../assets/destinations/'; 
	$uploadedFile = ''; 
	$fileName = basename($_FILES["image"]["name"]); 
    $targetFilePath = $uploadDir . $fileName; 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
	$uploadedFile = $fileName; 
	echo print_r($_POST['inclusions']);
	echo json_encode($_POST['inclusions']);
	echo print_r(json_decode($inclu));
	
	$query = "INSERT INTO destination VALUES(null,'$name','$inclu','$desc','$price','$uploadedFile','$trailer')";
	mysqli_query($connection , $query);
	$query= null;
?>