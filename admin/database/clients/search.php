<?php
require ('../connect.php');
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "SELECT * FROM bookings 
	where bookID like '%$search%'
	or bookFname like '%$search%'
	or bookLname like '%$search%'
	or bookEmail like '%$search%'
	or bookCount like '%$search%'
	or destID like '%$search%'
	or bookDate like '%$search%'";
	
}else {
	$query = "SELECT * FROM bookings";
}

$result = mysqli_query($connection , $query);
	if(mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_array($result)) {
					echo "<tr>"
						."<td>".$row['bookID']."</td>"
						."<td>".$row['bookFname']."</td>"
						."<td>".$row['bookLname']."</td>"
						."<td>".$row['bookEmail']."</td>"
						."<td>".$row['bookCount']."</td>"
						."<td>".$row['destID']."</td>"
						."<td>".$row['bookDate']."</td>"
						."<td>"
							."<button id = 'delete'  class='btn btn-danger'value='".$row['bookID']."' data-value='".$row['bookFname']." ".$row['bookLname']."' title='Delete Client'><i class='las la-trash-alt'></button>"
						."</td>"
						."</tr>";
				}


}
else
{
	echo ' <h5 style="text-align:center"><i class="la la-search"></i> No Result Found<h5>';
}

?>