<?php
$session = session();
// $sid = $session->get('id');
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


$title = ($StudentData[0]['gender'] == 'Male') ? 'Mr.' : 'Miss';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .receipt {
            width: 790px;
            height: 460px;
            border: 15px solid #d2691e;
            padding: 30px;
            background: #f8e5c3;
            position: relative;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }

        .border {
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            border: 5px solid #333;
            padding: 15px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .field {
            margin: 15px 0;
            font-size: 16px;
        }

        .line {
            display: inline-block;
            border-bottom: 1px dashed black;
            width: 85%;
            height: 20px;
        }

        .small-line {
            display: inline-block;
            border-bottom: 1px dashed black;
            width: 180px;
            /* Increased width */
            height: 20px;
        }

        .date-line {
            display: inline-block;
            border-bottom: 1px dashed black;
            width: 140px;
            height: 20px;
        }

        .amount-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .amount-box {
            width: 140px;
            height: 50px;
            border: 2px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            background: white;
            position: relative;
        }

        .amount-box::before {
            content: "\20B9";
            /* Rupee symbol */
            font-size: 20px;
            margin-right: 5px;
        }

        .signature {
            font-weight: bold;
            font-size: 16px;
        }

        .footer {
            font-size: 14px;
            text-align: center;
            margin-top: 15px;
            font-style: italic;
        }

        .confirm {
            background-color: #2962ff;
            padding: 15px;
            font-size: 16px;
            border: #2962ff;
            color: #f5f5f5;
        }

        .download-btn {
            background-color: #2962ff;
            padding: 10px 20px;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        .download-btn:hover {
            background-color: #0039cb;
        }
    </style>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>



        async function downloadPDF() {
            const {
                jsPDF
            } = window.jspdf;
            let doc = new jsPDF();

            let studentName = "<?php echo $title . ' ' . $StudentData[0]['firstname'] . ' ' . $StudentData[0]['middlename'] . ' ' . $StudentData[0]['lastname']; ?>";
            let amountPaid = "₹<?php echo $StudentData[0]['installment']; ?>";
            let paymentMethod = "<?php echo $StudentData[0]['mode']; ?>";
            let paymentDate = "<?php echo isset($StudentData[0]['cashdate']) ? date('Y-m-d', strtotime($StudentData[0]['cashdate'])) : 'N/A'; ?>";
            let receiptNumber = "<?php echo $receiptNumber; ?>";
            let remainingFee = "₹<?php echo $StudentData[0]['remainingfee']; ?>";

            doc.setFont("helvetica", "bold");
            doc.setFontSize(16);
            doc.text("Receipt", 90, 20);

            doc.setFont("helvetica", "normal");
            doc.setFontSize(12);
            doc.text("Receipt No.: " + receiptNumber, 20, 40);
            doc.text("Name: " + studentName, 20, 50);
            doc.text("Amount Paid: " + amountPaid, 20, 60);
            doc.text("Payment Method: " + paymentMethod, 20, 70);
            doc.text("Payment Date: " + paymentDate, 20, 80);
            doc.text("Remaining Fee: " + remainingFee, 20, 90);

            doc.save("receipt.pdf");
        }
    </script>

    <script>
        async function downloadPDF() {
            const {
                jsPDF
            } = window.jspdf;

            let receiptElement = document.querySelector('.receipt'); // Select receipt div

            html2canvas(receiptElement, {
                scale: 2
            }).then(canvas => {
                let imgData = canvas.toDataURL('image/png'); // Convert to image

                let doc = new jsPDF('p', 'mm', 'a4'); // Create A4 PDF
                let imgWidth = 190; // Image width
                let imgHeight = (canvas.height * imgWidth) / canvas.width; // Auto height

                doc.addImage(imgData, 'PNG', 10, 10, imgWidth, imgHeight);
                doc.save("receipt.pdf"); // Download PDF
            });
        }
    </script>


</head>


<body>


    <div class="row">
        <div class="receipt">
            <div class="border">
                <div class="header">
                    <span>No.: <span class="small-line"><?php echo $receiptNumber  ?></span></span>
                    <img src="<?php echo base_url('/uploads/CmsMaster/1/' . $companydata[0]['companystamp2'] . '') ?>" width="30%" height="90px">
                    <span>Date: <span class="date-line"><?= isset($StudentData[0]['cashdate']) ? date('Y-m-d', strtotime($StudentData[0]['cashdate'])) : 'N/A' ?></span></span>
                </div>
                <div class="field" style="margin-left: 100px;">
                    <label>RECEIVED with thanks from</label>
                    <span class="line" style="text-align:center;font-size:20px">
                        <?php echo $title ?>. <?php echo $StudentData[0]['firstname'] ?> <?php echo $StudentData[0]['middlename'] ?> <?php echo $StudentData[0]['lastname'] ?>
                    </span>
                </div>

                <div class="field" style="margin-left: 100px;">
                    <label>The sum of Rupees</label>
                    <span class="line" id="amountInWords" style="text-align:center;font-size:20px"></span>
                </div>

                <script>
                    function numberToWords(num) {
                        var ones = ["", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten",
                            "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"
                        ];
                        var tens = ["", "", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"];
                        var thousands = ["", "Thousand", "Lakh", "Crore"];

                        if (num === 0) {
                            return "Zero";
                        }

                        var words = '';
                        var i = 0;

                        while (num > 0) {
                            if (num % 1000 !== 0) {
                                words = helper(num % 1000) + (thousands[i] ? ' ' + thousands[i] : '') + ' ' + words;
                            }
                            num = Math.floor(num / 1000);
                            i++;
                        }

                        return words.trim() + " Rupees Only /-";
                    }

                    function helper(num) {
                        var ones = ["", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten",
                            "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"
                        ];
                        var tens = ["", "", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"];

                        if (num === 0) return '';
                        else if (num < 20) return ones[num];
                        else if (num < 100) return tens[Math.floor(num / 10)] + ' ' + ones[num % 10];
                        else return ones[Math.floor(num / 100)] + ' Hundred ' + helper(num % 100);
                    }

                    window.onload = function() {
                        var amount = <?= $StudentData[0]['installment']; ?>; // PHP variable passed to JS
                        document.getElementById("amountInWords").innerHTML = numberToWords(amount);
                    };
                </script>

                <div class="field" style="margin-left: 100px;">
                    <label>In full/part payment of our Bill No.</label>
                    <span class="small-line" style="text-align:center;font-size:20px"><?php echo $receiptNumber  ?></span>
                    <label>Dated</label>
                    <span class="date-line" style="text-align:center;font-size:20px">
                        <?= isset($StudentData[0]['cashdate']) ? date('Y-m-d', strtotime($StudentData[0]['cashdate'])) : 'N/A' ?>
                    </span>
                </div>

                <div class="field" style="margin-left: 100px;">
                    <label>By cheque/cash:</label>
                    <span class="line" style="text-align:center;font-size:20px"><?= $StudentData[0]['mode'] ?></span>
                </div>

                <div class="amount-section">
                    <div>
                        <label>Amount:</label>
                        <div class="amount-box"><?= $StudentData[0]['installment'] ?>/-</div>
                    </div>
                    <?php
                    if ($StudentData[0]['remainingfee'] > 0) { ?>
                        <div>
                            <label>Remaining Fee:</label>
                            <div class="amount-box"><?= $StudentData[0]['remainingfee'] ?>/-</div>
                        </div>
                    <?php
                    }
                    ?>
                    <div>
                        <img src="<?php echo base_url('/uploads/CmsMaster/1/' . $companydata[0]['companystamp1'] . '') ?>" width="100%" height="100px">
                    </div>
                    <div class="signature">
                        Signature: ______
                    </div>
                </div>

                <div class="footer">
                    This receipt is valid subject to the realization of the cheque.
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <button class="download-btn" onclick="downloadPDF()">Download PDF</button>

    </div>
</body>




</html>