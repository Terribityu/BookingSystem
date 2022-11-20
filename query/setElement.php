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

if(isset($blog)){
	$id = $blog;
	$query = "SELECT destination.*, blogs.* FROM blogs INNER JOIN destination ON blogs.destID = destination.destID
	where blogs.blogID = $id";
	$result = mysqli_query($connection , $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}

if(isset($close)){
	session_start();
	session_destroy();
}

if(isset($_GET['verifyotp'])){
	session_start();
	if($_GET['verifyotp'] == $_SESSION['otp']){
		echo true;
	}else{
		echo false;
	}
}

if(isset($btncontact)){
	$query = "INSERT INTO clienttickets VALUES(null,'$name','$email','$message')";
	mysqli_query($connection , $query);
}	

?>