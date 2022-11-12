<?php
require ('connect.php');
extract($_POST);
if(isset($query))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "SELECT destination.*, blogs.* FROM blogs INNER JOIN destination ON blogs.destID = destination.destID
	where blogs.blogID like '%$search%'
	or blogs.blogTitle like '%$search%'
	or blogs.blogAuthor like '%$search%'
	or blogs.blogDesc like '%$search%'
	or blogs.blogDate like '%$search%'
	or destination.destName like '%$search%'";
	
}else {
	$query = "SELECT destination.*, blogs.blogID, blogs.blogTitle, blogs.blogAuthor, blogs.blogDesc,
	DATE(blogs.blogDate) AS blogDate, blogs.status
	 FROM blogs INNER JOIN destination ON blogs.destID = destination.destID";
}

$count = 0;
$result = mysqli_query($connection , $query);
	if(mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_array($result)) {
		if($count < 3 && $data =='#home'){
			$count++;
						echo '<div class="col-lg-4 col-md-7">
						<div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
							<div class="blog-image">
								<img src="./assets/destinations/'.$row['destImg'].'" alt="blog">
							</div>
							<div class="blog-content">
								<ul class="meta">
									<li>Posted By: <a href="">'.$row['blogAuthor'].'</a></li>
									<li>Date: '.$row['blogDate'].'</li>
								</ul>
								<p class="text">'.$row['blogTitle'].'</p>
								<a class="more" id="blogInfo" href="#" value="'.$row['destID'].'" data-value="'.$row['blogID'].'">Learn More <i class="lni-chevron-right"></i></a>
							</div>
						</div> <!-- single blog -->
					</div> ';
		}
		if($data == '#blog') {
			echo '<div class="col-lg-4 col-md-7">
						<div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
							<div class="blog-image">
								<img src="./assets/destinations/'.$row['destImg'].'" alt="blog">
							</div>
							<div class="blog-content">
								<ul class="meta">
									<li>Posted By: <a href="">'.$row['blogAuthor'].'</a></li>
									<li>Date: '.$row['blogDate'].'</li>
								</ul>
								<p class="text">'.$row['blogTitle'].'</p>
								<a class="more" id="blogInfo" href="#" value="'.$row['destID'].'" data-value="'.$row['blogID'].'">Learn More <i class="lni-chevron-right"></i></a>
							</div>
						</div> <!-- single blog -->
					</div> ';
		}
	}


}
else
{
	echo ' <h5 style="text-align:center"><i class="la la-search"></i> No Result Found<h5>';
}

?>