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
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">College Edit Form </h4>
                <div class="d-flex align-items-center">

                </div>
            </div>

        </div>
    </div>
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
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!--<h4 class="card-title">General Form</h4>
                                <h6 class="card-subtitle"> All with bootstrap element classies </h6>-->
                        <!-- Batch Form -->
                        <form action="<?php echo base_url('/collegename/update') ?>" method="POST">

                            <div class="">
                                <!-- Batch Name -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <!-- <label for="batchname" class="font-weight-bold">id</label> -->
                                        <input type="text" class="form-control" name="id" id="id" placeholder="Enter id" value="<?php echo $CollegeData['id']; ?>" readonly hidden>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="batchname" class="font-weight-bold">College Name</label>
                                        <input type="text" class="form-control" name="collegename" id="collegename" value="<?php echo $CollegeData['collegename']; ?>" placeholder="Enter College Namee">
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- .row -->


        <!-- Row -->
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->