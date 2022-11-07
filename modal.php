
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header ftco-degree-bg">
		    <button type="button" class="close d-flex align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
		      <span aria-hidden="true" class="ion-ios-close"></span>
	        </button>
	      </div>
		    <div class="modal-body1 pt-md-0 pb-md-5 text-center">
		  	<h2>You've Got Mail!</h2>
	      	<div class="icon d-flex align-items-center justify-content-center">
	      		<img src="./assets/img/email.svg" alt="" class="img-fluid">
		    </div>
		  	<h4 class="mb-2">We sent confirmation link to:</h4>
	      	<h3>johndoe<span>@</span>gmail.com</h3>

		    </div>
		</div>
	  </div>
	</div>
  
<div class="modal fade" id="myNav" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myNavLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content" id = "destContent">
          <div class="modal-header">
              <h5 class="modal-title text-center fw-bold" id="myNavLabel"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                  <iframe class="img d-flex align-items-center justify-content-center" style="height:400px;" id="ifrmYT" src="" alt="youtube.com"></iframe>
                  <div class="container pt-10">
                    <div class="row justify-content-center">
                      <div class="col-lg-1">
                            <p> Inclusions: </p>
                      </div>
                      <div class="col-lg-4 ml-4">
                        <ul>
                        <li>
                            <span id="destInclu"> Kalapati </span>
                          </li>
                          <li>
                            <span id="destInclu1"> Kalapati </span>
                          </li>
                          <li>
                            <span id="destInclu2"> Kalapati </span>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-4">
                            <p id="destPrice"> Price: </p>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-lg-11">
                            <p id="destDesc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>

                       
            <div class="modal-footer" id="foot">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="bookNow" value="" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#bookModal">Book</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="bookModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bookLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="bookBody">
                <form class="row g-3" id="bookForm">
                    <div class="col-md-6">
                        <label for="fname" class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="fname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lname" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="lname" required>
                    </div>
                    <div class="col-md-12 ">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-4 ">
                        <label for="nums" class="form-label">Number of Seats:</label>
                        <input type="number" class="form-control" name="nums" min="1" value="1" required>
                    </div>
                    <div class="col-md-4 ">
                        <label for="amount" class="form-label">Price:</label>
                        <input type="number" class="form-control" name="price" min="1" readonly>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="bnt_book">Book</button>
                </form>
            </div>
        </div>
    </div>
</div>
