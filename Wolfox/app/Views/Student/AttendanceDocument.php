<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #f9f9f9;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 900px;
            border: 2px solid #333;
            background: white;
            padding: 20px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .header {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            padding: 15px 0;
            background: #0073e6;
            color: white;
            border-radius: 5px;
        }

        .student-info {
            margin-top: 20px;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
        }

        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
            padding: 12px;
        }

        th {
            background: #0073e6;
            color: white;
            font-size: 16px;
        }

        td {
            font-size: 14px;
        }

        .record-note {
            margin-top: 20px;
            font-size: 16px;
            font-style: italic;
        }

        .stamp {
            margin-top: 30px;
            text-align: right;
            font-weight: bold;
            font-size: 18px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>

<body style="margin-top: 500px;">
    <?php

use App\Models\AdmissionModel;

 $session = session();

    $AdmissionModel = new AdmissionModel();
    $id = $session->get('id');
    // echo $studid;
    // echo $month;
    // echo $year
    // ;
    // exit;
      @$studentid = $studid;
    

    if($studentid)
    {
        $studentinfo = $AdmissionModel->where('id',$studentid)->first();
        $firstname = $studentinfo['firstname'];
        $middlename = $studentinfo['middlename'];
        $lastname = $studentinfo['lastname'];

    }
    else
    {
        $firstname = $session->get('firstname');
        $middlename = $session->get('middlename');
        $lastname = $session->get('lastname');
    }
    
      $monthId = $month;
      $yearId = $year;


      $AttendanceMonth = date('m',strtotime($monthId));

      $DaysInMonth = cal_days_in_month(CAL_GREGORIAN, $monthId, $yearId);

      $date = DateTime::createFromFormat('!m', $month);


 

    ?>
   

    <div class="container">
        <?php foreach ($AttendanceData as $row1) ?>
        <div class="header">Wolfox Services Private Limited,Kolhapur</div>
        <div class="student-info">
            <p><strong>Student Name:</strong> <?php echo $firstname . ' ' . $middlename . ' ' . $lastname ?></p>
            <p><strong>Attendance Month:  <?php echo $date->format('F');
 ?></strong>
                <?php
                $months = [
                    1 => 'January',
                    2 => 'February',
                    3 => 'March',
                    4 => 'April',
                    5 => 'May',
                    6 => 'June',
                    7 => 'July',
                    8 => 'August',
                    9 => 'September',
                    10 => 'October',
                    11 => 'November',
                    12 => 'December'
                ];
                //echo $months[$row1['month']];
                ?>
            </p>
        </div>
        <table >
            <tr>
                <!-- <th>Sr No</th> -->
                <th>Date</th>
                <th>Status</th>
            </tr>
            <?php foreach ($AttendanceData as $row):
                
                $absentDays = explode(",",$row['absent_dates']);

                $cleanedData = str_replace(['[', ']', '"'], '', $absentDays);

                // print_r($absentDays);
                 $count = count($cleanedData);
            //    exit;

                ?>
                <tr>
                    <!-- <td>1</td> -->
                     <?php 
                      for($i=0;$i<$count;$i++):
                     ?>
                    <td><?php echo $cleanedData[$i] ?></td>
                    <td>Present</td>
                </tr>
            <?php
            endfor;
         endforeach;?>

        </table>
<br>
        <!-- <p>Total Present Days :- <?php //echo $count.'/'.$DaysInMonth  count  ?> </p> -->
        <div class="record-note">Note: This is an official attendance record. Any discrepancies should be reported to the administration.</div>
        <div class="stamp">Academy Stamp</div>
        <div class="footer">Generated Attendance Report</div>
    </div>
    <br><br>
    <button id="downloadPdf" style="margin-bottom: 20px; padding: 10px 20px; background: #0073e6; color: white; border: none; cursor: pointer; font-size: 16px;">
    Download as PDF
</button>
<br><br>


<script>
    document.getElementById("downloadPdf").addEventListener("click", function () {
        let element = document.querySelector(".container"); // Select the entire container with attendance list

        let options = {
            margin: 10,
            filename: 'Attendance_Report.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2, useCORS: true },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
            pagebreak: { mode: ['css', 'legacy'] } // Ensures proper page breaks
        };

        html2pdf().set(options).from(element).save();
    });
</script>


</body>

</html>