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

                            <h5 class="mb-0">Documents</h5>


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
        <div class="sidebar">
            <div class="author-box" style="background-color: var(--primary);">
                <div class="dz-media">
                    <img src="<?php echo base_url('uploads/studentdocument/' . $id . '/' . $profile . '') ?>" class="rounded-circle" alt="author-image">
                </div>
                <div class="dz-info">
                    <span>Good Morning</span>
                    <h5 class="name"><?php echo $firstname ?> <?php echo $lastname ?></h5>
                </div>
            </div>
            <ul class="nav navbar-nav">
                <li class="nav-label" style="color: var(--primary);">Main Menu</li>
                <li><a class="nav-link" href="welcome.html">
                        <span class="dz-icon bg-red light">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M11.776 21.8374C9.49294 20.4273 7.37064 18.7645 5.44791 16.8796C4.09052 15.5338 3.05388 13.8905 2.41718 12.0753C1.27955 8.53523 2.60383 4.48948 6.30113 3.2884C8.25264 2.67553 10.3751 3.05175 12.0071 4.29983C13.6397 3.05315 15.7614 2.67705 17.713 3.2884C21.4103 4.48948 22.7435 8.53523 21.6058 12.0753C20.9743 13.8888 19.9438 15.5319 18.5929 16.8796C16.6684 18.7625 14.5463 20.4251 12.2648 21.8374L12.016 22L11.776 21.8374Z" fill="white" />
                                <path d="M12.0109 22L11.776 21.8374C9.49013 20.4274 7.36487 18.7647 5.43902 16.8796C4.0752 15.5356 3.03238 13.8922 2.39052 12.0753C1.26177 8.53523 2.58605 4.48948 6.28335 3.2884C8.23486 2.67553 10.3853 3.05204 12.0109 4.31057V22Z" fill="white" />
                                <path d="M18.2304 9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z" fill="white" />
                            </svg>
                        </span>
                        <span>Internship Details</span>
                    </a></li>
                <li><a class="nav-link" href="<?php echo base_url('/student/account') ?>">
                        <span class="dz-icon bg-pink light">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="#130F26" />
                            </svg>
                        </span>
                        <span>Account</span>
                    </a></li>
                <li class="sub-menu-down">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="dz-icon bg-red light">
                            <svg height="18" viewBox="0 0 512 512" width="18" xmlns="http://www.w3.org/2000/svg">
                                <g id="_40_Sidemenu" data-name="40 Sidemenu">
                                    <g fill="#a9defc">
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="80.54" />
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="203.24" />
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="325.94" />
                                    </g>
                                    <path d="m309.41 501h-274.85a20.46 20.46 0 0 1 0-40.91h254.44v-408.18h-254.44a20.46 20.46 0 0 1 0-40.91h274.85a20.46 20.46 0 0 1 20.46 20.46v449.08a20.46 20.46 0 0 1 -20.46 20.46z" fill="#f5d367" />
                                    <path d="m491.92 241.44c-1.43-1.44-74.62-73.44-74.62-73.44a20.46 20.46 0 0 0 -28.93 29l59.55 59.55-59.55 59.55a20.46 20.46 0 0 0 28.93 28.9s73.19-72 74.62-73.41a22 22 0 0 0 0-30.14z" fill="#f5d367" />
                                    <path d="m123.85 431.47h-65.29a24 24 0 0 1 -24-24v-57.53a24 24 0 0 1 11.65-20.58 501.22 501.22 0 0 0 77.64 102.11z" fill="#a2d4ea" />
                                    <path d="m209.31 501h-174.75a20.46 20.46 0 1 1 0-40.91h120a499.3 499.3 0 0 0 54.75 40.91z" fill="#e2c061" />
                                </g>
                            </svg>
                        </span>
                        <span>Fees</span>
                    </a>
                    <ul class="sub-menu">

                        <li><a href="<?php echo base_url('/Student/feemaster') ?>">Form</a></li>
                        <li><a href="<?php echo base_url('/Student/feedocument') ?>">list</a></li>
                    </ul>
                </li>
                <li class="sub-menu-down">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="dz-icon bg-red light">
                            <svg height="18" viewBox="0 0 512 512" width="18" xmlns="http://www.w3.org/2000/svg">
                                <g id="_40_Sidemenu" data-name="40 Sidemenu">
                                    <g fill="#a9defc">
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="80.54" />
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="203.24" />
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="325.94" />
                                    </g>
                                    <path d="m309.41 501h-274.85a20.46 20.46 0 0 1 0-40.91h254.44v-408.18h-254.44a20.46 20.46 0 0 1 0-40.91h274.85a20.46 20.46 0 0 1 20.46 20.46v449.08a20.46 20.46 0 0 1 -20.46 20.46z" fill="#f5d367" />
                                    <path d="m491.92 241.44c-1.43-1.44-74.62-73.44-74.62-73.44a20.46 20.46 0 0 0 -28.93 29l59.55 59.55-59.55 59.55a20.46 20.46 0 0 0 28.93 28.9s73.19-72 74.62-73.41a22 22 0 0 0 0-30.14z" fill="#f5d367" />
                                    <path d="m123.85 431.47h-65.29a24 24 0 0 1 -24-24v-57.53a24 24 0 0 1 11.65-20.58 501.22 501.22 0 0 0 77.64 102.11z" fill="#a2d4ea" />
                                    <path d="m209.31 501h-174.75a20.46 20.46 0 1 1 0-40.91h120a499.3 499.3 0 0 0 54.75 40.91z" fill="#e2c061" />
                                </g>
                            </svg>
                        </span>
                        <span>Photo Upload</span>
                    </a>
                    <ul class="sub-menu">

                        <li><a href="<?php echo base_url('/Student/photo') ?>">Form</a></li>
                        <li><a href="<?php echo base_url('/Student/memories') ?>">list</a></li>
                    </ul>
                </li>
                <li class="sub-menu-down">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="dz-icon bg-red light">
                            <svg height="18" viewBox="0 0 512 512" width="18" xmlns="http://www.w3.org/2000/svg">
                                <g id="_40_Sidemenu" data-name="40 Sidemenu">
                                    <g fill="#a9defc">
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="80.54" />
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="203.24" />
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="325.94" />
                                    </g>
                                    <path d="m309.41 501h-274.85a20.46 20.46 0 0 1 0-40.91h254.44v-408.18h-254.44a20.46 20.46 0 0 1 0-40.91h274.85a20.46 20.46 0 0 1 20.46 20.46v449.08a20.46 20.46 0 0 1 -20.46 20.46z" fill="#f5d367" />
                                    <path d="m491.92 241.44c-1.43-1.44-74.62-73.44-74.62-73.44a20.46 20.46 0 0 0 -28.93 29l59.55 59.55-59.55 59.55a20.46 20.46 0 0 0 28.93 28.9s73.19-72 74.62-73.41a22 22 0 0 0 0-30.14z" fill="#f5d367" />
                                    <path d="m123.85 431.47h-65.29a24 24 0 0 1 -24-24v-57.53a24 24 0 0 1 11.65-20.58 501.22 501.22 0 0 0 77.64 102.11z" fill="#a2d4ea" />
                                    <path d="m209.31 501h-174.75a20.46 20.46 0 1 1 0-40.91h120a499.3 499.3 0 0 0 54.75 40.91z" fill="#e2c061" />
                                </g>
                            </svg>
                        </span>
                        <span>Attendance</span>
                    </a>
                    <ul class="sub-menu">

                        <li><a href="<?php echo base_url('/Student/Profile') ?>">Form</a></li>
                        <li><a href="<?php echo base_url('/Student/attendancemonth') ?>">List</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="<?php echo base_url('/Student/Letter') ?>">
                        <span class="dz-icon bg-yellow light">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#fff" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#fff" fill-rule="nonzero" />
                                </g>
                            </svg>
                        </span>
                        <span>Letters</span>
                    </a></li>
                <li class="sub-menu-down">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="dz-icon bg-red light">
                            <svg height="18" viewBox="0 0 512 512" width="18" xmlns="http://www.w3.org/2000/svg">
                                <g id="_40_Sidemenu" data-name="40 Sidemenu">
                                    <g fill="#a9defc">
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="80.54" />
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="203.24" />
                                        <rect height="105.52" rx="24" width="231.61" x="34.56" y="325.94" />
                                    </g>
                                    <path d="m309.41 501h-274.85a20.46 20.46 0 0 1 0-40.91h254.44v-408.18h-254.44a20.46 20.46 0 0 1 0-40.91h274.85a20.46 20.46 0 0 1 20.46 20.46v449.08a20.46 20.46 0 0 1 -20.46 20.46z" fill="#f5d367" />
                                    <path d="m491.92 241.44c-1.43-1.44-74.62-73.44-74.62-73.44a20.46 20.46 0 0 0 -28.93 29l59.55 59.55-59.55 59.55a20.46 20.46 0 0 0 28.93 28.9s73.19-72 74.62-73.41a22 22 0 0 0 0-30.14z" fill="#f5d367" />
                                    <path d="m123.85 431.47h-65.29a24 24 0 0 1 -24-24v-57.53a24 24 0 0 1 11.65-20.58 501.22 501.22 0 0 0 77.64 102.11z" fill="#a2d4ea" />
                                    <path d="m209.31 501h-174.75a20.46 20.46 0 1 1 0-40.91h120a499.3 499.3 0 0 0 54.75 40.91z" fill="#e2c061" />
                                </g>
                            </svg>
                        </span>
                        <span>Projects</span>
                    </a>
                    <ul class="sub-menu">

                        <li><a href="<?php echo base_url('/Student/studentproject') ?>">Form</a></li>
                        <li><a href="<?php echo base_url('/Student/studentproject') ?>">List</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo base_url('/student/logout') ?>">
                        <span class="dz-icon bg-red light">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z" fill="#fff" fill-rule="nonzero" opacity="0.3" transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) " />
                                    <rect fill="#ff4db8" opacity="0.3" transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) " x="13" y="6" width="2" height="12" rx="1" />
                                    <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z" fill="#fff" fill-rule="nonzero" transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) " />
                                </g>
                            </svg>
                        </span>
                        <span>Logout</span>
                    </a>
                </li>


                <li>
                    <div class="mode">
                        <span class="dz-icon bg-green light">
                            <i class="fa-solid fa-moon"></i>
                        </span>
                        <span>Dark Mode</span>
                        <div class="custom-switch">
                            <input type="checkbox" class="switch-input theme-btn" id="toggle-dark-menu">
                            <label class="custom-switch-label" for="toggle-dark-menu"></label>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
        <!-- Sidebar End -->


        <!-- Page Content -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

        <style>
            /* Full Page Background */
            .page-content {
                background: linear-gradient(135deg, #f5f7fa, #dfe9f3);
                /* min-height: 100vh; */
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
                border: 2px solid #2d6cdf;
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
                color: #2d6cdf;
                text-align: center;
                border-bottom: 2px solid #2d6cdf;
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
                border: 2px solid #2d6cdf;
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
                background-color: #2d6cdf;
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

        <!-- <div style="text-align: center;">
            <img src="<?php echo base_url('/uploads/logo.png') ?>" alt="logo" style="width: 300px;">
        </div> -->
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
            <h1>Edit Your Documents</h1>
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
        <div class="page-content">

            <div class="form-container" data-aos="zoom-in">
                <div class="header">
                    <h1>Edit Your Documents</h1>
                </div>
                <?php 
    // Retrieve docremark from the URL
    $docremark = isset($_GET['docremark']) ? intval($_GET['docremark']) : null;
?>

<form id="uploadForm" class="animated-form" action="<?php echo base_url('/student/document/update') ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="student_id" value="<?php echo $studentdata['id']; ?>">

    <?php if ($docremark == 3 || $docremark == 5) { ?>  
        <div class="form-group">
            <label>Upload ID Size Photo</label>
            <input type="file" class="custom-file-input" name="Image" id="Image" >
            <label for="Image" class="custom-file-label">Choose file</label>
            <small class="text-danger error-message" id="errorImage">Please upload an ID size photo.</small>
        </div>
    <?php } ?>

    <?php if ($docremark == 1 || $docremark == 5) { ?>  
        <div class="form-group">
            <label>Upload Aadhar Card</label>
            <input type="file" class="custom-file-input" name="AdharCard" id="AdharCard" >
            <label for="AdharCard" class="custom-file-label">Choose file</label>
            <small class="text-danger error-message" id="errorAdharCard">Please upload your Aadhar card.</small>
        </div>
    <?php } ?>

    <?php if ($docremark == 2 || $docremark == 5) { ?>  
        <div class="form-group">
            <label>Upload College Document</label>
            <input type="file" class="custom-file-input" name="ClgDoc" id="ClgDoc" >
            <label for="ClgDoc" class="custom-file-label">Choose file</label>
            <small class="text-danger error-message" id="errorClgDoc">Please upload the college document.</small>
        </div>
    <?php } ?>

    <?php if ($docremark == 4 || $docremark == 5) { ?>  
        <div class="form-group">
            <label>Upload CV</label>
            <input type="file" class="custom-file-input" name="CV" id="CV" >
            <label for="CV" class="custom-file-label">Choose file</label>
        </div>
    <?php } ?>

    <!-- <?php if ($docremark) { ?> -->
        <button type="submit" class="btn btn-submit">Submit</button>
    <?php } else { ?>
        <p class="text-danger">Invalid document type selected.</p>
    <?php } ?>
</form>
            </div>

        </div>
       

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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
            AOS.init();

            document.getElementById("CV").addEventListener("change", function () {
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
<script>
document.addEventListener("DOMContentLoaded", function () {
    let errorMessages = document.querySelectorAll(".error-message");

    // Hide all error messages initially
    errorMessages.forEach(msg => msg.style.display = "none");

    document.getElementById('uploadForm').addEventListener('submit', function(event) {
        let isValid = true;

        let requiredFields = [
            { id: "Image", errorId: "errorImage" },
            { id: "AdharCard", errorId: "errorAdharCard" },
            { id: "ClgDoc", errorId: "errorClgDoc" }
        ];

        requiredFields.forEach(field => {
            let input = document.getElementById(field.id);
            let errorMsg = document.getElementById(field.errorId);

            if (input && errorMsg) {
                if (!input.files || input.files.length === 0) {
                    errorMsg.style.display = "block"; // Show error message
                    isValid = false;
                } else {
                    errorMsg.style.display = "none"; // Hide error if file is selected
                }
            }
        });

        if (!isValid) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });

    // Hide error when a file is selected
    document.querySelectorAll(".custom-file-input").forEach(input => {
        input.addEventListener("change", function() {
            let fileName = this.files.length ? this.files[0].name : "Choose file";
            this.nextElementSibling.textContent = fileName;

            let errorMsg = document.getElementById("error" + this.id);
            if (errorMsg) {
                errorMsg.style.display = "none"; // Hide error when file is selected
            }
        });
    });
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
    document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".custom-file-input").forEach(input => {
        input.addEventListener("change", function() {
            let fileName = this.files.length ? this.files[0].name : "Choose file";
            this.nextElementSibling.textContent = fileName;
        });
    });
});
    </script>

</body>

<!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:16 GMT -->

</html>