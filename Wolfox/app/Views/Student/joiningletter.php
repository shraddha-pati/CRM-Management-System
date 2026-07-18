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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <style>
        @page {
            size: A4;
        }

        body {
            font-family: Poppins;
            color: #000;
            font-size: 14px;
            font-family: "Poppins", sans-serif;
        }

        .header {
            text-align: center;
            color: #0070BF;
        }

        .content {
            padding: 0px;
            background-image: url(<?php echo base_url('/uploads/CmsMaster/1/'.$companydata[0]['backgroundimage'].'') ?>);
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center;

        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
        }

        .row {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body class="A4 ">
    <div>
        <a href="<?php echo base_url('/Admin/Admission/joiningletter/'); ?>" target="_blank">
            <!-- <button style="background-color: blue; color: white; padding: 5px; border: none; border-radius: 5px;margin-top:2px; " id="downloadBtn">
                <i class="fas fa-download"></i> Download
            </button> -->
        </a>
    </div>
    <button id="downloadBtn" style="background-color: blue; color: white; padding: 10px; border: none; border-radius: 5px; margin: 10px;width:700px">
    <i class="fas fa-download"></i> Download PDF
</button>
    <section id="letter" class="sheet padding-10mm">

        <div class="header">
            <div class="row">
                <img src="<?php echo base_url('/uploads/CmsMaster/1/'.$companydata[0]['headerimage'].'') ?>" width="100%" height="150px">
            </div>
            <div class="row" style="display: flex; justify-content: space-between;margin: 0; padding: 0;" >
                <p style=" margin: 0;">CIN - <?php echo $companydata[0]['cinno'] ?></p>
                <p style="margin: 0;">Reg. No - 170185</p>
            </div>
            <hr style="color:#0070BF;">
            <!-- <p>Wolfox Services Pvt. Ltd.</p>
            <p>1767, E Ward, Rajarampuri 3rd Lane, Kolhapur-416008, Maharashtra, India.</p>
            <p>Tel: 9657788775 | Email: <a href="mailto:admin@Wolfox.in">admin@Wolfox.in</a> | URL: <a href="http://www.Wolfox.in">www.Wolfox.in</a></p> -->
        </div>

        <?php
        $joiningDate = $StudentData['joiningdate'];
        $date = new DateTime($joiningDate);
        $day = $date->format('j');
        $month = $date->format('M');
        $year = $date->format('Y');

        $dayWithSuffix = $day . getOrdinalSuffix($day);

        function getOrdinalSuffix($day)
        {
            if ($day % 10 == 1 && $day != 11) {
                return 'st';
            } elseif ($day % 10 == 2 && $day != 12) {
                return 'nd';
            } elseif ($day % 10 == 3 && $day != 13) {
                return 'rd';
            } else {
                return 'th';
            }
        }

        $d = $dayWithSuffix . ' ' . $month . ' ' . $year;
        ?>
        <div class="content" style="">
            <h3 style="text-align: center;color:#0070BF;margin: 0;font-size:19px;text-decoration: underline;">Internship Joining Letter</h3>
            <div class="content1" style="line-height: 0.4;">
                <p>Date: <?//php echo $d ?></p>
                <p>TO WHOM IT MAY CONCERN,</p>
                <p>Re: Internship Joining Letter.</p>
                <p> Dear, <b><?php echo $StudentData['firstname'] ?> <?php echo $StudentData['middlename'] ?> <?php echo $StudentData['lastname'] ?></b></p>
            </div>


            <p>We are pleased to offer you an Internship opportunity at <b><?php echo strtoupper($companydata[0]['name']) ?>, Kolhapur</b> in
                the
                <b>Development Department.</b> As discussed, you will work approximately 8 (Eight) hours/day, and your
                internship will begin on <b><?//php echo $StudentData['joiningdate'] ?>.</b> If you accept this Internship offer, you will report all
                work
                status to <b><?php echo $StudentData['guidename'] ?>.</b>
            </p>
            <p>Because of this is an Intern position, you may discontinue an Internship in between Internship periodat any time for any reason,
                only you are not able claim Internship completion or experience certificate from <b><?php echo strtoupper($companydata[0]['name']) ?></b>, And company
                may discontinue the Internship Period for any reason will not prohibited by law. There is no guarantee of continuous employment.</p>


            <p>As an <b>Intern Python Developer</b> you will not be a company permanent employee. And you will notable to receive a salary, wages, or
                other compensation. In addition, you will be eligible for any of the employee benefits that company’s employees are entitled to,
                but you will not receive health insurance, vacation or sick leave, paid holidays, or any participation in company’s any financial plan.</p>

            <p>During your Internship Period, you may come across confidential business information. By accepting this
                offer, you acknowledge that you must adhere to our confidentiality policy. In addition, upon conclusion of your internship period, you must
                return all company-owned property, equipment, and documents, including electronic mail or other information.</p>

            <p>If you have any questions about the terms of this offer, please contact us at (+91) <?php echo $companydata[0]['phonenum1'] ?> or
                <?php echo $companydata[0]['email1'] ?> / <?php echo $companydata[0]['email2'] ?>.</p>

            <p style="margin: 0;">We are very excited about the prospect of you joining our team as an <b>Intern Python Developer</b> at
                <b>WOLFOX!</b>
                We look forward to helping you achieve your career growth. To learn more about <b>WOLFOX,</b> please
                visit our
                website at <b><a href="http://www.Wolfox.in">www.Wolfox.in</a></b>.
            </p>
            <p style="margin: 0;">Sincerely,</p><br><br>
            <!-- <div class="row" style="margin-top: 40px;">
                <img src="../../../../assets/images/document/a3.jpg" width="110px" height="45px"style="margin-top: -160px;">
            </div>
            <img src="../../../../assets/images/document/a4.jpg" height="100px" style="margin-left: 300px;margin-top: -60px;"> -->

            <p style="margin: 0;"><b>Shridhar B. Khot,<br> CEO & Director,<br>WOLFOX SERVICES PVT. LTD.</b></p>

            <p style="margin: 0;">*** My signature below indicates my acceptance of the offer as outlined above.</p>
            <b>
                <p style="margin-top: 10px;"><?php echo $StudentData['firstname'] ?> <?php echo $StudentData['middlename'] ?> <?php echo $StudentData['lastname'] ?>
            </b> <?php $currentDate = date('Y-m-d'); ?><span style="margin-left: 250px;"><?php echo $currentDate; ?> </span></p>
            <p style="margin: 0;">………………………………………………………………………………………………………………………………………………………………………………………………………………………………</p>
            <p style="margin: 0;"><span>Name of Intern</span> <span style="margin-left:120px">Signature of Intern</span> <span style="margin-left:190px">Date of Signature</span>
            </p>
            <p style="margin-top: 0;">*** Please return a signed copy via mail or deliver to the office.</p>
        </div>

        <div class="footer">
            <img src="<?php echo base_url('/uploads/CmsMaster/1/'.$companydata[0]['footerimage'].'') ?>" width="100%" height="180px">

            <!-- <p style="font-size: 20px;color: #0070BF; margin: 0;font-weight: 400;">Wolfox Services Pvt. Ltd.</p>
            <p style="margin: 0;font-size: 15px;"> 1767, E Ward, Rajarampuri 3rd Lane, Kolhapur-416008, Maharashtra, India.</p>
            <b>
                <p style="margin: 0;font-size: 15px; color:rgb(1, 65, 111);">*Tel: 9657788775 * Email: admin@Wolfox.in * URL: www.Wolfox.in</p>
            </b> -->
        </div>
    </section>
</body>
<script>
    $(document).ready(function() {
        $("#downloadBtn").click(function() {
            const {
                jsPDF
            } = window.jspdf;
            let doc = new jsPDF();

            html2canvas(document.querySelector("#certificate")).then(canvas => {
                let imgData = canvas.toDataURL("image/png");
                let imgWidth = 190; // Adjust image width
                let imgHeight = (canvas.height * imgWidth) / canvas.width; // Maintain aspect ratio

                doc.addImage(imgData, 'PNG', 10, 10, imgWidth, imgHeight);
                doc.save("certificate.pdf");
            });
        });
    });
</script>

<script>
    $(document).ready(function () {
        $("#downloadBtn").click(function () {
            const { jsPDF } = window.jspdf;
            let doc = new jsPDF('p', 'mm', 'a4');

            html2canvas(document.querySelector("#letter"), {
                scale: 2 // Improves resolution
            }).then(canvas => {
                let imgData = canvas.toDataURL("image/png");
                let imgWidth = 210; // A4 width in mm
                let imgHeight = (canvas.height * imgWidth) / canvas.width;

                doc.addImage(imgData, 'PNG', 0, 0, imgWidth, imgHeight);
                doc.save("Internship_Joining_Letter.pdf");
            });
        });
    });
</script>

</html>