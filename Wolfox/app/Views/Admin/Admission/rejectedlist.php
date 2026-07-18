<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.dataTables.css" rel="stylesheet" >
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
                        <h4 class="card-title">Student Rejected List</h4>
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                    <tr>
                                        <th>Sr.no</th>
                                        <!-- <th>StudentID</th> -->
                                        <!-- <th>Action</th>
                                        <th>Letters</th> -->
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Mob No.</th>
                                        <th>Whatsapp No. </th>
                                        <!-- <th>Gender</th>
                                        <th>DOB</th>
                                        <th>Address</th> -->
                                        <th>College Name</th>
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
                                            <!-- <td><?php echo $row['StudentId'] ?></td> -->

                                        
                                            <td><?php echo $row['firstname'] ?> <?php echo $row['middlename'] ?> <?php echo $row['lastname'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phoneno'] ?></td>
                                            <td> <?php echo $row['whatsappno'] ?></td>
                                            
                                            <td><?php echo $row['collegename'] ?></td>
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
