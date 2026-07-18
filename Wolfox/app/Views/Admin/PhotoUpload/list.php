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
                         <h4 class="card-title">Photo List</h4>
                         <div class="d-flex no-block justify-content-end align-items-center">
                             <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/Admin/photoupload/add') ?>" aria-expanded="false">

                                 <button type="button" class="btn waves-effect waves-light btn-infonew">Add Photo </button>
                             </a>
                         </div>
                         <div class="table-responsive">
                             <table class="table" id="example">
                                 <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                     <tr>
                                         <th>Sr.no</th>
                                         <th>Action</th>

                                         <th>Images</th>
                                         <th>Batch Name</th>
                                         <th>Category</th>
                                         <th>Date</th>
                                         <th>Date</th>








                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($image as $row): ?>
                                         <tr>
                                             <td><?php echo $row['id']; ?></td>
                                             <td>

                                                 <a href="<?= base_url('/Admin/photoupload/delete/' . $row['id']) ?>">
                                                     <div style="width: 60px; border:1px solid red; text-align:center; border-radius:5px; background-color: red; color:white">Delete</div>
                                                 </a>
                                             </td>
                                             <td>
                                                 <img src="<?= base_url('uploads/photo/' . $row['batch'] . '/' . $row['file_name']) ?>" style="width: 200px; height: 150px;">
                                             <td>
                                                 <?php echo $row['batchname'] . '  ' . date("h:i A", strtotime($row['starttime'])) . '-' . date("h:i A", strtotime($row['endtime'])) ?> </td>

                                             <td><?php echo $row['Category'] ?></td>
                                             <td><?php echo $row['date'] ?></td>
                                             <td><?php echo $row['date'] ?></td>

                                         </tr>
                                     <?php endforeach; ?>
                                 </tbody>

                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

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
    