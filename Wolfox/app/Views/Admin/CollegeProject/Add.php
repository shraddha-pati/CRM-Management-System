
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <div class="d-flex align-items-center">
                            
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Employee Form</h4> -->
                                <!-- <h6 class="card-subtitle"> All with bootstrap element classies </h6> -->
                                <form class="m-t-30" action="<?php echo base_url('Admin/CollegeProject/save')?>" method="post" >
                                <label><h3>Student Details</h3> </label>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Student Name</label>
                                            <input type="text" class="form-control" name="studentname" id="studentname"  placeholder="studentname">
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">College Name</label>
                                            <input type="text" class="form-control" name="collegename" id="collegename" placeholder="collegename">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Course Name</label>
                                            <input type="text" class="form-control" name="coursename" id="coursename" placeholder="coursename">
                                        </div>                                                                                                             
                                        
                                    </div>
                                    <label><h3>Project Details</h3></label>
                                    <div class="row">
                                    <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Project Name</label>
                                            <input type="text" class="form-control" name="projectname" id="projectname" placeholder="projectname">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Project Type</label>
                                            <input type="text" class="form-control" name="projecttype" id="projecttype" placeholder="projecttype">
                                        </div>
                                    </div>
                                    <label><h3>Project Info</h3></label>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Start Date</label>
                                            <input type="date" class="form-control" name="startdate" id="startdate"  placeholder="startdate">
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">End Date</label>
                                            <input type="date" class="form-control" name="enddate" id="enddate" placeholder="enddate">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Technology</label>
                                            <input type="text" class="form-control" name="technology" id="technology" placeholder="technology">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Description</label>
                                            <input type="text" class="form-control" name="description" id="description" placeholder="description">
                                        </div>
                                                                                
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
 
            </div>
           