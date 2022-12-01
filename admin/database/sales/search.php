<?php
require ('../connect.php');
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "SELECT * FROM sales INNER JOIN bookings ON sales.bookID = bookings.bookID INNER JOIN destination ON bookings.destID = destination.destID 
	where sales.salesID like '%$search%'
	or destination.destName like '%$search%'
	or bookings.bookFname like '%$search%'
	or bookings.bookLname like '%$search%'
	or bookings.bookEmail like '%$search%'
	or bookings.bookCount like '%$search%'
	or bookings.bookPrice like '%$search%'
	or sales.transDate like '%$search%'";
	
}else {
	$query = "SELECT * FROM sales INNER JOIN bookings ON sales.bookID = bookings.bookID INNER JOIN destination ON bookings.destID = destination.destID";
}

$result = mysqli_query($connection , $query);
	if(mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_array($result)) {
					echo "<tr>"
						."<td>".$row['saleID']."</td>"
						."<td>".$row['destName']."</td>"
						."<td>".$row['bookFname']." ".$row['bookLname']."</td>"
						."<td>".$row['bookEmail']."</td>"
						."<td>".$row['bookCount']."</td>"
						."<td>".$row['bookPrice']."</td>"
						."<td>".$row['transDate']."</td>"
						."<td>"
							."<button id = 'delete'  class='btn btn-danger'value='".$row['saleID']."' data-value='".$row['bookFname']." ".$row['bookLname']."' title='Delete Client'><i class='las la-trash-alt'></button>"
						."</td>"
						."</tr>";
				}


}
else
{
	echo ' <h5 style="text-align:center"><i class="la la-search"></i> No Result Found<h5>';
}

?>