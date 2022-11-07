
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
                               <img src="./assets/logo/logo.png" alt="Logo">
                           </a>
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                               <span class="toggler-icon"></span>
                               <span class="toggler-icon"></span>
                               <span class="toggler-icon"></span>
                           </button>

                           <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                               <ul id="nav" class="navbar-nav ml-auto">
                                   <li class="nav-item active">
                                       <a class="page-scroll" href="#home">Home</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="page-scroll" href="#destinations">Destinations</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="page-scroll" href="#about">About</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="page-scroll" href="#team">Team</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="page-scroll" href="#blog">Blog</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="page-scroll" href="#contactus">Contact Us</a>
                                   </li>
                               </ul>
                           </div> <!-- navbar collapse -->
                           
                           <div class="navbar-btn d-none d-sm-inline-block">
                               <a class="main-btn" data-scroll-nav="0" href="#destinations">Book Now</a>
                           </div>
                       </nav> <!-- navbar -->
                   </div>
               </div> <!-- row -->
           </div> <!-- container -->
       </div> <!-- navbar area -->
   
   <!--====== HEADER PART ENDS ======-->
   
   <!-- =========== CAROUSEL STARTS HERE ============= -->

   <div class="carousel-inner" id = "home">
				<div class="row">
					<!-- <div class="col-md-12 text-center">
						<h2 class="heading-section mb-5 pb-md-4">Carousel #09</h2>
					</div> -->
					<div class="col-md-12">
						<div class="hero featured-carousel owl-carousel">
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url(./assets/carousel/slider-1.jpg);">
                  <div class="header-hero-content carousel-caption d-md-block">
                    <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Ready, Set, Gala!</h3>
                    <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">A Destination For The New Millennium.</h2>
                    <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                  </div>
										
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url(./assets/carousel/slider-2.jpg);">
                    <div class="header-hero-content carousel-caption d-md-block">
                      <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Ready, Set, Gala!</h3>
                      <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Collect Memories.</h2>
                      <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                    </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url(./assets/carousel/slider-3.jpg);">
                  <div class="header-hero-content carousel-caption d-md-block">
                      <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Ready, Set, Gala!</h3>
                      <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Book Your Destination Now!</h2>
                      <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                      <a href="#" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Book Now</a>
                  </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

    </header>
      <!-- =========== CAROUSEL ENDS HERE ============== -->

  <!-- Main Content Area -->

  <section id="destinations" class="services-area pt-120">
  <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Ready, Set, Gala! <span> Comes with everything you need to get started!</span></h3>
                        <button type="button" id="allDest" class="destAdd btn btn-outline-dark know-more m-2 mt-0">Show More</button>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div id = "display3" class="row justify-content-center">
                
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Quick & Easy <span>choose your destination and travel.</span></h3>
                        </div> <!-- section title -->
                        <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
                        <!-- <a href="#" class="main-btn">Try it Free</a> -->
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="./assets/img/about1.svg" alt="Ready, Set, Gala!-About me 3">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="./assets/img/about-shape-1.svg" alt="shape">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="./assets/img/about-shape-2.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Ready, Set, Gala! <span> with package included</span></h3>
                        </div> <!-- section title -->
                        <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
                        <!-- <a href="#" class="main-btn">Try it Free</a> -->
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="./assets/img/about2.svg" alt="Ready, Set, Gala!-About me 2">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>Ready, Set, Gala!</span> Leading the way in adventure</h3>
                        </div> <!-- section title -->
                        <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
                        <a href="#" class="main-btn">Book Now</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="./assets/img/about3.svg" alt="Ready, Set, Gala!-About me 3">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="./assets/img/about-shape-1.svg" alt="shape">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== TEAM PART START ======-->
    
    <section id="team" class="team-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-30">
                        <div class="line m-auto"></div>
                        <h3 class="title"><span>Meet Our</span> Creative Team Members</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="./assets/img/team-1.png" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Mizzy Jenvy F. Manigque</a></h5>
                            <p class="text">Frontend Developer</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="./assets/img/team-2.png" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">John Rey D. Sto Domingo</a></h5>
                            <p class="text">Backend Developer</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="./assets/img/team-3.png" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Danna</a></h5>
                            <p class="text">Admin</p>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEAM PART ENDS ======-->
  
    
    <!--====== BLOG PART START ======-->
    
    <section id="blog" class="blog-area pt-120">
    <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-35">
                        <div class="line"></div>
                        <h3 class="title"><span>Our Recent</span> Blog Posts</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
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
                            <p class="text">Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod tempor invidunt labore.</p>
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
    
    <!--====== FOOTER PART START ======-->
    <section id = "contactus" class = "contactus-area pt-120">
    
    <footer class="footer-20192">
      <div class="site-section">
        <div class="container">

          <div class="cta d-block d-md-flex align-items-center px-5">
            <div>
              <h2 class="mb-0">Ready for a next project?</h2>
              <h3 class="text-dark">Let's get started!</h3>
            </div>
            <div class="ml-auto">
              <a href="#" id="cntactbtn" class="btn btn-dark rounded-0 py-3 px-5">Contact us</a>
            </div>
          </div>
          <div class="row">

            <div class="col-sm">
              <a href="#" class="footer-logo">Colorlib</a>
              <p class="copyright">
                <small>&copy; 2019</small>
              </p>
            </div>
            <div class="col-sm">
              <h3>Customers</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Buyer</a></li>
                <li><a href="#">Supplier</a></li>
              </ul>
            </div>
            <div class="col-sm">
              <h3>Company</h3>
              <ul class="list-unstyled links">
                <li><a href="#">About us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
            <div class="col-sm">
              <h3>Further Information</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3>Follow us</h3>
              <ul class="list-unstyled social">
                <li><a href="#"><span class="lni-facebook-filled"></span></a></li>
                <li><a href="#"><span class="lni-twitter-filled"></span></a></li>
                <li><a href="#"><span class="lni-linkedin-filled"></span></a></li>
                <li><a href="#"><span class="lni-medium"></span></a></li>
                <li><a href="#"><span class="lni-plane"></span></a></li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </footer>
    </section>
    
    <!--====== FOOTER PART ENDS ======-->


   <?php
include("./template/footer.php");
?>
