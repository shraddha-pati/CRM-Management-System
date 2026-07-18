<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.dataTables.css" rel="stylesheet">
<link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

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
                        <h4 class="card-title">Course Completed Student List</h4>
                        <form action="<?php echo base_url('/Admin/Admission/filteryearwise')?>">
                        <div class="row">
                            <div class="col-sm-2 ">

                                <select onchange="filterYearWise();" class="form-control" name="YearToFilter" id="YearToFilter">
                                    <option value="">Select Year to Filter</option>
                                    <?php $year = date('Y');
                                    $lastyear = 2023;

                                    while ($year >= $lastyear) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                        $year--;
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-2 ">


                                <select onchange="filterYearWise();" class="form-control" name="MonthToFilter" id="MonthToFilter">
                                    <option value="">Select Month to Filter</option>

                                    <option value="01">JAN</option>
                                    <option value="02">FEB</option>
                                    <option value="03">MAR</option>
                                    <option value="04">APR</option>
                                    <option value="05">MAY</option>
                                    <option value="06">JUN</option>
                                    <option value="07">JUL</option>
                                    <option value="08">AUG</option>
                                    <option value="09">SEP</option>
                                    <option value="10">OCT</option>
                                    <option value="11">NOV</option>
                                    <option value="12">DEC</option>


                                </select>
                            </div>

                            <div class="col-sm-2 ">


                                <button type="submit" class="form-control btn-primary">Filter</button>
                            
                            </div>



                        </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table" id="example">
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
                                        <th>College Name</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    use App\Models\CourseModel;

                                    foreach ($StudentData as $row):

                                        $CourseModel = new CourseModel();


                                        $duration = $CourseModel->select('c.duration')
                                            ->join('course c', 'a.courseid = c.courseid')
                                            ->from('admission a')
                                            ->findAll();

                                        $demo = $duration[0]['duration'];
                                        $number = filter_var($demo, FILTER_SANITIZE_NUMBER_INT);
                                        $totalDays = $number * 30;

                                        $joiningDate = strtotime($row['joiningdate']);
                                        $currentDate = strtotime(date('Y-m-d'));
                                        $dateDiff = (int)(($currentDate - $joiningDate) / (60 * 60 * 24));

                                        if ($dateDiff > $totalDays || $row['paidfee'] == $row['totalfee']) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['studid'] ?></td>
                                                <td><?php echo $row['StudentId'] ?></td>

                                                <td>
                                                    <div class="row" style="display: flex; justify-content:space-around;">

                                                        <?php if (!empty($row['firstname']) && !empty($row['lastname'])  && !empty($row['dob']) && !empty($row['gender'])) { ?>

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
                                                                data-paddress="<?= $row['pstreet']; ?><?= $row['pcity']; ?><?= $row['ppincode']; ?><?= $row['pstate']; ?>"
                                                                data-college="<?= $row['collegename']; ?>"
                                                                data-village="<?= $row['collegevillage']; ?>"
                                                                data-branch="<?= $row['branchname']; ?>"
                                                                data-year="<?= $row['year']; ?>"
                                                                data-course="<?= $row['course']; ?>"
                                                                data-batch="<?= $row['batchname']; ?>"
                                                                data-guidename="<?= $row['guidename']; ?>"
                                                                data-joining="<?php echo $jdate = date('d-m-Y', strtotime($row['joiningdate'])); ?>"
                                                                data-fee="<?= $row['fee']; ?>"
                                                                data-feepaid="<?= $row['paidfee']; ?>"
                                                                data-inquiry="<?php echo $idate = date('d-m-Y', strtotime($row['inquirydate'])); ?>">


                                                                <div style="text-align:center;font-size:20px;">
                                                                    <i class="fa-solid fa-eye"></i>
                                                                </div>
                                                            </a>


                                                        <?php } ?>

                                                    </div>
                                                </td>
                                                <td>
                                                    <?php if ($row['paidfee'] <= 0) { ?>
                                                        <p>NA</p>
                                                    <?php } else { ?>
                                                        <div style="display: flex; justify-content:space-between">
                                                            <?php
                                                            if ($row['paidfee'] > 0) {
                                                            ?>
                                                                <a href="<?php echo base_url('/Admin/Admission/joiningletter/' . $row['studid']) ?>" target="_blank">
                                                                    <i class="fa-solid fa-file" style="font-size:22px;" class="icon-link"></i>
                                                                </a>
                                                            <?php

                                                            }
                                                            $CourseModel = new CourseModel();


                                                            $duration = $CourseModel->select('c.duration')
                                                                ->join('course c', 'a.courseid = c.courseid')
                                                                ->from('admission a')
                                                                ->where('a.StudentId', $row['StudentId'])
                                                                ->groupBy('duration')
                                                                ->findAll();

                                                            $demo = $duration[0]['duration'];
                                                            $number = filter_var($demo, FILTER_SANITIZE_NUMBER_INT);
                                                            $totalDays = $number * 30;

                                                            $joiningDate = strtotime($row['joiningdate']);
                                                            $currentDate = strtotime(date('Y-m-d'));
                                                            $dateDiff = (int)(($currentDate - $joiningDate) / (60 * 60 * 24));
                                                            if ($dateDiff > $totalDays && $row['paidfee'] == $row['totalfee']) {
                                                            ?>

                                                                <a href="<?php echo base_url('/Admin/Admission/completionletter/' . $row['studid']) ?>" target="_blank">
                                                                    <i class="fa-solid fa-scroll" style="font-size:22px;" class="icon-link"></i>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td><?php echo $row['firstname'] ?> <?php echo $row['middlename'] ?> <?php echo $row['lastname'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                <td><?php echo $row['phoneno'] ?></td>
                                                <td> <?php echo $row['whatsappno'] ?></td>

                                                <td><?php echo $row['collegename'] ?></td>



                                            </tr>
                                    <?php
                                        }
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
                                            <p><b>Name:</b> <span id="inquiryfirstname"></span></p>

                                            <!-- Total Fee and Paid Fee Containers -->
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

                                            <!-- Remaining Fee Row (Hidden initially) -->
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

                                            <!-- Payment Mode and Transaction ID -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Mode of Payment:</label>
                                                    <select class="form-control custom-select" name="mode" id="mode">
                                                        <option value="">--Select Payment Mode--</option>
                                                        <option value="online">Online</option>
                                                        <option value="cash">Cash</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6" id="transactionIdContainer" style="display:none;">
                                                    <div class="form-group">
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p st style="color:black" style=" display: none;"><b></b> <span id="studentId" hidden></span></p>
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
                        <!-- <div class="col-md-6">
                            <p><b style="color:black">Address:</b> <span id="studentAddress"></span></p>
                        </div> -->
                        <div class="col-md-6">
                            <p><b style="color:black">Permanent Address:</b> <span id="studentPaddress"></span></p>
                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><b style="color:black">College:</b> <span id="studentCollege"></span></p>
                        </div>
                        <div class="col-md-6">
                            <!-- <p><b style="color:black">College Village:</b> <span id="studentVillage"></span></p> -->
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
                        <div class="col-md-6">
                            <p><b style="color:black">Guide Name:</b> <span id="guidename"></span></p>
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

                $("#sid").val(inquiryId);
                $("#inquiryfirstname").text(inquiryfirstname);

                $("#remainingFeeRow").hide();
                $("#totalFeeContainer").show();

                $.ajax({
                    url: "<?= base_url('/Admin/Admission/CheckFeeStatus') ?>",
                    method: "POST",
                    data: {
                        sid: inquiryId
                    },
                    success: function(response) {
                        console.log(response);
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
                        } else if (response.status === 'not_exists') {
                            // No fee record for student
                            $("#totalFeeContainer").show();
                            $("#paidFeeContainer").show();
                            $("#remainingFeeRow").hide();

                            $("#totalfee").val(totalfee);
                            $("#firstinstallment").val(paidfee);
                            $("#installment").val(totalfee - paidfee);

                            $("#firstinstallment").prop('disabled', false);
                        }

                        $("#exampleModal").modal("show");
                    }
                });
            });

            $("#mode").on("change", function() {
                var transactionIdContainer = $("#transactionIdContainer");
                if ($(this).val() === "online") {
                    transactionIdContainer.show();
                } else {
                    transactionIdContainer.hide();
                }
            });

            $(".btn-close").on("click", function() {
                $("#exampleModal").modal("hide");
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
            var guidename = $(this).data("guidename");
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
            $("#guidename").text(guidename);

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

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="successModal3" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Notification</h5>
                </div>
                <div class="modal-body">
                    <?= session()->getFlashdata('phone'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to Show Modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (session()->getFlashdata('phone')) : ?>
                var successModal = new bootstrap.Modal(document.getElementById('successModal3'));
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
                }, 1000); // Auto-close after 3 seconds
            <?php endif; ?>
        });
    </script>

    <footer class="footer text-center">
        All Rights Reserved by Xtreme admin. Designed and Developed by <a href="https://wrappixel.com/">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->

