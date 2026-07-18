<?php


use App\Models\AdmissionModel;
use App\Models\FeeModel;

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

$FeeModel = new FeeModel();
$feestudent = $FeeModel->orderBy('installment_number', 'DESC')->where('sid', $id)->first();
$totalfee = $student['totalfee'];
$paidfee = $feestudent['paidfee'];
$remainingfee = $feestudent['remainingfee'];


$profile = $student['profile'];
$resume = $student['resume'];
$adharcard = $student['adharcard'];
$clgdoc = $student['clgdoc'];
$docstatus = $student['docstatus'];
// $course = 

$FeeModel = new FeeModel();

$feedata = $FeeModel->where('sid', $id)->orderBy('id', 'DESC')->limit(1)->find();

if ($feedata) {
    $lastfeedate = new DateTime(date('Y-m-d', strtotime($feedata[0]['cashdate'])));
    $curruentdate = new DateTime(date('Y-m-d'));

    $totalfeedays = $curruentdate->diff($lastfeedate)->days;
}



if ($feedata) {
    if ($totalfeedays >= 30 && $feedata[0]['remainingfee'] != 0) {



        // echo '<marquee behavior="" direction="right" style="color: red;">Out of '.$feedata[0]['totalfee'].' Rs. Your '.$feedata[0]['remainingfee'].' Rs. Fees Are pending.</marquee>';
        session()->setFlashdata('feepending', '<b style="color:red;">Out of ' . $feedata[0]['totalfee'] . ' Rs. Your ' . $feedata[0]['remainingfee'] . ' Rs. Fees Are pending.</b>');
    }
}





if (empty($email)) {
    session()->setFlashdata('uploademail', 'Please Enter Your Email.');
} else if ($docstatus == 0) {
    session()->setFlashdata('uploadmessage', 'Please upload your documents to continue.');
}




?>

