
 


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
        <div class="row">
            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Custom Design Example</h4>
                        <h6 class="card-subtitle"></h6>
                        <form action="<?php echo base_url('/Admin/Admission/Save')?>" class="tab-wizard wizard-circle" method="post">
                            <!-- Step 1 -->
                            <h6>Personal Info</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstName1">First Name</label>
                                            <input type="text" class="form-control" id="FirstName" name="FirstName">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstName1">Middle Name </label>
                                            <input type="text" class="form-control" id="MiddleName" name="MiddleName">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastName1">Last Name </label>
                                            <input type="text" class="form-control" id="LastName" name="LastName">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="emailAddress1">Email Address</label>
                                            <input type="email" class="form-control" id="Email" name="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="phoneNumber1">Phone Number</label>
                                            <input type="tel" class="form-control" id="PhoneNo" name="PhoneNo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="phoneNumber1">Whatsapp Number </label>
                                            <input type="tel" class="form-control" id="WhatsappNo" name="WhatsappNo" value="<?php echo $StudentData['WhatsappNumber']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location1">Select Gender</label>
                                            <select class="custom-select form-control" id="Gender" name="Gender">
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date1">Date of Birth</label>
                                            <input type="date" class="form-control" id="DOB" name="DOB">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 2 -->
                            <h6>Address Information</h6>
                            <section>
                                <h5>Current Address</h5>
                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle1">Street </label>
                                            <input type="text" class="form-control" id="CStreet" name="CStreet">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle1">City </label>
                                            <input type="text" class="form-control" id="CCity" name="CCity">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle1">State </label>
                                            <input type="text" class="form-control" id="CState"  name="CState">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle1">Pincode </label>
                                            <input type="text" class="form-control" id="CPincode" name="CPincode">
                                        </div>
                                    </div>
                                </div>
                                <h5>Permanent Address</h5> 
                                <button type="button"  id="btn" style="border:none;background-color:#2962ff;color:white;border-radius:5px"> Same as Current</button> 
                                <br>
                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle1">Street </label>
                                            <input type="text" class="form-control" id="PStreet" name="PStreet">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle1">City </label>
                                            <input type="text" class="form-control" id="PCity" name="PCity">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle1">State </label>
                                            <input type="text" class="form-control" id="PState" name="PState">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle1">Pincode </label>
                                            <input type="text" class="form-control" id="PPincode" name="PPincode">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            


                            <!-- Step 3 -->
                            <h6>Educational Information</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="int1">College Name</label>
                                        <input type="text" class="form-control" id="College" name="College" value="<?php echo $StudentData['CollegeName']?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="int1">Branch</label>
                                        <input type="text" class="form-control" id="Branch" name="Branch" value="<?php echo $StudentData['Branch']?>">
                                    </div><div class="col-md-6">
                                        <label for="int1">Year</label>
                                        <select name="Year" id="Year" class="form-control" value="<?php echo $StudentData['Year']?>" >
                                             <option value="FirstYear">First Year</option>
                                            <option value="SecondYear">Second Year</option>
                                            <option value="ThirdYear">Third Year</option>
                                            <option value="FourthYear">Fourth Year</option>
                                            <option value="Completed">Completed</option>

                                        </select>
                                    </div>
                                     
                                </div>
                            </section>
                            <!-- Step 4 -->
                            <h6>Course Details</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                             <label for="Course">Select Course</label>
                                             <select name="Course" id="Course" class="form-control"  >
                                                <option value="">Select Course</option>
                                                <option value="Frontend Web Development">Frontend Web Development</option>
                                                <option value="Full Stack Web Development">Full Stack Web Development</option>

                                             </select>
                                     </div>
                                     <div class="col-md-6">
                                             <label for="Duration">Duration</label>
                                             <select name="Duration" id="Duration" class="form-control">
                                                <option value="">Course Duration</option>
                                                <option value="1"> 1 Month</option>
                                                <option value="3">3 Month</option>
                                                <option value="4">4 Month</option>
                                                <option value="6">6 Month</option>


                                             </select>
                                     </div>
                                     <div class="col-md-6">
                                             <label for="BatchTime">Batch Time</label>
                                             <select name="BatchTime" id="BatchTime" class="form-control">
                                                <option value="">Batch Time</option>
                                                <option value="1"> 9:00 AM to 11:00 AM</option>
                                                <option value="3">11:00 AM to 1:00 PM</option>
                                                <option value="4">2:00 PM to 4:00 PM</option>
                                                <option value="6">4:00 PM to 6:00 PM</option>


                                             </select>
                                     </div>
                                     <div class="col-md-6">
                                             <label for="BatchTime">Date of Joining</label>
                                             <input type="date" id="JoiningDate" name="JoiningDate" class="form-control">
                                             
                                     </div>


                                </div>
                                <button type="submit" style="float: right;margin-top:80px"> Submit</button>

                            </section>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->
        </div>
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
    <!-- footer -->
    <!-- ============================================================== -->

    <script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("btn").addEventListener("click", function(event) {
        event.preventDefault(); // Just in case the form is still trying to submit

        // Copy values from current address to permanent address
        document.getElementById("PStreet").value = document.getElementById("CStreet").value;
        document.getElementById("PCity").value = document.getElementById("CCity").value;
        document.getElementById("PState").value = document.getElementById("CState").value;
        document.getElementById("PPincode").value = document.getElementById("CPincode").value;
    });
});
</script>




