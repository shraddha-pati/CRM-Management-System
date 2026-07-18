
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
                        <h4 class="page-title">Attendence Form </h4>
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
                                <form class="m-t-30" action="<?php echo base_url('/Admin/Attendence/save')?>" method="POST">
                                   

                                <div class="form-group">
                                        <label for="exampleInputPassword1">Student ID</label>
                                        <input type="text" class="form-control" name="StudentId" id="StudentId" placeholder="StudentId">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="exampleInputPassword1">StudentName</label>
                                        <input type="text" class="form-control" name="StudentName" id="StudentName" placeholder="StudentName">
                                    </div> -->
                                     
									<div class="form-group ">
                                        <label for="exampleInputPassword1">Mark Your Attendance </label>
										<select name="Attendence" id="Attendence" class="form-control" >
										<!-- <option>select option</option> -->
										<option>Present</option>
										<option>Absent</option>
										</select>
									</div> 
									
									<div class="form-group">
                                        <label for="exampleInputPassword1">Date</label>
                                        <input type="Date" class="form-control" name="Date" id="Date" placeholder="Date">
                                    </div>
                                    
									
									<button type="submit" class="btn btn-primary">Submit</button>
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
        