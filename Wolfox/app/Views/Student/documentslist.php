 
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

        


        <!-- Sidebar -->
      
    


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

                            <h5 class="mb-0" style="color: #0093dd;">Student Documents</h5>


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
            <h1> Your Documents List</h1>
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


        <!-- Page Content -->
        <div class="page-content bottom-content " style="margin-top: 100px;">
            <!-- <div class="dz-banner-heading">
            <div class="overlay-black-light">
                <img src="assets/images/bg2.png" class="bnr-img" alt="">
            </div>
        </div> -->
            <div class="container profile-area">
                <div style="display: flex;justify-content:space-between">
                    <div class="right-content" style="margin-top: -40px;">
                        <a href="javascript:void(0);" class="theme-color" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                            <!-- <svg class="color-plate" enable-background="new 0 0 512.214 512.214" height="24" viewBox="0 0 512.214 512.214" width="24" xmlns="http://www.w3.org/2000/svg">
                                <g id="Color_Palette_1_">
                                    <g>
                                        <path d="m247.523 512.214c-1.552 0-3.111-.04-4.68-.12-18.018-.919-36.245-3.725-54.178-8.339-92.826-23.89-161.982-96.467-182.181-189.601-9.88-45.557-8.432-90.341 4.304-133.109 23.822-80.001 86.489-145.327 170.276-170.276 42.766-12.735 87.55-14.183 133.108-4.303 93.122 20.195 165.672 89.343 189.565 182.18 4.615 17.933 7.421 36.161 8.339 54.177 1.854 36.362-17.939 68.259-51.657 83.242-34.298 15.243-73.443 8.112-99.723-18.167-15.537-15.538-37.242-15.538-52.779 0-15.611 15.597-15.676 37.153-.007 52.811.003.002.004.004.006.006 26.278 26.278 33.41 65.42 18.168 99.721-14.337 32.263-44.159 51.778-78.561 51.778zm7.237-472.209c-57.565 0-111.211 21.694-152.127 62.61-52.797 52.797-73.594 126.81-57.058 203.062 16.995 78.361 75.644 139.417 153.059 159.341 15.342 3.948 30.9 6.347 46.245 7.129 19.745 1.012 36.427-9.444 44.651-27.953 6.736-15.161 7.675-37.622-9.898-55.194-31.279-31.26-31.212-78.199.007-109.391 31.161-31.163 78.172-31.165 109.343.006 17.572 17.573 40.033 16.634 55.194 9.898 18.509-8.225 28.959-24.917 27.953-44.652-.782-15.344-3.181-30.902-7.13-46.244-23.476-91.222-104.657-158.612-210.239-158.612z" />
                                    </g>
                                    <g>
                                        <path d="m156.197 396.178c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm0-80c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20z" />
                                    </g>
                                    <g>
                                        <path d="m156.197 236.179c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm0-80c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20z" />
                                    </g>
                                    <g>
                                        <path d="m316.197 216.179c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm0-80c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20z" />
                                    </g>
                                </g>
                            </svg> -->
                        </a>

                        <!-- <a href="javascript:void(0);" class="theme-btn">
                            <svg class="dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"   stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg> 
                         </a> -->

                    </div>
                    <div class="right-content" style="margin-top: -40px;">
                        <!-- <a href="javascript:void(0);" class="theme-color" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                            <svg class="color-plate" enable-background="new 0 0 512.214 512.214" height="24" viewBox="0 0 512.214 512.214" width="24" xmlns="http://www.w3.org/2000/svg"><g id="Color_Palette_1_"><g><path d="m247.523 512.214c-1.552 0-3.111-.04-4.68-.12-18.018-.919-36.245-3.725-54.178-8.339-92.826-23.89-161.982-96.467-182.181-189.601-9.88-45.557-8.432-90.341 4.304-133.109 23.822-80.001 86.489-145.327 170.276-170.276 42.766-12.735 87.55-14.183 133.108-4.303 93.122 20.195 165.672 89.343 189.565 182.18 4.615 17.933 7.421 36.161 8.339 54.177 1.854 36.362-17.939 68.259-51.657 83.242-34.298 15.243-73.443 8.112-99.723-18.167-15.537-15.538-37.242-15.538-52.779 0-15.611 15.597-15.676 37.153-.007 52.811.003.002.004.004.006.006 26.278 26.278 33.41 65.42 18.168 99.721-14.337 32.263-44.159 51.778-78.561 51.778zm7.237-472.209c-57.565 0-111.211 21.694-152.127 62.61-52.797 52.797-73.594 126.81-57.058 203.062 16.995 78.361 75.644 139.417 153.059 159.341 15.342 3.948 30.9 6.347 46.245 7.129 19.745 1.012 36.427-9.444 44.651-27.953 6.736-15.161 7.675-37.622-9.898-55.194-31.279-31.26-31.212-78.199.007-109.391 31.161-31.163 78.172-31.165 109.343.006 17.572 17.573 40.033 16.634 55.194 9.898 18.509-8.225 28.959-24.917 27.953-44.652-.782-15.344-3.181-30.902-7.13-46.244-23.476-91.222-104.657-158.612-210.239-158.612z"/></g><g><path d="m156.197 396.178c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm0-80c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20z"/></g><g><path d="m156.197 236.179c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm0-80c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20z"/></g><g><path d="m316.197 216.179c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm0-80c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20z"/></g></g></svg>
                        </a> -->

                        <!-- <a href="javascript:void(0);" class="theme-btn">
                            <svg class="dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </a> -->

                    </div>
                </div>




                <!-- Include Font Awesome for icons and Bootstrap for styles -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

                <style>
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

