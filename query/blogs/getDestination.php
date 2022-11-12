<?php
require ('../connect.php');
$query = "SELECT destID, destName FROM destination";

$result = mysqli_query($connection , $query);
	if(mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_array($result)) {
			echo "<option value='".$row['destID']."'>".$row['destName']."</option>";
		}
	}

?>