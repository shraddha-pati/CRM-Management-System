
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">College Project Master</h4>
                        <div class="d-flex align-items-center">
                            
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            
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
                                <!-- <h4 class="card-title">Employee Form</h4> -->
                                <!-- <h6 class="card-subtitle"> All with bootstrap element classies </h6> -->
                                <form class="m-t-30" action="<?php echo base_url('Admin/CollegeProject/update')?>" method="post" >
                                <label><h3>Student Details</h3> </label>
                                    <div class="row">
                                    <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Sr No</label>
                                            <input type="text" class="form-control" name="id" id="id" value="<?php echo $CollegeProjectData['id']?>"  placeholder="id">
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Student Name</label>
                                            <input type="text" class="form-control" name="studentname" id="studentname" value="<?php echo $CollegeProjectData['studentname']?>"  placeholder="studentname">
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">College Name</label>
                                            <input type="text" class="form-control" name="collegename" id="collegename" value="<?php echo $CollegeProjectData['collegename']?>" placeholder="collegename">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Course Name</label>
                                            <input type="text" class="form-control" name="coursename" id="coursename" value="<?php echo $CollegeProjectData['coursename']?>" placeholder="coursename">
                                        </div>                                                                                                             
                                        
                                    </div>
                                    <label><h3>Project Details</h3></label>
                                    <div class="row">
                                    <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Project Name</label>
                                            <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $CollegeProjectData['projectname']?>" placeholder="projectname">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Project Type</label>
                                            <input type="text" class="form-control" name="projecttype" id="projecttype" value="<?php echo $CollegeProjectData['projecttype']?>" placeholder="projecttype">
                                        </div>
                                    </div>
                                    <label><h3>Project Info</h3></label>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Start Date</label>
                                            <input type="text" class="form-control" name="startdate" id="startdate" value="<?php echo $CollegeProjectData['startdate']?>"  placeholder="startdate">
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">End Date</label>
                                            <input type="text" class="form-control" name="enddate" id="enddate" value="<?php echo $CollegeProjectData['enddate']?>" placeholder="enddate">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Technology</label>
                                            <input type="text" class="form-control" name="technology" id="technology" value="<?php echo $CollegeProjectData['technology']?>" placeholder="technology">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Description</label>
                                            <input type="text" class="form-control" name="description" id="description" value="<?php echo $CollegeProjectData['description']?>" placeholder="description">
                                        </div>
                                                                                
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- .row -->
                
                <!-- /.row -->
                <!-- Row -->

                <!-- Row -->
                <!-- .row -->

                <!-- /.row -->
                <!-- .row -->

                <!-- /.row -->
                <!-- .row -->

                <!-- .row -->

                <!-- /.row -->

                <!-- row -->
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
           