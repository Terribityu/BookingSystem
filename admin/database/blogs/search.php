<?php
require ('../connect.php');
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "SELECT * FROM blogs 
	where blogID like '%$search%'
	or blogTitle like '%$search%'
	or blogDesc like '%$search%'
	or blogDate like '%$search%'";
	
}else {
	$query = "SELECT * FROM blogs";
}

$result = mysqli_query($connection , $query);
	if(mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_array($result)) {
					echo "<tr>"
						."<td><img class='shape' height='250px' width='400px' src='./../assets/destinations/".$row['destImg']."' alt='Destination Img'></td>"
						."<td>".$row['blogID']."</td>"
						."<td>".$row['blogTitle']."</td>"
						."<td>".$row['blogDesc']."</td>"
						."<td>".$row['blogDate']."</td>"
						."<td>"
							."<button type='button' class='btn btn-success' id='edit' data-toggle='modal' data-target='#editDestinationModal' value='".$row['blogID']."'  title='Edit Student'><i class='la la-user-edit'></i></button> "
							."<button id = 'delete'  class='btn btn-danger'value='".$row['blogID']."' data-value='".$row['blogTitle']."' title='Delete Student'><i class='las la-trash-alt'></button>"
						."</td>"
						."</tr>";
				}


}
else
{
	echo ' <h5 style="text-align:center"><i class="la la-search"></i> No Result Found<h5>';
}

?>