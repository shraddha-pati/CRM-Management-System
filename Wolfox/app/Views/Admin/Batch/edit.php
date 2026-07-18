<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Batch Time </h4>
                <div class="d-flex align-items-center"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo base_url('/Admin/Batch/update') ?>" method="post">

                                        <div class="">
                                            <!-- Batch Name -->
                                            <div class="col-md-12">
                                                <div class="form-group" style="display:none">
                                                    <label class="control-label">id</label>
                                                    <input type="text" id="id" class="form-control" placeholder="" name="batchid" value="<?php echo $BatchData['batchid'] ?>" readonly>
                                                    <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="batchname" class="font-weight-bold">Batch Name</label>
                                                        <input type="text" class="form-control" name="batchname" id="batchname" value="<?php echo $BatchData['batchname']; ?>" placeholder="Enter Batch Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">

                                                    <label for="exampleInputPassword1">Month </label>
                                                    <select name="month" id="month" class="form-control">

                                                        <option value="January" <?= ($BatchData['month'] == 'January') ? 'selected' : '' ?>>January</option>
                                                        <option value="February" <?= ($BatchData['month'] == 'February') ? 'selected' : '' ?>>February</option>
                                                        <option value="March" <?= ($BatchData['month'] == 'March') ? 'selected' : '' ?>>March</option>
                                                        <option value="April" <?= ($BatchData['month'] == 'April') ? 'selected' : '' ?>>April</option>
                                                        <option value="May" <?= ($BatchData['month'] == 'May') ? 'selected' : '' ?>>May</option>
                                                        <option value="June" <?= ($BatchData['month'] == 'June') ? 'selected' : '' ?>>June</option>
                                                        <option value="July" <?= ($BatchData['month'] == 'July') ? 'selected' : '' ?>>July</option>
                                                        <option value="August" <?= ($BatchData['month'] == 'August') ? 'selected' : '' ?>>August</option>
                                                        <option value="September" <?= ($BatchData['month'] == 'September') ? 'selected' : '' ?>>September</option>
                                                        <option value="October" <?= ($BatchData['month'] == 'October') ? 'selected' : '' ?>>October</option>
                                                        <option value="November" <?= ($BatchData['month'] == 'November') ? 'selected' : '' ?>>November</option>
                                                        <option value="December" <?= ($BatchData['month'] == 'December') ? 'selected' : '' ?>>December</option>

                                                    </select>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <!-- Start Time -->
                                                <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="starttime" class="font-weight-bold">Start Time</label>
                                                    <input type="text" class="form-control" name="starttime" id="starttime" value="<?php echo $BatchData['starttime']; ?>" required>
                                                </div>
                                            </div>

                                            <!-- End Time -->
                                                <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="endtime" class="font-weight-bold">End Time</label>
                                                    <input type="text" class="form-control" name="endtime" id="endtime" value="<?php echo $BatchData['endtime']; ?>" required>
                                                </div> 
                                            </div>-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Start Time:</label>
                                                        <?php
                                                        $start_time_24 = $BatchData['starttime'] ?? '';
                                                        $start_time = date("h:i", strtotime($start_time_24));
                                                        $start_am_pm = date("A", strtotime($start_time_24));

                                                        ?>
                                                        <input type="text" name="starttime" placeholder="hh:mm" value="<?php echo date("h:i ", strtotime($BatchData['starttime'])) ?>">
                                                        <select name="start_am_pm">
                                                            <option value="AM" <?php if ($start_am_pm == 'AM') echo 'selected'; ?>>AM</option>
                                                            <option value="PM" <?php if ($start_am_pm == 'PM') echo 'selected'; ?>>PM</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>End Time:</label>
                                                        <?php

                                                        $end_time_24 = $BatchData['endtime'] ?? '';
                                                        $end_time = date("h:i", strtotime($end_time_24));
                                                        $end_am_pm = date("A", strtotime($end_time_24));
                                                        ?>
                                                        <input type="text" name="endtime" placeholder="hh:mm" value="<?php echo date("h:i ", strtotime($BatchData['endtime'])) ?>">
                                                        <select name="end_am_pm">
                                                            <option value="AM" <?php if ($end_am_pm == 'AM') echo 'selected'; ?>>AM</option>
                                                            <option value="PM" <?php if ($end_am_pm == 'PM') echo 'selected'; ?>>PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-4">
                                                <button type="submit" class="btn btn-primary btn-lg">Update Batch</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
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