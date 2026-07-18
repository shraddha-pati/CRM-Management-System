<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<style>
    .icon-link {
        display: inline-block;
        margin: 5px;
        text-align: center;
        margin: 20px;
    }

    .icon-link i {
        font-size: 26px;
        color: black;
        transition: color 0.3s ease;
    }

    .icon-link i:hover {
        color: #1e4db7;
    }

    .modal-header {
        background-color: #2962ff;
        color: white;
    }

    .modal-body p {
        margin-bottom: 10px;
    }

    .modal-body p span {
        font-weight: bold;
    }

    .modal-content {
        border-radius: 10px;
    }

    .btn-close {
        color: white;
        background: none;
        border: none;
    }

    .btn-close:hover {
        color: #ff0000;
    }
</style>
<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Student List</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>StudentID</th>
                                        <th>Action</th>
                                        <th>Letters</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Mob No.</th>
                                        <th>Whatsapp No. </th>
                                        <!-- <th>Gender</th>
                                        <th>DOB</th>
                                        <th>Address</th> -->
                                        <th>College Name</th>
                                        <!-- <th>Branch</th> -->
                                        <!-- <th>Year</th>
                                        <th>Course </th> -->
                                        <!-- <th>Total Fee</th>
                                        <th>Paid Fee</th>
                                        <th>Remaining Fee</th>
                                        <th>Mode</th>
                                        <th>Transaction Id</th>
                                        <th>Batch Time</th>
                                        <th>Joining Date</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($StudentData as $row):
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td> 
                                            <td><?php echo $row['StudentId'] ?></td>

                                            <td>
                                                <div class="row" style="display: flex; justify-content:space-around;">
                                                    <a href="<?php echo base_url('/Admin/Admission/Edit/' . $row['id'] . '') ?>">
                                                        <div style="text-align:center;font-size:20px;"><i class="fa-regular fa-pen-to-square"></i></div>
                                                    </a>
                                                    <a href="" class="openFeeStatusModal"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                        data-id="<?= $row['id']; ?>"
                                                        data-firstname="<?= $row['firstname']; ?> <?= $row['middlename']; ?> <?= $row['lastname']; ?>."
                                                        data-fee="<?= $row['fee']; ?>">
                                                        <div style="text-align:center;font-size:20px;color:blue">
                                                            <i class="fa-solid fa-indian-rupee-sign"></i>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="openStudentInfoModal"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#studentInfoModal"
                                                        data-id="<?= $row['id']; ?>"
                                                        data-firstname="<?= $row['firstname']; ?>"
                                                        data-middlename="<?= $row['middlename']; ?>"
                                                        data-lastname="<?= $row['lastname']; ?>"
                                                        data-email="<?= $row['email']; ?>"
                                                        data-phoneno="<?= $row['phoneno']; ?>"
                                                        data-whatsappno="<?= $row['whatsappno']; ?>"
                                                        data-address="<?= $row['cstreet']; ?><?= $row['ccity']; ?><?= $row['cpincode']; ?><?= $row['cstate']; ?>"
                                                        data-paddress="<?= $row['pstreet']; ?><?= $row['pcity']; ?><?= $row['ppincode']; ?><?= $row['pstate']; ?>"
                                                        data-college="<?= $row['college']; ?>"
                                                        data-village="<?= $row['collegevillage']; ?>"
                                                        data-branch="<?= $row['branch']; ?>"
                                                        data-year="<?= $row['year']; ?>"
                                                        data-course="<?= $row['course']; ?>"
                                                        data-batch="<?= $row['batchname']; ?>"
                                                        data-joining="<?php echo $jdate = date('d-m-Y', strtotime($row['joiningdate'])); ?>"
                                                        data-fee="<?= $row['fee']; ?>"
                                                        data-feepaid="<?= $row['paidfee']; ?>"
                                                        data-inquiry="<?php echo $idate = date('d-m-Y', strtotime($row['inquirydate'])); ?>">
                                                        <div style="text-align:center;font-size:20px;">
                                                            <i class="fa-solid fa-info"></i>
                                                        </div>
                                                    </a>
                                                    <!-- data-remainingfee="<?// $row['remaining_fee']; ?>"  -->

                                                </div>
                                            </td>
                                            <td>
                                                <div style="display: flex; justify-content:space-between">
                                                    <?php
                                                    if ($row['paidfee'] > 0 && ($row['paidfee'] < $row['totalfee'])) {
                                                    ?>
                                                        <a href="<?php echo base_url('/Admin/Admission/joiningletter/' . $row['id']) ?>" target="_blank">
                                                            <i class="fa-solid fa-file" style="font-size:22px; " class="icon-link"></i>
                                                        </a>
                                                    <?php } else if ($row['paidfee'] == $row['totalfee']) { ?>
                                                        <a href="<?php echo base_url('/Admin/Admission/joiningletter/' . $row['id']) ?>" target="_blank">
                                                            <i class="fa-solid fa-file" style="font-size:22px; " class="icon-link"></i>
                                                        </a>
                                                        <a href="<?php echo base_url('uploads/Document/2/completionletter.docx') ?>" target="_blank">
                                                            <i class="fa-solid fa-scroll" style="font-size:22px; " class="icon-link"></i>
                                                        </a>
                                                    <?php } else echo '<p> NA </p>' ?>
                                                </div>
                                            </td>
                                            <td><?php echo $row['firstname'] ?> <?php echo $row['middlename'] ?> <?php echo $row['lastname'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phoneno'] ?></td>
                                            <td> <?php echo $row['whatsappno'] ?></td>
                                            <!-- <td><?php echo $row['gender'] ?></td>
                                            <td><?php echo $row['dob'] ?></td>
                                            <td><?php echo $row['pstreet'] ?>,<?php echo $row['pcity'] ?>,
                                                <?php echo $row['pstate'] ?>-<?php echo $row['ppincode'] ?>
                                            </td> -->
                                            <td><?php echo $row['college'] ?></td>
                                            <!-- <td><?php echo $row['branch'] ?></td> -->
                                            <!-- <td><?php echo $row['year'] ?></td>
                                            <td><?php echo $row['course'] ?></td> -->
                                            <!-- <td><?php echo $row['fee'] ?></td>
                                            <td><?php echo $row['paidfee'] ?></td>
                                            <td><? //php echo  $row['totalfee'] - $row['paidfee'] 
                                                ?></td>
                                            <td><?php echo $row['mode'] ?></td>
                                            <td><?php echo $row['transactionid'] ?></td>
                                            <td><?php echo date("h:i A", strtotime($row['starttime'])) . ' - ' . date("h:i A", strtotime($row['endtime'])) ?></td>
                                            <td><?php echo $row['joiningdate'] ?></td> -->

                                        </tr>
                                    <?php
                                    endforeach;
                                    ?>

                                </tbody>
                            </table>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Fee Status</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                    </div>
                                    <form action="<?php echo base_url('/Admin/Admission/SaveFee') ?>" method="post">
                                        <div class="modal-body">
                                            <input type="hidden" class="form-control" name="sid" id="sid" readonly>
                                            <br>
                                            <p><b>Name:</b> <span id="inquiryfirstname"></span></p>

                                            <div class="form-floating mb-2">
                                                <div class="row">
                                                    <div class="col-md-6" id="totalFeeContainer">
                                                        <div class="form-group">
                                                            <label for="totalfee">Total Fee</label>
                                                            <input type="text" class="form-control" name="totalfee" id="totalfee" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" id="paidFeeContainer">
                                                        <div class="form-group">
                                                            <label for="firstinstallment">First Installment</label>
                                                            <input type="text" class="form-control" name="firstinstallment" id="firstinstallment" readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row" id="remainingFeeRow" style="display:none;">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="remainingfee">Remaining Fee</label>
                                                            <input type="text" class="form-control" name="remainingfee" id="remainingfee" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="installment">Next Installment</label>
                                                            <input type="text" class="form-control" name="installment" id="installment" placeholder="Enter Installment">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Mode of Payment:</label>
                                                    <select class="form-control custom-select" name="mode" id="mode">
                                                        <option value="">--Select Payment Mode--</option>
                                                        <option value="online">Online</option>
                                                        <option value="cash">Cash</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="transactionIdContainer" style="display: none;">
                                                        <label for="transactionid">Transaction Id <span>(if mode is online)</span></label>
                                                        <input type="text" class="form-control" name="transactionid" id="transactionid" placeholder="Enter Transaction Id">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" id="saveChangesButton" class="btn btn-primary">Save changes</button>
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
    <!-- Student Info Modal -->
    <div class="modal fade" id="studentInfoModal" tabindex="-1" aria-labelledby="studentInfoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="studentInfoModalLabel">Student Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p st style="color:black" yle="color: ;"><b>ID:</b> <span id="studentId"></span></p>
                        </div>
                        
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                            <p><b style="color:black">Full Name:</b> <span id="studentFullName"></span></p>
                        </div>
                        <div class="col-md-6">
                            <p><b style="color:black">Email:</b> <span id="studentEmail"></span></p>
                        </div>
                        
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                            <p><b style="color:black">Phone Number:</b> <span id="studentPhoneNo"></span></p>
                        </div>
                        <div class="col-md-6">
                            <p><b style="color:black">Whatsapp Number:</b> <span id="studentWhatsappNo"></span></p>
                        </div>
                        
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                            <p><b style="color:black">Address:</b> <span id="studentAddress"></span></p>
                        </div>
                        <div class="col-md-6">
                            <p><b style="color:black">Permanent Address:</b> <span id="studentPaddress"></span></p>
                        </div>
                        
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                            <p><b style="color:black">College:</b> <span id="studentCollege"></span></p>
                        </div>
                        <div class="col-md-6">
                            <p><b style="color:black">College Village:</b> <span id="studentVillage"></span></p>
                        </div>
                        
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                            <p><b style="color:black">Branch:</b> <span id="studentBranch"></span></p>
                        </div>
                        <div class="col-md-6">
                            <p><b style="color:black">Year:</b> <span id="studentYear"></span></p>
                        </div>
                        
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                            <p><b style="color:black">Course Name:</b> <span id="studentCourse"></span></p>
                        </div>
                        <div class="col-md-6">
                            <p><b style="color:black">Batch Name:</b> <span id="studentBatch"></span></p>
                        </div>
                        <!-- <div class="col-md-6">
                            <p><b style="color:black">Fee Paid:</b> <span id="studentFeepaid"></span></p>
                        </div> -->
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><b style="color:black">Joining Date:</b> <span id="studentJoining"></span></p> <!-- Corrected ID -->
                        </div>
                        <div class="col-md-6">
                            <p><b style="color:black">Inquiry Date:</b> <span id="studentInquiry"></span></p>
                        </div>
                        <!-- <div class="col-md-6">
                            <p><b style="color:black">Remaining Fee:</b> <span id="studentRemainingfee"></span></p>
                        </div> -->
                    </div>
                    <div class="row mb-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var modeSelect = document.getElementById("mode");
            var transactionIdContainer = document.getElementById("transactionIdContainer");

            modeSelect.addEventListener("change", function() {
                if (modeSelect.value === "online") {
                    transactionIdContainer.style.display = "block";
                } else {
                    transactionIdContainer.style.display = "none";
                }
            });
        });
    </script>
    <!-- JavaScript to ensure modal opens when clicking Pending -->
    <script>
        $(document).ready(function() {
            $(".openFeeStatusModal").on("click", function() {
                var inquiryId = $(this).data("id");
                var inquiryfirstname = $(this).data("firstname");
                var totalfee = $(this).data("fee");
                var paidfee = $(this).data("paidfee");

                console.log("Opening modal for Inquiry ID:", inquiryId);

                // Update modal fields dynamically
                $("#sid").val(inquiryId);
                $("#inquiryfirstname").text(inquiryfirstname);

                // Initially hide remaining fee and installment fields
                $("#remainingFeeRow").hide();
                $("#totalFeeContainer").show();
                $("#paidFeeContainer").show();

                // AJAX request to check if the student has a fee record
                $.ajax({
                    url: "<?= base_url('/Admin/Admission/CheckFeeStatus') ?>", // Correct URL
                    method: "POST",
                    data: {
                        sid: inquiryId
                    },
                    success: function(response) {
                        if (response.status === 'exists') {
                            $("#totalFeeContainer").hide();
                            $("#paidFeeContainer").hide();
                            $("#remainingFeeRow").show();

                            $("#remainingfee").val(response.remainingfee);
                            $("#installment").val(response.remainingfee);

                            if (response.paidfee >= response.totalfee) {
                                $("#installment").prop('disabled', true);
                                $("#mode").prop('disabled', true);
                                $("#saveChangesButton").prop('disabled', true);
                            } else {
                                $("#installment").prop('disabled', false);
                                $("#mode").prop('disabled', false);
                                $("#saveChangesButton").prop('disabled', false);
                            }

                            // Disable fee icon if total fee is paid
                            if (response.paidfee >= response.totalfee) {
                                $(".openFeeStatusModal[data-id='" + inquiryId + "']").find("i").css("color", "gray");
                                $(".openFeeStatusModal[data-id='" + inquiryId + "']").prop("disabled", true); // Optionally disable the icon link
                            }
                        } else {
                            $("#totalFeeContainer").show();
                            $("#paidFeeContainer").show();
                            $("#remainingFeeRow").hide();

                            $("#totalfee").val(totalfee);
                            $("#firstinstallment").val(paidfee);
                            $("#installment").val(totalfee - paidfee);
                        }

                        // Open the modal after everything is set
                        $("#exampleModal").modal("show");
                    }
                });
            });

            // Show/hide transaction ID field based on payment mode
            $("#mode").on("change", function() {
                var transactionIdContainer = $("#transactionIdContainer");
                if ($(this).val() === "online") {
                    transactionIdContainer.show();
                } else {
                    transactionIdContainer.hide();
                }
            });
        });
    </script>
    <script>
        $(".openStudentInfoModal").on("click", function() {
            var studentId = $(this).data("id");
            var studentFirstName = $(this).data("firstname");
            var studentMiddleName = $(this).data("middlename");
            var studentLastName = $(this).data("lastname");
            var studentEmail = $(this).data("email");
            var studentPhoneNo = $(this).data("phoneno");
            var studentWhatsappNo = $(this).data("whatsappno");
            var studentAddress = $(this).data("address");
            var studentPaddress = $(this).data("paddress");
            var studentCollege = $(this).data("college");
            var studentVillage = $(this).data("village");
            var studentBranch = $(this).data("branch");
            var studentYear = $(this).data("year");
            var studentCourse = $(this).data("course");
            var studentBatch = $(this).data("batch");
            var studentJoining = $(this).data("joining");
            var studentFeepaid = $(this).data("feepaid");
            var studentRemainingfee = $(this).data("remainingfee");
            var studentInquiry = $(this).data("inquiry");

            console.log("Opening modal for Student ID:", studentId);

            $("#studentId").text(studentId);
            $("#studentFullName").text(studentFirstName + " " + studentMiddleName + " " + studentLastName);
            $("#studentEmail").text(studentEmail);
            $("#studentPhoneNo").text(studentPhoneNo);
            $("#studentWhatsappNo").text(studentWhatsappNo);
            $("#studentAddress").text(studentAddress);
            $("#studentPaddress").text(studentPaddress);
            $("#studentCollege").text(studentCollege);
            $("#studentVillage").text(studentVillage);
            $("#studentBranch").text(studentBranch);
            $("#studentYear").text(studentYear);
            $("#studentCourse").text(studentCourse);
            $("#studentBatch").text(studentBatch);
            $("#studentJoining").text(studentJoining);
            $("#studentFeepaid").text(studentFeepaid);
            $("#studentRemainingfee").text(studentRemainingfee);
            $("#studentInquiry").text(studentInquiry);

            $("#studentInfoModal").modal("show");
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