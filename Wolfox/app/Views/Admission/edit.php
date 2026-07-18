<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Student Admission asdfas</h4>
                <div class="d-flex align-items-center"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row"></div>

        <div class="col-12">
            <div class="card">
                <div class="card-body wizard-content">
                    <form enctype="multipart/form-data" action="<?php echo base_url('/Admin/Admission/Update'); ?>" method="POST" class="validation-wizard wizard-circle m-t-40">
                        <!-- Step 1 -->
                        <h6>Personal Info</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="firstName1">id</label>
                                        <input type="text" class="form-control" id="id" name="id" value="<?php echo $StudentData['id'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="FirstName">First Name</label>
                                        <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?php echo $StudentData['firstname'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="MiddleName">Middle Name</label>
                                        <input type="text" class="form-control" id="MiddleName" name="MiddleName" value="<?php echo $StudentData['middlename'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="LastName">Last Name</label>
                                        <input type="text" class="form-control" id="LastName" name="LastName" value="<?php echo $StudentData['lastname'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Email">Email Address</label>
                                        <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $StudentData['email'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="PhoneNo">Phone Number</label>
                                        <input type="tel" class="form-control" id="PhoneNo" name="PhoneNo" value="<?php echo $StudentData['phoneno'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="WhatsappNo">Whatsapp Number</label>
                                        <input type="tel" class="form-control" id="WhatsappNo" name="WhatsappNo" value="<?php echo $StudentData['whatsappno'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Gender">Select Gender</label>
                                        <select class="custom-select form-control" id="Gender" name="Gender" value="<?php echo $StudentData['gender'] ?>">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="DOB">Date of Birth</label>
                                        <input type="date" class="form-control" id="DOB" name="DOB" value="<?php echo $StudentData['dob'] ?>"  >
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
                                        <label for="CStreet">Street</label>
                                        <input type="text" class="form-control" id="CStreet" name="CStreet" value="<?php echo $StudentData['cstreet'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CCity">City</label>
                                        <input type="text" class="form-control" id="CCity" name="CCity"value="<?php echo $StudentData['ccity'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CState">State</label>
                                        <input type="text" class="form-control" id="CState" name="CState"value="<?php echo $StudentData['cstate'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CPincode">Pincode</label>
                                        <input type="text" class="form-control" id="CPincode" name="CPincode" value="<?php echo $StudentData['cpincode'] ?>">
                                    </div>
                                </div>
                            </div>
                            <h5>Permanent Address</h5>
                            <button type="button" id="btn" style="border:none;background-color:#2962ff;color:white;border-radius:5px"> Same as Current</button>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="PStreet">Street</label>
                                        <input type="text" class="form-control" id="PStreet" name="PStreet" value="<?php echo $StudentData['pstreet'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="PCity">City</label>
                                        <input type="text" class="form-control" id="PCity" name="PCity" value="<?php echo $StudentData['pcity'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="PState">State</label>
                                        <input type="text" class="form-control" id="PState" name="PState" value="<?php echo $StudentData['pstate'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="PPincode">Pincode</label>
                                        <input type="text" class="form-control" id="PPincode" name="PPincode" value="<?php echo $StudentData['ppincode'] ?>">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 3 -->
                        <h6>Educational Information</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="College">College Name</label>
                                    <input type="text" class="form-control" id="College" name="College" value="<?php echo $StudentData['college'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="Branch">Branch</label>
                                    <input type="text" class="form-control" id="Branch" name="Branch" value="<?php echo $StudentData['branch'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="Year">Year</label>
                                    <select name="Year" id="Year" class="form-control" value="<?php echo $StudentData['year'] ?>">
                                        <option value="">Select Year</option>
                                        <option value="FirstYear">First Year</option>
                                        <option value="SecondYear">Second Year</option>
                                        <option value="ThirdYear">Third Year</option>
                                        <option value="FourthYear">Fourth Year</option>
                                        <option value="Passout">Passout</option>
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
                                    <select name="courseid" id="courseid" class="form-control" value="<?php echo $StudentData['course'] ?>">
                                        <?php
                                        foreach ($CourseData as $row):
                                        ?>
                                        <?php

                                            echo '<option value="' . $row['courseid'] . '">' . $row['course'] . '</option>';


                                        endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="BatchTime">Batch Time</label>
                                    <select name="batchid" id="batchid" class="form-control">
                                        <option value="">Select Batch Time</option>
                                        <?php foreach ($BatchData as $row) : ?>
                                            <option value="<?php echo $row['batchid'] ?>">
                                                <?= date("h:i A", strtotime($row['starttime'])) . ' - ' . date("h:i A", strtotime($row['endtime'])) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="JoiningDate">Date of Joining</label>
                                    <input type="date" id="JoiningDate" name="JoiningDate" class="form-control" value="<?php echo $StudentData['joiningdate'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="guidename">Guide Name</label>
                                    <select name="guidename" id="guidename" class="form-control" value="<?php echo $StudentData['guidename'] ?>">
                                        <option value="">Guide Name</option>
                                        <option value="">[EMP-] Shridhar Khot, CEO & Director (Chief Executive Officer) </option>
                                        <option value="">[EMP-010] Bhagyashri S. Khot, HOD & Director (Chief Technical Officer) </option>
                                    </select>
                                </div>
                            </div>
                        </section>
                        <button type="submit" style="display:none;"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer text-center">
    All Rights Reserved by Xtreme admin. Designed and Developed by <a href="https://wolfox.in">WrapPixel</a>.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->

<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url('/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url('/assets/libs/popper.js/dist/umd/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/libs/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- apps -->
<script src="<?php echo base_url('/dist/js/app.min.js'); ?>"></script>
<script src="<?php echo base_url('/dist/js/app.init.js'); ?>"></script>
<script src="<?php echo base_url('/dist/js/app-style-switcher.js'); ?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url('/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/extra-libs/sparkline/sparkline.js'); ?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('/dist/js/waves.js'); ?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('/dist/js/sidebarmenu.js'); ?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('/dist/js/custom.js'); ?>"></script>
<script src="<?php echo base_url('/assets/libs/jquery-steps/build/jquery.steps.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/libs/jquery-validation/dist/jquery.validate.min.js'); ?>"></script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("btn").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Copy values from current address to permanent address
            document.getElementById("PStreet").value = document.getElementById("CStreet").value;
            document.getElementById("PCity").value = document.getElementById("CCity").value;
            document.getElementById("PState").value = document.getElementById("CState").value;
            document.getElementById("PPincode").value = document.getElementById("CPincode").value;
        });
    });
</script>

<script>
    $(document).ready(function() {
        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit"
            },
            onStepChanging: function(event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(4 === newIndex && Number($("#age").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            },
            onFinishing: function(event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function(event, currentIndex) {
                $('button[type="submit"]').trigger('click');
            }
        });

        $(".validation-wizard").validate({
            ignore: "input[type=hidden]",
            errorClass: "text-danger",
            successClass: "text-success",
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass)
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass)
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element)
            },
            rules: {
                email: {
                    email: true
                }
            }
        });
    });
</script>
</body>

</html>