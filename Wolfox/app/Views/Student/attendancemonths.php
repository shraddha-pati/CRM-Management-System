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

                             <h5 class="mb-0">Attendance</h5>


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





         <!-- Student Attendance Section -->
         <div class="page-content bottom-content ">
             <div class="dz-banner-heading">

             </div>
             <div class="container" style="margin-top: 20px;">
                 <h2>Select Month</h2>
                 <form method="post" action="save_attendance">
                     <div class="container">
                         <div class="row">
                             <?php
                                $session = session();
                                $duration = $session->get('duration');
                                $number = filter_var($duration, FILTER_SANITIZE_NUMBER_INT);
                                $totalDays = $number * 30;
                                $joining = $session->get('joiningdate');
                                $month = date('m', strtotime($joining));
                                $joiningDay = date('d', strtotime($joining));
                                $year = date('Y', strtotime($joining));

                                $currentdate = date('Y-n');
                                //   $currentmonth = date('m');
                                // $currentyear = date('Y');


                                if ($joiningDay > 1) {
                                    $duration = $number + 1;
                                    // if($month >= 12)
                                    // {
                                    //     $year++;
                                    // }
                                    for ($i = 0; $i < $duration; $i++)
                                     {
                                        $month1 = $month + $i;

                                        if ($month1 >= 12) {
                                            $month1 = ($month1 - 1) % 12 + 1;
                                        }

                                        $dateToCheck = '' . $year . '-' . $month1 . '';

                                        if ($dateToCheck <= $currentdate) {
                                            // echo 'hello';
                                            if ($i == ($duration - 1)) {
                                                // echo 'gekllla';

                                                echo '<a href="' . base_url("/Student/lastmonthattendance/" . $month1 . "") . '"><div class="col-sm-6" style="  background-color:var(--primary); border-radius:25px;height:30px;color:white;text-align:center;margin:20px" class="div"><p style=" ">' . DateTime::createFromFormat('!m', $month1)->format('M') . ' </p></div></a>';
                                            } else {
                                                echo '<a href="' . base_url("/Student/attendance/" . $month1 . "") . '"><div class="col-sm-6" style="  background-color:var(--primary); border-radius:25px;height:30px;color:white;text-align:center;margin:20px" class="div"><p style=" ">' . DateTime::createFromFormat('!m', $month1)->format('M') . ' </p></div></a>';
                                            }
                                        }
                                    }
                                } else {
                                    // echo 'hello';
                                    for ($i = 0; $i < $duration; $i++) {
                                        $month1 = $month + $i;

                                        echo $date1 = '' . $year . '-' . $month1 . '';
                                        // $dateToCheck = date("Y-n", strtotime($date1));


                                        if ($dateToCheck <= $currentdate) {
                                            echo 'hello';

                                            if ($i == ($duration - 1)) {
                                                // echo 'gekllla';
                                                echo '<a href="' . base_url("/Student/lastmonthattendance/" . $month1 . "") . '"><div class="col-sm-6" style="  background-color:var(--primary); border-radius:25px;height:30px;color:white;text-align:center;margin:20px" class="div"><p style=" ">' . DateTime::createFromFormat('!m', $month1)->format('M') . ' </p></div></a>';
                                            } else {
                                                echo '<a href="' . base_url("/Student/attendance/" . $month1 . "") . '"><div class="col-sm-6" style="  background-color:var(--primary); border-radius:25px;height:30px;color:white;text-align:center;margin:20px" class="div"><p style=" ">' . DateTime::createFromFormat('!m', $month1)->format('M') . ' </p></div></a>';
                                            }
                                        }
                                    }
                                }



                                ?>
                         </div>
                     </div>


                 </form>
             </div>
         </div>
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
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


 </body>

 <!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:16 GMT -->

 </html>