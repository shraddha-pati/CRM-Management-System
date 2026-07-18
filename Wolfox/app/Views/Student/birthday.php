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
  <style>
      

      .birthday-container {
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 20px;
          width: 250px;
          text-align: center;
          margin: 20px;
          position: relative;
          animation: bounce 2s infinite ease-in-out;
      }

      /* Floating effect for the whole div */
      @keyframes bounce {
          0% {
              transform: translateY(0);
          }

          50% {
              transform: translateY(-10px);
          }

          100% {
              transform: translateY(0);
          }
      }

      .birthday-container img {
          width: 100px;
          height: 100px;
          border-radius: 50%;
          object-fit: cover;
          margin-bottom: 15px;
      }

      .birthday-container h2 {
          font-size: 24px;
          margin: 10px 0;
          font-weight: bold;
      }

      .birthday-container p {
          font-size: 16px;
          color: #777;
      }

      .birthday-wishes {
          background-color: #f9c74f;
          padding: 10px;
          border-radius: 5px;
          margin: 10px 0;
          font-weight: bold;
          color: white;
          position: relative;
          overflow: hidden;
      }

      /* Sparkles effect */
      .sparkle {
          position: absolute;
          top: 10px;
          left: 50%;
          width: 20px;
          height: 20px;
          background: radial-gradient(circle, #fff, rgba(255, 255, 255, 0));
          border-radius: 50%;
          opacity: 0;
          animation: sparkle 1.5s infinite;
      }

      @keyframes sparkle {
          0% {
              transform: translateX(-50%) scale(0.5);
              opacity: 1;
          }

          50% {
              transform: translateX(-50%) scale(1);
              opacity: 0.5;
          }

          100% {
              transform: translateX(-50%) scale(0.5);
              opacity: 0;
          }
      }

      /* Confetti effect */
      @keyframes confetti {
          0% {
              transform: translateY(0);
              opacity: 1;
          }

          100% {
              transform: translateY(200%);
              opacity: 0;
          }
      }

      .confetti {
          position: absolute;
          top: -10px;
          left: 50%;
          width: 5px;
          height: 10px;
          background-color: #f76c6c;
          animation: confetti 3s linear infinite;
      }

      .confetti:nth-child(odd) {
          background-color: #f9c74f;
      }

      .confetti:nth-child(even) {
          background-color: #6fa3ef;
      }

      /* Media Queries for Responsiveness */
      @media (max-width: 1200px) {
          .birthday-container {
              width: 220px;
          }
      }

      @media (max-width: 768px) {
          .birthday-container {
              width: 200px;
          }

          body {
              flex-direction: column;
              align-items: center;
          }
      }

      @media (max-width: 500px) {
          .birthday-container {
              width: 400px;
          }
      }

      /* Flexbox for larger screens */
      .birthday-container-wrapper {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          margin-top: 30px;
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

                              <h5 class="mb-0">Today's Birthday</h5>


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


          <!-- Sidebar -->
          <!--   -->
          <!-- Sidebar End -->
          <?php



            ?>

          <?php

            use App\Models\CourseModel;

            ?>


          <!-- Page Content -->
          <div class="page-wraper">
              <!-- Preloader -->
              <!-- <div id="preloader">
                  <div class="spinner"></div>
              </div> -->
              <!-- Preloader end-->

              <!-- Header -->
              <!-- <header class="header">
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
                                  <h5 class="mb-0"> </h5>
                              </div>
                          </div>
                      </div>
                  </div>
              </header> -->

              <!-- Page Content -->
               <?php foreach ($birthday as $row):  ?>
              <div class="birthday-container-wrapper">
                  <!-- Birthday Section 1 -->
                  <div class="birthday-container">
                      <img src="<?php echo base_url('uploads/studentdocument/' . $row['id'] . '/' . $row['profile'] . '') ?>" alt="Student Photo">
                      <h2><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></h2>
                      <p>Student</p>
                      <div class="birthday-wishes">
                          <div>Happy Birthday, <?php echo $row['firstname'] ?>!</div>
                          <div class="sparkle"></div>
                          <div class="sparkle" style="top: 30px; left: 20%"></div>
                          <div class="sparkle" style="top: 50px; left: 60%"></div>
                      </div>
                      <div class="confetti" style="left: 15%; animation-delay: 0.5s;"></div>
                      <div class="confetti" style="left: 30%; animation-delay: 1s;"></div>
                      <div class="confetti" style="left: 45%; animation-delay: 1.5s;"></div>
                  </div>
                  <?php endforeach; ?>
               

                
              </div>



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
          <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
          <script>
              // Display confetti animation on page load
              window.onload = function() {
                  confetti({
                      particleCount: 200,
                      spread: 70,
                      origin: {
                          y: 0.6
                      }
                  });

                  // Show the "Happy Birthday" message after page loads with a delay
                  setTimeout(function() {
                      document.getElementById("birthdayMessage").style.animation = "fadeIn 3s forwards, bounce 1s 3s";
                  }, 500); // Delay for animation to appear
              }
          </script>

  </body>

  <!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:16 GMT -->

  </html>