<div style="text-align: end;margin-right:50px;margin-top:40px">
             <a  href="<?php echo base_url('/student/document')?>" style="border: 1px solid black; padding: 10px;border:none; background-color: #0093dd;transition: 0.3s;color: white;border-radius:10px;text-decoration: none;">Add Document</a>
         </div>

                <div class="document-container">
                    <?php foreach($studentdata as $row): ?>
                    <!-- Profile Image Card -->
                    <div class="skill-bar text-center p-4 shadow-sm border ">
                        <div class="d-flex justify-content-center gap-4 mb-3">
                            <i class="fa-solid fa-eye fa-lg text-primary p-2 rounded-circle shadow-sm action-icon pulse-effect openModalBtn" data-bs-target="#exampleModal" style="cursor: pointer; background: #eaf3ff;"></i>
                            <a href="<?php echo base_url('/student/document/edit/'. $row['id'] . '?docremark=3')?>"><i class="fa-solid fa-pen fa-lg text-warning p-2 rounded-circle shadow-sm action-icon" style="cursor: pointer; background: #fff5e6;"></i></a>
                           
                        </div>
                        <h6 class="title text-dark fw-semibold">Profile Image</h6>
                    </div>
                    <?php endforeach ?>
                    <!-- Resume Card -->
                    <?php foreach($studentdata as $row): ?>
                    <div class="skill-bar text-center p-4 shadow-sm border">
                        <div class="d-flex justify-content-center gap-4 mb-3">
                            <i class="fa-solid fa-eye fa-lg text-primary p-2 rounded-circle shadow-sm action-icon pulse-effect openModalBtn2" data-bs-target="#exampleModal2" style="cursor: pointer; background: #eaf3ff;"></i>
                            <?php if ($row['docstatus'] != 1 && $row['docremark'] == 4 || $row['docremark'] == 5 || empty($row['resume']) ) { ?>
                            <a href="<?php echo base_url('/student/document/edit/'. $row['id'] . '?docremark=4')?>"><i class="fa-solid fa-pen fa-lg text-warning p-2 rounded-circle shadow-sm action-icon" style="cursor: pointer; background: #fff5e6;"></i></a>
                            <?php } ?>
                        </div>
                        <h6 class="title text-dark fw-semibold">Resume (CV)</h6>
                    </div>
                    <?php endforeach ?>



                    <!-- Aadhar Card -->
                    <?php foreach($studentdata as $row): ?>
                    <div class="skill-bar text-center p-4 shadow-sm border">
                        <div class="d-flex justify-content-center gap-4 mb-3">

                            <i class="fa-solid fa-eye fa-lg text-primary p-2 rounded-circle shadow-sm action-icon pulse-effect openModalBtn3" data-bs-target="#exampleModal3" style="cursor: pointer; background: #eaf3ff;"></i>
                            <?php if ($row['docstatus'] != 1 && $row['docremark'] == 1 || $row['docremark'] == 5) { ?>
                            <a href="<?php echo base_url('/student/document/edit/'. $row['id'] . '?docremark=1')?>"><i class="fa-solid fa-pen fa-lg text-warning p-2 rounded-circle shadow-sm action-icon" style="cursor: pointer; background: #fff5e6;"></i></a>
                           <?php } ?>
                            </div>
                        <h6 class="title text-dark fw-semibold">Aadhar Card</h6>
                    </div>
                    <?php endforeach ?>


                    <!-- College Document -->
                    <?php foreach($studentdata as $row): ?>
                    <div class="skill-bar text-center p-4 shadow-sm border">
                        <div class="d-flex justify-content-center gap-4 mb-3">
                            <i class="fa-solid fa-eye fa-lg text-primary p-2 rounded-circle shadow-sm action-icon pulse-effect openModalBtn4" data-bs-target="#exampleModal4" style="cursor: pointer; background: #eaf3ff;"></i>
                            <?php if ($row['docstatus'] != 1 && $row['docremark'] == 2 || $row['docremark'] == 5) { ?>
                            <a href="<?php echo base_url('/student/document/edit/'. $row['id'] . '?docremark=2')?>"><i class="fa-solid fa-pen fa-lg text-warning p-2 rounded-circle shadow-sm action-icon" style="cursor: pointer; background: #fff5e6;"></i></a>
                            <?php } ?>
                        </div>
                        <h6 class="title text-dark fw-semibold">College Document</h6>
                    </div>
                </div>
                <?php  
                                                if($row['docstatus'] == 1)
                                                { 
                                                ?>


                                           <p style="color:green;text-align:center;font-size:20px">Documents Verified <br> Successfully!</p>


                                                <?php }

                                                else if($row['docstatus'] == 2)
                                                {


                                                ?>
                                               <?php if($row['docremark'] == 1)
                                                {
                                                    echo ' 
                                                    
                                                    <p style="color:red;text-align:center;font-size:20px">Adharcard is not Valid.</p>';

                                                }
                                                else if($row['docremark'] == 2)
                                                {
                                                    echo ' <p style="color:red;text-align:center;font-size:20px">College Document  is not Valid.</p>';

                                                }
                                                else if($row['docremark'] == 3)
                                                {
                                                    echo ' <p style="color:red;text-align:center;font-size:20px">ID size photo is not valid.</p>';

                                                }
                                                else if($row['docremark'] == 4)
                                                {
                                                    echo ' <p style="color:red;text-align:center;font-size:20px">CV is not valid.</p>';

                                                }
                                                else if($row['docremark'] == 5)
                                                {
                                                    echo ' <p style="color:red;text-align:center;font-size:20px"> Documents  are not Valid.</p>';

                                                }
                                                
                                                
                                                ?>
                                                <?php } ?>
                <?php endforeach ?>




            </div>

        </div>
    </div>
    </div>
    <!-- Page Content End-->
   

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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content animate__animated animate__zoomIn">
            <div class="modal-header" style="background-color:#0093dd">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Your Profile Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body animate__animated animate__fadeInUp">
                <div class="student-details text-center">
                    <img src="<?php echo base_url('uploads/studentdocument/' . $id . '/' . $row['profile'] . '') ?>" alt="Student Photo" class="full-size-image">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color: #0093dd;border:#0093dd" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content animate__animated animate__zoomIn">
            <div class="modal-body animate__animated animate__fadeInUp">
                <div class="student-details text-center">
                    <?php if (!empty($row['resume'])): ?>
                        <a href="<?php echo base_url('uploads/studentdocument/' . $id . '/' . $row['resume']); ?>" target="_blank" class="btn btn-primary">View Resume/CV</a>
                    <?php else: ?>
                        <p class="text-danger">No Resume/CV uploaded.</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color: #0093dd; border:#0093dd" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content animate__animated animate__zoomIn">
            <div class="modal-body animate__animated animate__fadeInUp">
                <div class="student-details text-center">
                    <img src="<?php echo base_url('uploads/studentdocument/' . $id . '/' . $row['adharcard'] . '') ?>" alt="Aadhar Card" class="full-size-image">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color: #0093dd;border:#0093dd" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content animate__animated animate__zoomIn">
            <div class="modal-body animate__animated animate__fadeInUp">
                <div class="student-details text-center">
                    <img src="<?php echo base_url('uploads/studentdocument/' . $id . '/' . $row['clgdoc'] . '') ?>" alt="College Document" class="full-size-image">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color: #0093dd;border:#0093dd" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<style>
    .full-size-image {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }
