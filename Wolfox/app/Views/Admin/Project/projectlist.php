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
                         <h4 class="card-title">Readymade Project  List</h4>
                         <div class="d-flex no-block justify-content-end align-items-center">
                             <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/Admin/Project/add') ?>" aria-expanded="false">

                                 <button type="button" class="btn waves-effect waves-light btn-infonew">Add Project </button>
                             </a>
                         </div>
                         <div class="table-responsive">
                             <table class="table" id="example">
                                 <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                     <tr>
                                         <th>Sr.no</th>
                                         <th>Action</th>

                                         <th>Student Name</th>
                                         <th>College Name</th>
                                         <th>WhatsApp Number</th>
                                         <th>Project Name</th>
                                         <th>Project Description</< /th>
                                         <th>Technology Used</th>
                                         <th>Cost</th>
                                         <th>Date</th>
                                         <th>Drive Link</th>
                                         
                                         
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($project as $row):
                                        ?>
                                         <tr>
                                             <td><?php echo $row['id'] ?></td>
                                             <td><a href="<?php echo base_url() . '/Admin/Project/delete/' . $row['id'] . '' ?>">
                                                     <div style="width: 60px; border:1px solid red;text-align:center;border-radius:5px;background-color: red !important;;color:white;margin-bottom:2px">Delete</div>
                                                 </a>
                                                 <a href="<?php echo base_url('/Admin/Project/edit/' . $row['id'] . '') ?>">
                                                     <div style="width: 60px; border:1px solid #2962ff;text-align:center;border-radius:5px;background-color: #2962ff !important;;color:white">Edit</div>
                                                 </a>
                                             </td>

                                             <td><?php echo $row['fullname'] ?></td>
                                             <td> <?php echo $row['collegename'] ?></td>
                                             <td> <?php echo $row['phonenumber'] ?></td>
                                             <td> <?php echo $row['projectname'] ?></td>
                                             <td> <?php echo $row['description'] ?></td>
                                             <td> <?php echo $row['technology'] ?></td>
                                             <td> <?php echo $row['cost'] ?></td>
                                             <td> <?php echo $row['date'] ?></td>
                                             <td> <a href="<?= esc($row['link']); ?>" target="_blank" style="color: blue; text-decoration: underline;">
        <?= esc($row['link']); ?>
    </a></td>
                                           
    
                                             
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
   