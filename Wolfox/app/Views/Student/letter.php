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
          background-color: #2962ff ;
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

      /* Grid Layout for better alignment */
      .document-container {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
          gap: 20px;
          padding: 20px;
      }

      /* Card effect */
      .skill-bar {
          transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
          border-radius: 12px;
          background: linear-gradient(135deg, #f0f8ff, #d1e3f6);
      }

      .skill-bar:hover {
          transform: translateY(-5px);
          box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
      }

      /* Icon animations */
      .action-icon {
          transition: transform 0.3s ease-in-out, background 0.3s ease-in-out;
      }

      .action-icon:hover {
          transform: scale(1.2);
      }

      /* Pulse effect on preview icon */
      .pulse-effect {
          animation: pulse 2s infinite;
      }

      @keyframes pulse {
          0% {
              box-shadow: 0 0 0 0 rgba(0, 147, 221, 0.4);
          }

          70% {
              box-shadow: 0 0 0 10px rgba(0, 147, 221, 0);
          }

          100% {
              box-shadow: 0 0 0 0 rgba(0, 147, 221, 0);
          }
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

                              <h5 class="mb-0">Letter</h5>


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
                 <h1>Your Letters</h1>
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
          <!--   -->
          <!-- Sidebar End -->
          <?php


            // if (!empty($data['Admissiondata'])) {
            //     $hasPaidSomeAmount = ($data['Admissiondata']->paidfee > 0);
            //     $hasPaidFullAmount = ($data['Admissiondata']->paidfee >= $data['Admissiondata']->totalfee);
            //     $courseEndDate = date('Y-m-d', strtotime($data['Admissiondata']->joiningdate . ' + ' . $data['Admissiondata']->duration . ' days'));
            //     $hasCompletedCourse = (date('Y-m-d') >= $courseEndDate);
            // }

            ?>

          <?php

            use App\Models\CourseModel;

            ?>


          <!-- Page Content -->
          <div class="page-content bottom-content">
              <div class="dz-banner-heading">
                  <div class="overlay-black-light">
                      <!-- <img src="<?php echo base_url('assets/images/bg2.png') ?>" class="bnr-img" alt=""> -->
                  </div>
              </div>

              <!-- <div class="header">
                    <h1>Letters</h1>
                </div> -->
              <?php
                //echo$paidfee = $StudentData[0]['paidfee'];exit;
                if (($StudentData['paidfee']) && $StudentData['paidfee'] > 0) { ?>
                  <div class="document-container">
                      <div class="skill-bar text-center p-4 shadow-sm border ">
                          <div class="d-flex justify-content-center gap-4 mb-3">
                              <a href="<?php echo base_url('/student/joiningletter/' . $studentId); ?>"
                                  target="_blank"
                                  id="joiningBtn"
                                  class="openLetterBtn"
                                  data-flag="<?= !empty($StudentData['socialflag']) ? 'set' : 'unset' ?>">
                                  <i class="fa-solid fa-eye fa-lg text-primary p-2 rounded-circle shadow-sm action-icon"
                                      style="cursor: pointer; background: #eaf3ff;">
                                  </i>
                              </a>



                          </div>

                          <h6 class="title text-dark fw-semibold">Joining Letter</h6>

                      </div>
                  <?php } else { ?>
                      <p>NA</p>
                  <?php } ?>

                  <?php
                    if (($StudentData['paidfee']) && ($StudentData['totalfee']) && $StudentData['paidfee'] == $StudentData['totalfee']) {
                        $CourseModel = new CourseModel();
                        $duration = $CourseModel->select('c.duration')
                            ->join('course c', 'a.courseid = c.courseid')
                            ->from('admission a')
                            ->where('a.StudentId', $StudentData['StudentId'])
                            ->groupBy('duration')
                            ->findAll();


                        $demo = $duration[0]['duration'];
                        $number = filter_var($demo, FILTER_SANITIZE_NUMBER_INT);
                        $totalDays = $number * 30;

                        $joiningDate = strtotime($StudentData['joiningdate']);
                        $currentDate = strtotime(date('Y-m-d'));
                        $dateDiff = (int)(($currentDate - $joiningDate) / (60 * 60 * 24));

                        if ($dateDiff > $totalDays) {
                    ?>
                          <div class="skill-bar text-center p-4 shadow-sm border">
                              <div class="d-flex justify-content-center gap-4 ">
                                  <!-- <a href="<?php //echo base_url('/student/completionletter/' . $StudentData['studid']) 
                                                ?>" target="_blank" style="margin-top: 25px;">
                                    <i class="fa-solid fa-eye fa-lg text-primary p-2 rounded-circle shadow-sm action-icon pulse-effect openModalBtn2" data-bs-target="#exampleModal2" style="cursor: pointer; background: #eaf3ff;"></i>
                                </a> -->
                                  <a href="<?php echo base_url('/student/completionletter/' . $studentId); ?>"
                                      target="_blank"
                                      id="completionBtn"
                                      class="openLetterBtn"
                                      data-flag="<?= !empty($StudentData['socialflag']) ? 'set' : 'unset' ?>">
                                      <i class="fa-solid fa-eye fa-lg text-primary p-2 rounded-circle shadow-sm action-icon"
                                          style="cursor: pointer; background: #eaf3ff;">
                                      </i>
                                  </a>

                              </div>
                              <h6 class="title text-dark fw-semibold">Completion Letter</h6>

                          </div>
                  <?php
                        }
                    }
                    ?>
                  </div>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                      aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel" style="color:white">Follow us on social media and unlock your letters.</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="d-flex justify-content-center gap-3">
                                      <a href="https://www.instagram.com/wolfoxkolhapur?igsh=MWU4OG9yeXlmcDYwbQ==" class="social-icon" data-platform="instagram">
                                          <i class="fa-brands fa-instagram fa-2x text-danger"></i>
                                      </a>
                                      <a href="https://www.facebook.com/WOLFOXSERVICES?mibextid=gik2fB" class="social-icon" data-platform="facebook">
                                          <i class="fa-brands fa-facebook fa-2x text-primary"></i>
                                      </a>
                                      <a href="https://www.youtube.com/@wolfox3126" class="social-icon" data-platform="youtube">
                                          <i class="fa-brands fa-youtube fa-2x text-danger"></i>
                                      </a>
                                      <a href="https://wolfox.in/" class="social-icon" data-platform="google">
                                          <i class="fa-brands fa-google fa-2x" style="color: blue;"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- <div class="document-container">
            <div class="skill-bar text-center p-4 shadow-sm border ">
                <div class="d-flex justify-content-center gap-4 mb-3">
                    <i class="fa-solid fa-eye fa-lg text-primary p-2 rounded-circle shadow-sm action-icon pulse-effect openModalBtn" data-bs-target="#exampleModal" style="cursor: pointer; background: #eaf3ff;"></i>
                    <i class="fa-solid fa-download fa-lg text-warning p-2 rounded-circle shadow-sm action-icon"
                        style="cursor: pointer; background: #fff5e6;"></i>

                </div>
                <h6 class="title text-dark fw-semibold">Joining Letter</h6>
            </div>

            <div class="skill-bar text-center p-4 shadow-sm border">
                <div class="d-flex justify-content-center gap-4 mb-3">
                    <i class="fa-solid fa-eye fa-lg text-primary p-2 rounded-circle shadow-sm action-icon pulse-effect openModalBtn2" data-bs-target="#exampleModal2" style="cursor: pointer; background: #eaf3ff;"></i>
                    <i class="fa-solid fa-download fa-lg text-warning p-2 rounded-circle shadow-sm action-icon"
                        style="cursor: pointer; background: #fff5e6;"></i>
                </div>
                <h6 class="title text-dark fw-semibold">Completion Letter</h6>
            </div>


        </div> -->
                  <!-- Joining Letter Section -->
                  <!-- <div id="joiningSection" style="display: none; margin-top: 20px;">
                    <h4>Joining Letter</h4>
                    <iframe id="joiningPdf" src="" width="100%" height="500px" style="border: 1px solid #ddd; border-radius: 5px;"></iframe>
                    <a id="joiningDownload" href="" class="btn btn-success" download style="margin-top: 10px;">Download Joining Letter</a>
                </div> -->

                  <!-- Completion Letter Section -->
                  <!-- <div id="completionSection" style="display: none; margin-top: 20px;">
                    <h4>Completion Letter</h4>
                    <iframe id="completionPdf" src="" width="100%" height="500px" style="border: 1px solid #ddd; border-radius: 5px;"></iframe>
                    <a id="completionDownload" href="<? //php echo base_url('/student/completionletter/' . $Admissiondata->id) 
                                                        ?>" target="_blank" class="btn btn-success" download style="margin-top: 10px;">Download Completion Letter</a>
                </div> -->
          </div>
      </div>

      <!-- <script>
            // Joining Button Click Event
            document.getElementById("joiningBtn").addEventListener("click", function() {
                // Show the Joining Letter section and hide others
                document.getElementById("joiningSection").style.display = "block";
                document.getElementById("completionSection").style.display = "none";

                // Set the source of the iframe to the Joining Letter PDF
                let joiningPdfUrl = "<?php echo base_url('path/to/joiningletter.pdf'); ?>"; // Replace with the actual path to the joining letter PDF
                document.getElementById("joiningPdf").src = joiningPdfUrl;

                // Set the download link to the Joining Letter PDF
                document.getElementById("joiningDownload").href = joiningPdfUrl;
            });

            // Completion Button Click Event (if you want to toggle this section too)
            document.getElementById("completionBtn").addEventListener("click", function() {
                // Show the Completion Letter section and hide others
                document.getElementById("completionSection").style.display = "block";
                document.getElementById("joiningSection").style.display = "none";

                // Set the source of the iframe to the Completion Letter (already set)
            });
        </script> -->




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
          document.addEventListener("DOMContentLoaded", function() {
              let modalElement = document.getElementById("exampleModal");

              // Function to handle click event for letter buttons
              function handleLetterClick(event) {
                  event.preventDefault();

                  let button = event.currentTarget; // Get the clicked button
                  let flagStatus = button.getAttribute("data-flag");
                  let letterUrl = button.getAttribute("href");

                  if (flagStatus === "set") {
                      // If flag is set, navigate directly to the letter
                      window.location.href = letterUrl;
                  } else {
                      // Show modal if flag is not set
                      let modal = new bootstrap.Modal(modalElement);
                      modal.show();
                  }
              }

              // Apply click event to both joining and completion buttons
              document.querySelectorAll(".openLetterBtn").forEach(button => {
                  button.addEventListener("click", handleLetterClick);
              });

              // Handle social icon clicks
              document.querySelectorAll(".social-icon").forEach(icon => {
                  icon.addEventListener("click", function(event) {
                      event.preventDefault();

                      let platform = this.getAttribute("data-platform");
                      let url = this.getAttribute("href");

                      fetch("<?= site_url('letter/setSocialFlag') ?>", {
                              method: "POST",
                              headers: {
                                  "Content-Type": "application/json"
                              },
                              body: JSON.stringify({
                                  platform: platform
                              })
                          })
                          .then(response => response.json())
                          .then(data => {
                              console.log("Flag updated:", data);
                              if (data.status === "success") {
                                  // Update all letter buttons and redirect
                                  document.querySelectorAll(".openLetterBtn").forEach(button => {
                                      button.setAttribute("data-flag", "set");
                                  });
                                  window.location.href = url;
                              }
                          })
                          .catch(error => console.error("Error:", error));
                  });
              });
          });
      </script>


  </body>

  <!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:16 GMT -->

  </html>