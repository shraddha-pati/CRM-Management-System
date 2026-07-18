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

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <form action="<?php echo base_url('/Admin/StarofWeek/save') ?>" method="post">
                                    <div class="card-body">
                                        <h4 class="card-title">Star Of the Week Form</h4>
                                    </div>
                                    <hr>
                                    <div class="form-body">
                                        <div class="card-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Student Name</label>
                                                        <input type="text" id="name" class="form-control" placeholder="" name="name">
                                                        <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="BatchTime">Batch Time</label>
                                                    <select name="batchid" id="batchid" class="form-control">
                                                        <option value="">Select Batch Time</option>
                                                        <?php foreach ($BatchData as $row) : ?>
                                                            <option value="<?php echo $row['batchid'] ?>">
                                                                <?php echo $row['batchname'] ?> <?php echo '(' ?> <?php echo date('h:i A', strtotime($row['starttime']))  ?> To <?php echo date('h:i A', strtotime($row['endtime']))  ?> <?php echo ')' ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Week start Date</label>
                                                        <input type="date" id="startdate" class="form-control" placeholder="" name="startdate">
                                                        <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Week End Date</label>
                                                        <input type="date" id="enddate" class="form-control" placeholder="" name="enddate">
                                                        <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                    </div>
                                                </div>
                                                

                                                <!--/span-->

                                                <!--/span-->
                                            </div>
                                            <!--/row-->

                                            <!--/row-->




                                            <div class="form-actions">
                                                <div class="card-body">
                                                    <button href="CategoryList.html" type="submit" class="btn btn-primary"> Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="successModalLabel">Notification</h5>
                            </div>
                            <div class="modal-body">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JavaScript to Show Modal -->
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        <?php if (session()->getFlashdata('error')) : ?>
                            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                            successModal.show();
                            setTimeout(() => {
                                successModal.hide();
                            }, 1000); // Auto-close after 3 seconds
                        <?php endif; ?>
                    });
                </script>
                <!-- Row -->
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