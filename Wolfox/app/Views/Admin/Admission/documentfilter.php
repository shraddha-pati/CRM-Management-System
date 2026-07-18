 <!-- ============================================================== -->
 <!-- End Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->
 <!-- ============================================================== -->
 <!-- Page wrapper  -->
 <!-- ============================================================== -->
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
         <!-- ============================================================== -->
         <!-- Start Page Content -->
         <!-- ============================================================== -->
         <div class="row">

             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Student Document List</h4>
                         <div class="d-flex no-block justify-content-end align-items-center">
                             <!-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php //echo base_url('/Admin/Batch/Add')
                                                                                                        ?>" aria-expanded="false">
                             
                              <button type="button" class="btn waves-effect waves-light btn-infonew">Add Batch </button> 
                             </a> -->
                         </div>
                   <div>
                   <form action="<?php echo base_url('/Admin/Admission/documentfilter')?>">
                            <div class="row">
                                <div class="col-md-6"  style="margin-bottom:30px;">
                                        <label for="BatchTime">Batch </label>
                                        <select name="batchid" id="batchid" class="form-control">
                                            <option value="">Select Batch </option>
                                            <?php foreach ($BatchData as $row) : ?>
                                                <option value="<?php echo $row['batchid']; ?>">
                                                    <?php echo $row['batchname'] ; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                </div>
                                            
                                            <div class="col-md-2 " style="margin-top:25px;margin-bottom:30px;">

                                                        <button type="submit" class="form-control btn-primary">Filter</button>

                                             </div>



                                 </div>
                            </div>
                  </form>
                         <div class="table-responsive">
                             <table class="table" id="example">
                                 <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                     <tr>
                                         <th>Sr.no</th>
                                         <th>Action</th>
                                         <th>StudentID</th>
                                         <th>Student Name</th>
                                         <th>Adharcard</th>
                                         <th>College document</th>
                                         <th>ID Size Photo</th>
                                         <th>CV</th>
                                         <th></th>


                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($StudentData as $row):
                                        ?>
                                         <tr>
                                             <td><?php echo $row['id'] ?></td>
                                             <td>

                                                 <?php
                                                    if ($row['docstatus'] == 4) {



                                                    ?>
                                                     <form method="POST" action="<?= base_url('/Admin/Admission/documentverify') ?>">
                                                         <input type="text" name="id" id="id" value="<?= $row['id'] ?>" hidden>
                                                         <label for="status"> Choose Status:</label>
                                                         <select name="status" id="status<?php echo $row['id'] ?>" onchange="setRemark(<?php echo $row['id'] ?>)"
                                                             class="form-control"
                                                             style="border-radius:12px;width:150px;">
                                                             <option value="">Select</option>
                                                             <option value="1">Accept</option>
                                                             <option value="2">Decline</option>
                                                         </select>

                                                         <label for="remark" id="remarkLabel<?php echo $row['id'] ?>"
                                                             style="display:none;">Remark:</label>

                                                         <select name="remark" id="remark<?php echo $row['id'] ?>"
                                                             class="form-control"
                                                             style="border-radius:12px;width:150px; display:none;">
                                                             <option value="">Select</option>
                                                             <option value="1">Aadhar card is not valid.</option>
                                                             <option value="2">College Document is not valid.</option>
                                                             <option value="3">ID size photo is not valid.</option>
                                                             <option value="4">CV is not valid.</option>
                                                             <option value="5">Documents are not valid.</option>
                                                         </select>



                                                         <button class="form-control " type="submit" name="submit" style="margin-top: 20px;background-color:#5f86f0;color:white;border-radius:12px;width:150px">Submit</button>
                                                     </form>
                                                 <?php  } else if ($row['docstatus'] == 1) {
                                                    ?>

                                                     <p style="color:green;">Documents Verified <br> Succesfully!</p>

                                                 <?php } else if ($row['docstatus'] == 2) {


                                                    ?>
                                                     <?php if ($row['docremark'] == 1) {
                                                            echo ' <p style="color:red;">Adharcard is not Valid.</p>';
                                                        } else if ($row['docremark'] == 2) {
                                                            echo ' <p style="color:red;">College Document  is not Valid.</p>';
                                                        } else if ($row['docremark'] == 3) {
                                                            echo ' <p style="color:red;">ID size photo is not valid.</p>';
                                                        } else if ($row['docremark'] == 4) {
                                                            echo ' <p style="color:red;">CV is not valid.</p>';
                                                        } else if ($row['docremark'] == 5) {
                                                            echo ' <p style="color:red;"> Documents  are not Valid.</p>';
                                                        }


                                                        ?>
                                                 <?php } ?>


                                                 <script>
                                                     function setRemark() {
                                                         // alert("Hello");
                                                         var Status = $(`#status<?php echo $row['id'] ?>`).val();

                                                         console.log(Status);
                                                         if (Status == 2) {
                                                             var Reamrklable = $(`#remarkId<?php echo $row['id'] ?>`).css("display", "block");
                                                             var Remarktag = $(`#remark<?php echo $row['id'] ?>`).css("display", "block");
                                                         }
                                                         if (Status == 1) {
                                                             var Reamrklable = $("#remarkId").css("display", "none");
                                                             var Remarktag = $("#remark").css("display", "none");

                                                         }

                                                     }
                                                 </script>
                                             </td>

                                             <td><?php echo $row['StudentId'] ?></td>
                                             <td><?php echo $row['firstname'] . ' ' . ($row['middlename'] ?? '') . ' ' . $row['lastname']; ?></td>
                                             <td> <img src="<?= base_url('uploads/studentdocument/' . $row['id'] . '/' . $row['adharcard']) ?>" style="width: 150px; height: 150px; cursor: pointer;" onclick="showImageModal(this)"></td>
                                             <td> <img src="<?= base_url('uploads/studentdocument/' . $row['id'] . '/' . $row['clgdoc']) ?>" style="width: 150px; height: 150px; cursor: pointer;" onclick="showImageModal(this)"></td>
                                             <td> <img src="<?= base_url('uploads/studentdocument/' . $row['id'] . '/' . $row['profile']) ?>" style="width: 150px; height: 150px; cursor: pointer;" onclick="showImageModal(this)"></td>
                                             <td>
                                                 <?php if (!empty($row['resume']) && file_exists('uploads/studentdocument/' . $row['id'] . '/' . $row['resume'])): ?>
                                                     <a href="<?= base_url('uploads/studentdocument/' . $row['id'] . '/' . $row['resume']) ?>" target="_blank" class="btn btn-primary">View PDF</a>
                                                 <?php else: ?>
                                                     <p>No File </p>
                                                 <?php endif; ?>
                                             </td>
                                             <td></td>
                                         <?php
                                        endforeach;
                                            ?>
                                         <style>
                                             .modal-content {
                                                 border-radius: 15px;
                                                 box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                                             }

                                             .modal-header {
                                                 background-color: #2962ff;
                                                 color: white;
                                                 border-top-left-radius: 15px;
                                                 border-top-right-radius: 15px;
                                                 display: flex;
                                                 justify-content: space-between;
                                                 align-items: center;
                                             }

                                             .modal-body img {
                                                 max-width: 100%;
                                                 height: auto;
                                                 border-radius: 12px;
                                                 box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                                                 transition: transform 0.3s ease-in-out;
                                             }

                                             .modal-body img:hover {
                                                 transform: scale(1.05);
                                             }

                                             .btn-close {
                                                 background-color: white;
                                                 color: #2962ff;
                                                 border: 1px solid #2962ff;
                                                 padding: 5px 10px;
                                                 border-radius: 8px;
                                                 cursor: pointer;
                                                 transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
                                             }

                                             .btn-close:hover {
                                                 background-color: #2962ff;
                                                 color: white;
                                             }
                                         </style>


                                         <!-- Image Modal -->
                                         <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                                             <div class="modal-dialog modal-dialog-centered modal-lg">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <h5 class="modal-title">Image Preview</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeImageModal()">Close</button>
                                                     </div>
                                                     <div class="modal-body text-center">
                                                         <img id="modalImage" src="" class="img-fluid">
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <script>
                                             var imageModal;

                                             function showImageModal(img) {
                                                 document.getElementById("modalImage").src = img.src;
                                                 imageModal = new bootstrap.Modal(document.getElementById("imageModal"));
                                                 imageModal.show();
                                             }

                                             function closeImageModal() {
                                                 if (imageModal) {
                                                     imageModal.hide();
                                                 }
                                             }
                                         </script>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
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
         function setRemark(id) {
             let status = document.getElementById("status" + id).value;
             let remark = document.getElementById("remark" + id);
             let remarkLabel = document.getElementById("remarkLabel" + id);

             if (status == "2") {
                 remark.style.display = "block";
                 remarkLabel.style.display = "block";
             } else {
                 remark.style.display = "none";
                 remarkLabel.style.display = "none";
             }
         }
     </script>

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
     <!-- Bootstrap Modal -->
     <div class="modal fade" id="successModal1" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="successModalLabel">Notification</h5>
                 </div>
                 <div class="modal-body">
                     <?= session()->getFlashdata('update'); ?>
                 </div>
             </div>
         </div>
     </div>

     <!-- JavaScript to Show Modal -->
     <script>
         document.addEventListener("DOMContentLoaded", function() {
             <?php if (session()->getFlashdata('update')) : ?>
                 var successModal = new bootstrap.Modal(document.getElementById('successModal1'));
                 successModal.show();
                 setTimeout(() => {
                     successModal.hide();
                 }, 1500); // Auto-close after 3 seconds
             <?php endif; ?>
         });
     </script>