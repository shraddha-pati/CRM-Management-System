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
                <h4 class="page-title">Inquiry Form </h4>
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
                        <form class="m-t-30" action="<?php echo base_url('/Admin/Inquiry/save') ?>" method="POST" id="callform">

                            <div class="row">
                                <div class="col-sm-12">
                                    <br>
                                    <h5>Student Information</h5>
                                </div>
                                <div class="col-sm-4">
                                    <br>
                                    <label for="exampleInputPassword1">First Name</label>
                                    <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="FirstName">
                                </div>

                                <div class="col-sm-4">
                                    <br>
                                    <label for="exampleInputPassword1">Middle Name</label>
                                    <input type="text" class="form-control" name="MiddleName" id="MiddleName" placeholder="MiddleName">
                                </div>

                                <div class="col-sm-4">
                                    <br>
                                    <label for="exampleInputPassword1">Last Name</label>
                                    <input type="text" class="form-control" name="LastName" id="LastName" placeholder="LastName">
                                </div>




                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <br>
                                            <label for="collegeid">College Name</label>
                                            <select name="collegeid" onclick="fetchCollegeNames();" id="collegeid" class="form-control">
                                                <option>select option</option>

                                            </select>
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-end">
                                            <a>
                                                <button onclick="addCollegeInput();" type="button" class="btn btn-primary w-100">Add</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="newCollegeContainer" class="mt-2"></div>

                                </div>







                                <div class="col-sm-6">
                                    <br>
                                    <label for="exampleInputPassword1">Student Vilage</label>
                                    <input type="text" f class="form-control" name="CollegeVilage" id="CollegeVilage" placeholder="StudentVilage">
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <label for="exampleInputPassword1">WhatsappNumber</label>
                                    <span id="spantag" style="color: red; display:none">Mobile Number Already Exist.</span>
                                    <input type="tel" pattern="[6-9][0-9]{9}" class="form-control" oninput="checknumber();" name="WhatsappNumber" id="WhatsappNumber" placeholder="WhatsappNumber">
                                </div>

                                <div class="col-sm-6">
                                    <br>
                                    <label for="branch">Branch</label>
                                    <!-- <input type="text" class="form-control" name="Branch" id="Branch" placeholder="Branch">  -->

                                    <select name="branchid" id="branchid" class="form-control" value="">
                                        <option>select option</option>

                                        <?php foreach ($BranchData as $row): ?>
                                        <?php
                                            echo '<option value="' . $row['id'] . '">' . $row['branchname'] . '</option>';

                                        endforeach; ?>
                                    </select>

                                </div>

                                <div class="col-sm-6">
                                    <br>
                                    <label for="exampleInputPassword1">Academic Year </label>
                                    <select name="Year"  id="Year" class="form-control">
                                        <option>select option</option>
                                        <option value="First Year">First Year</option>
                                        <option value="Second Year">Second Year</option>
                                        <option value="Third Year">Third Year</option>
                                        <option value="Last Year">Last Year</option>
                                        <option value="Passout">Passout</option>

                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <label for="exampleInputPassword1">Internship Looking For</label>
                                    <!-- <input type="text" class="form-control" name="StudentCount" id="StudentCount" placeholder="Student Count"> -->
                                    <select name="StudentCount" id="StudentCount" class="form-control">
                                        <option>select option</option>
                                        <option value="Self">Self</option>
                                        <option value="1-5 Student">1-5 Student</option>
                                        <option value="5-10 Student">5-10 Student</option>
                                        <option value="Greater Than 10 Student">Greater Than 10 Student</option>


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

    </div>

    <div id="popup" style="display: none; position: fixed; top: 20%; left: 50%; transform: translate(-50%, -50%); background: rgba(35, 231, 81, 0.8); color: white; padding: 20px; border-radius: 10px;">
   <b> College Added !</b>
</div>

<div id="popup1" style="display: none; position: fixed; top: 20%; left: 50%; transform: translate(-50%, -50%); background: rgba(240, 27, 27, 0.8); color: white; padding: 20px; border-radius: 10px;">
   <b> Mobile number already exists !</b>
