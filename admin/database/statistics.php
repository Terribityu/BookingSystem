<?php
require ('connect.php');

$query = 'SELECT * FROM destination';
$result = mysqli_query($connection , $query); 
$row = mysqli_num_rows($result);

$query1 = 'SELECT * FROM bookings';
$result1 = mysqli_query($connection , $query1);  

$data = 0;
$row1 = mysqli_num_rows($result1);
if(mysqli_num_rows($result1) > 0)
{
while ($row2 = mysqli_fetch_array($result1)) {
					// echo $row['itemPrice']*$row['quantity'];
                    $data = $data + ($row2['bookPrice']);
                        // echo "<script>document.write(localStorage.setItem('totalPrice', '".$row['itemPrice']*$row['quantity']."'))</script>";
            }
}

$query3 = 'SELECT * FROM clienttickets';
$result3 = mysqli_query($connection , $query3); 
$row3 = mysqli_num_rows($result3);

$query4 = 'SELECT * FROM blogs';
$result4 = mysqli_query($connection , $query4); 
$row4 = mysqli_num_rows($result4);


echo json_encode(array("destination"=>$row,"bookings"=>$row1,"total"=>$data,"ticket"=>$row3,"blogs"=>$row4));

?>