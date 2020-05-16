
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title content-header"  id="exampleModalLongTitle">ADD NEW INSTRUCTOR</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/instructor" method="POST">
          {{csrf_field()}}
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name" name="instructor_name" required>
            <!-- <label for="recipient-name" class="col-form-label">Rank:</label>
            <input type="text" class="form-control" id="recipient-name">
            <label for="recipient-name" class="col-form-label">Expertise:</label>
            <input type="text" class="form-control" id="recipient-name">
            <label for="recipient-name" class="col-form-label">Max Units:</label>
            <input type="text" class="form-control" id="recipient-name">
            <img src="">
            <button type="button" class="btn btn-primary">UPLOAD</button> -->
             <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">ADD</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="Details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">INSTRUCTOR PROFILE</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <form class="md-form">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="file-field">
                            <div class="mb-4">
                              <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                            </div>
                            <div class="d-flex justify-content-center">
                              <div class="btn btn-mdb-color btn-rounded float-left">
                              </div>
                            </div>
                            <button type="button" class="btn btn-info">UPLOAD</button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h2>INSTRUCTOR BACKGROUD GOES HERE</h2>
                    </div> 
                </div>
                <br><br>
                <strong>NAME: CHRISTIAN L. MATANGCAS</strong><br>
                <strong>RANK: 1</strong><br>
                <strong>EXPERTISE: PROGRAMMING</strong><br>
                <strong>MAX UNITS: 18</strong><br>
               <!--  <strong>NAME: CHRISTIAN L. MATANGCAS</strong><br> -->
                <img src=""> 
            </form>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">EDIT</button>
      </div>
    </div>
  </div>
</div>

