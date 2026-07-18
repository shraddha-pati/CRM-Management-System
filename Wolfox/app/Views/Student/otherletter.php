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

					<h5 class="mb-0" style="color: #0093dd;">Weekly Report</h5>


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


<div class="page-content">
	<div class="form-container" data-aos="zoom-in">
		<div class="header">
			<h1>Other Letter Form</h1>
		</div>
		<form class="animated-form" action="<?= base_url('/student/OtherLetter/save') ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <label for="reportimage">Name</label>
        <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="reportimage"> File</label>
        <input type="file" class="form-control" name="Image" id="Image" aria-describedby="emailHelp" placeholder="Enter Image"  required>
    </div>

    <button type="submit" class="btn btn-primary">Upload</button>
</form>

			
			
			
			
		</form>
	</div>
</div>


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
	<div class="toolbar-inner menubar-nav">
		<a href="index.html" class="nav-link">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="#a19fa8" />
			</svg>
		</a>
		<a href="pages.html" class="nav-link">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.4" d="M11.776 21.8374C9.49294 20.4273 7.37064 18.7645 5.44791 16.8796C4.09052 15.5338 3.05388 13.8905 2.41718 12.0753C1.27955 8.53523 2.60383 4.48948 6.30113 3.2884C8.25264 2.67553 10.3751 3.05175 12.0071 4.29983V4.29983C13.6397 3.05315 15.7614 2.67705 17.713 3.2884C21.4103 4.48948 22.7435 8.53523 21.6058 12.0753C20.9743 13.8888 19.9438 15.5319 18.5929 16.8796C16.6684 18.7625 14.5463 20.4251 12.2648 21.8374L12.016 22L11.776 21.8374Z" fill="#a19fa8" />
				<path d="M12.0109 22L11.776 21.8374C9.49013 20.4274 7.36487 18.7647 5.43902 16.8796C4.0752 15.5356 3.03238 13.8922 2.39052 12.0753C1.26177 8.53523 2.58605 4.48948 6.28335 3.2884C8.23486 2.67553 10.3853 3.05204 12.0109 4.31057V22Z" fill="#a19fa8" />
				<path d="M18.2304 9.99922V9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016V9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z" fill="#a19fa8" />
			</svg>
		</a>


		<a href="messages.html" class="nav-link">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.4" d="M22 15.9403C22 18.7303 19.76 20.9903 16.97 21.0003H16.96H7.05C4.27 21.0003 2 18.7503 2 15.9603V15.9503C2 15.9503 2.006 11.5243 2.014 9.2983C2.015 8.8803 2.495 8.6463 2.822 8.9063C5.198 10.7913 9.447 14.2283 9.5 14.2733C10.21 14.8423 11.11 15.1633 12.03 15.1633C12.95 15.1633 13.85 14.8423 14.56 14.2623C14.613 14.2273 18.767 10.8933 21.179 8.9773C21.507 8.7163 21.989 8.9503 21.99 9.3673C22 11.5763 22 15.9403 22 15.9403Z" fill="#a19fa8" />
				<path d="M21.4761 5.67369C20.6101 4.04169 18.9061 2.99969 17.0301 2.99969H7.05013C5.17413 2.99969 3.47013 4.04169 2.60413 5.67369C2.41013 6.03869 2.50213 6.4937 2.82513 6.75169L10.2501 12.6907C10.7701 13.1107 11.4001 13.3197 12.0301 13.3197C12.0341 13.3197 12.0371 13.3197 12.0401 13.3197C12.0431 13.3197 12.0471 13.3197 12.0501 13.3197C12.6801 13.3197 13.3101 13.1107 13.8301 12.6907L21.2551 6.75169C21.5781 6.4937 21.6701 6.03869 21.4761 5.67369Z" fill="#a19fa8" />
			</svg>
		</a>
		<a href="javascript:void(0);" class="menu-toggler">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.4" d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z" fill="#a19fa8" />
				<path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="#a19fa8" />
			</svg>
		</a>
	</div>
</div>
<!-- Menubar -->

<!-- Theme Color Settings -->
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