</style>
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

    <script>
        $(document).ready(function() {
            $(".openModalBtn").on("click", function() {
                var inquiryId = $(this).data("id");

                console.log("Opening modal for Inquiry ID:", inquiryId);

                // Update modal fields dynamically
                $("#id").val(inquiryId);


                // Open modal
                $("#exampleModal").modal("show");
            });

            // Ensure close button works
            $(".btn-close").on("click", function() {
                $("#exampleModal").modal("hide");
            });
        });
    </script>

     

    <script>
        $(document).ready(function() {
            $(".openModalBtn2").on("click", function() {
                var inquiryId = $(this).data("id");

                console.log("Opening modal for Inquiry ID:", inquiryId);

                // Update modal fields dynamically
                $("#id").val(inquiryId);


                // Open modal
                $("#exampleModal2").modal("show");
            });

            // Ensure close button works
            $(".btn-close").on("click", function() {
                $("#exampleModal2").modal("hide");
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".openModalBtn3").on("click", function() {
                var inquiryId = $(this).data("id");

                console.log("Opening modal for Inquiry ID:", inquiryId);

                // Update modal fields dynamically
                $("#id").val(inquiryId);


                // Open modal
                $("#exampleModal3").modal("show");
            });

            // Ensure close button works
            $(".btn-close").on("click", function() {
                $("#exampleModal3").modal("hide");
            });
        });
    </script>

<script>
        $(document).ready(function() {
            $(".openModalBtn4").on("click", function() {
                var inquiryId = $(this).data("id");

                console.log("Opening modal for Inquiry ID:", inquiryId);

                // Update modal fields dynamically
                $("#id").val(inquiryId);


                // Open modal
                $("#exampleModal4").modal("show");
            });

            // Ensure close button works
            $(".btn-close").on("click", function() {
                $("#exampleModal4").modal("hide");
            });
        });
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
                }, 2000); // Auto-close after 3 seconds
            <?php endif; ?>
        });
    </script>

    <div class="modal fade" id="successModal1" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel1">Notification</h5>
                </div>
                <div class="modal-body">
                    <?= session()->getFlashdata('password'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to Show Modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (session()->getFlashdata('password')) : ?>
                var successModal = new bootstrap.Modal(document.getElementById('successModal1'));
                successModal.show();
                setTimeout(() => {
                    successModal.hide();
                }, 2000); // Auto-close after 3 seconds
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')) : ?>
                var successModal = new bootstrap.Modal(document.getElementById('successModal1'));
                successModal.show();
                setTimeout(() => {
                    successModal.hide();
                }, 2000); // Auto-close after 3 seconds
            <?php endif; ?>


        });
    </script>


</body>

<!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:16 GMT -->

</html>