<!-- Header -->
<header class="header">
	<div class="main-bar">
		<div class="container">
			<div class="header-content">
				<div class="left-content">
					<a href="javascript:void(0);" class="back-btn">
						<svg width="18" height="18" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z" fill="#a19fa8" />
						</svg>
					</a>
				</div>
				<div class="mid-content">

					<h5 class="mb-0" style="color: #0093dd;">Senior List</h5>


				</div>
				<div class="right-content">
					<a href="javascript:void(0);" class="menu-toggler">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path opacity="0.4" d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z" fill="#a19fa8" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="#a19fa8" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Header End -->


<!-- Page Content -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f6f9;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }

        .text-heading {
            color: #0d47a1;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 24px;
            animation: fadeIn 1s ease-in-out;
        }

        .student-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            width: 220px;
            height: 300px;
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-in-out forwards;
        }

        .student-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.25);
        }

        .student-card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            border: 3px solid #0d47a1;
            margin-bottom: 10px;
            animation: bounceIn 0.6s ease-in-out;
        }

        .student-info strong {
            font-size: 18px;
            color: #0d47a1;
            margin-bottom: 5px;
            display: block;
            animation: fadeIn 1s ease-in-out;
        }

        .student-info span {
            color: #555;
            font-size: 14px;
            display: block;
            animation: fadeIn 1.2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            60% {
                opacity: 1;
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
<style>
	/* Full Page Background */
	.page-content {
		background: linear-gradient(135deg, #f5f7fa, #dfe9f3);
		min-height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 20px;
	}

	/* Form Container with Running Shadow */
	.form-container {
		background: white;
		padding: 30px;
		border-radius: 12px;
		box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
		border: 2px solid #0093dd;
		max-width: 500px;
		width: 100%;
		transition: all 0.4s ease-in-out;
		animation: fadeIn 1s ease-in-out;
		transform: scale(0.95);
	}

	.form-container:hover {
		box-shadow: 0px 10px 20px rgba(45, 108, 223, 0.3);
		transform: scale(1);
	}

	/* Header Title Animation */
	.header h1 {
		font-size: 22px;
		font-weight: bold;
		color: #0093dd;
		text-align: center;
		border-bottom: 2px solid #0093dd;
		padding-bottom: 12px;
		margin-bottom: 25px;
		animation: slideInDown 1s ease-in-out;
	}

	/* Form Groups */
	.form-group {
		margin-bottom: 18px;
		transition: transform 0.3s ease-in-out;
	}

	.form-group:hover {
		transform: scale(1.03);
	}

	.form-group label {
		font-weight: bold;
		color: black;
		font-size: 15px;
		display: block;
		margin-bottom: 6px;
	}

	/* Custom File Input */
	.custom-file-input {
		display: none;
	}

	.custom-file-label {
		border: 2px solid #0093dd;
		padding: 10px;
		text-align: center;
		cursor: pointer;
		width: 100%;
		display: block;
		border-radius: 6px;
		background: white;
		font-weight: bold;
		transition: all 0.3s ease;
		color: black;
	}

	.custom-file-label:hover {
		background: #e8f0fe;
		border-color: black;
	}

	/* Submit Button with Pulse Animation */
	.btn-submit {
		background-color: #0093dd;
		color: white;
		padding: 12px;
		border-radius: 6px;
		border: none;
		font-size: 15px;
		width: 100%;
		transition: all 0.3s ease;
		font-weight: bold;
		margin-top: 10px;
		animation: pulseGlow 2s infinite alternate;
	}

	.btn-submit:hover {
		background-color: black;
		transform: translateY(-2px);
		box-shadow: 0px 6px 15px rgba(45, 108, 223, 0.4);
	}
</style>
<style>
             body {
                 margin: 0;
                 font-family: Arial, sans-serif;
             }

             .inner-header {
                 position: relative;
                 width: 100%;
                 height: 250px;
                 background: linear-gradient(to right, #0073e6, #00aaff);
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 text-align: center;
                 color: white;
                 overflow: hidden;
             }

             .inner-header::before {
                 content: "";
                 position: absolute;
                 width: 150%;
                 height: 200%;
                 background: rgba(255, 255, 255, 0.1);
                 transform: rotate(25deg);
                 top: -100%;
                 left: -50%;
                 animation: slide 5s infinite linear;
             }

             @keyframes slide {
                 from {
                     top: -100%;
                 }

                 to {
                     top: 100%;
                 }
             }

             .inner-header h1 {
                 font-size: 26px;
                 font-weight: bold;
                 text-transform: uppercase;
                 letter-spacing: 2px;
                 margin: 0;
                 animation: fadeIn 1.2s ease-in-out;
             }

             .inner-header p {
                 font-size: 14px;
                 margin-top: 8px;
                 opacity: 0.9;
                 animation: fadeIn 1.5s ease-in-out;
             }

             @keyframes fadeIn {
                 from {
                     opacity: 0;
                     transform: translateY(-15px);
                 }

                 to {
                     opacity: 1;
                     transform: translateY(0);
                 }
             }

             /* Floating Wolfox text */
             .floating-wolfox {
                 position: absolute;
                 font-size: 80px;
                 font-weight: bold;
                 opacity: 0.1;
                 transform: rotate(-15deg);
                 top: 20%;
                 left: 10%;
                 animation: float 6s infinite alternate ease-in-out;
             }

             /* Floating Code Snippets */
             .floating-code {
                 position: absolute;
                 font-size: 16px;
                 opacity: 0.3;
                 color: #ffffff;
                 animation: floatCode 6s infinite alternate ease-in-out;
             }

             .code1 {
                 top: 30%;
                 left: 5%;
                 animation-duration: 5s;
             }

             .code2 {
                 top: 10%;
                 left: 50%;
                 animation-duration: 7s;
             }

             .code3 {
                 bottom: 20%;
                 left: 70%;
                 animation-duration: 6s;
             }

             .code4 {
                 top: 50%;
                 left: 20%;
                 animation-duration: 4s;
             }

             .code5 {
                 bottom: 30%;
                 right: 15%;
                 animation-duration: 8s;
             }

             @keyframes float {
                 from {
                     transform: translateY(0) rotate(-15deg);
                 }

                 to {
                     transform: translateY(20px) rotate(-15deg);
                 }
             }

             @keyframes floatCode {
                 from {
                     transform: translateY(0);
                 }

                 to {
                     transform: translateY(15px);
                 }
             }

             @media (max-width: 768px) {
                 .inner-header {
                     height: 200px;
                 }

                 .inner-header h1 {
                     font-size: 22px;
                 }

                 .inner-header p {
                     font-size: 12px;
                 }

                 .floating-wolfox {
                     font-size: 50px;
                     left: 5%;
                     top: 15%;
                 }

                 .floating-code {
                     font-size: 12px;
                 }
             }
         </style>
         <header class="inner-header">
             <div>
                 <h1>Senior List</h1>
                 <!-- <p>Delivering sleek and modern UI for mobile screens.</p> -->
             </div>
             <div class="floating-wolfox">Wolfox</div>

             <!-- Floating Code Snippets -->
             <div class="floating-code code1">console.log("Hello World");</div>
             <div class="floating-code code2">function calculate(){ return 42; }</div>
             <div class="floating-code code3">&lt;div&gt; Clean Code &lt;/div&gt;</div>
             <div class="floating-code code4">let animation = "smooth";</div>
             <div class="floating-code code5">#include &lt;stdio.h&gt;</div>

         </header>

<div class="container">
    <h2 class="text-heading">Senior Students from <?= esc($collegeName) ?></h2>

    <div class="d-flex flex-wrap gap-3 justify-content-center">
    <?php if (!empty($students)): ?>
        <?php foreach ($students as $student): ?>
            <div class="student-card">
                <img src="<?= base_url('uploads/studentdocument/' . $student['id']. '/' . $student['profile']) ?>" alt="Profile">
                <div class="student-info">
                    <strong><?= esc($student['firstname'] . ' ' . $student['middlename'] . ' ' . $student['lastname']) ?></strong>
                    <span><?= esc($student['collegename']) ?></span>
                    <span>Year of Admission: <?= esc($student['admission_year']) ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-center text-danger"><?= esc($message) ?></p>
    <?php endif; ?>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
	AOS.init();

	document.getElementById("CV").addEventListener("change", function() {
		var file = this.files[0];
		var label = document.querySelector("label[for='CV']"); // Select the associated label

		if (file) {
			var fileType = file.type;

			if (fileType === "application/pdf") {
				// Display the selected file name
				label.textContent = file.name;
			} else {
				alert("Only PDF files are allowed!");

				// Reset the input field properly
				this.value = "";
				label.textContent = "Choose file"; // Reset label text
			}
		}
	});
</script>
<!-- Page Content End-->

<!-- Menubar -->
<div class="menubar-area">
    <div class="toolbar-inner menubar-nav" style="display: flex; justify-content: space-around; align-items: center; padding: 10px 0;">
        <a href="<?php echo base_url('/student/account') ?>" class="nav-link" style="padding: 10px;">
            <i class="fa fa-home" style="font-size: 24px; color: #0093dd; margin: 5px;"></i>
        </a>
        <a href="<?php echo base_url('/Student/memories') ?>" class="nav-link" style="padding: 10px;">
            <i class="fa fa-image" style="font-size: 24px; color: #0093dd; margin: 5px;"></i>
        </a>
        <a href="<?php echo base_url('/Student/birthday') ?>" class="nav-link" style="padding: 10px;">
            <i class="fas fa-birthday-cake" style="font-size: 24px; color: #0093dd; margin: 5px;"></i>
        </a>
        <a href="<?php echo base_url('/student/notifications') ?>" class="nav-link" style="padding: 10px;">
            <i class="fa fa-bell" style="font-size: 24px; color: #0093dd; margin: 5px;"></i>
        </a>
    </div>
</div>
<!-- Menubar -->

<!-- Theme Color Settings -->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
	<div class="offcanvas-body small">
		<ul class="theme-color-settings">
			<li>
				<input class="filled-in" id="primary_color_8" name="theme_color" type="radio" value="color-primary" />
				<label for="primary_color_8"></label>
				<span>Default</span>
			</li>
			<li>
				<input class="filled-in" id="primary_color_2" name="theme_color" type="radio" value="color-green" />
				<label for="primary_color_2"></label>
				<span>Green</span>
			</li>
			<li>
				<input class="filled-in" id="primary_color_3" name="theme_color" type="radio" value="color-blue" />
				<label for="primary_color_3"></label>
				<span>Blue</span>
			</li>
			<li>
				<input class="filled-in" id="primary_color_4" name="theme_color" type="radio" value="color-pink" />
				<label for="primary_color_4"></label>
				<span>Pink</span>
			</li>
			<li>
				<input class="filled-in" id="primary_color_5" name="theme_color" type="radio" value="color-yellow" />
				<label for="primary_color_5"></label>
				<span>Yellow</span>
			</li>
			<li>
				<input class="filled-in" id="primary_color_6" name="theme_color" type="radio" value="color-orange" />
				<label for="primary_color_6"></label>
				<span>Orange</span>
			</li>
			<li>
				<input class="filled-in" id="primary_color_7" name="theme_color" type="radio" value="color-purple" />
				<label for="primary_color_7"></label>
				<span>Purple</span>
			</li>
			<li>
				<input class="filled-in" id="primary_color_1" name="theme_color" type="radio" value="color-red" />
				<label for="primary_color_1"></label>
				<span>Red</span>
			</li>
			<li>
				<input class="filled-in" id="primary_color_9" name="theme_color" type="radio" value="color-lightblue" />
				<label for="primary_color_9"></label>
				<span>Lightblue</span>
			</li>
			<li>
				<input class="filled-in" id="primary_color_10" name="theme_color" type="radio" value="color-teal" />
				<label for="primary_color_10"></label>
				<span>Teal</span>
			</li>
			<li>
				<input class="filled-in" id="primary_color_11" name="theme_color" type="radio" value="color-lime" />
				<label for="primary_color_11"></label>
				<span>Lime</span>
			</li>
			<li>
				<input class="filled-in" id="primary_color_12" name="theme_color" type="radio" value="color-deeporange" />
				<label for="primary_color_12"></label>
				<span>Deeporange</span>
			</li>
		</ul>
	</div>
</div>
<!-- Theme Color Settings End -->
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/settings.js') ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<script src="<?php echo base_url('assets/js/dz.carousel.js') ?>"></script><!-- Swiper -->
<script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script><!-- Swiper -->
<script src="<?php echo base_url('assets/vendor/peity/jquery.peity.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/dashboard/dashboard-1.js') ?>"></script>
<script>
	$(".donut").peity("donut")
</script>

</body>

<!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:16 GMT -->

</html>