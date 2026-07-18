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
                <h4 class="page-title">Branch Form </h4>
                <div class="d-flex align-items-center">

                </div>
            </div>

        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <form action="<?php echo base_url('/branch/save') ?>" method="POST">

                            <div class="">
                                <!-- Batch Name -->

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="batchname" class="font-weight-bold">Branch Name</label>
                                        <input type="text" class="form-control" name="branchname" id="branchname" placeholder="Enter BranchName">
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