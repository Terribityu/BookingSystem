<?php
require ('template/header.php');
require ('modals.php');
require ('database/connect.php');
?>

    <div id="page-content-wrapper">


    	
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
		<span class="h1"> <a href="index.php"> <i class="la la-user"></i> </a> Clients &nbsp</span>
        <!-- <button id="add" type="button" class="btn btn-success" data-toggle="modal" data-target="#editDestinationModal" title="Add Destination" data-placement="right">
		<i class="la la-plus-circle"></i>
		</button> -->

		<form class="form-inline col-md-4 offset-md-3" >
			<i class="la la-search" style="font-size: 25px"></i>
			<input type="text" class="form-control form-control-sm ml-3 w-75" name="search_clients" id="search_clients" placeholder="Search..." >
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

<div id="viewClients">
	<table id="mytable" class="table table-hover">
		<thead class="thead-dark">
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Destination</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</div>
</div>
</div>

<script src="./assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="./assets/js/clients.js"></script>
<script type="text/javascript" src="./assets/js/paging.js"></script> 

</body>
</html>