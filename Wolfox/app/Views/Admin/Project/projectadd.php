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
                <h4 class="page-title">Readymade Project Form </h4>
                <div class="d-flex align-items-center">
                    <!--<nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>-->
                </div>
            </div>
            <!--<div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="m-r-10">
                                <div class="lastmonth"></div>
                            </div>
                            <div class=""><small>LAST MONTH</small>
                                <h4 class="text-info m-b-0 font-medium">$58,256</h4></div>
                        </div>
                    </div>-->
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
                        <form action="<?php echo base_url('/Admin/Project/save') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <!-- Student Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fullname">Student Name</label>
                                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Full Name">
                                    </div>
                                </div>

                                <!-- College Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CollegeName">College Name</label>
                                        <select name="collegeid" id="collegeid" class="form-control">
                                            <option>select option</option>
                                            <?php foreach ($CollegeData as $row): ?>
                                                <?php echo '<option value="' . $row['id'] . '">' . $row['collegename'] . '</option>'; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- WhatsApp Number -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phonenumber">WhatsApp Number</label>
                                        <input type="tel" class="form-control" name="phonenumber" id="phonenumber" placeholder="Enter WhatsApp Number" pattern="[0-9]{10}" title="Enter a valid 10-digit phone number" required>
                                    </div>
                                </div>

                                <!-- Project Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectname">Project Name</label>
                                        <input type="text" class="form-control" name="projectname" id="projectname" placeholder="Enter Project Name">
                                    </div>
                                </div>

                                <!-- Project Description -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Description">Project Description</label>
                                        <textarea class="form-control" name="description" id="description" placeholder="Enter Project Description" rows="3"></textarea>
                                    </div>
                                </div>

                                <!-- Technology Used -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="technology">Technology Used</label>
                                        <input type="text" class="form-control" name="technology" id="technology" placeholder="Enter Technology Used">
                                    </div>
                                </div>

                                <!-- Project Cost -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cost">Cost</label>
                                        <input type="number" class="form-control" name="cost" id="cost" placeholder="Enter Cost" min="0">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="technology">Date</label>
                                        <input type="date" class="form-control" name="date" id="date" placeholder="Enter date">
                                    </div>
                                </div>

                                <!-- Project Cost -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="link">Drive Link</label>
                                        <input type="text" class="form-control" name="link" id="link" placeholder="Enter Drive Link">
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