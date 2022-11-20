<?php
include ('connect.php');
extract($_POST);

if(isset($query)){
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "SELECT * FROM destination 
	where destID like '%$search%'
	or destName like '%$search%'
	or destInclu like '%$search%'
	or destPrice like '%$search%'
	or destImg like '%$search%'
	or destTrailer like '%$search%'";
}else{
	$query = "SELECT * FROM destination";
	
}

$count = 0;
	$result = mysqli_query($connection , $query);
	if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result)) {
			if($count < 3 && $data =='#home'){
			$count++;
				echo '<div class="col-lg-4 col-md-7 col-sm-8">
							<div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
								<div class="services-icon">
									<img class="shape" src="./assets/destinations/'.$row['destImg'].'" alt="Destination Img">
									<!-- <img class="shape-1" src="./assets/img/" alt="Destination Img"> -->
									<!-- <i class="lni-baloon"></i> -->
								</div>
								<div class="services-content mt-30">
									<h4 class="services-title"><a href="#destinations">'.$row['destName'].'</a></h4>
									<!-- <p class="text">Inclusion: '.$row['destInclu'].' Price: '.$row['destPrice'].'</p> -->
									<button type="button" id="destAdd" value = "'.$row['destID'].'" class="destAdd btn btn-outline-dark know-more m-2 mt-0" data-bs-toggle="modal" data-bs-target="#myNav">Know More</button>
								</div>
							</div> <!-- single services -->
						</div>';
			}
			if($data == '#destinations') {
				echo '<div class="col-lg-4 col-md-7 col-sm-8">
							<div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
								<div class="services-icon">
									<img class="shape" src="./assets/destinations/'.$row['destImg'].'" alt="Destination Img">
									<!-- <img class="shape-1" src="./assets/img/" alt="Destination Img"> -->
									<!-- <i class="lni-baloon"></i> -->
								</div>
								<div class="services-content mt-30">
									<h4 class="services-title"><a href="#">'.$row['destName'].'</a></h4>
									<!-- <p class="text">Inclusion: '.$row['destInclu'].' Price: '.$row['destPrice'].'</p> -->
									<button type="button" id="destAdd" value = "'.$row['destID'].'" class="destAdd btn btn-outline-dark know-more m-2 mt-0" data-bs-toggle="modal" data-bs-target="#myNav">Know More</button>
								</div>
							</div> <!-- single services -->
						</div>';
			}
		}
	}
	else
	{
		echo ' <h5 style="text-align:center"><i class="la la-search"></i> No Result Found<h5>';
	}

?>