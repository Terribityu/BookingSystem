<?php
include ('connect.php');
extract($_POST);
if(isset($viewDest)){
	$id = $viewDest;
	$query = "SELECT * FROM destination WHERE destID = $id";
	$result = mysqli_query($connection , $query);
	$row = mysqli_fetch_array($result);
	if (($pos = strpos($row['destTrailer'], "=")) !== FALSE) { 
		$row['destTrailer'] = "https://www.youtube.com/embed/".substr($row['destTrailer'], $pos+1); 
	}
	echo json_encode($row);
}	

if(isset($btncontact)){
	$query = "INSERT INTO clienttickets VALUES(null,'$name','$email','$message')";
	mysqli_query($connection , $query);
}	


?>