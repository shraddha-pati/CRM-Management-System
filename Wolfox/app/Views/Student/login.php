<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:44 GMT -->

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#2196f3">
    <meta name="author" content="DexignZone" />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:title" content="Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:description" content="Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- Title -->
    <title>Student Login</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">


    <link href="<?php echo base_url('assets/libs/jquery-steps/jquery.steps.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/libs/jquery-steps/steps.css') ?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>



    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Racing+Sans+One&amp;display=swap" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(45deg, #0093dd, #6dd5ed, rgb(117, 172, 255), rgb(126, 145, 255));
            overflow: hidden;
            position: relative;
            animation: gradientFlow 6s infinite alternate ease-in-out;
            background-size: 300% 300%;
        }

        @keyframes gradientFlow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            width: 100%;
            max-width: 400px;
            position: relative;
            animation: softGlow 4s infinite alternate ease-in-out;
        }

        @keyframes softGlow {
            0% {
                box-shadow: 0 0 20px rgba(0, 147, 221, 0.5);
            }

            50% {
                box-shadow: 0 0 30px rgb(126, 150, 255);
            }

            100% {
                box-shadow: 0 0 20px rgba(0, 147, 221, 0.5);
            }
        }

        .login-container img {
            width: 80px;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .login-btn {
            background-color: #0093dd;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        .login-btn:hover {
            background-color: #007bb5;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            color: #0093dd;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <audio id="welcomeAudio" src="<?php echo base_url('uploads/audio/welcome.mp3') ?>"></audio>
    <div class="login-container">
        <img src="<?php echo base_url('uploads/CmsMaster/1/logo.png') ?>" alt="Company Logo" style="width:90%">
        <h2>Sign In</h2>
        <p>Please sign in to your registered account</p>
        <form action="<?php echo base_url('/student/save') ?>" id="loginform" method="post" onsubmit="playWelcomeAudio()">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Phone Number" name="Username" required>
            </div>
            <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Password" name="Password" required>
                <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()" style="border-left: none;">
                    <i class="fa fa-eye" id="toggleIcon"></i>
                </button>
                <button type="submit" class="btn login-btn w-100 mt-3">Login</button>

            </div>
        </form>



        <!-- /forget password modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#0093dd">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Forget Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="internship-details animate__animated animate__fadeInUp">
                            <div class="row">
                                <!-- <div class="col-md-4 text-center">
                            <img src="internship.jpg" alt="Internship Icon" class="internship-icon">
                        </div> -->
                                <div class="col-md-8">
                                    <ul class="list-group">
                                        <form action="<?php echo base_url('/student/forgotpassword') ?>" id="forgotpasswordform" method="post">

                                            <!-- <li class="list-group-item"><strong>Course Name:</strong> <span id="courseName" style="color:#0093dd"> </span></li> -->
                                            <input type="text" class="form-control" placeholder="Enter Your Username" id="Phone" name="Phone">
                                            <p id="waitMessage" style="display: none; color: blue;">Please wait, processing...</p>
                                            <p id="paraOtp1" style="color: red;display:none">Usename not Found.Please Enter Valid Username.</p>


                                            <br>
                                            <button type="button" id="genOtp" class="btn btn-secondary" onclick="checkForEmail();" style="background-color: #0093dd;border:#0093dd;display:block">Generate OTP</button>
                                            <p id="paraOtp" style="color: green;display:none">An OTP is sent to your registered Email.</p>
                                            <!-- <p id="waitMessage" style="display: none; color: blue;">Please wait, processing...</p> -->


                                            <br>
                                            <input type="text" class="form-control" placeholder="Enter OTP" style="display: none;" id="OTP" name="OTP">
                                            <p id="verifiedPara1" style="color: red;display:none">Incorrect OTP.</p>

                                            <br>
                                            <button type="button" id="verOtp" onclick="verifyOtp();" class="btn btn-secondary" style="background-color: #0093dd;border:#0093dd;display: none;">Verify OTP</button>
                                            <p id="verifiedPara" style="color: green;display:none">OTP Verified.</p>


                                            <br><input type="text" class="form-control" placeholder="Enter New Password" style="display: none;" id="newPassword" name="newPassword">
                                            <br>
                                            <button type="submit" id="changePass" onclick="hideSubBtn();" class="btn btn-secondary" style="background-color: #0093dd;border:#0093dd;display: none;">Submit</button>


                                            <!-- <li class="list-group-item"><strong>Duration:</strong> <span id="courseDuration" style="color:#0093dd"> </span></li> -->
                                            <!-- <li class="list-group-item"><strong>Start Date:</strong> <span id="startDate" style="color:#0093dd"> </span></li> -->
                                            <!-- <li class="list-group-item"><strong>Batch:</strong> <span id="instructorName" style="color:#0093dd"> </span></li> -->
                                            <!-- <li class="list-group-item"><strong>Mode:</strong> <span id="courseMode">Online</span></li> -->
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" style="background-color: #0093dd;border:#0093dd" data-bs-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
        </div>



        <script>
            function openmodal() {
                // When 'Forgot Password' is clicked
                // $("#forgotPasswordLink").on("click", function(event) {
                event.preventDefault(); // Prevent default anchor behavior
                $("#exampleModal1").modal("show"); // Open Course Details Modal
                // });

                // Ensure close button works
                $(".btn-close").on("click", function() {
                    $("#exampleModal1").modal("hide");
                });
            };
        </script>


        <!-- FontAwesome for Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <script>
            function togglePassword() {
                var passwordInput = document.getElementById("password");
                var toggleIcon = document.getElementById("toggleIcon");

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    toggleIcon.classList.remove("fa-eye");
                    toggleIcon.classList.add("fa-eye-slash");
                } else {
                    passwordInput.type = "password";
                    toggleIcon.classList.remove("fa-eye-slash");
                    toggleIcon.classList.add("fa-eye");
                }
            }
        </script>
        <a href="#" onclick="openmodal();" class="forgot-password" id="forgotPasswordLink">Forgot your password?</a>
    </div>



    <div class="modal fade" id="successModal1" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel1">Notification</h5>
                </div>
                <div class="modal-body">
                    <?= session()->getFlashdata('password'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to Show Modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (session()->getFlashdata('password')) : ?>
                var successModal = new bootstrap.Modal(document.getElementById('successModal1'));
                successModal.show();
                setTimeout(() => {
                    successModal.hide();
                }, 2000); // Auto-close after 3 seconds
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')) : ?>
                var successModal = new bootstrap.Modal(document.getElementById('successModal1'));
                successModal.show();
                setTimeout(() => {
                    successModal.hide();
                }, 2000); // Auto-close after 3 seconds
            <?php endif; ?>


        });
    </script>


    <!-- Bootstrap Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Notification</h5>
                </div>
                <div class="modal-body">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to Show Modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (session()->getFlashdata('error')) : ?>
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
                setTimeout(() => {
                    successModal.hide();
                }, 3000); // Auto-close after 3 seconds
            <?php endif; ?>

        });
    </script>

    <script>
        function checkForEmail() {

            var email = $("#Phone").val();
            $("#waitMessage").show();
            $("#paraOtp1").css("display", "none");
            $("#genOtp").css("display", "none");




            $.ajax({
                url: `<?php echo base_url('/student/checkForEmail/'); ?>${email}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    $("#waitMessage").text("Processing... Please wait.");
                },

                success: function(response) {
                    console.log(response);

                    if (response.status == 'otp') {
                        $("#genOtp").css("display", "none");
                        $("#verOtp").css("display", "block");
                        $("#OTP").css("display", "block");
                        $("#Phone").attr("readonly", true);
                        $("#paraOtp").css("display", "block");
                        $("#paraOtp1").css("display", "none");




                    } else if (response.status == 'nootp') {
                        $("#paraOtp1").css("display", "block");
                        $("#genOtp").css("display", "block");




                    }

                },
                complete: function() {
                    // Hide the wait message after the request completes
                    $("#waitMessage").hide();
                }
            })

        }
    </script>

    <script>
        function verifyOtp() {
            var phone = $("#Phone").val();
            var otp = $("#OTP").val();

            console.log(phone);
            console.log(otp);


            $.ajax({
                url: `<?php echo base_url('/student/checkForOtp/'); ?>${phone}/${otp}`,
                type: 'GET',
                dataType: 'json',

                success: function(response) {
                    // console.log(response);

                    if (response.status == 'ok') {
                        // $("#genOtp").css("display","none");
                        $("#verOtp").css("display", "none");
                        $("#OTP").attr("readonly", true);
                        // $("#Phone").attr("readonly",true);
                        $("#paraOtp").css("display", "block");

                        $("#newPassword").css("display", "block");
                        $("#changePass").css("display", "block");

                        $("#verifiedPara").css("display", "block");
                        $("#verifiedPara1").css("display", "none");



                    } else if (response.status == 'no') {
                        $("#verifiedPara1").css("display", "block");

                    }
                }
            })


        }
    </script>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="successModal10" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Notification</h5>
                </div>
                <div class="modal-body">
                    <?= session()->getFlashdata('block'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to Show Modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (session()->getFlashdata('block')) : ?>
                var successModal = new bootstrap.Modal(document.getElementById('successModal10'));
                successModal.show();
                setTimeout(() => {
                    successModal.hide();
                }, 3000); // Auto-close after 3 seconds
            <?php endif; ?>

        });
    </script>

    <script>
        function hideSubBtn()
        {
           
            $("#changePass").css("display","none");

        
        }
    </script>
    <!--**********************************
    Scripts
***********************************-->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/settings.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery-steps/build/jquery.steps.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery-validation/dist/jquery.validate.min.js') ?>"></script>
</body>

<!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:45 GMT -->

</html>