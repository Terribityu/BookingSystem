<?php
require ('../connect.php');
$id = $_POST['id'];
$name = $_POST['name'];
$inclu = json_encode($_POST['inclusions']);
$desc = mysqli_real_escape_string($connection, $_POST['description']);
$price = $_POST['price'];
$trailer = $_POST['trailer'];


		$uploadDir = '../../../assets/destinations'; 
		$uploadedFile = ''; 
		$fileName = basename($_FILES["image"]["name"]); 
		if($fileName != ''){
    	$targetFilePath = $uploadDir . $fileName; 
    	$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
		move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
		$uploadedFile = $fileName; 
		$query = "UPDATE destination set destName ='$name' , destInclu = '$inclu' , destDesc = '$desc', destPrice = '$price', destImg = '$uploadedFile', destTrailer = '$trailer' WHERE destID = $id";
		}else{
			$query = "UPDATE destination set destName ='$name' , destInclu = '$inclu' , destDesc = '$desc', destPrice = '$price', destTrailer = '$trailer' WHERE destID = $id";
		}
		mysqli_query($connection , $query);
?>