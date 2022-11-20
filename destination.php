
<?php
include("./template/header.php");
include("query/connect.php");
include("./modal.php");
?>
<body>
   
   <!--====== HEADER PART START ======-->
   
   <header class="header-area">
       <div class="navbar-area">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <nav class="navbar navbar-expand-lg">
                           <a class="navbar-brand" href="index.php">
                               <img src="./assets/logo/logo-white.png" alt="Logo">
                           </a>
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                               <span class="toggler-icon"></span>
                               <span class="toggler-icon"></span>
                               <span class="toggler-icon"></span>
                           </button>

                           <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                               <ul id="nav" class="navbar-nav ml-auto">
                                   <li class="nav-item">
                                       <a class="page-scroll" href="index.php#home">Home</a>
                                   </li>
                                   <li class="nav-item active">
                                       <a class="page-scroll" href="#destinations">Destinations</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="page-scroll" href="index.php#about">About</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="page-scroll" href="index.php#team">Team</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="page-scroll" href="index.php#blog">Blog</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="page-scroll" href="index.php#contactus">Contact Us</a>
                                   </li>
                               </ul>
                           </div> <!-- navbar collapse -->
                           
                           <div class="navbar-btn d-none d-sm-inline-block">
                               <a class="main-btn" data-scroll-nav="0" href="#booknow">Book Now</a>
                           </div>
                       </nav> <!-- navbar -->
                   </div>
               </div> <!-- row -->
           </div> <!-- container -->
       </div> <!-- navbar area -->
   
   <!--====== HEADER PART ENDS ======-->

<section id="destinations" class="services-area pt-120">
  <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Ready, Set, Gala!, <span> Comes with everything you need to get started!</span></h3>
                    </div> <!-- section title -->
                    <div class="p-2 ">
                        <form id="form" autocomplete="off" class="my-sm-3">
                            <input type="text" placeholder="Search . . ." id="search_destination" class=" form-control w-75 mx-auto" autocomplete="off">
                        </form>
                    </div>
                </div>
            </div> <!-- row -->
            <div id = "display3" class="row justify-content-center">
                
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
<?php
include("./template/footer.php");
?>
