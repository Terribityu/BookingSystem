<script>
    tinymce.init({
        selector: '#blogbody',
        resize: false,
        plugins: 'autoresize',
        max_height: 500,
        min_height: 400,
        menubar: "edit format",
        setup: function(ed) {
            ed.on("keyup", function() {
                let blog = tinymce.activeEditor.getContent();
                if (blog == '') {
                    $('#btn_post').addClass('disabled');
                } else {
                    $('#btn_post').removeClass('disabled')
                }
            });
        },
    });
</script>

<div class="modal fade" id="editDestinationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i id="icon" class="las la-map"></i> Add Destinations</h5>
      </div>
      <div class="modal-body">
        <form id="editForm">
          <!-- <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">ID</div>
            </div>
            <input type="number" class="form-control" name="id" id="id" required  min="0"><span id="user-availability-status"></span>
          </div> -->
          
          <div class="input-group mb-2 mr-sm-2 image-upload d-flex justify-content-center">
            <label for="image">
              <img src="assets/img/upimg.png" id="preview"/>
            </label>
            <input type="file" class="form-control" id = "image" name="image">
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Name</div>
            </div>
            <input type="text" class="form-control" name="name" required>
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Inclusion</div>
            </div>
            <input type="text" class="form-control" name="inclusion" required >
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Description</div>
            </div>
            <input type="text" class="form-control" name="description" required>
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Price</div>
            </div>
            <input type="number" class="form-control" name="price" required>
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Trailer</div>
            </div>
            <input type="text" class="form-control" name="trailer" required>
          </div>
          <input hidden class="form-control" name="id">
      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-success" id="insert" />
          <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="editBlogsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i id="icon" class="las la-map"></i> Create New Blog</h5>
      </div>
      <div class="modal-body">
        <form id="tinyform">
          <label for="blogtitle" class="form-label">Title:</label>
          <input type="text" class="form-control" id="blogtitle" name="blogtitle" placeholder="Title" autocomplete="off" required>
          <label for="blogauthor" class="form-label">Author:</label>
          <input type="text" class="form-control" id="blogtitle" name="blogauthor" placeholder="Author" autocomplete="off" required>
          <label for="blogbody" class="form-label">Body:</label>
          <textarea id="blogbody" class="form-control" name="blogbody" placeholder="Type Here . . .">
          </textarea>
      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-success" id="insert" />
          <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>