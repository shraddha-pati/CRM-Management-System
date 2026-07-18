<?php
$session = session();
$email = $session->get('email');
$phonenumber = $session->get('phonenumber');
//$firstname=$session->get('FirstName');
//print_r($email);exit;
?>
<?php
if (!$phonenumber) {
    // session()->setFlashdata('success', '<b style="color:green;">You need to login first!</b>');
    // return redirect()->to(base_url('/login'));
    // echo '<script type="text/javascript">';
    // echo 'alert("you need to login first!");';
    // echo 'window.location.href = "' . base_url('/login') . '"';
    // echo '</script>';


    session()->setFlashdata('login', '<b style="color:red;">You need to login first!</b>');
            return redirect()->to(base_url('/login'));
}
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon1.png">
    <title>Wolfox</title>
    <!-- This page CSS -->
    <link href="<?php echo base_url('assets/libs/jquery-steps/jquery.steps.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/libs/jquery-steps/steps.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('dist/css/style.min.css') ?>" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.2.47/es2021/jodit.min.css"
/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.2.47/es2021/jodit.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/select/3.0.0/js/dataTables.select.js"></script>
 <script src="https://cdn.datatables.net/select/3.0.0/js/select.dataTables.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>

                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url('/uploads/CmsMaster/1/logo.png') ?>" height="60px" width="180px" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url('/uploads/CmsMaster/1/logo.png') ?>" height="60px" width="180px" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?php echo base_url('') ?>" alt="" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="<?php echo base_url('') ?>" class="light-logo" alt="" />
                        </span>
                    </a>

                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

                    </ul>

                    <ul class="navbar-nav float-right">

                        <li class="nav-item dropdown">
                            <!-- <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a> -->
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class=""><img src="<?php echo base_url('assets/images/users/1.jpg') ?>" alt="user" class="img-circle" width="60"></div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0"><?php echo $email ?></h4>
                                        <p class=" m-b-0"><?php echo $phonenumber ?></p>
                                    </div>
                                </div>
                                <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="<?php echo base_url('/logout') ?>"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <!-- <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div> -->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-content hide-menu m-l-10">
                                    <!-- <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                        <h5 class="m-b-0 user-name font-medium"><?php echo $email ?> </h5>
                                        <span class="op-5 user-email"><?php echo $phonenumber ?></span>

                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                        <div class="dropdown-divider"></div> -->
                                        <a class="dropdown-item" href="<?php echo base_url('/logout') ?>"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <!-- User Profile-->

                        <li class="sidebar-item" style="display:none"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="<?php echo base_url('/Admin/DashBoard/list') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard Master</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/DashBoard/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Dashboard List</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Company Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <!-- <li class="sidebar-item"><a href="<//?//php echo base_url('/Admin/Inquiry/add') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Company Form</span></a></li> -->
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/companylist/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Company List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Setting Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Course/List') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Course List </span></a></li>

                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Batch/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Batch List </span></a></li>

                                <li class="sidebar-item"><a href="<?php echo base_url('/collegename/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">College List</span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('/branch/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Branch List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Inquiry Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Inquiry/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Inquiry List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/CallInquiry/List') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Call Inquiry List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Inquiry/pending') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Pending Inquiry List </span></a></li>


                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Admission Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <!--<li class="sidebar-item"><a href="<//?php echo base_url('/Admin/Admission/Form') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Add Student </span></a></li>-->
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Admission/List') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Student List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Admission/rejectedList') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Rejected List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Admission/CompletedList') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Course Completed List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Admission/documentList') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Student Document List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('/Student/banlist') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Banned Student List </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Attendance Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Attendence/mlist') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Attendance List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">PhotoUpload Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <!--<li class="sidebar-item"><a href="<//?php echo base_url('/Admin/photoupload/add') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> PhotoUpload Form </span></a></li>-->
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/photoupload/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> PhotoUpload List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/photoupload/photolist') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Student Photo List </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Notification Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <!--<li class="sidebar-item"><a href="<//?php echo base_url('/Admin/photoupload/add') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> PhotoUpload Form </span></a></li>-->
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Notification/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Notification List </span></a></li>
                                <!-- <li class="sidebar-item"><a href="<?//php echo base_url('/Admin/photoupload/photolist') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Notification List </span></a></li> -->
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Interview call Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <!--<li class="sidebar-item"><a href="<//?php echo base_url('/Admin/InterviewCall/Add') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Interview Call Add </span></a></li>-->
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/InterviewCall/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Interview Call List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Mentor Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <!--<li class="sidebar-item"><a href="<//?php echo base_url('/Admin/Project/add') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Project Form </span></a></li>-->
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Mentor/mentorList') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Mentor List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> RedyMade Project Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <!--<li class="sidebar-item"><a href="<//?php echo base_url('/Admin/Project/add') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Project Form </span></a></li>-->
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Project/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> project List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Report Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <!--<li class="sidebar-item"><a href="<//?php echo base_url('/Admin/Project/add') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Project Form </span></a></li>-->
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/Admission/reportList') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Report List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Star of the week Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <!--<li class="sidebar-item"><a href="<//?php echo base_url('/Admin/Project/add') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Project Form </span></a></li>-->
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/StarofWeek/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Star of the week List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> New Software Inquiry master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <!--<li class="sidebar-item"><a href="<//?php echo base_url('/Admin/ClientMaster/Add') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">  Form </span></a></li>-->
                                <li class="sidebar-item"><a href="<?php echo base_url('/Admin/ClientMaster/list') ?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> List </span></a></li>
                            </ul>
                        </li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/logout') ?>" aria-expanded="false"><i class="mdi mdi-directions"></i><span class="hide-menu">Log Out</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>