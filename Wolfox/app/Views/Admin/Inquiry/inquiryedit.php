
        
        <div class="page-wrapper">
            
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Inguiry Edit Form </h4>
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
                                <form class="m-t-30" action="<?php echo base_url('/Admin/Inquiry/update')?>" method="POST">
                                    <div class="row">
                                   <div class="col-sm-12" >
                                        <label for="exampleInputEmail1">Sr.no</label>
                                        <br>
                                        <input type="text" class="form-control" id="id" name="id" value="<?php echo $InquiryMasterModel['id']?>" aria-describedby="emailHelp" placeholder="id" readonly>
                                    </div>
								
                                    <div class="col-sm-12">
                                        <br>
                                        <label for="exampleInputPassword1">FullName</label>
                                        <input type="text" class="form-control" name="FullName" id="FullName" value="<?php echo $InquiryMasterModel['FullName']?>" placeholder="FullName">
                                    </div>
                                     <div class="col-sm-6">
                                        <br>
										 <label for="exampleInputPassword1">CollegeName</label>
                                        <input type="text" class="form-control" name="CollegeName" id="CollegeName" value="<?php echo $InquiryMasterModel['CollegeName']?>" placeholder="CollegeName">
                                    </div>
									<div class="col-sm-6">
                                        <br>
                                        <label for="exampleInputPassword1">WhatsappNumber</label>
                                        <input type="tel" pattern="[6-9][0-9]{9}" class="form-control" name="WhatsappNumber" id="WhatsappNumber" value="<?php echo $InquiryMasterModel['WhatsappNumber']?>" placeholder="WhatsappNumber">
                                    </div>
                                    <div class="col-sm-6">
                                        <br>
                                        <label for="exampleInputPassword1">Branch </label>
										<select name="Branch" id="Branch" class="form-control"  value="<?php echo $InquiryMasterModel['Branch']?>" >
 										<option value="Mechanical">Mechanical</option>
										<option value="Computer Science">Computer Science</option>
                                        <option value="BCA">BCA</option>
										<option value="MCA"> MCA</option>

										<option value="Other">Other</option>
										</select>
									</div> 
									
									<div class="col-sm-6">
                                        <br>
                                        <label for="exampleInputPassword1">Year </label>
										<select name="Year" id="Year" class="form-control" value="<?php echo $InquiryMasterModel['Year']?>" >
 										<option value="First Year">First Year</option>
										<option value="Second Year">Second Year</option>
										<option value="Third Year">Third Year</option>
										<option value="Last Year">Last Year</option>
                                        <option value="Passout">Passout</option>
										</select>
									</div> 

                                    <div class="col-sm-12">
                                        <br>
                                        <label for="exampleInputPassword1">Status </label>
										<select name="Status" id="Status" class="form-control" >
										<option>Selct Status</option>
										<option value="Confirm">Confirm</option>
										<option value="Pending">Pending</option>
										<option value="Reject">Reject</option>
										</select>
									</div> 
                                    </div>
                                    <br>
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
        