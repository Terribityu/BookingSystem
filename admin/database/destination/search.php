<?php
require ('../connect.php');
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "SELECT * FROM destination 
	where destID like '%$search%'
	or destName like '%$search%'
	or destInclu like '%$search%'
	or destPrice like '%$search%'
	or destImg like '%$search%'
	or destTrailer like '%$search%'";
	
}else {
	$query = "SELECT * FROM destination";
}

$result = mysqli_query($connection , $query);
	if(mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_array($result)) {
					echo "<tr>"
						."<td><img class='shape' height='250px' width='400px' src='./../assets/destinations/".$row['destImg']."' alt='Destination Img'></td>"
						."<td>".$row['destID']."</td>"
						."<td>".$row['destName']."</td>"
						."<td>".$row['destInclu']."</td>"
						."<td>".$row['destDesc']."</td>"
						."<td>".$row['destPrice']."</td>"
						."<td>".$row['destTrailer']."</td>"
						."<td>"
							."<button type='button' class='btn btn-success' id='edit' data-toggle='modal' data-target='#editDestinationModal' value='".$row['destID']."'  title='Edit Student'><i class='la la-user-edit'></i></button> "
							."<button id = 'delete'  class='btn btn-danger'value='".$row['destID']."' data-value='".$row['destName']."' title='Delete Student'><i class='las la-trash-alt'></button>"
						."</td>"
						."</tr>";
				}


}
else
{
	echo ' <h5 style="text-align:center"><i class="la la-search"></i> No Result Found<h5>';
}

?>