<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Joining Letter</title>

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <!-- Paper CSS for printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <style>
        @page {
            size: A4;
        }

        body {
            font-family: Poppins;
            color: #000;
            font-size: 15px;
            
        }

        .header {
            text-align: center;
            color: #0070BF;
        }

        .content {
            padding: 0px;
            background-image: url(<?php echo base_url('/uploads/CmsMaster/3/a1.png') ?>);
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center;

        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>

<body class="A4 ">
    <section class="sheet padding-10mm">
        <div class="header">
            <div class="row">
                <img src="<?php echo base_url('/uploads/CmsMaster/2/a2.jpg') ?>" width="100%" height="150px">
            </div>
            <div class="row" style="display: flex; justify-content: space-between;margin: 0%; ">
                <p>CIN - U80904PN2017PTC1701</p>
                <p>Reg. No - 170185</p>
            </div>

            <!-- <p>Wolfox Services Pvt. Ltd.</p>
            <p>1767, E Ward, Rajarampuri 3rd Lane, Kolhapur-416008, Maharashtra, India.</p>
            <p>Tel: 9657788775 | Email: <a href="mailto:admin@Wolfox.in">admin@Wolfox.in</a> | URL: <a href="http://www.Wolfox.in">www.Wolfox.in</a></p> -->
        </div>

        <div class="content" style="">
            <h3 style="text-align: center;color:#0070BF;">Internship Joining Letter</h3>
            <div class="content1" style="line-height: 0.4;">
                <p>Date: 12th DEC 2024</p>
                <p>TO WHOM IT MAY CONCERN,</p>
                <p>Re: Internship Joining Letter.</p>
                <p> Dear, <b><?php echo $StudentData['firstname'] ?> <?php echo $StudentData['middlename'] ?> <?php echo $StudentData['lastname'] ?></b></p>
            </div>


            <p>We are pleased to offer you an Internship opportunity at <b>WOLFOX SERVICES PVT. LTD., Kolhapur</b> in
                the
                <b>Development Department.</b> As discussed, you will work approximately 8 (Eight) hours/day, and your
                internship will begin on <b><?php echo $StudentData['joiningdate'] ?>.</b> If you accept this Internship offer, you will report all
                work
                status to <b>[EMP-010] Bhagyashri S. Khot, CTO & Director (Chief Technical Officer).</b>
            </p>

            <p>As this is an Intern position, you may discontinue the internship at any time for any reason; however,
                you will not be eligible to claim an Internship completion or experience certificate from <b>WOLFOX
                    SERVICES PVT. LTD.</b> The company may also discontinue the Internship Period for any reason. There
                is no
                guarantee of continuous employment.</p>

            <p>As an <b>Intern Python Developer</b> you will not be a permanent company employee. You will not receive a
                salary, wages, or other compensation. Additionally, you will not be eligible for any employee benefits
                such as health insurance, vacation, sick leave, paid holidays, or participation in any company financial
                plans.</p>

            <p>During your Internship Period, you may come across confidential business information. By accepting this
                offer, you acknowledge that you must adhere to our confidentiality policy. Upon conclusion of your
                internship period, you must return all company-owned property, equipment, and documents, including
                electronic communications or other information.</p>

            <p>If you have any questions about the terms of this offer, please contact us at (+91) 9657788775 or
                admin@wolfox.in / hr@wolfox.in.</p>

            <p>We are very excited about the prospect of you joining our team as an <b>Intern Python Developer</b> at
                <b>WOLFOX!</b>
                We look forward to helping you achieve your career growth. To learn more about <b>WOLFOX,</b> please
                visit our
                website at <b><a href="http://www.Wolfox.in">www.Wolfox.in</a></b>.
            </p>

            <p>Sincerely,</p>
            <!-- <div class="row" style="margin-top: 40px;">
                <img src="../../../../assets/images/document/a3.jpg" width="110px" height="45px"style="margin-top: -160px;">
            </div>
            <img src="../../../../assets/images/document/a4.jpg" height="100px" style="margin-left: 300px;margin-top: -60px;"> -->

            <p style="margin: 0;"><b>Shridhar B. Khot,<br> CEO & Director,<br>WOLFOX SERVICES PVT. LTD.</b></p>

            <p style="margin: 0;">*** My signature below indicates my acceptance of the offer as outlined above.</p>
            <b>
                <p style="margin: 0;"><?php echo $StudentData['firstname'] ?> <?php echo $StudentData['middlename'] ?> <?php echo $StudentData['lastname'] ?>
            </b> &nbsp;&nbsp;&nbsp;&nbsp;12/12/2024</p>

            <p>……………………………………………………………………………………………………………………………</p>

            <p>Name of Intern &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature of Intern &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Signature
            </p>
            <p>*** Please return a signed copy via mail or deliver to the office.</p>
        </div>

        <div class="footer">
            <p style="font-size: 20px;color: #0070BF; margin: 0;font-weight: 400;">Wolfox Services Pvt. Ltd.</p>
            <p style="margin: 0;font-size: 15px;"> 1767, E Ward, Rajarampuri 3rd Lane, Kolhapur-416008, Maharashtra, India.</p>
            <b><p style="margin: 0;font-size: 15px; color:rgb(1, 65, 111);">*Tel: 9657788775 * Email: admin@Wolfox.in * URL: www.Wolfox.in</p></b>
        </div>
    </section>
</body>

</html>