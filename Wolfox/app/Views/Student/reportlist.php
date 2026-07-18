 <!-- Page Content -->
 <!-- <div class="page-content bottom-content "> -->

 <!-- <div class="container"> -->

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

                     <h5 class="mb-0" style="color: #0093dd;">Report</h5>


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
                 <h1>Your ReportList</h1>
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

         <div style="text-align: end;margin-right:50px">
             <a  href="<?php echo base_url('/student/report')?>" style="border: 1px solid black;padding:5px;">Add Report</a>
         </div>
 <div class="container">
     <h3 class="mb-3" style="color: #0093dd;">Weekly Report List</h3>
     <div class="table-responsive">
         <table class="table table-bordered table-striped">
             <thead class="thead-dark">
                 <tr>
                     <th>Sr.No.</th>
                     <th>College Name</th>
                     <th>Report File</th>

                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($reportData as $row):
                    ?>
                     <tr>
                         <td class="text-center"><?php echo $row['id'] ?></td>
                         <!-- <div style="width: 60px; border:1px solid #2962ff;text-align:center;border-radius:5px;background-color: #2962ff !important;;color:white">Edit</div>
                                                 </a></td> -->

                         <td><?php echo $row['collegename'] ?></td>
                         <td><img src="<?= base_url('uploads/collegereport/' . $row['id'] . '/' . $row['reportimage']) ?>" style="width: 200px; height: 150px;"></td>





                     </tr>
                 <?php
                    endforeach;
                    ?>

             </tbody>
         </table>
     </div>
 </div>




 <!-- </div> -->




 <!-- </div> -->
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

 </body>

 <!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:16 GMT -->

 </html>