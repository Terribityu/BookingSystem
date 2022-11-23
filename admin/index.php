<?php
require ('template/header.php');
require ('modals.php');
require ('database/connect.php');
?>

    <div id="page-content-wrapper">


    	
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
		<span class="h1"> <i class="las la-table"></i> Dashboard &nbsp</span>
        <!-- <button id="add" type="button" class="btn btn-success" data-toggle="modal" data-target="#editDestinationModal" data-tooltip="tooltip" title="Add Student" data-placement="right">
		<i class="la la-plus-circle"></i>
		</button> -->

		<!-- <form class="form-inline col-md-4 offset-md-3" >
			<i class="la la-search" style="font-size: 25px"></i>
			<input type="text" class="form-control form-control-sm ml-3 w-75" name="search_text" id="search_text" placeholder="Search..." >
		</form> -->
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
      <div class="container-fluid">

	  <div class="row">
                     <div class="col-lg-4 col-6 animated bounceInLeft">
                        <!-- small box -->
                        <div class="small-box bg-1">
                           <div class="inner">
                              <h3 id="destinationcount">8</h3>
                              <p>Destinations</p>
                           </div>
                           <div class="icon">
                              <i class="la la-map la-2x"></i>
                           </div>
                           <a href="destinations.php" class="small-box-footer">More info <i class="las la-arrow-circle-right"></i></a>
                        </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-4 col-6 animated rubberBand">
                        <!-- small box -->
                        <div class="small-box bg-2">
                           <div class="inner">
                              <h3 id="clientcount">20</h3>
                              <p>Clients</p>
                           </div>
                           <div class="icon">
                              <i class="la la-users la-2x"></i>
                           </div>
                           <a href="clients.php" class="small-box-footer">More info <i class="las la-arrow-circle-right"></i></a>
                        </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-4 col-6 animated bounceInRight">
                        <!-- small box -->
                        <div class="small-box bg-3">
                           <div class="inner">
                              <h3 id="incometotal">20,000</h3>
                              <p>Income</p>
                           </div>
                           <div class="icon">
                              <i class="la la-money-bill la-2x"></i>
                           </div>
                           <a href="#" class="small-box-footer">More info <i class="las la-arrow-circle-right"></i></a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-6 animated bounceInLeft">
                        <!-- small box -->
                        <div class="small-box bg-4">
                           <div class="inner">
                              <h3 id="ticketcount">8</h3>
                              <p>Tickets</p>
                           </div>
                           <div class="icon">
                              <i class="la la-ticket-alt la-2x"></i>
                           </div>
                           <a href="tickets.php" class="small-box-footer">More info <i class="las la-arrow-circle-right"></i></a>
                        </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-4 col-6 animated rubberBand">
                        <!-- small box -->
                        <div class="small-box bg-5">
                           <div class="inner">
                              <h3 id="blogstotal">8</h3>
                              <p>Blogs</p>
                           </div>
                           <div class="icon">
                              <i class="la la-blog la-2x"></i>
                           </div>
                           <a href="blogs.php" class="small-box-footer">More info <i class="las la-arrow-circle-right"></i></a>
                        </div>
                     </div>
                     <!-- ./col -->
                  </div>
<!-- 
		<div class="row">

                     <div class="col-lg-12 col-12">
                        <div class="small-box">
                           <div class="inner" style="background-color: #fff">
                              <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                           </div>
                        </div>
                     </div>
</div> -->

</div>
<!-- 
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
   animationEnabled: true,
   theme: "light2", // "light1", "light2", "dark1", "dark2"
   title:{
      text: "Monthly Sales"
   },
   axisY: {
      title: "Income"
   },
   data: [{        
      type: "column",  
      showInLegend: true, 
      legendMarkerColor: "grey",
      legendText: "MMbbl = one million barrels",
      dataPoints: [      
         { y: 70000, label: "January" },
         { y: 80000,  label: "February" },
         { y: 90000,  label: "March" },
         { y: 85000,  label: "April" },
         { y: 95000,  label: "May" },
         { y: 100000, label: "June" },
         { y: 110000,  label: "July" },
         { y: 99000,  label: "August" },
         { y: 120000,  label: "September" },
         { y: 130000,  label: "October" },
         { y: 140000,  label: "November" },
         { y: 145000,  label: "December" }
      ]
   }]
});
chart.render();

}
</script> -->
<!-- </div> -->
<?php
require ('template/footer.php');
?>