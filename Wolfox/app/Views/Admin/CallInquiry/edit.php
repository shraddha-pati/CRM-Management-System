  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <form action="<?php echo base_url('/Admin/CallInquiry/Update') ?>" method="post">
                                <div class="card-body">
                                    <h4 class="card-title">Call Inquiry Form</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                        <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">id</label>
                                                    <input type="text" id="id" class="form-control" placeholder="" name="id"   
                                                      value="<?php echo $CallData['id']?>">
                                                    <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                 </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Phone Number</label>
                                                    <input type="text" pattern="[6-9][0-9]{9}" id="PhoneNo" class="form-control" placeholder="" name="PhoneNo" value="<?php echo $CallData['phoneno']?>"   
                                                    >
                                                    <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                 </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Description</label>
                                                    <textarea type="text" id="Discription" name="Discription" class="form-control form-control-danger"  cols="5" rows="5"><?php echo $CallData['discription']?></textarea>
                                                    <!-- <small class="form-control-feedback"> This field has error. </small> -->
                                                 </div>
                                            </div>
                                            <!--/span-->
                                             
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                     
                                        <!--/row-->
                                        

                                     </div>
                                     
                                    <div class="form-actions">
                                        <div class="card-body">
                                            <button href="CategoryList.html" type="submit" class="btn btn-primary"> Submit</button>
                                             </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
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