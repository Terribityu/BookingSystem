<?php
$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "travelbooking";
		$connection = mysqli_connect($servername , $username , $password, $database);

		if (mysqli_connect_error()) {
			die("Database connection failed: " . mysqli_connect_error());
		}else{
			// echo "Connected";
		}
?>