<style>
    .star-card {
        max-width: 400px;
        margin: 20px auto;
        background: linear-gradient(135deg, #ffcc00, #ff6600);
        border-radius: 15px;
        text-align: center;
        padding: 20px;
        color: white;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        animation: glow 2s infinite alternate;
    }

    @keyframes glow {
        from {
            box-shadow: 0px 5px 15px rgba(255, 204, 0, 0.6);
        }

        to {
            box-shadow: 0px 5px 25px rgba(255, 204, 0, 1);
        }
    }

    .star-photo {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 4px solid white;
        object-fit: cover;
        animation: bounce 1.5s infinite;
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    .star-title {
        font-size: 20px;
        font-weight: bold;
        margin-top: 10px;
    }

    .star-reason {
        font-size: 14px;
        background: rgba(255, 255, 255, 0.2);
        padding: 8px;
        border-radius: 10px;
        margin-top: 8px;
    }
</style>

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

                    <h5 class="mb-0" style="color: #0093dd;">Student Profile</h5>


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

        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }

            .profile-container {
                display: flex;
                align-items: center;
                flex-direction: column;
                padding: 25px;
                border-radius: 12px;
                background: #ffffff;
                box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
                text-align: center;
                width: 90%;
                max-width: 400px;
                margin: -40px auto;
                perspective: 1000px;
            }

            .profile-inner {
                position: relative;
                width: 100%;
                transition: transform 0.6s;
                transform-style: preserve-3d;
            }

            .flipped {
                transform: rotateY(180deg);
            }

            .profile-front,
            .profile-back {
                width: 100%;
                backface-visibility: hidden;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .profile-back {
                transform: rotateY(180deg);
            }

            .profile-img-container {
                position: relative;
                width: 160px;
                height: 160px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                background: linear-gradient(45deg, #ff4d4d, rgb(39, 32, 2), #0093dd, #00cc99);
                background-size: 300% 300%;
                animation: borderPulse 3s infinite linear;
                padding: 5px;
                cursor: pointer;
            }

            .profile-img {
                width: 150px;
                height: 150px;
                border-radius: 50%;
                object-fit: cover;
                border: 3px solid white;
            }

            .user-info {
                text-align: center;
                margin-top: 15px;
            }

            .user-name {
                font-size: 24px;
                font-weight: 700;
                color: #333;
            }

            .user-id {
                font-size: 16px;
                color: #0093dd;
                font-weight: 600;
            }

            .greeting {
                font-size: 18px;
                font-weight: 600;
                color: #444;
                margin-top: 10px;
            }

            @keyframes borderPulse {
                0% {
                    background-position: 0% 50%;
                }

                50% {
                    background-position: 100% 50%;
                }

                100% {
                    background-position: 0% 50%;
                }
            }

            .hide {
                display: none;
            }
        </style>

        <div class="profile-container">
            <div class="profile-inner" id="flip-div" onclick="toggleFlip()">
                <!-- Front Side (Profile) -->
                <div class="profile-front">
                    <div class="profile-content">
                        <div class="profile-img-container">
                            <img src="<?php echo base_url('uploads/studentdocument/' . $id . '/' . $profile); ?>" alt="Profile Picture" class="profile-img">
                        </div>
                        <div class="user-info">
                            <h3 class="user-name"><?php echo $firstname . ' ' . $lastname; ?></h3>
                            <h6 class="user-id">INTERN ID: <?php echo $studentid; ?></h6>
                        </div>
                    </div>
                </div>

                <!-- Back Side (ID Card) -->
                <div class="profile-back">
                    <div class="profile-content">
                    <?php if (!empty($starStudent)): ?>
                    <img src="<?= base_url('uploads/studentdocument/' . $starStudent['admission_id'] . '/' . $starStudent['profile']) ?>"
                    alt="Profile Picture" class="profile-img">
                   
                        <p class="greeting"><?php echo ($starStudent['name']); ?></p>
                        <p class="greeting">Congratulations! You are the Star of the Week!</p>
                        <?php else: ?>
            <p class="greeting">No Star of the Week selected for your batch yet.</p>
        <?php endif; ?>
                    </div>
                </div>
                
            </div>

        </div>

        <script>
            // let flipDiv = document.getElementById('flip-div');
            let isFlipped = false;
            let interval;

            function toggleFlip() {
                isFlipped = !isFlipped;
                flipDiv.classList.toggle('flipped', isFlipped);
            }

            function resetInterval() {
                clearInterval(interval); // Stop previous interval
                interval = setInterval(toggleFlip, 5000); // Restart interval
            }

            // Automatic flip every 5 seconds
            resetInterval();

            // Manual flip on click and reset the timer
            flipDiv.addEventListener('click', () => {
                toggleFlip();
                resetInterval(); // Restart auto-flip after manual click
            });
        </script>




        <!-- Add CSS -->
        <style>
            /* Container to hold the flip effect */
            .profile-container {
                width: 100%;
                max-width: 350px;
                height: 450px;
                perspective: 1200px;
                margin: 20px auto;
                border-radius: 15px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                cursor: pointer;
                overflow: hidden;
            }

            .profile-inner {
                width: 100%;
                height: 100%;
                position: relative;
                transform-style: preserve-3d;
                transition: transform 0.6s ease-in-out;
                border-radius: 15px;
            }

            /* Front and Back sides of the profile */
            .profile-front,
            .profile-back {
                position: absolute;
                width: 100%;
                height: 100%;
                backface-visibility: hidden;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 20px;
                box-sizing: border-box;
                border-radius: 15px;
                overflow: hidden;
            }

            .profile-front {
                background-color: #fff;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .profile-back {
                background-color: #f5f5f5;
                color: #333;
                transform: rotateY(180deg);
                text-align: center;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                position: relative;
                animation: victoryAnimation 5s linear infinite;
            }

            /* Common content for both front and back sides */
            .profile-content {
                text-align: center;
                padding: 10px;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            /* Profile image container */
            .profile-img-container {
                width: 120px;
                height: 120px;
                overflow: hidden;
                border-radius: 50%;
                margin-bottom: 20px;
                border: 4px solid #ddd;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .profile-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .user-info {
                text-align: center;
                padding: 10px 0;
            }

            .user-name {
                font-size: 1.5em;
                color: #333;
                font-weight: bold;
                margin: 10px 0;
            }

            .user-id {
                font-size: 1.1em;
                color: #777;
            }

            /* Star of the Week greeting */
            .greeting {
                font-size: 1.2em;
                color: #007BFF;
                font-weight: bold;
                margin-top: 10px;
            }

            /* Flip Effect */
            .profile-container:hover .profile-inner {
                transform: rotateY(180deg);
            }

            /* Animated Shadow Effect for the Victory (Star of the Week) */
            @keyframes victoryAnimation {
                0% {
                    box-shadow: 0 0 15px rgba(0, 123, 255, 0.7), 0 0 20px rgba(0, 123, 255, 0.7);
                    background-color: #f5f5f5;
                }

                50% {
                    box-shadow: 0 0 25px rgba(0, 123, 255, 1), 0 0 30px rgba(0, 123, 255, 0.8);
                    background-color: #d4e1f3;
                }

                100% {
                    box-shadow: 0 0 15px rgba(0, 123, 255, 0.7), 0 0 20px rgba(0, 123, 255, 0.7);
                    background-color: #f5f5f5;
                }
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .profile-container {
                    max-width: 100%;
                    height: 400px;
                }

                .profile-front,
                .profile-back {
                    padding: 15px;
                }

                .profile-img-container {
                    width: 100px;
                    height: 100px;
                }

                .user-name {
                    font-size: 1.3em;
                }

                .user-id {
                    font-size: 1em;
                }

                .greeting {
                    font-size: 1em;
                }
            }

            @media (max-width: 480px) {
                .profile-container {
                    height: 350px;
                }

                .profile-front,
                .profile-back {
                    padding: 10px;
                }

                .profile-img-container {
                    width: 80px;
                    height: 80px;
                }

                .user-name {
                    font-size: 1.2em;
                }

                .user-id {
                    font-size: 0.9em;
                }

                .greeting {
                    font-size: 0.9em;
                }
            }
        </style>

        <!-- Add JavaScript (for auto-rotation and click-to-flip functionality) -->
        <script>
            const flipDiv = document.getElementById('flip-div');
            const profileInner = flipDiv.querySelector('.profile-inner');

            // Function to toggle the flip
            function flip() {
                profileInner.style.transform = profileInner.style.transform === 'rotateY(180deg)' ? 'rotateY(0deg)' : 'rotateY(180deg)';
            }

            // Auto flip every 5 seconds
            setInterval(flip, 5000); // Rotates every 5 seconds

            // Click to flip the div
            flipDiv.addEventListener('click', flip);
        </script>








        <style>
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes shimmer {
                0% {
                    background-position: -100px;
                }

                100% {
                    background-position: 100px;
                }
            }

            .skill-section {
                margin-top: 40px;
            }

            .skill-bar {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 15px;
                padding: 20px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                text-align: center;
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                cursor: pointer;
                position: relative;
                backdrop-filter: blur(10px);
                border: 2px solid rgba(255, 255, 255, 0.3);
                animation: fadeInUp 0.8s ease-in-out;
                overflow: hidden;
            }

            .skill-bar:hover {
                transform: scale(1.05);
                box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
                background: rgba(255, 255, 255, 0.2);
            }

            .skill-bar::before {
                content: "";
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: linear-gradient(120deg, #00c6ff, #0072ff);
                opacity: 0.2;
                transform: rotate(45deg);
                transition: 0.5s;
            }

            .skill-bar:hover::before {
                opacity: 0.4;
            }

            .donut-chart-sale i {
                font-size: 30px;
                color: #ffffff;
                background: linear-gradient(120deg, #00c6ff, #0072ff);
                padding: 15px;
                border-radius: 50%;
                margin-bottom: 10px;
                display: inline-block;
                animation: shimmer 1.5s linear infinite alternate;
                background-size: 200% 100%;
                box-shadow: 0px 4px 10px rgba(0, 114, 255, 0.5);
            }

            .title {
                font-size: 16px;
                font-weight: 600;
                color: #333;
                margin-top: 10px;
                letter-spacing: 0.5px;
                text-transform: uppercase;
            }
        </style>


        <?php if ($docstatus == 1 && $paidfee > 0) { ?>



            <div class="skill-section">
                <div class="row g-3">
                    <div class="col-6 openModalBtn">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <h6 class="title">Personal <br> Details</h6>
                        </div>
                    </div>
                    <div class="col-6 openModalBtn1">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <h6 class="title">Course <br> Details</h6>
                        </div>
                    </div>
                    <div class="col-6 openModalBtn2">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <h6 class="title">Change <br> Password</h6>
                        </div>
                    </div>
                    <div class="col-6 openModalBtn3">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                            </div>
                            <h6 class="title">Fees <br> Details</h6>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <a style="text-decoration: none;" href="<?php echo base_url('/Student/photo') ?>">
                            <div class="skill-bar">
                                <div class="donut-chart-sale">
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                </div>
                                <h6 class="title">Photo <br> Uploads</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6  ">
                        <a style="text-decoration: none;" href="<?php echo base_url('/Student/Letter') ?>">
                            <div class="skill-bar">
                                <div class="donut-chart-sale">
                                    <i class="fa fa-file" aria-hidden="true"></i>
                                </div>
                                <h6 class="title"> Letters<br><br></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        <?php } else { ?>


            <div class="skill-section">
                <div class="row g-3">
                    <div class="col-6 openModalBtn">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <h6 class="title">Personal <br> Details</h6>
                        </div>
                    </div>
                    <div class="col-6 openModalBtn1">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <h6 class="title">Course <br> Details</h6>
                        </div>
                    </div>
                    <div class="col-6 openModalBtn2">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <h6 class="title">Change <br> Password</h6>
                        </div>
                    </div>
                    <div class="col-6 openModalBtn3">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                            </div>
                            <h6 class="title">Fees <br> Details</h6>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <a style="text-decoration: none;" href="<?php echo base_url('/Student/photo') ?>">
                            <div class="skill-bar">
                                <div class="donut-chart-sale">
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                </div>
                                <h6 class="title">Photo <br> Uploads</h6>
                            </div>
                        </a>
                    </div>


                </div>
            </div>

        <?php } ?>


    </div>
</div>
<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
    .floating-icons-container {
        display: flex;
        justify-content: center;
        gap: 15px;
        padding-bottom: 20px;
    }

    .icon {
        width: 45px;
        height: 45px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 22px;
        transition: transform 0.3s ease-in-out;
        animation: float 3s infinite alternate ease-in-out;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        text-decoration: none;
    }

    .icon:hover {
        transform: scale(1.2);
    }

    /* Assigning brand colors */
    .whatsapp {
        background-color: #25D366;
    }

    .facebook {
        background-color: #1877F2;
    }

    .x-twitter {
        background-color: black;
    }

    .instagram {
        background: linear-gradient(45deg, #fccc63, #e1306c, #bc2a8d);
    }

    .linkedin {
        background-color: #0077B5;
    }
</style>

<div class="floating-icons-container" style="margin-bottom: 70px;">
    <a href="#" class="icon whatsapp"><i class="fab fa-whatsapp"></i></a>
    <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="icon x-twitter"><i class="fab fa-x-twitter"></i></a>
    <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
</div>






<!-- Page Content End-->

<!-- Menubar -->
<style>
    .menubar-nav .nav-link {
        transition: transform 0.3s ease, background-color 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        border-radius: 10px;
    }

    .menubar-nav .nav-link:hover {
        transform: scale(1.1);
        background-color: rgba(255, 255, 255, 0.2);
    }

    .menubar-nav .nav-link svg path {
        transition: fill 0.3s ease;
    }

    .menubar-nav .nav-link:hover svg path {
        fill: #ffffff;
        /* Change to the color you prefer */
    }

    /* Add a slight bounce effect when clicking */
    .menubar-nav .nav-link:active {
        transform: scale(0.9);
    }
</style>
<!-- <div class="notification-container">
    <button class="btn btn-light position-relative" id="notificationButton">
        <i class="fas fa-bell fa-lg"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="notificationCount">
            0
        </span>
    </button>

    <div class="notification-dropdown" id="notificationDropdown">
        <ul id="notificationList">
            <li>No new notifications</li>
        </ul>
    </div>
</div> -->
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

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<style>
    /* Modal Customization */
    .modal-content {
        border-radius: 12px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);
        animation: zoomIn 0.5s ease-in-out;
    }

    .modal-header {
        background-color: #0093dd;
        color: white;
        border-radius: 12px 12px 0 0;
        padding: 15px;
        animation: fadeInDown 0.6s ease-in-out;
    }

    .modal-footer {
        border-top: none;
    }

    /* Student Photo */
    .student-photo {
        width: 130px;
        height: 130px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #0093dd;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        animation: bounceIn 0.8s ease-in-out;
    }

    /* List Styling */
    .list-group-item {
        font-size: 16px;
        border: none;
        padding: 10px 15px;
        background: none;
        opacity: 0;
        transform: translateX(-30px);
        animation: fadeInLeft 0.5s ease-in-out forwards;
    }

    .list-group-item:nth-child(1) {
        animation-delay: 0.3s;
    }

    .list-group-item:nth-child(2) {
        animation-delay: 0.4s;
    }

    .list-group-item:nth-child(3) {
        animation-delay: 0.5s;
    }

    .list-group-item:nth-child(4) {
        animation-delay: 0.6s;
    }

    .list-group-item:nth-child(5) {
        animation-delay: 0.7s;
    }

    .list-group-item:nth-child(6) {
        animation-delay: 0.8s;
    }

    /* Button Hover Effect */
    .btn-secondary {
        background-color: #0093dd;
        border: none;
        transition: all 0.3s ease-in-out;
    }

    .btn-secondary:hover {
        background-color: #007bb5;
        transform: scale(1.05);
    }

    /* Responsive Tweaks */
    @media (max-width: 576px) {
        .student-photo {
            width: 100px;
            height: 100px;
        }
    }

    .notification-container {
        position: fixed;
        top: 9px;
        right: 50px;
        z-index: 999;
    }

    .notification-dropdown {
        display: none;
        position: absolute;
        top: 40px;
        right: 0;
        width: 250px;
        background: white;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        padding: 10px;
    }

    .notification-dropdown ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .notification-dropdown ul li {
        padding: 8px;
        border-bottom: 1px solid #eee;
    }

    .notification-dropdown ul li:last-child {
        border-bottom: none;
    }

    .notification-container:hover .notification-dropdown {
        display: block;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content animate__animated animate__zoomIn">
            <div class="modal-header animate__animated animate__fadeInDown">
                <h5 class="modal-title" id="exampleModalLabel">Personal Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url('/student/profileedit/' . $id . '') ?>"> <button type="button" class="btn btn-secondary" style="background-color: #0093dd;border:#0093dd" data-bs-dismiss="modal">Edit</button></a>
            </div>
            <div class="modal-body">
                <div class="student-details">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center">
                            <img src="<?php echo base_url('uploads/studentdocument/' . $id . '/' . $profile . '') ?>" alt="Student Photo" class="student-photo animate__animated animate__bounceIn">
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Name:</strong> <span id="studentName"><?php echo $firstname ?> <?php echo $lastname ?></span></li>
                                <li class="list-group-item"><strong>Address:</strong> <span id="studentAddress"><?php echo $pstreet ?>, <?php echo $pcity ?>,<br><?php echo $pcity ?> - <?php echo $ppincode ?></span></li>
                                <li class="list-group-item"><strong>Email:</strong> <span id="studentEmail"><?php echo $email ?></span></li>
                                <li class="list-group-item"><strong>Phone:</strong> <span id="studentPhone"><?php echo $phoneno ?></span></li>
                                <li class="list-group-item"><strong>College:</strong> <span id="studentCourse"><?php echo $college ?></span></li>
                                <li class="list-group-item"><strong>Branch:</strong> <span id="studentBranch"><?php echo $branch ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#0093dd">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Course Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="internship-details animate__animated animate__fadeInUp">
                    <div class="row">
                        <!-- <div class="col-md-4 text-center">
                            <img src="internship.jpg" alt="Internship Icon" class="internship-icon">
                        </div> -->
                        <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Course Name:</strong> <span id="courseName" style="color:#0093dd"><?php echo $course ?></span></li>
                                <li class="list-group-item"><strong>Duration:</strong> <span id="courseDuration" style="color:#0093dd"><?php echo $duration ?></span></li>
                                <li class="list-group-item"><strong>Start Date:</strong> <span id="startDate" style="color:#0093dd"><?php echo $joiningdate ?></span></li>
                                <li class="list-group-item"><strong>Batch:</strong> <span id="instructorName" style="color:#0093dd"> <?php echo $batch ?></span></li>
                                <!-- <li class="list-group-item"><strong>Mode:</strong> <span id="courseMode">Online</span></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color: #0093dd;border:#0093dd" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#0093dd">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="internship-details animate__animated animate__fadeInUp">
                    <div class="row">

                        <div class="col-md-12">
                            <form action="<?php echo base_url('/student/changepassword') ?>" method="post">
                                <!-- <label for="id" style="color:#0093dd;text-align:center">Student id</label> -->

                                <input type="text" id="sid" name="sid" class="form-control" value="<?php echo $id ?>" hidden readonly>
                                <br>
                                <label for="Name" style="color:#0093dd;text-align:center">Student Name</label>
                                <br>
                                <input type="text" id="name" name="name" class="form-control" value="<?php echo $firstname ?> <?php echo $lastname ?>" readonly>
                                <!-- <br> -->
                                <!-- <label for="id" style="color:#0093dd;text-align:center">id</label> -->
                                <br>
                                <button type="button" id="otpBtn" onclick="showFields();" style="background-color: #0093dd; color:white; border:none" class="form-control">Generate OTP to Change Password</button>
                                <br>
                                <p id="otptext" style="color: green;display:none">An OTP is sent to your registered Email.</p>

                                <!-- <label for="Name" id="passwordLabel" style="color:#0093dd;display: none;">New Password</label> -->
                                <!-- <br> -->
                                <input type="text" id="OTP" oninput="verifyOTP();" name="OTP" class="form-control" style="display:none  ;" placeholder="Enter Your OTP">
                                <!-- <button type="submit" id="verifyOTP" style="background-color: #0093dd; color:white;display: block;border-radius:20px;height:30px;border:none;width:30%" class="">Verify OTP</button> -->
                                <small id="wrongotp" style="color: red;display:none">Incorrect OTP.</small>
                                <small id="correctotp" style="color: green;display:none">OTP verified successfully !</small>

                                <br>

                                <label for="Name" id="passwordLabel" style="color:#0093dd;display: none;">New Password</label>
                                <br>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" style="display: none;" placeholder="Password" name="password" required>
                                    <button type="button" id="passBtn" class="btn btn-outline-secondary" onclick="togglePassword()" style="border-left: none;display:none">
                                        <i class="fa fa-eye" id="toggleIcon"></i>
                                    </button>
                                </div>

                                <!-- FontAwesome for Icons -->
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

                                <script>
                                    function togglePassword() {
                                        var passwordInput = document.getElementById("password");
                                        var toggleIcon = document.getElementById("toggleIcon");

                                        if (passwordInput.type === "password") {
                                            passwordInput.type = "text";
                                            toggleIcon.classList.remove("fa-eye");
                                            toggleIcon.classList.add("fa-eye-slash");
                                        } else {
                                            passwordInput.type = "password";
                                            toggleIcon.classList.remove("fa-eye-slash");
                                            toggleIcon.classList.add("fa-eye");
                                        }
                                    }
                                </script> <br>

                                <button type="submit" id="changeBtn" onclick="makeDisable();" style="background-color: #0093dd; color:white;display: none;" class="form-control">Submit</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color: #0093dd;border:#0093dd" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#0093dd">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Fees Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="internship-details animate__animated animate__fadeInUp">
                    <div class="row">
                        <!-- <div class="col-md-4 text-center">
                            <img src="internship.jpg" alt="Internship Icon" class="internship-icon">
                        </div> -->
                        <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Course Name:</strong> <span id="courseName" style="color:#0093dd"> <?php echo $course ?></span></li>
                                <li class="list-group-item"><strong>Total Fees:</strong> <span id="courseDuration" style="color:#0093dd"><i class="fa-solid fa-indian-rupee-sign" style="pointer-events: none;"></i><?php echo $totalfee ?></span></li>
                                <?php if($paidfee == ''){ ?>
                                <li class="list-group-item"><strong>Fees Paid:</strong> <span id="startDate" style="color:#0093dd"><i class="fa-solid fa-indian-rupee-sign" style="pointer-events: none;"></i><?php echo 0 ?></span></li>
                                <?php }else{?>
                                    <li class="list-group-item"><strong>Fees Paid:</strong> <span id="startDate" style="color:#0093dd"><i class="fa-solid fa-indian-rupee-sign" style="pointer-events: none;"></i><?php echo $paidfee ?></span></li>
                                <?php } ?>
                                <?php if($remainingfee == ''){ ?>
                                <li class="list-group-item"><strong>Remaining Fees:</strong> <span id="instructorName" style="color:#0093dd"><i class="fa-solid fa-indian-rupee-sign" style="pointer-events: none;"></i> <?php echo $totalfee ?></span></li>
                                <?php } else{ ?>
                                    <li class="list-group-item"><strong>Remaining Fees:</strong> <span id="instructorName" style="color:#0093dd"><i class="fa-solid fa-indian-rupee-sign" style="pointer-events: none;"></i> <?php echo $remainingfee ?></span></li>
                                    <?php } ?>
                                <!-- <li class="list-group-item"><strong>Mode:</strong> <span id="courseMode">Online</span></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color: #0093dd;border:#0093dd" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Notification Icon -->
<!-- <div class="notification-container">
    <button class="btn btn-light position-relative" id="notificationButton">
        <i class="fas fa-bell fa-lg"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="notificationCount">
            0
        </span>
    </button>

    <!-- Notification Dropdown --
    <div class="notification-dropdown" id="notificationDropdown">
        <ul id="notificationList">
            <li>No new notifications</li>
        </ul>
    </div>
</div> -->

<!-- FontAwesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


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



<?php if (session()->getFlashdata('uploadmessage')): ?>
    <script>
        $(document).ready(function() {
            $("#uploadModal").modal('show');
        });
    </script>
<?php endif; ?>

<!-- Bootstrap Modal -->
<div id="uploadModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title">Upload Documents</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
            <div class="modal-body">
                <p>Please upload your documents to continue.</p>
            </div>
            <div class="modal-footer">
                <a href="<?= base_url('student/document'); ?>" class="btn btn-primary">Upload Now</a>
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Later</button> -->
            </div>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('uploademail')): ?>
    <script>
        $(document).ready(function() {
            $("#uploadEmailModal").modal('show');
        });
    </script>
<?php endif; ?>

<div class="modal fade" id="successModal7" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Notification</h5>
            </div>
            <div class="modal-body">
                <?= session()->getFlashdata('feepending'); ?>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to Show Modal -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php if (session()->getFlashdata('feepending')) : ?>
            var successModal = new bootstrap.Modal(document.getElementById('successModal7'));
            successModal.show();
            setTimeout(() => {
                successModal.hide();
            }, 3000); // Auto-close after 3 seconds
        <?php endif; ?>

    });
</script>


<div id="uploadEmailModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?php echo base_url('/student/addEmail') ?>" method="POST">
                <div class="modal-body">
                    <h3 style="color:black;">Please Enter Your Email.</h3><br>
                    <div class="col-md-12">
                        <input type="text" placeholder="Enter Your Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" class="form-control" id="Email" name="Email" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let notifications = [{
                message: "New assignment added",
                time: "2 mins ago"
            },
            {
                message: "Fee payment due",
                time: "1 day ago"
            }
        ];

        function updateNotifications() {
            let notificationList = document.getElementById("notificationList");
            let notificationCount = document.getElementById("notificationCount");

            if (notifications.length > 0) {
                notificationList.innerHTML = "";
                notifications.forEach(notification => {
                    let li = document.createElement("li");
                    li.innerHTML = `<strong>${notification.message}</strong><br><small>${notification.time}</small>`;
                    notificationList.appendChild(li);
                });
                notificationCount.innerText = notifications.length;
                notificationCount.style.display = "inline-block";
            } else {
                notificationList.innerHTML = "<li>No new notifications</li>";
                notificationCount.style.display = "none";
            }
        }

        updateNotifications();
    });
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
        $(".openModalBtn1").on("click", function() {
            var inquiryId = $(this).data("id");

            console.log("Opening modal for Inquiry ID:", inquiryId);

            // Update modal fields dynamically
            $("#id").val(inquiryId);


            // Open modal
            $("#exampleModal1").modal("show");
        });

        // Ensure close button works
        $(".btn-close").on("click", function() {
            $("#exampleModal1").modal("hide");
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
<!-- Bootstrap Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Notification</h5>
                <audio id="welcomeAudio" src="<?php echo base_url('uploads/audio/welcome.mp3'); ?>"></audio>
            </div>
            <div class="modal-body">
                <?= session()->getFlashdata('success'); ?>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('successModal').addEventListener('shown.bs.modal', function() {
        var audio = document.getElementById("welcomeAudio");
        if (audio) {
            audio.play().catch(error => console.log("Audio play error:", error));
        }
    });
</script>


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



<script>
    function showFields() {

        // alert("hello");

        $("#otpBtn").css("display", "none");

        $.ajax({
            url: `<?php echo base_url('/student/sentOtp') ?>`,
            type: 'GET',
            dataType: 'json',



            success: function(response) {
                var dbotp = response.message;
                // console.log(dbotp);











            }
        })

        $("#otptext").css("display", "block");
        $("#OTP").css("display", "block");


    }
</script>

<script>
    function verifyOTP() {

        var userotp = $("#OTP").val();

        console.log(userotp);




        $.ajax({
            url: `<?php echo base_url('/student/verifyOTP/'); ?>${userotp}`,
            type: 'GET',
            dataType: 'json',

            success: function(response) {
                console.log(response);
                if (response.message == "otp") {

                    $("#correctotp").css("display", "block");
                    $("#wrongotp").css("display", "none");

                    $("#passwordLabel").css("display", "block");
                    $("#password").css("display", "block");
                    $("#changeBtn").css("display", "block");

                    $("#passBtn").css("display", "block");



                } else if (response.message == "nootp") {
                    $("#wrongotp").css("display", "block");
                    $("#correctotp").css("display", "none");
                    $("#passwordLabel").css("display", "none");
                    $("#password").css("display", "none");
                    $("#changeBtn").css("display", "none");
                    $("#passBtn").css("display", "none");

                } else if (response.message == "otplen") {
                    $("#wrongotp").css("display", "none");
                    $("#correctotp").css("display", "none");
                    $("#passwordLabel").css("display", "none");
                    $("#password").css("display", "none");
                    $("#changeBtn").css("display", "none");
                    $("#passBtn").css("display", "none");


                }
            }





        });

    }
</script>

<script>
    function makeDisable() {
        $("#changeBtn").css("display", "none");
    }
</script>


</body>

<!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 10:26:16 GMT -->

</html>