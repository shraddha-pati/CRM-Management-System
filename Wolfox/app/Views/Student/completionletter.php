<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completion Letter</title>

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <!-- Paper CSS for printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <style>
        @page {
            size: A4;
        }

        body {
            font-family: "Poppins", sans-serif;
            color: #000;
            font-size: 15px;
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

        /* Button Styling */
        #downloadBtn {
            background-color: blue;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body class="A4">
    <button id="downloadBtn" style="background-color: blue; color: white; padding: 10px; border: none; border-radius: 5px; margin: 10px;width:700px">
        <i class="fas fa-download" style="text-align:center;width:700px"></i> Download PDF
    </button>

    <section id="letter" class="sheet padding-10mm">
        <div class="header">
            <div class="row">
                <img src="<?php echo base_url('/uploads/CmsMaster/1/'.$companydata[0]['headerimage'].'') ?>" width="100%" height="150px">
            </div>
            <div class="row" style="display: flex; justify-content: space-between; margin: 0%;">
                <p style="margin: 0;">CIN - <?php echo $companydata[0]['cinno'] ?></p>
                <p style="margin: 0;">Reg. No - 170185</p>
            </div>
            <hr style="color:#0070BF;">
        </div>

        <?php
        $joiningDate = $StudentData['joiningdate'];
        $date = new DateTime($joiningDate);
        $day = $date->format('j');
        $month = $date->format('M');
        $year = $date->format('Y');

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

        $dayWithSuffix = $day . getOrdinalSuffix($day);
        $d = $dayWithSuffix . ' ' . $month . ' ' . $year;
        ?>

        <div class="content">
            <h3 style="text-align: center; color:#0070BF; text-decoration: underline; font-size:19px;">Internship Certificate</h3>
            <p>Date: <?php echo $d ?>.</p>
            <p>TO WHOM IT MAY CONCERN,</p>

            <p>This Certificate is given on this <b><?php echo $StudentData['StudentId'] ?>- Internship Code </b> on the date of <b><?php echo $dayWithSuffix ?> <?php echo $month ?></b> of the Year <b><?php echo $year ?></b> to the student named <b><?php echo $StudentData['firstname'] ?> <?php echo $StudentData['middlename'] ?> <?php echo $StudentData['lastname'] ?></b> of the Institute <?php echo $StudentData['collegename'] ?>.</p>

            <p><?php echo $StudentData['firstname'] ?> successfully completed this <b>[<?php echo $StudentData['StudentId'] ?>]</b> Internship Period from <?php echo $d ?> to <?php echo date('d-m-Y'); ?> at <?php echo $companydata[0]['name'] ?>, under the guidance of <?php echo $StudentData['guidename'] ?>.</p>
			<p><b><?php echo $StudentData['firstname'] ?></b> was able to successfully participate and accomplish the entire task required for this internship,
                 throughout which candidate was able to showcase skills like great work ethic, hard work, leadership, and team player skills.</p>

            <p>During this internship period, <b><?php echo $StudentData['firstname'] ?></b> came across confidential business information. According to this internship offer,
                 candidate acknowledges that he/she must adhere to our confidential policy. In addition, <?php echo $companydata[0]['name'] ?> gave a
                  remark that, candidate successfully completed this Internship with given <b><?php echo $StudentData['StudentId'] ?>-Internship Code</b>, and also candidate
                  successfully returns all company-owned property, equipment, and documents, including electronic mail or other information.</p>

            <p>If you have any questions/query about this Internship Certificate outlined above, please contact us
                 at (+91)<?php echo $companydata[0]['phonenum1'] ?> or <?php echo $companydata[0]['email1'] ?> / <?php echo $companydata[0]['email2'] ?>.</p>

            <p>We are very happy about candidate was joining our team as an <b>Intern Web Developer </b>at WOLFOX! We look forward to helping you to
                 achieve your expected career growth. To learn or know more about WOLFOX, please visit our website at www.Wolfox.in.
            </p>

            <p>Sincerely,</p>
            <br><br><br>
            <p><b>Shridhar B. Khot,<br> CEO & Director,<br><?php echo $companydata[0]['name'] ?></b></p>
        </div>

        <div class="footer">
            <img src="<?php echo base_url('/uploads/CmsMaster/1/'.$companydata[0]['footerimage'].'') ?>" width="100%" height="180px" style="margin-top:40px">
        </div>
    </section>

    <script>
        document.getElementById('downloadBtn').addEventListener('click', function() {
            const element = document.getElementById('letter'); // Select the certificate section
            
            html2canvas(element, { scale: 3 }).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const { jsPDF } = window.jspdf;
                const pdf = new jsPDF('p', 'mm', 'a4');

                const pdfWidth = 210; // A4 size in mm
                const pdfHeight = (canvas.height * pdfWidth) / canvas.width; 

                pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
                pdf.save('Internship_Completion_Letter.pdf');
            });
        });
    </script>

</body>
</html>
