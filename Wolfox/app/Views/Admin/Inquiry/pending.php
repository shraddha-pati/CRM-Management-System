<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">

                <div class="d-flex align-items-center">

                </div>
            </div>

        </div>

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Student Inquiry List</h4>
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <!-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<? //php echo base_url('/Admin/Inquiry/add') 
                                                                                                        ?>" aria-expanded="false">

                                     <button type="button" class="btn waves-effect waves-light btn-infonew">Add Inquiry </button>
                                 </a> -->
                            </div>
                            <div class="table-responsive">
                                <table class="table display" id="example" style="width:100%">
                                    <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                        <tr>
                                            <th scope="col">Sr.no</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">InquiryDate</th>


                                            <!-- <th scope="col">Status</th> -->
                                            <th scope="col">Remark</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">WhatsappNumber</th>

                                            <!-- <th scope="col">MiddleName</th>
                                                    <th scope="col">LastName</th> -->
                                            <th scope="col">College Name</th>
                                            <th scope="col">College Vilage</th>

                                            <th scope="col">Branch</th>
                                            <th scope="col">Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($Inquiry as $row): ?>
                                            <?php //if (!empty($row['nextdate']) ) 
                                            //print_r($Inquiry);

                                              $cdate = date('Y-m-d');

                                            if (!empty($row['nextdate']) && $row['nextdate'] <= $cdate){ ?>
                                                 <tr>
                                                    <td><?= $row['id'] ?></td>

                                                    <td>
                                                        <?php if ($row['status'] == '2') { ?>
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
                                                                data-firstname="<?= $row['firstname']; ?>">
                                                                <div class="" style="display: flex;">
                                                                    <div style="width:100px;text-align:center;border:1px solid orange;background-color:orange;color:white;border-radius:10px">
                                                                        Pending
                                                                    </div>
                                                                    <div>
                                                                        <?php

                                                                        $currentDate = date('Y-m-d');  // Format: YYYY-MM-DD


                                                                        if ($row['status'] == '0' &&  $row['nextdate'] <= $currentDate) {
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
                                                        <?php } ?>
                                                    </td>
                                                    <td><?php echo $idate = date('Y-m-d', strtotime($row['inquirydate'])) ?></td>

                                                    <!-- <td>
                                                            <?php if ($row['status'] == '0') { ?>
                                                                <span><b style="color:orange">Pending</b>
                                                               </span>
                                                            <?php } elseif ($row['status'] == '2') { ?>
                                                                <b style="color:red">Canceled</b>
                                                            <?php } else { ?>
                                                                <b style="color:green">Confirm</b>
                                                            <?php } ?>
                                                        </td> -->
                                                    <td><?= $row['remark'] ?> <span> <br><br><small style="text-align: center;"><?php echo $row['nextdate'] ?></small></span></td>

                                                    <td><?= $row['firstname'] ?> <?= $row['middlename'] ?> <?= $row['lastname'] ?></td>
                                                    <td><?= $row['whatsappno'] ?></td>

                                                    <td><?= $row['collegename'] ?></td>
                                                    <td><?= $row['collegevillage'] ?></td>
                                                    <td><?= $row['branchname'] ?></td>
                                                    <td><?= $row['year'] ?></td>
                                                </tr>
                                            <?php } ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Pending Inquiry</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <form action="<?php echo base_url('/Admin/Admission/Save') ?>" method="post">
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
                                                    <input type="date" class="form-control" name="Date" id="Date">

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
        </div>

        <footer class="footer text-center">
            All Rights Reserved by Xtreme admin. Designed and Developed by <a href="https://wrappixel.com/">WrapPixel</a>.
        </footer>

    </div>

</div>


<div class="chat-windows"></div>

<script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="../../dist/js/app.min.js"></script>
<script src="../../dist/js/app.init.js"></script>
<script src="../../dist/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="../../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../../dist/js/custom.min.js"></script>
<!-- <script>
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
<!-- JavaScript to ensure modal opens when clicking Pending -->
<script>
    $(document).ready(function() {
        $(".openModalBtn").on("click", function() {
            var inquiryId = $(this).data("id");
            var inquiryFullName = $(this).data("fullname");

            console.log("Opening modal for Inquiry ID:", inquiryId);

            // Update modal fields dynamically
            $("#id").val(inquiryId);

            $("#inquiryFullName").text(inquiryFullName);

            // Open modal
            $("#exampleModal").modal("show");
        });

        // Ensure close button works
        $(".btn-close").on("click", function() {
            $("#exampleModal").modal("hide");
        });
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






</body>


<!-- Mirrored from themedesigner.in/demo/wrappixel/admin-template/xtreme/html/ltr/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 05:50:18 GMT -->

</html>