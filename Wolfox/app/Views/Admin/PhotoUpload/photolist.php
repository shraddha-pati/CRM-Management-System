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
                         <!-- <div class="d-flex no-block justify-content-end align-items-center">
                             <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/Admin/photoupload/add') ?>" aria-expanded="false">

                                 <button type="button" class="btn waves-effect waves-light btn-infonew">Add Photo </button>
                             </a>
                         </div> -->
                         <div class="table-responsive">
                             <table class="table" id="example">
                                 <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                     <tr>
                                    
                                         <!-- <th>Sr.no</th> -->
                                         <th>Action</th>
                                         <th>Images</th>
                                         <th>Batch Timing</th>
                                         <th>Category</th>
                                         <th>Date</th>
                                         <th>Date</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                 <?php foreach ($image as $row): ?>
    <?php if ($row['photostatus'] != 3): ?> 
        <tr>
            <td>
                <?php if ($row['photostatus'] == 1): ?>
                    <form method="POST" action="<?= base_url('/Admin/photoupload/verifyPhotos') ?>">
                        <input type="text" name="id" value="<?= $row['id'] ?>" hidden>
                        <label for="status">Choose Status:</label>
                        <select name="status" id="status" onchange="setRemark()" class="form-control" style="border-radius:12px;width:150px">
                            <option>Select</option>
                            <option value="2">Accept</option>
                            <option value="3">Decline</option>
                        </select>
                        <label for="remark" id="remarkId" style="display:none;">Remark:</label>
                        <select name="remark" id="remark" class="form-control" style="border-radius:12px;width:150px;display:none;">
                            <option value="">Select</option>
                            <option value="1">Photo is not valid.</option>
                        </select>
                        <button class="form-control" type="submit" name="submit" style="margin-top: 20px;background-color:#5f86f0;color:white;border-radius:12px;width:150px">
                            Submit
                        </button>
                    </form>
                <?php elseif ($row['photostatus'] == 2): ?>
                    <p style="color:green;">Photo Verified <br> Successfully!</p>
                <?php endif; ?>
            </td>

            <td>
                <img src="<?= base_url('uploads/photo/' . $row['batch'] . '/' . $row['file_name']) ?>" style="width: 200px; height: 150px;">
            </td>
            <td><?= $row['batchname']; ?></td>
            <td><?= $row['Category']; ?></td>
            <td><?= $row['date']; ?></td>
            <td><?= $row['date']; ?></td>
        </tr>
    <?php endif; ?>
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
     <script>
         new DataTable('#example', {
             layout: {
                 topStart: {
                     buttons: ['excelHtml5', 'pdfHtml5']
                 }
             },
             select: true,
             columnDefs: [{
                 targets: -1,
                 visible: false
             }]

         });
     </script>



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

<script>
       function setRemark(){
            // alert("Hello");
        var Status = $("#status").val();
       //alert(Status);exit;
       if(Status == 2)
       {
            var Reamrklable = $("#remarkId").css("display","block");
            var Remarktag = $("#remark").css("display","block");
       }
       if(Status == 3)
       {
        var Reamrklable = $("#remarkId").css("display","none");
        var Remarktag = $("#remark").css("display","none");

       }

        }

    </script>

     