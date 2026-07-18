
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
                            
                            <form action="<?php echo base_url('/Admin/Course/Update') ?>" method="post">
                                <div class="card-body">
                                    <h4 class="card-title">Course Form</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                        <div class="col-md-12">
                                                <div class="form-group">
                                                    <!-- <label class="control-label">id</label> -->
                                                    <input type="text" id="id" class="form-control" placeholder="" name="id" value="<?php echo $CourseData['courseid'] ?>" hidden readonly  
                                                   >
                                                    <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                 </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Course Name</label>
                                                    <input type="text" id="Course" class="form-control" placeholder="" name="Course" value="<?php echo $CourseData['course'] ?>"  
                                                   >
                                                    <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                 </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Duration</label>
                                                    <input type="text" id="Duration" class="form-control" placeholder="" name="Duration" value="<?php echo $CourseData['duration'] ?>"  
                                                    >
                                                    <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                 </div>
                                            </div> <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Course Fee</label>
                                                    <input type="text" id="Fee" class="form-control" placeholder="" name="Fee" value="<?php echo $CourseData['fee'] ?>"  
                                                   >
                                                    <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                 </div>
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