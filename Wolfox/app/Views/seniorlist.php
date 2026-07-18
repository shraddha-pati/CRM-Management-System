<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f6f9;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }

        .text-heading {
            color: #0d47a1;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 24px;
            animation: fadeIn 1s ease-in-out;
        }

        .student-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            width: 220px;
            height: 300px;
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-in-out forwards;
        }

        .student-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.25);
        }

        .student-card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            border: 3px solid #0d47a1;
            margin-bottom: 10px;
            animation: bounceIn 0.6s ease-in-out;
        }

        .student-info strong {
            font-size: 18px;
            color: #0d47a1;
            margin-bottom: 5px;
            display: block;
            animation: fadeIn 1s ease-in-out;
        }

        .student-info span {
            color: #555;
            font-size: 14px;
            display: block;
            animation: fadeIn 1.2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            60% {
                opacity: 1;
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
   
<div class="container">
    <h2 class="text-heading">Senior Students from <?= esc($collegeName) ?></h2>

    <div class="d-flex flex-wrap gap-3 justify-content-center">
    <?php if (!empty($students)): ?>
        <?php foreach ($students as $student): ?>
            <div class="student-card">
                <img src="<?= base_url('uploads/studentdocument/' . $student['id']. '/' . $student['profile']) ?>" alt="Profile">
                <div class="student-info">
                    <strong><?= esc($student['firstname'] . ' ' . $student['middlename'] . ' ' . $student['lastname']) ?></strong>
                    <span><?= esc($student['collegename']) ?></span>
                    <span>Year of Admission: <?= esc($student['admission_year']) ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-center text-danger"><?= esc($message) ?></p>
    <?php endif; ?>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
