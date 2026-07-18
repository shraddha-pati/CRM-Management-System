 
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
                                <h4 class="card-title">Student Call Inquiry List</h4>
                                 <div class="table-responsive">
                                 <div class="d-flex no-block justify-content-end align-items-center">
                             <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/Admin/CallInquiry/Form')?>" aria-expanded="false">
                             
                             <button type="button" class="btn waves-effect waves-light btn-infonew">Add Inquiry </button>
                             </a>
                           </div>
                                    <table class="table" id="example">
                                        <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                            <tr>
                                                <th>Sr.no</th>
                                                <th>Action</th>
                                                <!-- <th>Status</th> -->
                                                <th>Discription</th>
                                                <th>Mobile No.</th>
                                                <!-- <th>Mobile No.</th> -->

                                                 






                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($CallData as $row):
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php if ($row['status'] == '2') { ?>
                                                                <a style="text-decoration:none" href="<?= base_url('/Admin/Inquiry/delete/' . $row["id"]) ?>">
                                                                    <div style="width:100px;text-align:center;border:1px solid red;background-color:red;color:white;border-radius:10px">
                                                                        Delete
                                                                    </div>
                                                                </a>
                                                            <?php } elseif ($row['status'] == '0') { ?>
                                                                <!-- Corrected modal trigger -->
                                                                <a href="#" class="openModalBtn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"
                                                                    data-id="<?= $row['id']; ?>"
                                                                     >
                                                                     <div style="display:flex">                                                                   <div style="width:100px;text-align:center;border:1px solid orange;background-color:orange;color:white;border-radius:10px">
                                                                        Pending
                                                                                
                                                                    </div>
                                                                    <div>
                                                                     <?php

                                                                        $currentDate = date('Y-m-d');  // Format: YYYY-MM-DD


                                                                        if ($row['status'] == '0' &&  $row['nextdate'] == $currentDate) {
                                                                            echo '<img src="' . base_url('uploads/green-dot.gif') . '" height="25px" alt="ashgk">';
                                                                        }

                                                                        ?>

                                                                 </div>
                                                                    </div>
                                                                    
                                                                </a>
                                                            <?php } else { ?>
                                                                <a style="text-decoration:none" href="<?= base_url('/Admin/Admission/Admit/' . $row["id"]) ?>">
                                                                    <div style="width:100px;text-align:center;border:1px solid green;background-color:green;color:white;border-radius:10px">
                                                                        Admit
                                                                    </div>
                                                                </a>
                                                            <?php } ?></td>
                                                

                                                <td> <?php echo $row['discription'] ?> <span> <br><br><small style="text-align: center;">
                                                <?php echo !empty($row['nextdate']) ? $row['nextdate'] : (!empty($row['inquirydate']) ? $row['inquirydate'] : ''); ?>
                                                </small></span></td>
                                                <td><?php echo $row['whatsappno'] ?></td> 
                                                <!-- <td><?//sphp echo $row['phoneno'] ?></td>  -->


                                            </tr>
                                            <?php 
                                            endforeach;
                                            ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Pending Inquiry</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                </div>
                                                <form action="<?php echo base_url('/Admin/Inquiry/save')?>" method="post">
                                                <div class="modal-body">
                                                     <input type="text" class="form-control" name="id" id="id" placeholder="" readonly hidden>

                                                    <!-- <p><b>Full Name:</b> <span id="inquiryFullName"></span></p> -->
                                                    <div class="form-floating mb-2">
                                                        <label for="exampleInputPassword1">Status </label>
                                                        <select name="Status" id="Status" class="form-control">
                                                            <option>select option</option>
                                                            <option value="1">Confirm</option>
                                                            <option value="0">Pending</option>
                                                            <option value="2">Reject</option>

                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="exampleInputPassword1">Remark</label>
                                                        <input type="text" class="form-control" name="Remark" id="Remark" placeholder="Remark">

                                                    </div>
                                                    <div>
                                                        <label for="exampleInputPassword1">Date</label>
                                                        <input type="date" class="form-control" name="Date" id="Date" >

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                                </form>
                                                
                                            </div>
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
    document.addEventListener("DOMContentLoaded", function () {
        <?php if (session()->getFlashdata('success')) : ?>
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
            setTimeout(() => {
                successModal.hide();
            }, 1500); // Auto-close after 3 seconds
        <?php endif; ?>
    });
</script>
<!--                  
<script>
	new DataTable('#example', {
    layout: {
        topStart: {
            buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                
				 {
                    extend: 'copy',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
				
				 {
                    extend: 'pdf',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
				
				 {
                    extend: 'csv',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
				
                 
                  'colvis'
                    
                
				
    
			
				
            ]
        }
    },
    select: true,
	columnDefs: [
        {
            targets: -1,
            visible: false
        }
    ]
});
    </script> -->
   
                
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
             
            <script>
            $(document).ready(function() {
                $(".openModalBtn").on("click", function() {
                    var inquiryId = $(this).data("id");
 
                    console.log("Opening modal for Inquiry ID:", inquiryId);

                    // Update modal fields dynamically
                     $("#id").val(inquiryId);

 
                    // Open modal
                    $("#exampleModal").modal("show");
                });

                // Ensure close button works
                $(".btn-close").on("click", function() {
                    $("#exampleModal").modal("hide");
                });
            });
        </script>
            