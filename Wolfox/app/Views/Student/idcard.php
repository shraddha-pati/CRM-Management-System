<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .id-card {
            width: 320px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            border-top: 20px solid #1d2c3d;
            position: relative;
        }
        .id-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid #1d2c3d;
        }
        .company-logo {
            width: 50px;
            position: absolute;
            top: 10px;
            left: 10px;
        }
        .stamp {
            width: 60px;
            position: absolute;
            bottom: 80px;
            right: 20px;
        }
        .design-banner {
            width: 100%;
            height: 50px;
            background: #1d2c3d;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        h2 {
            margin: 10px 0 5px;
            color: #333;
        }
        .details {
            text-align: left;
            margin-top: 10px;
            font-size: 14px;
        }
        .details p {
            margin: 5px 0;
        }
        .company-name {
            font-size: 18px;
            font-weight: bold;
            color: #1d2c3d;
            margin-top: 10px;
        }
        .footer {
            background: #1d2c3d;
            color: white;
            padding: 10px;
            margin-top: 15px;
            font-size: 12px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="id-card">
        <div class="design-banner"></div>
        <img class="company-logo" src="logo.png" alt="Company Logo">
        <img src="profile.jpg" alt="Profile Picture">
        <h2>Mr. Your Name</h2>
        <p>DIP(CSE) B.E. (IT)</p>
        <div class="details">
            <p><strong>Designation:</strong> CEO & Director</p>
            <p><strong>Date of Birth:</strong> 18 Nov. 1993</p>
            <p><strong>Mobile No.:</strong> 9657788775</p>
            <p><strong>Blood Group:</strong> A+ve</p>
        </div>
        <p class="company-name">WOLFOX</p>
        <img class="stamp" src="stamp.png" alt="Company Stamp">
        <div class="footer">
            <p><strong>WOLFOX SERVICES PVT. LTD.</strong></p>
            <p>1767, E Ward, Rajarampuri 3rd Lane, Kolhapur</p>
            <p>hr@wolfox.in | www.wolfox.in</p>
        </div>
    </div>
</body>
</html>