<?php
require ('template/header.php');
require ('modals.php');
require ('database/connect.php');
?>

    <div id="page-content-wrapper">


    	
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
		<span class="h1"> <a href="index.php"> <i class="la la-map"></i> </a> Destinations &nbsp</span>
        <button id="add" type="button" class="btn btn-success" data-toggle="modal" data-target="#addDestinationModal" title="Add Destination" data-placement="right">
		<i class="la la-plus-circle"></i>
		</button>

		<form class="form-inline col-md-4 offset-md-3" >
			<i class="la la-search" style="font-size: 25px"></i>
			<input type="text" class="form-control form-control-sm ml-3 w-75" name="search_text" id="search_text" placeholder="Search..." >
		</form>

		<ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="las la-expand-arrows-alt"></i>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="database/logout.php">
                  <i class="las la-power-off"></i>
                  </a>
               </li>
            </ul>
      </nav>
      <div class="container-fluid table-responsive">

<div id="viewRecords">
	<table id="mytable" class="table table-hover">
		<thead class="thead-dark">
			<tr>
				<th>Image</th>
				<th>ID</th>
				<th>Name</th>
				<th>Inclusion</th>
				<th>Description</th>
				<th>Price</th>
				<th>Trailer</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</div>
</div>
<!-- </div> -->
<?php
require ('template/footer.php');
?>