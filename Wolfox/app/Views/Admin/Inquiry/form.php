<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Inquiry Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .logo {
            display: block;
            margin: 0 auto 15px;
            width: 100px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="<?php echo base_url('/uploads/CmsMaster/1/logo1.png') ?>" width="200px" height="60px" class="logo" alt="Logo">
    <h2 class="text-center">Student Inquiry Form</h2>
    <form action="<?php echo base_url('/Admin/Inquiry/save') ?>" method="POST">
        
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="FullName" id="FullName" placeholder="Enter your full name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">College Name</label>
            <input type="text" class="form-control" name="CollegeName" id="CollegeName" placeholder="Enter college name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">WhatsApp Number</label>
            <input type="tel" class="form-control" name="WhatsappNumber" id="WhatsappNumber" placeholder="Enter WhatsApp number" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Branch</label>
            <select name="Branch" id="Branch" class="form-control" required>
                <option value="">Select Branch</option>
                <option>BCS</option>
                <option>BCom</option>
                <option>MA</option>
                <option>BE</option>
                <option>Diploma</option>
                <option>Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Year</label>
            <select name="Year" id="Year" class="form-control" required>
                <option value="">Select Year</option>
                <option>First Year</option>
                <option>Second Year</option>
                <option>Third Year</option>
                <option>Last Year</option>
            </select>
        </div>
		<div  style="width:30%;text-align:center">
        <button type="submit" class="btn btn-primary form-control" >Submit  </button>
		</div>
	</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>