</div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Notification</h5>
                </div>
                <div class="modal-body">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to Show Modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (session()->getFlashdata('success')) : ?>
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
                setTimeout(() => {
                    successModal.hide();
                }, 1500); // Auto-close after 3 seconds
            <?php endif; ?>
        });
    </script>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

    <script>
        function checknumber() {
            const phone = document.getElementById("WhatsappNumber").value;
            console.log(phone);

            $.ajax({
                url: `<?php echo base_url('/Admin/Inquiry/checknumber/'); ?>${phone}`,
                type: 'GET',
                dataType: 'json',

                success: function(response) {
                    console.log(response);

                    if (response.status === 'failed') {
                        $("#spantag").css("display", "block");

                        $("#callform").data("phone-exists", true);
                    } else if (response.status === 'success') {
                        $("#spantag").css("display", "none");

                        $("#callform").data("phone-exists", false);
                    }
                }
            });
        }

        $(document).ready(function() {
            $("#callform").on("submit", function(event) {
                if ($(this).data("phone-exists")) {
                    event.preventDefault();
                    // alert("Phone Number Already Exists");
                    showPopup1();
                }
            });
        });
    </script>

    <script>
        function addCollegeInput() {
            let container = document.getElementById("newCollegeContainer");
            container.innerHTML = "";

            let input = document.createElement("input");
            input.type = "text";
            input.className = "form-control mt-2";
            input.placeholder = "Enter new college name";
            input.id = "newCollegeName";

            let button = document.createElement("button");
            button.innerText = "Save";
            button.type = "button";
            button.id = "clgipbtn";
            button.className = "btn btn-primary mt-2";
            button.onclick = function() {
                let collegeName = document.getElementById("newCollegeName").value.trim();

                // let clgip = document.getElementById('newCollegeName');
                // let clgipbtn = document.getElementById('clgipbtn');

                $("#newCollegeName").css("display", "none");
                $("#clgipbtn").css("display", "none");


                // clgip.css("display","none");
                // clgipbtn.css("display","none");



                if (collegeName !== "") {
                    $.ajax({
                        url: `<?php echo base_url('/Admin/Inquiry/addcollege'); ?>`,
                        type: 'GET',
                        data: {
                            name: collegeName
                        },
                        dataType: 'json',

                        success: function(response) {
                            console.log(response);

                            if (response.message == 'success') {

                                // setTimeout(alert("college added"),1000);
                                
                                 
                                //   session()->setFlashdata('college', '<b style="color:green;">College added!</b>');
                                showPopup();

                            } else if (response.message == 'failed') {
                                alert("college not added");

                            }
                        }
                    })

                } else {
                    alert("Please enter a college name.");

                }



            };

            // Append elements to the container
            container.appendChild(input);
            container.appendChild(button);
        }
    </script>

    <script>
        function fetchCollegeNames() {
            $.ajax({
                url: '<?php echo base_url('/Admin/Inquiry/fetchcollegenames'); ?>',
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (response.status === "success") {
                        let select = document.getElementById("collegeid");

                        // ✅ Save the currently selected value
                        let selectedValue = select.value;

                        // ✅ Clear existing options except the first one
                        select.innerHTML = '<option value="">Search your College</option>';

                        let found = false; // Track if the selected value exists in the new list

                        // ✅ Add new options from the response
                        response.data.forEach(college => {
                            let option = document.createElement("option");
                            option.value = college.id;
                            option.textContent = college.collegename;
                            select.appendChild(option);

                            // Check if the previous selected value exists in the new list
                            if (college.id == selectedValue) {
                                found = true;
                            }
                        });

                        // ✅ Restore previous selection ONLY if it still exists
                        if (found) {
                            select.value = selectedValue;
                        }
                    } else {
                        console.error("Server Error:", response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", xhr.responseText);
                }
            });
        }

        // Function to add options to select
        function addOptionToSelect(value, text) {
            let select = document.getElementById("collegeid");
            let option = document.createElement("option");
            option.value = value;
            option.textContent = text;
            select.appendChild(option);
        }


        // Call function when the page loads
        // fetchCollegeNames();
        
    </script>


<script>
function showPopup() {
    let popup = document.getElementById("popup");
    popup.style.display = "block";

    setTimeout(() => {
        popup.style.display = "none";
    }, 1500); // 1000ms = 1 second
}
</script>

<script>
function showPopup1() {
    let popup = document.getElementById("popup1");
    popup.style.display = "block";

    setTimeout(() => {
        popup.style.display = "none";
    }, 1500); // 1000ms = 1 second
}
</script>