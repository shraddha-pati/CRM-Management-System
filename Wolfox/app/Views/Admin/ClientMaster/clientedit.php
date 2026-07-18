
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
                     
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             
                            <!-- <div class=""><small>LAST MONTH</small>
                                <h4 class="text-info m-b-0 font-medium">$58,256</h4></div> -->
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
                                <h4 class="card-title">Client  Form</h4>
                               
                                <form class="m-t-30" action="<?php echo base_url('Admin/ClientMaster/update')?>" method="POST" >
								
								
                                <div class="col-md-12">
                                    <h4>Personal Detail</h4>
</div>
                                <div class="col-md-12">
								<div class="row">
                               
                                <div class="col-md-4" hidden>
                                    <div class="form-group" >
                                        <label for="exampleInputEmail1">ID</label>
                                        <input type="text" class="form-control" name="id" id="id"  placeholder="Enter id" value="<?php echo $clientdata['id']?>">
                                         </div>
                                    </div>

								
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" class="form-control" name="FullName" id="FullName"  placeholder="Enter FullName" value="<?php echo $clientdata['fullname'] ?>">
                                         </div>
                                    </div>
								
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Business Name</label>
                                        <input type="text" class="form-control" name="BusinessName" id="BusinessName"  placeholder="Enter BusinessName"  value="<?php echo $clientdata['businessname'] ?>">
                                         </div>
                                    </div>
									
									 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Domain Name</label>
                                        <input type="text" class="form-control" name="DomainName" id="DomainName"  placeholder="Enter DomainName"  value="<?php echo $clientdata['domainname'] ?>">
                                         </div>
                                    </div>
									
									<div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">City</label>
                                        <input type="text" class="form-control" name="City" id="City" placeholder="City"  value="<?php echo $clientdata['city'] ?>">
                                    </div>
									</div>
									
									<div class="col-md-4">
                                    <div class="form-group">
                                        <label for="phoneno">Phone No</label>
                                        <input type="tel" class="form-control" name="PhoneNo" id="PhoneNo" placeholder="PhoneNo" value="<?php echo $clientdata['phoneNo'] ?>">
                                    </div>
									</div>
									
									
									

                                  

                               <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Project Name</label>
                                        <input type="text" class="form-control" name="Projectname" id="Projectname" placeholder="Projectname"  value="<?php echo $clientdata['projectname'] ?>">
                                    </div>
									</div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Project Description</label>
                                        <input type="textarea" class="form-control" name="Description" id="Description" placeholder="Description"  value="<?php echo $clientdata['description'] ?>">
                                    </div>
									</div>

                                   

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Meeting Date</label>
                                        <input type="Date" class="form-control" name="date" id="date" placeholder="date"  value="<?php echo $clientdata['date'] ?>">
                                    </div>
									</div>
                                   

                                   

                                  

</div>
                                  

                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- .row -->
                
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
			
			