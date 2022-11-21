

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
                      <div class="col-lg-6 ml-4">
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
                          <li>
                            <span id="destInclu3"> Kalapati </span>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-4">
                            <p id="destPrice"> Price: </p>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-lg-11">
                      <p> Details: </p>
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
                    <div class="col-md-8 ">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" class="form-control" name="email" required>
                        <a id = "sendotp" class = "sendotp" href>Send OTP verication Code.</a>
                    </div>
                    <div class="col-md-4 ">
                        <label for="email" class="form-label">OTP:</label>
                        <input type="number" id="otp" class="form-control" name="otp" required disabled>
                    </div>
                    <div class="col-md-4 ">
                        <label for="nums" class="form-label">Number of Seats:</label>
                        <input type="number" class="form-control" name="nums" min="1" value="1" required>
                    </div>
                    <div class="col-md-4 ">
                        <label for="amount" class="form-label">Price:</label>
                        <input type="number" class="form-control" name="price" min="1" readonly>
                    </div>
                    <input type="hidden" name="destid" id="destid">
                    <input type="hidden" name="booknew" id="booknew" value="true">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="bnt_book">Book</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="contactModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactLabel"><i id="icon" class="lni-envelope"></i> Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="contactBody">
            <form id = "contactform">
              <!-- Name input -->
              <div class="form-outline mb-4">
                  <input type="text" id="form4Example1" name="name" class="form-control" required placeholder = "Name"/>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                  <input type="email" id="form4Example2" name="email" class="form-control" required placeholder = "Email"/>
              </div>

              <!-- Message input -->
              <div class="form-outline mb-2">
                  <textarea class="form-control" id="form4Example3" name="message" rows="4" required placeholder = "Message"></textarea>
              </div>

              <input type="hidden" id="btncontact" name="btncontact" value="new"/>
              
            </div>
            <div class="modal-footer"><!-- Submit button -->
              <input type="submit" class="btn btn-primary btn-block" value="Send"></input>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Blog Modal -->

  
<div class="modal fade" id="blogModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="blogLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content" id = "destContent">
          <div class="modal-header">
              <h5 class="modal-title text-center fw-bold" id="blogLabel"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                  <img class="img d-flex align-items-center justify-content-center" style="height:400px;" id="destImg" src="" alt="Destination">
                  <div class="container pt-10">
                    <div class="row justify-content-center">
                        <center>
                            <h3 id="blogTitle"> Title: </h3></center>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-lg-4">
                            <p id="blogAuthor"> Author: </p>
                      </div>
                      <div class="col-lg-4">
                            <p id="blogDate"> Date: </p>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-lg-11">
                      <p> Details: </p>
                            <p id="blogDesc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>

                       
            <div class="modal-footer" id="foot">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editBlogsModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i id="icon" class="las la-map"></i> Create New Blog</h5>
      </div>
      <div class="modal-body">
        <form id="blogform">
          <label for="blogtitle" class="form-label">Title:</label>
          <input type="text" class="form-control" id="blogtitle" name="blogtitle" placeholder="Title" autocomplete="off" required>
          <label for="blogauthor" class="form-label">Author:</label>
          <input type="text" class="form-control" id="blogauthor" name="blogauthor" placeholder="Author" autocomplete="off" required>
          <label for="blogdestination" class="form-label">Destination:</label>
          <select class="form-control" id="blogdestination" name="blogdestination" placeholder="Destination" autocomplete="off" required>
          </select>
          <label for="blogbody" class="form-label">Body:</label>
          <textarea rows="6" class="form-control" name="blogbody" placeholder="Type Here . . ."></textarea>
      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-success" id="insert" />
          <button type="button" class="btn btn-secondary" id="close" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>