<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Form Basic</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="m-r-10">
                        <div class="lastmonth"></div>
                    </div>
                    <div class=""><small>LAST MONTH</small>
                        <h4 class="text-info m-b-0 font-medium">$58,256</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Fee Form</h4>
                        <!-- <h6 class="card-subtitle"> All with bootstrap element classies </h6> -->

                        <form class="m-t-30" action="<?php echo base_url('/Admin/Fee/update') ?>" method="post">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">ID</label>
                                    <input type="text" class="form-control" value="<?php echo $fee['id'] ?>" name="id" id="" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Student ID</label>
                                        <input type="text" class="form-control" name="sid" value="<?php echo $fee['sid'] ?>" id="" placeholder="Enter Student ID">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Student Name</label>
                                        <input type="text" class="form-control" name="sname" value="<?php echo $fee['sname'] ?>" id="" aria-describedby="emailHelp" placeholder="Enter Student Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Course Name</label>
                                        <input type="text" class="form-control" name="cname" value="<?php echo $fee['cname'] ?>" id="" placeholder="Enter Course Name">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Course Duration</label>
                                        <input type="text" class="form-control" name="duration" value="<?php echo $fee['duration'] ?>" id="" placeholder="Enter Course Duration">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Due Date</label>
                                        <input type="date" class="form-control" name="duedate" value="<?php echo $fee['duedate'] ?>" id="" placeholder="Enter Course Due Date">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Total Fee</label>
                                        <input type="text" class="form-control" name="totalfee" value="<?php echo $fee['totalfee'] ?>" id="" placeholder="Enter Total Fee">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Fee Paid</label>
                                        <input type="text" class="form-control" name="paidfee" value="<?php echo $fee['paidfee'] ?>" id="" placeholder="Enter Fee Paid">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label>Mode of Payment:</label>
                                    <select class="form-control custom-select" name="mode" value="<?php echo $fee['mode'] ?>" id="">
                                        <!-- <option value="">--Select Payment Mode--</option> -->
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Transaction Id <span>(if mode is online)</span> </label>
                                        <input type="text" class="form-control" name="transactionid" value="<?php echo $fee['transactionid'] ?>" id="" placeholder="Enter Transaction Id">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>