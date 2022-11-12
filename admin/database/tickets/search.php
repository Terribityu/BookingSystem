<?php
require ('../connect.php');
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "SELECT * FROM clienttickets 
	where ticketID like '%$search%'
	or ticketName like '%$search%'
	or ticketEmail like '%$search%'
	or ticketMessage like '%$search%'";
	
}else {
	$query = "SELECT * FROM clienttickets";
}

$result = mysqli_query($connection , $query);
	if(mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_array($result)) {
					echo "<tr>"
						."<td>".$row['ticketID']."</td>"
						."<td>".$row['ticketName']."</td>"
						."<td>".$row['ticketEmail']."</td>"
						."<td>".$row['ticketMessage']."</td>"
						."<td>"
							."<button id = 'delete'  class='btn btn-danger'value='".$row['ticketID']."' data-value='".$row['ticketName']."' title='Delete Client'><i class='las la-trash-alt'></button>"
						."</td>"
						."</tr>";
				}


}
else
{
	echo ' <h5 style="text-align:center"><i class="la la-search"></i> No Result Found<h5>';
}

?>