<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url('assets/libs/popper.js/dist/umd/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- apps -->
<script src="<?php echo base_url('dist/js/app.min.js') ?>"></script>
<script src="<?php echo base_url('dist/js/app.init.js') ?>"></script>
<script src="<?php echo base_url('dist/js/app-style-switcher.js') ?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/extra-libs/sparkline/sparkline.js') ?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('dist/js/waves.js') ?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('dist/js/sidebarmenu.js') ?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('dist/js/custom.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/jquery-steps/build/jquery.steps.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/jquery-validation/dist/jquery.validate.min.js') ?>"></script>
<script>
    //Basic Example
    $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true
    });

    // Basic Example with form
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });

    // Advance Example

    var form = $("#example-advanced-form").show();

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function(event, currentIndex, priorIndex) {
            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                form.steps("previous");
            }
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password-2"
            }
        }
    });

    // Dynamic Manipulation
    $("#example-manipulation").steps({
        headerTag: "h3",
        bodyTag: "section",
        enableAllSteps: true,
        enablePagination: false
    });

    //Vertical Steps

    $("#example-vertical").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical"
    });

    //Custom design form example
    $(".tab-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit"
        },
        onFinished: function(event, currentIndex) {
            swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");

        }
    });


    var form = $(".validation-wizard").show();

    $(".validation-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit"
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
        },
        onFinishing: function(event, currentIndex) {
            return form.validate().settings.ignore = ":disabled", form.valid()
        },
        onFinished: function(event, currentIndex) {
            swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    }), $(".validation-wizard").validate({
        ignore: "input[type=hidden]",
        errorClass: "text-danger",
        successClass: "text-success",
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass)
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass)
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element)
        },
        rules: {
            email: {
                email: !0
            }
        }
    })
</script>


<script>
    function filterYearWise() {
        const year = document.getElementById('YearToFilter').value;
        console.log(year);
        const month = document.getElementById('MonthToFilter').value;
        console.log(month);


        var route;
        if (month) {
            // alert('hello')

            route = `<?php echo base_url('/Admin/Admission/filteryearwise/'); ?>${year}/${month}`

            console.log(route);
        } else {
            route = `<?php echo base_url('/Admin/Admission/filteryearwise/'); ?>${year}`
        }
        $.ajax({
            url: route,
            type: 'GET',
            dataType: 'json',

            success: function(response) {
                console.log(response);
            }
        })
    }
</script>


<!-- <script>
    function filterMonthWise()
    {
        const month = document.getElementById('MonthToFilter').value;
        console.log(month);
    }
</script> -->
</body>


<!-- Mirrored from themedesigner.in/demo/wrappixel/admin-template/xtreme/html/ltr/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 05:50:14 GMT -->

</html>