 
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
                                <h4 class="card-title">Batch Time List</h4>
                                <div class="d-flex no-block justify-content-end align-items-center">
                             <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/Admin/Batch/Add')?>" aria-expanded="false">
                             
                             <button type="button" class="btn waves-effect waves-light btn-infonew">Add Batch </button>
                             </a>
                           </div>
                                 <div class="table-responsive">
                                    <table class="table" id="example">
                                        <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                            <tr>
                                                <th>Sr.no</th>
                                                <th>Action</th>
                                                 
                                                <th>Batch Name</th>
                                                <th>Month</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($BatchData as $row):
                                            ?>
                                            <tr>
                                                <td><?php echo $row['batchid'] ?></td>
                                                <td><a href="<?php echo base_url('/Admin/Batch/edit/'.$row['batchid'].'')?>"><div style="width: 60px; border:1px solid #2962ff;text-align:center;border-radius:5px;background-color: #2962ff !important;;color:white">Edit</div></a>
                                                <br>
                                                <a href="<?php echo base_url('/Admin/Batch/delete/'.$row['batchid'].'')?>"><div style="width: 60px; border:1px solid red;text-align:center;border-radius:5px;background-color: red !important;;color:white">Delete</div></a></td>
                                                 
                                                <td><?php echo $row['batchname'] ?></td> 
                                                <td> <?php echo $row['month'] ?></td>
                                                <td> <?php echo date("h:i A", strtotime($row['starttime'])) ?></td>
                                                <td> <?php echo date("h:i A", strtotime($row['endtime'])) ?></td>
                                                

                                                 

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
   