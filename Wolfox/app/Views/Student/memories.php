<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:15 GMT -->

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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png') ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Title -->
    <title>Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <style>
        .student-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid var(--primary);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .modal-content {
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            background-color: var(--primary);
            color: white;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .list-group-item {
            border: none;
            padding: 10px;
            font-size: 16px;
        }

        .modal-footer {
            border-top: none;
        }
    </style>
</head>

<?php
$session = session();
$id = $session->get('id');
$studentid = $session->get('StudentId');

$firstname = $session->get('firstname');
$middlename = $session->get('middlename');
$lastname = $session->get('lastname');
$phoneno = $session->get('phoneno');
$whatsappno = $session->get('whatsappno');

$email = $session->get('email');
$pstreet = $session->get('pstreet');
$pcity = $session->get('pcity');
$ppincode = $session->get('ppincode');
$pstate = $session->get('pstate');
$college = $session->get('college');
$branch = $session->get('branch');
$course = $session->get('course');
$duration = $session->get('duration');

$joiningdate = $session->get('joiningdate');
$batch = $session->get('batch');
$totalfee = $session->get('fee');
$paidfee = $session->get('paidfee');

$profile = $session->get('profile');
$resume = $session->get('resume');
$adharcard = $session->get('adharcard');
$clgdoc = $session->get('clgdoc');







?>

<body>
    <div class="page-wraper">

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader end-->

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

                            <h5 class="mb-0">Memories</h5>


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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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

        .code1 { top: 30%; left: 5%; animation-duration: 5s; }
        .code2 { top: 10%; left: 50%; animation-duration: 7s; }
        .code3 { bottom: 20%; left: 70%; animation-duration: 6s; }
        .code4 { top: 50%; left: 20%; animation-duration: 4s; }
        .code5 { bottom: 30%; right: 15%; animation-duration: 8s; }

        @keyframes float {
            from { transform: translateY(0) rotate(-15deg); }
            to { transform: translateY(20px) rotate(-15deg); }
        }

        @keyframes floatCode {
            from { transform: translateY(0); }
            to { transform: translateY(15px); }
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
            <h1> Your Memories List </h1>
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


        <!-- Sidebar -->



    

    
</div>
<style>
     /* Styles for lightbox */
     :root {
      --lightbox-bg-color: #292929;
      --lightbox-caption-text-color: white;
      --lightbox-controls-color: white;
      --lightbox-controls-hover-color: #bf40bf;
     
    }

/* Styles for lightbox */
#lightbox {
  display: none;
  justify-content: center;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 5;
  width: 100%;
  height: 100%;
  background: var(--lightbox-bg-color);
  opacity: 0; /* Initial opacity set to 0 */
  transition: opacity 0.5s; /* Cross-fade transition */
}

/* Container for the image and caption */
#lightbox figure {
  max-width: calc(90vw - 100px);
  max-height: calc(90vh - 100px);
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.lightbox-image {
 width:60vw;
  height: 100%;
    max-height: calc(100vh - 100px); /* Adjusted to accommodate the caption */
  display: block;
  margin: 0;
  opacity: 0; /* Initial opacity */
  transition: opacity 0.5s; /* Cross-fade transition */
  object-fit: contain;
  aspect-ratio:4/3;
}

#lightbox-caption {
  color: var(--lightbox-caption-text-color);
  text-align: center;
  width: 100%;
  height: 80px; /* Fixed height for the caption */
  background: rgba(0, 0, 0, 0); /* Semi-transparent background for the caption */
  padding: 10px; /* Padding for spacing */
  box-sizing: border-box;
  padding-top:15px;
}

/* Styling for h2 and p in the caption */
#lightbox-caption h2 {
  font-size: 1.2em; /* Adjust as needed */
  margin: 0;
}

#lightbox-caption p {
  font-size: 0.9em; /* Adjust as needed */
  margin: 0;
}

#close, #prev, #next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255, 255, 255, 0.5);
  border: none;
  padding: 10px;
  border-radius: 5px;
  color: var(--lightbox-controls-color);
}

#lightbox #close {
  top: 255px;
  right: 20px;
  width:35px;
  height:35px;
}

#lightbox #close:hover {
	background: rgba(178, 34, 52, 0.95);
}
#lightbox #close  {
	text-indent: -9999px;
	cursor: pointer
}
#lightbox #close:after, .close-button:before {
	content: ""'';
	width: 55%;
	height: 2px;
	background: #fafafa;
	position: absolute;
	top: 48%;
	left: 22%;
	transform: rotate(-45deg);
	transition: .3s ease-out
}
#lightbox #close:after {
	transform: rotate(45deg);
	transition: .3s ease-out
}
#lightbox #close:hover:after, .close-button:hover:before {
	transform: rotate(180deg)
}

#lightbox #prev {
  left: 20px;
}

