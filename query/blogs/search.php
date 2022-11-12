<?php
require ('../connect.php');
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "SELECT destination.*, blogs.* FROM blogs INNER JOIN destination ON blogs.destID = destination.destID
	where blogs.blogID like '%$search%'
	or blogs.blogTitle like '%$search%'
	or blogs.blogAuthor like '%$search%'
	or blogs.blogDesc like '%$search%'
	or blogs.blogDate like '%$search%'
	or destination.destName like '%$search%'
	and blogs.status = '". $_POST['stats']."'";
	
}else {
	$query = "SELECT destination.*, blogs.* FROM blogs INNER JOIN destination ON blogs.destID = destination.destID where blogs.status = '". $_POST['stats']."'";
}

$result = mysqli_query($connection , $query);
	if(mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_array($result)) {
					echo "<tr>"
						."<td>".$row['blogID']."</td>"
						."<td>".$row['blogTitle']."</td>"
						."<td>".$row['blogAuthor']."</td>"
						."<td>".$row['destName']."</td>"
						."<td>".$row['blogDesc']."</td>"
						."<td>".$row['blogDate']."</td>"
						."<td>";
					if($_POST['stats'] == "pending"){
					echo	"<button class='btn btn-success' id='approved' value='".$row['blogID']."' data-value='".$row['blogTitle']."'  title='Approve Blog'><i class='la la-check-circle'></i></button> "
							."<button id = 'reject'  class='btn btn-danger'value='".$row['blogID']."' data-value='".$row['blogTitle']."' title='Reject Blog'><i class='las la-times-circle'></button>"
						."</td>"
						."</tr>";
					}else{
					echo	"<button id = 'delete'  class='btn btn-danger'value='".$row['blogID']."' data-value='".$row['blogTitle']."' title='Delete Blog'><i class='las la-trash-alt'></button>"
							."</td>"
							."</tr>";	
					}
				}


}
else
{
	echo ' <h5 style="text-align:center"><i class="la la-search"></i> No Result Found<h5>';
}

?>