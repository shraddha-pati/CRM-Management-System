<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Document Upload Form </h4>
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
                        <!--<h4 class="card-title">General Form</h4>
                                <h6 class="card-subtitle"> All with bootstrap element classies </h6>-->
                        <form action="<?php echo base_url('/Admin/Document/save') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <!-- Technology Used -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="technology">File Name</label>
                                        <input type="text" class="form-control" name="filename" id="filename" placeholder="Enter File Name">
                                    </div>
                                </div>

                                <!-- Project Cost -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cost">File Upload</label><br><br>
                                        <input type="file" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx,.csv,.jpg,.png,.zip">
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>