#lightbox #next {
  right: 20px;
}

#close:hover, #prev:hover, #next:hover {
  color: var(--lightbox-controls-hover-color);
  transition: all 0.5s ease-in-out;
}

/* Demo styles */

.top-title {
    width: 90vw;
  max-width: 1200px;
  margin:0 auto;
  padding-bottom:50px;
}

/* .gallery {
  width: 90vw;
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
row-gap: 30px; Row gap
  column-gap: 30px; Column gap

} */

/* .gallery img {
  width: 100%;
  height: auto;
  cursor: pointer;
  transition: transform 0.5s ease, box-shadow 0.5s ease;

width:100%;
height:auto;
  aspect-ratio:4/3;
object-fit: contain;
} */

.gallery img:hover {
  transform: scale(1.05) translateY(-5px);

}


@media (max-width: 980px) {
  .gallery img:hover {
     transform: none;
  }
}

/* Demo page styles */
body {
  /* margin: 0;
  padding-top:50px;
  padding-bottom:50vh;
  background: #292929;
  color:white;
    font-size: calc(16px + 0.25vw); */
}

h1 {
  margin: 0;
  text-transform: uppercase;
}


</style>
<script>
    // Wait until the DOM is fully loaded before executing the script
document.addEventListener('DOMContentLoaded', () => {
    // Get references to key elements in the document
    const gallery = document.getElementById('gallery');
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const closeButton = document.getElementById('close');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    let currentIndex = 0;  // Track the current image index
    let captionEnabled = true;  // Toggle for showing/hiding captions

    // Add click event listener to the gallery
    gallery.addEventListener('click', e => {
        // Check if the clicked element is an image
        if (e.target.tagName === 'IMG') { 
            const imageSrc = e.target.dataset.image || e.target.src;  // Get image source
            const caption = e.target.dataset.caption || e.target.alt;  // Get image caption
            currentIndex = Array.from(gallery.children).indexOf(e.target);  // Update the current index
            updateImage(imageSrc, caption);  // Update the lightbox image and caption
            lightbox.style.display = 'flex';  // Show the lightbox
            fadeIn(lightbox, 500);  // Fade in the lightbox
            document.body.style.overflow = 'hidden';  // Disable page scrolling
        }
    });

    // Add click event listener to the close button
    closeButton.addEventListener('click', () => {
        fadeOut(lightbox, 500, () => {  // Fade out the lightbox
            lightbox.style.display = 'none';  // Hide the lightbox
            document.body.style.overflow = 'auto';  // Enable page scrolling
        });
    });

    // Add click event listener to the lightbox for closing when clicking outside the image
    lightbox.addEventListener('click', e => {
        if (e.target === lightbox) {
            fadeOut(lightbox, 500, () => {  // Fade out the lightbox
                lightbox.style.display = 'none';  // Hide the lightbox
                document.body.style.overflow = 'auto';  // Enable page scrolling
            });
        }
    });

    // Add click event listener to the next button for showing the next image
    nextButton.addEventListener('click', () => {
        const nextIndex = (currentIndex + 1) % gallery.children.length;  // Calculate the next index
        const nextImage = gallery.children[nextIndex].dataset.image || gallery.children[nextIndex].src;  // Get the next image source
        const nextCaption = gallery.children[nextIndex].dataset.caption || gallery.children[nextIndex].alt;  // Get the next image caption
        fadeOut(lightboxImage, 500, () => {  // Fade out the current image
            updateImage(nextImage, nextCaption);  // Update to the next image and caption
            currentIndex = nextIndex;  // Update the current index
        });
    });

    // Add click event listener to the previous button for showing the previous image
    prevButton.addEventListener('click', () => {
        const prevIndex = (currentIndex - 1 + gallery.children.length) % gallery.children.length;  // Calculate the previous index
        const prevImage = gallery.children[prevIndex].dataset.image || gallery.children[prevIndex].src;  // Get the previous image source
        const prevCaption = gallery.children[prevIndex].dataset.caption || gallery.children[prevIndex].alt;  // Get the previous image caption
        fadeOut(lightboxImage, 500, () => {  // Fade out the current image
            updateImage(prevImage, prevCaption);  // Update to the previous image and caption
            currentIndex = prevIndex;  // Update the current index
        });
    });

    // Function to fade in an element
    function fadeIn(element, duration) {
        element.style.opacity = '0';  // Start with opacity 0
        element.style.transition = `opacity ${duration / 1000}s`;  // Set transition duration
        setTimeout(() => {
            element.style.opacity = '1';  // Change opacity to 1 to fade in
        }, 50);  // Delay to ensure the transition is applied
    }

    // Function to fade out an element
    function fadeOut(element, duration, onComplete) {
        element.style.opacity = '1';  // Start with opacity 1
        element.style.transition = `opacity ${duration / 1000}s`;  // Set transition duration
        setTimeout(() => {
            element.style.opacity = '0';  // Change opacity to 0 to fade out
            setTimeout(onComplete, duration);  // Execute callback after the duration
        }, 50);  // Delay to ensure the transition is applied
    }

    // Function to update the caption
    function updateCaption(caption) {
        if (captionEnabled) {
            lightboxCaption.innerHTML = caption;  // Set caption if enabled
        } else {
            lightboxCaption.innerHTML = '';  // Clear caption if disabled
        }
    }

    // Function to update the image and its caption
    function updateImage(src, caption) {
        lightboxImage.src = src;  // Update the image source
        updateCaption(caption);  // Update the caption
        fadeIn(lightboxImage, 500);  // Fade in the new image
    }
});

