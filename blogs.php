
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
                                   <li class="nav-item">
                                       <a class="page-scroll" href="index.php#destinations">Destinations</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="page-scroll" href="index.php#about">About</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="page-scroll" href="index.php#team">Team</a>
                                   </li>
                                   <li class="nav-item active">
                                       <a class="page-scroll" href="#blog">Blog</a>
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

<!--====== BLOG PART START ======-->
    
<div class="container px-3 pt-120">
    <div class=" px-xl-3 py-3 my-3 text-center p-5 border rounded-3">

        <h2 class=" fw-bold border-bottom pb-3 mb-3">Welcome To The Blog!</h2>


        <div class="col-lg-6 mx-auto ">
            <button id="addblogs" type="button" class="btn btn-outline-dark w-75" data-bs-toggle="modal" data-bs-target="#editBlogsModal">
                Create Post
            </button>
        </div>
    </div>
</div>

<section id="blog" class="blog-area">
    <div class="container">
            <div id="display4" class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="./assets/img/blog-1.jpg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li>Posted By: <a href="#">Admin</a></li>
                                <li>03 June, 2023</li>
                            </ul>
                            <p class="text">Title</p>
                            <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single blog -->
                </div> 
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="blog-image">
                            <img src="./assets/img/blog-2.jpg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li>Posted By: <a href="#">Admin</a></li>
                                <li>03 June, 2023</li>
                            </ul>
                            <p class="text">Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod tempor invidunt labore.</p>
                            <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single blog -->
                </div> 
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="blog-image">
                            <img src="./assets/img/blog-3.jpg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li>Posted By: <a href="#">Admin</a></li>
                                <li>03 June, 2023</li>
                            </ul>
                            <p class="text">Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod tempor invidunt labore.</p>
                            <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single blog -->
                </div> 
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== BLOG PART ENDS ======-->
   <!-- ======= Sweet Alert ========= -->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <!--====== Jquery js ======-->
   <script src="./assets/js/jquery-1.12.4.min.js"></script>
   
   <!--====== Bootstrap js ======-->
   <script src="./assets/js/bootstrap.bundle.min.js"></script>
   <script src="./assets/js/bootstrap.min.js"></script>
   
   <!--====== Main js ======-->
   <script src="./assets/js/wow.min.js"></script>
   <script src="./assets/js/blogs.js"></script>
   
   
</body>

</html>
