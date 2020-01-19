<!-- hooking navbar -->
<?php include_once(APPPATH.'/views/layouts/navbar.php')?>

<!-- submit message -->
<?php 
    if($this->session->flashdata('success_msg')){
?>
    <div class="alert alert-success">
       <?php echo $this->session->flashdata('success_msg'); ?>
    </div>
<?php    
    }
?>

<?php 
    if($this->session->flashdata('error_msg')){
?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('error_msg'); ?>
    </div>
<?php    
    }
?>

<!-- homepage -->
<section class="page-section" id="submitcontact">
    <form method="post" action="<?php echo base_url('blog/submit'); ?>" name="frmcontact">
        <!-- starts here -->
        <div class="container contact">
          <div class="row">
            <div class="col-md-3">
              <div class="contact-info">
                <img
                  src="https://image.ibb.co/kUASdV/contact-image.png"
                  alt="image"
                />
                <h2>CRUD CodeIgniter 3.1.11</h2>
                <h4>sample contact form !</h4>
              </div>
            </div>
            <div class="col-md-9">
              <div class="contact-form">
                <div class="form-group">
                  <label class="control-label col-sm-2">Author:</label>
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      name="txtauthor"
                      placeholder="Author Name"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Category:</label>
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      name="txtcategory"
                      placeholder="Enter Category"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Title:</label>
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      name="txttitle"
                      placeholder="Enter Title"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Date:</label>
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      name="txtdate"
                      placeholder="Date"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Comment:</label>
                  <div class="col-sm-10">
                    <textarea
                      class="form-control"
                      rows="5"
                      name="txtcomment"
                    ></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btnSComment" class="btn btn-default" value="Save">
                      Submit Comment
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </form>
    </form>
</section>

