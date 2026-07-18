<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:15 GMT -->

<head>
    <?php

    use App\Models\AdmissionModel;


    $session = session();
    $id = $session->get('id');

    $AdmissionModel = new AdmissionModel();

    $student = $AdmissionModel
        ->select('c.*, a.*, b.*, cn.*, f.*, bn.*, a.id as studentid')
        ->join('course c', 'c.courseid = a.courseid', 'left')
        ->from('admission a')
        ->join('batch b', 'a.batchid = b.batchid', 'left')
        ->join('collegename cn', 'a.collegeid = cn.id', 'left')
        ->join('fee f', 'a.id = f.sid', 'left')
        ->join('branch bn', 'a.branchid = bn.id', 'left')
        ->where('a.id', $id)->first();

    $studentid = $student['StudentId'];

    $firstname = $student['firstname'];
    $middlename = $student['middlename'];
    $lastname = $student['lastname'];
    $phoneno = $student['phoneno'];
    $whatsappno = $student['whatsappno'];

    $email = $student['email'];
    $pstreet = $student['pstreet'];
    $pcity = $student['pcity'];
    $ppincode = $student['ppincode'];
    $pstate = $student['pstate'];
    $college = $student['collegename'];
    $branch = $student['branchname'];
    $course = $student['course'];
    $duration = $student['duration'];

    $joiningdate = $student['joiningdate'];
    $batch = $student['batchname'];
    $totalfee = $student['totalfee'];
    $paidfee = $student['paidfee'];
    $remainingfee = $student['remainingfee'];


    $profile = $student['profile'];
    $resume = $student['resume'];
    $adharcard = $student['adharcard'];
    $clgdoc = $student['clgdoc'];
    $docstatus = $student['docstatus'];






    ?>

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


    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Xtreme admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/libs/chartist/dist/chartist.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/extra-libs/c3/c3.min.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('dist/css/style.min.css')?>" rel="stylesheet">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png') ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Title -->
    <title>Wolfox</title>

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