</script>
</main>

<main>
  <div class="top-title" style="text-align: center;">
    <h1>Capturing Moments: Memories of <span style="color:#159bdf;">Wolfox Pvt Ltd</span></h1>
  </div>

  <!-- Images in container with id "gallery" displays in a responsive lightbox when clicked. -->

  <!-- The gallery section contains a collection of images for display -->
  <section class="gallery" id="gallery">

    
<?php if(!empty($image)): ?>
 
    <style>
    /* Default: Show 3 images in a row with border */
    .mem_img {
        width: 32%;
        height:300px;
        display: inline-block;
        border: 3px solid #ddd; /* Light gray border */
        border-radius: 8px; /* Rounded corners */
        padding: 5px;
        background: #fff; /* White background */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow */
        margin-bottom: 15px;
    }

    /* Center images */
    .image-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        margin-bottom:100px
    }

    /* For small screens: Show only 1 image per row */
    @media screen and (max-width: 768px) {
        .mem_img {
            width: 100%;
            display: block;
            margin-bottom: 15px;
        }
    }
</style>

<div style="text-align: end;margin-right:50px">
             <a  href="<?php echo base_url('/Student/photo')?>" style="border: 1px solid black; padding: 10px;border:none; background-color: #0093dd;transition: 0.3s;color: white;border-radius:10px;text-decoration: none;">Add Photo</a>
         </div>

<div class="image-container">
    <?php foreach ($image as $row): ?>
        <img class="mem_img" src="<?= base_url('uploads/photo/' . $row['batch'] . '/' . $row['file_name']) ?>" alt="Image" />
    <?php endforeach; ?>
</div>



    <?php else: ?>
        <div class="container" style="text-align: center; white-space: nowrap;">
    <span style="color: blue; display: inline-block;font-size:20px;text-align:center">Thank You For Uploading Photos!!<br> Your photo has been sent for admin approval,Stay tuned for updates.</span>
</div>

<?php endif; ?>
    <!-- Additional images can be added here -->
  </section>

  <!-- The lightbox div contains controls and an image for displaying enlarged images -->
  <div class="lightbox" id="lightbox">
    <span class="close close-button" id="close">&times;</span>
    <span class="arrow prev" id="prev">←</span>
    <span class="arrow next" id="next">→</span>
    <figure> <img src="" alt="" class="lightbox-image" id="lightbox-image">
      <figcaption class="lightbox-caption" id="lightbox-caption"></figcaption>
    </figure>
  </div>

</main>






        <!-- </div> -->
      

<style>
    .simple-footer {
        background: #0073e6;
        color: white;
        text-align: center;
        padding: 10px;
        font-size: 14px;
        box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .simple-footer {
            font-size: 12px;
            padding: 8px;
        }
    }
</style>
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

    <div class="modal fade" id="successModal1" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Notification</h5>
                </div>
                <div class="modal-body">
                    <?= session()->getFlashdata('update'); ?>
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
                }, 1000); // Auto-close after 3 seconds
            <?php endif; ?>
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (session()->getFlashdata('update')) : ?>
                var successModal = new bootstrap.Modal(document.getElementById('successModal1'));
                successModal.show();
                setTimeout(() => {
                    successModal.hide();
                }, 1000); // Auto-close after 3 seconds
            <?php endif; ?>
        });
    </script>

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

    <!--Show Download-->
    <script>
        function showDownload(id) {
            var downloadLink = document.getElementById(id);

            // Toggle visibility
            if (downloadLink.style.display === 'none' || downloadLink.style.display === '') {
                downloadLink.style.display = 'block';
            } else {
                downloadLink.style.display = 'none';
            }
        }
    </script>

    <script>
    // Fancybox Configuration
// $('[data-fancybox="gallery"]').fancybox({
//   buttons: [
//     "slideShow",
//     "thumbs",
//     "zoom",
//     "fullScreen",
//     "share",
//     "close"
//   ],
//   loop: false,
//   protect: true
// });
</script>

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
                }, 1000); // Auto-close after 3 seconds
            <?php endif; ?>
        });
    </script>    

</body>

<!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:16 GMT -->

</html>