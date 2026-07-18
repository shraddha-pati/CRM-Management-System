
 <div class="page-wrapper">
     
     <div class="container-fluid">
         
         <div class="row">

             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Course List</h4>
                         <div class="d-flex no-block justify-content-end align-items-center">
                             <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/Admin/Course/Form')?>" aria-expanded="false">
                             
                             <button type="button" class="btn waves-effect waves-light btn-infonew">Add Course </button>
                             </a>
                           </div>
                         <div class="table-responsive">
                             <table class="table" id="example">
                                 <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                     <tr>
                                         <th class="text-center">Sr.no</th>
                                         <th>Action</th>

                                         <th>Course Name</th>
                                         <th>Duration</th>
                                         <th>Fee</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($CourseData as $row):
                                        ?>
                                         <tr>
                                             <td class="text-center"><?php echo $row['courseid'] ?></td>
                                             <td><a href="<?php echo base_url('/Admin/Course/Edit/' . $row['courseid'] . '') ?>">
                                                     <div style="width: 60px; border:1px solid #2962ff;text-align:center;border-radius:5px;background-color: #2962ff !important;;color:white">Edit</div>
                                                 </a></td>

                                             <td><?php echo $row['course'] ?></td>
                                             <td> <?php echo $row['duration'] ?></td>
                                             <td> <?php echo $row['fee'] ?></td>
                                  



                                         </tr>
                                     <?php
                                        endforeach;
                                        ?>

                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
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
                         <?= session()->getFlashdata('error'); ?>
                     </div>
                 </div>
             </div>
         </div>

         <!-- JavaScript to Show Modal -->
         <script>
             document.addEventListener("DOMContentLoaded", function() {
                 <?php if (session()->getFlashdata('error')) : ?>
                     var successModal = new bootstrap.Modal(document.getElementById('successModal1'));
                     successModal.show();
                     setTimeout(() => {
                         successModal.hide();
                     }, 2000); // Auto-close after 3 seconds
                 <?php endif; ?>
             });
         </script>

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

<div class="modal fade" id="successModal2" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
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
                var successModal = new bootstrap.Modal(document.getElementById('successModal2'));
                successModal.show();
                setTimeout(() => {
                    successModal.hide();
                }, 1000); // Auto-close after 3 seconds
            <?php endif; ?>
        });
    </script>



         <!-- row -->

         <!-- row -->
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
     <!-- ============================================================== -->
     <!-- End Container fluid  -->
     <!-- ============================================================== -->
     <!-- ============================================================== -->
     <!-- footer -->
     <!-- ============================================================== -->
     <!-- 