<body>
    <div class="page-wraper">

        <!-- Preloader -->
        <!-- <div id="preloader">
            <div class="spinner"></div>
        </div> -->
        <!-- Preloader end-->

        <!-- Header -->
        
        <!-- Header End -->


        <!-- Sidebar -->
        <style>
            .sidebar {
                background-color: #f8f9fa;
                width: 250px;
                height: 100vh;
                padding: 20px;
                box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2);
                overflow-y: auto;
            }

            .author-box {
                text-align: center;
                padding: 20px;
                border-radius: 10px;
                color: #fff;
                margin-bottom: 20px;
                position: relative;
                background: linear-gradient(135deg, #0093dd, #006bb3);
            }

            .dz-media {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 10px;
            }

            .dz-media img {
                /* width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 5px solid #fff;
        object-fit: cover;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); */
            }

            .dz-info .name {
                font-size: 20px;
                font-weight: bold;
                margin-top: 10px;
                color: #fff;
            }

            .nav-label {
                font-size: 16px;
                font-weight: bold;
                padding: 12px 0;
                border-bottom: 3px solid #0093dd;
                margin-bottom: 10px;
            }

            .navbar-nav {
                list-style: none;
                padding: 0;
            }

            .navbar-nav li {
                margin-bottom: 10px;
            }

            .nav-link {
                display: flex;
                align-items: center;
                text-decoration: none;
                color: #333;
                padding: 12px;
                border-radius: 8px;
                font-weight: 600;
                transition: all 0.3s;
            }

            .nav-link:hover {
                /* background: linear-gradient(135deg, #0093dd, #006bb3); */
                color: #fff;
                transform: scale(1.05);
            }

            .dz-icon {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 45px;
                height: 45px;
                background-color: #0093dd;
                border-radius: 50%;
                margin-right: 12px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            }

            .dz-icon i {
                color: #fff;
                font-size: 20px;
            }
        </style>

        <div class="sidebar">
            <div class="author-box">

              <?php if (!$profile) { ?>

                    <div class="dz-media" style="display: none;">
                        <img src="<?php echo base_url('uploads/studentdocument/' . $id . '/' . $profile . '') ?>" class="rounded-circle" alt="author-image">
                    </div>
                <?php } else { ?>

                    <div class="dz-media">
                        <img src="<?php echo base_url('uploads/studentdocument/' . $id . '/' . $profile . '') ?>" class="rounded-circle" alt="author-image">
                    </div>

                <?php } ?>
                <div class="dz-info">
                    <h5 class="name"><?php echo $firstname ?> <?php echo $lastname ?></h5>
                </div>
            </div>
            <div style="display: flex;" class="col-sm-12">

                <!-- <a href="<?php echo base_url('/Student/birthday') ?>"><i style="margin-left:210px;color:#0093dd" class="fa fa-birthday-cake" aria-hidden="true"></i></a> -->
                <!-- <i style="margin-left:10px;color:#0093dd" class="fa fa-bell" aria-hidden="true"></i> -->

            </div>
            <ul class="nav navbar-nav">
                <li class="nav-label" style="color: black;">Main Menu</li>
                <?php if ($docstatus == 1 && $paidfee > 0) { ?>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('/student/account') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-user-circle"></i>
                            </span>
                            <span>Account</span>
                        </a>
                    </li>


                    <!-- Add FontAwesome for icons -->
                    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('/student/document/list') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-file-upload"></i>
                            </span>
                            <span> Upload Document</span>
                        </a>
                        <!-- <ul class="sub-menu">
                          
                            <li><a href="<?php echo base_url('/student/document/list') ?>">List</a></li>
                        </ul> -->
                    </li>
                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('/Student/feedocument/list') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </span>
                            <span>Fees</span>
                        </a>
                        <ul class="sub-menu">

                          
                            <!-- <li><a href="<?php echo base_url('/Student/feedocument/list') ?>">list</a></li> -->
                        </ul>
                    </li>
                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('/Student/memories') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </span>
                            <span>Photo Upload</span>
                        </a>
                        <!-- <ul class="sub-menu">

                       
                            <li><a href="<?php echo base_url('/Student/memories') ?>">list</a></li>
                        </ul> -->
                    </li>
                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('/Student/AttendanceList') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-calendar-check"></i>
                            </span>
                            <span>Attendance</span>
                        </a>
                        <!-- <ul class="sub-menu">

          
                        <li><a href="<?php echo base_url('/Student/AttendanceList') ?>">List</a></li>
                        </ul> -->
                    </li>
                    <li><a class="nav-link" href="<?php echo base_url('/Student/Letter') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span>Letters</span>
                        </a></li>
                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('/student/projectlist') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-tasks"></i>
                            </span>
                            <span>Projects</span>
                        </a>
                        <!-- <ul class="sub-menu">

                            <li><a href="<?php echo base_url('/student/projectlist') ?>">List</a></li>
                        </ul> -->
                    </li>
                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('/Student/mentorlist') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </span>
                            <span>Mentor</span>
                        </a>
                        <!-- <ul class="sub-menu">
                            <li><a href="<?php echo base_url('/Student/mentor') ?>">Form</a></li>
                            <li><a href="<?php echo base_url('/Student/mentorlist') ?>">List</a></li>
                          
                        </ul> -->
                    </li>

                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('Student/students')?>">
                            <span class="dz-icon">
                                <i class="fas fa-tasks"></i>
                            </span>
                            <span>Seniors</span>
                        </a>
                        <!-- <ul class="sub-menu">

                            <li><a href="<?php echo base_url('/student/projectlist') ?>">List</a></li>
                        </ul> -->
                    </li>
                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('/student/reportlist') ?>">
                            <span class="dz-icon">
                                <!-- Change the icon to a report-related one -->
                                <i class="fas fa-file-alt"></i> <!-- Report icon -->
                            </span>
                            <span>Report</span> <!-- Changed text to 'Report' -->
                        </a>
                        <!-- <ul class="sub-menu">
                            
                            <li><a href="<?php echo base_url('/student/reportlist') ?>">List</a></li>
                        </ul> -->
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('/student/logout') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>
                            <span>Logout</span>
                        </a>
                    </li>


                <?php } else if ($docstatus == 1 && empty($paidfee)) { ?>
                    <!-- <li><a class="nav-link" href="<?php echo base_url('/student/account') ?>">
                        <span class="dz-icon bg-pink light">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="#130F26" />
                            </svg>
                        </span>
                        <span>Account</span>
                    </a>
                </li> --> <li>
                        <a class="nav-link" href="<?php echo base_url('/student/account') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-user-circle"></i>
                            </span>
                            <span>Account</span>
                        </a>
                    </li>


                    <!-- Add FontAwesome for icons -->
                    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('/student/document/list') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-file-upload"></i>
                            </span>
                            <span> Upload Document</span>
                        </a>
                        <!-- <ul class="sub-menu">
                            
                            <li><a href="<?php echo base_url('/student/document/list') ?>">List</a></li>
                        </ul> -->
                    </li>
                    <li class="sub-menu-down">
                        <a class="nav-link" href=<?php echo base_url('/Student/feedocument/list') ?>>
                            <span class="dz-icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </span>
                            <span>Fees</span>
                        </a>
                        <!-- <ul class="sub-menu">

                            <li><a href="<?php echo base_url('/Student/feedocument/list') ?>">list</a></li>
                        </ul> -->
                    </li>
                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('/Student/memories') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </span>
                            <span>Photo Upload</span>
                        </a>
                        <!-- <ul class="sub-menu">

                            <li><a href="<?php echo base_url('/Student/memories') ?>">list</a></li>
                        </ul> -->
                    </li>
                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('/Student/AttendanceList') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-calendar-check"></i>
                            </span>
                            <span>Attendance</span>
                        </a>
                        <ul class="sub-menu">

                        <!-- <li><a href="<?php echo base_url('/Student/attendance/' . $id . '') ?>">Form</a></li>
                        <li><a href="<?php echo base_url('/Student/AttendanceList') ?>">List</a></li> -->
                        </ul>
                    </li>
                 


                    <li>
                        <a class="nav-link" href="<?php echo base_url('/student/logout') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>
                            <span>Logout</span>
                        </a>
                    </li>
                <?php } else { ?>

                    <li class="sub-menu-down">
                        <a class="nav-link" href="<?php echo base_url('/student/document') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-file-upload"></i>
                            </span>
                            <span> Upload Document</span>
                        </a>
                        <!-- <ul class="sub-menu">
                           
                            <li><a href="<?php echo base_url('/student/document/list') ?>">List</a></li>
                        </ul> -->
                    </li>

                    <li>
                        <a class="nav-link" href="<?php echo base_url('/student/logout') ?>">
                            <span class="dz-icon">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>
                            <span>Logout</span>
                        </a>
                    </li>

                <?php } ?>



            </ul>

        </div>
        <!-- Sidebar End -->