<?php
require ('../connect.php');

if(!empty($_POST["id"])) {
    $query = "SELECT id FROM destination WHERE id ='" . $_POST["id"] . "'";
	$result = mysqli_query($connection , $query);
	$row = mysqli_num_rows($result);

  if($row>0) {
  	echo json_encode(0);
  }else{
  	echo json_encode(1);
  }
}
?> 