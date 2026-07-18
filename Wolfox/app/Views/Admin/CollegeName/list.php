
 <div class="page-wrapper">

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
                         <h4 class="card-title">College Name List</h4>
                         <div class="d-flex no-block justify-content-end align-items-center">
                             <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/collegename/add') ?>" aria-expanded="false">

                                 <button type="button" class="btn waves-effect waves-light btn-infonew">Add College Name </button>
                             </a>
                         </div>
                         <div class="table-responsive">
                             <table class="table" id="example">
                                 <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                     <tr>
                                         <th >Sr.no</th>
                                         <th >Action</th>
                                         <th >College Name</th>
 

                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($CollegeData as $row):
                                        ?>
                                         <tr>
                                             <td><?php echo $row['id'] ?></td>

                                             <td><a href="<?php echo base_url('/collegename/edit/' . $row['id'] . '') ?>">
                                                     <div style="width: 60px; border:1px solid #2962ff;text-align:center;border-radius:5px;background-color: #2962ff !important;;color:white">Edit</div>
                                                 </a>
                                                 <br>
                                                 <a href="<?php echo base_url('/collegename/delete/' . $row['id'] . '') ?>">
                                                     <div style="width: 60px; border:1px solid red;text-align:center;border-radius:5px;background-color: red !important;;color:white">Delete</div>
                                                 </a>
                                             </td>
                                             <td><?php echo $row['collegename'] ?></td>
 




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
    