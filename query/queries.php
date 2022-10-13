<?php
include ('connect.php');
extract($_POST);

if(isset($query)){

}else{
	$query = "SELECT * FROM destination";

	$result = mysqli_query($connection , $query);
	if($count = mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result)) {
			echo '<div class="col-lg-4 col-md-7 col-sm-8">
						<div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
							<div class="services-icon">
								<img class="shape" src="./assets/img/'.$row['destImg'].'" alt="Destination Img">
								<!-- <img class="shape-1" src="./assets/img/" alt="Destination Img"> -->
								<!-- <i class="lni-baloon"></i> -->
							</div>
							<div class="services-content mt-30">
								<h4 class="services-title"><a href="#">'.$row['destName'].'</a></h4>
							</div>
							<div>
								<!-- <p class="text">Inclusion: '.$row['destInclu'].' Price: '.$row['destPrice'].'</p> -->
								<button type="button" id="'.$row['destID'].'" class="destBtn btn btn-outline-dark know-more m-2 mt-0" data-bs-toggle="modal" data-bs-target="#myNav">Know More</button>
							</div>
						</div> <!-- single services -->
					</div>';
		}
	}
	else
	{
		echo ' <h5 style="text-align:center"><i class="la la-search"></i> No Result Found<h5>';
	}
}

if(isset($btncontact)){
	$query = "INSERT INTO clienttickets VALUES(null,'$name','$email','$message')";
	mysqli_query($connection , $query);
}	

?>