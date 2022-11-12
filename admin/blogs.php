<?php
require ('template/header.php');
require ('modals.php');
require ('database/connect.php');
?>

    <div id="page-content-wrapper">


    	
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
		<span class="h1"> <i class="la la-map"></i> Blogs &nbsp</span>
        <button id="addblogs" type="button" class="btn btn-success" data-toggle="modal" data-target="#editBlogsModal" data-tooltip="tooltip" title="Create Blog" data-placement="right">
		<i class="la la-plus-circle"></i>
		</button>
		<button id="pendingblogs" type="button" class="ml-3 btn btn-primary" title="Pending" data-placement="right" value="active">
		<!-- <i class="la la-plus-circle"></i> -->Pending
		</button>
		<button id="approvedblogs" type="button" class="ml-3 btn btn-outline-primary" title="Approved" data-placement="right">
		<!-- <i class="la la-plus-circle"></i> -->Approved
		</button>

		<form class="form-inline col-md-4 offset-md-3" >
			<i class="la la-search" style="font-size: 25px"></i>
			<input type="text" class="form-control form-control-sm ml-3 w-75" name="search_blogs" id="search_blogs" placeholder="Search..." >
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

<div id="viewBlogs">
	<table id="mytable" class="table table-hover">
		<thead class="thead-dark">
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Author</th>
				<th>Destination</th>
				<th>Description</th>
				<th>Date</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</div>
</div>
</div>

<script src="./assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="./assets/js/blogs.js"></script>
<script type="text/javascript" src="./assets/js/paging.js"></script> 

</body>
</html>