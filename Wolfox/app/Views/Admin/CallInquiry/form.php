  <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->

      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">

          <div class="row">
              <div class="col-12">
                  <div class="card">

                      <div class="row">
                          <div class="col-lg-12">
                              <div class="card">

                                  <form action="<?php echo base_url('/Admin/CallInquiry/Save') ?>" method="post" id="callform">
                                      <div class="card-body">
                                          <h4 class="card-title">Call Inquiry Form</h4>
                                      </div>
                                      <hr>
                                      <div class="form-body">
                                          <div class="card-body">
                                              <div class="row p-t-20">
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                          <label class="control-label">Phone Number</label>
                                                          <span id="spantag" style="display: none;color:red">Mobile Number Already Exist!</span>
                                                          <input oninput="checknumber();" type="text" pattern="[6-9][0-9]{9}" id="whatsappno" class="form-control" placeholder="" name="whatsappno"
                                                              title="Category  should only contain letters." required>
                                                          <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                      </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                      <div class="form-group has-danger">
                                                          <label class="control-label">Description</label>
                                                          <textarea type="text" id="Discription" name="Discription" class="form-control form-control-danger" cols="5" rows="5"></textarea>
                                                          <!-- <small class="form-control-feedback"> This field has error. </small> -->
                                                      </div>
                                                  </div>
                                                  <!--/span-->

                                                  <!--/span-->
                                              </div>
                                              <!--/row-->

                                              <!--/row-->


                                          </div>

                                          <div class="form-actions">
                                              <div class="card-body">
                                                  <button href="CategoryList.html" type="submit" class="btn btn-primary"> Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="popup1" style="display: none; position: fixed; top: 20%; left: 50%; transform: translate(-50%, -50%); background: rgba(240, 27, 27, 0.8); color: white; padding: 20px; border-radius: 10px;">
   <b> Mobile number already exists !</b>
</div>
                  <!-- Row -->
                  <!-- ============================================================== -->
                  <!-- End PAge Content -->
                  <!-- ============================================================== -->
                  <!-- ============================================================== -->
                  <!-- Right sidebar -->
                  <!-- ============================================================== -->
                  <!-- .right-sidebar -->
                  <!-- ============================================================== -->
                  <!-- End Right sidebar -->
                  <!-- ============================================================== -->
              </div>

              <!-- Bootstrap Modal -->
              <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="successModalLabel">Notification</h5>
                          </div>
                          <div class="modal-body">
                              <?= session()->getFlashdata('success'); ?>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- JavaScript to Show Modal -->
              <script>
                  document.addEventListener("DOMContentLoaded", function() {
                      <?php if (session()->getFlashdata('success')) : ?>
                          var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                          successModal.show();
                          setTimeout(() => {
                              successModal.hide();
                          }, 1000); // Auto-close after 3 seconds
                      <?php endif; ?>
                  });
              </script>

              <div class="modal fade" id="successModal1" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="successModalLabel">Notification</h5>
                          </div>
                          <div class="modal-body">
                              <?= session()->getFlashdata('phone'); ?>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- JavaScript to Show Modal -->
              <script>
                  document.addEventListener("DOMContentLoaded", function() {
                      <?php if (session()->getFlashdata('phone')) : ?>
                          var successModal = new bootstrap.Modal(document.getElementById('successModal1'));
                          successModal.show();
                          setTimeout(() => {
                              successModal.hide();
                          }, 1000); // Auto-close after 3 seconds
                      <?php endif; ?>
                  });
              </script>

              <script>
                  function checknumber() {
                      const phone = document.getElementById("PhoneNo").value;
                      console.log(phone);

                      $.ajax({
                          url: `<?php echo base_url('/Admin/Inquiry/checknumber/'); ?>${phone}`,
                          type: 'GET',
                          dataType: 'json',

                          success: function(response) {
                              console.log(response);

                              if (response.status === 'failed') {
                                  $("#spantag").css("display", "block");

                                  $("#callform").data("phone-exists", true);
                              } else if (response.status === 'success') {
                                  $("#spantag").css("display", "none");

                                  $("#callform").data("phone-exists", false);
                              }
                          }
                      });
                  }

                  $(document).ready(function() {
            $("#callform").on("submit", function(event) {
                if ($(this).data("phone-exists")) {
                    event.preventDefault();
                    // alert("Phone Number Already Exists");
                    showPopup1();
                }
            });
        });
              </script>

<script>
function showPopup1() {
    let popup = document.getElementById("popup1");
    popup.style.display = "block";

    setTimeout(() => {
        popup.style.display = "none";
    }, 1500); // 1000ms = 1 second
}
</script>