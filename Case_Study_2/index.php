<?php
$student_name = isset($_GET['name']) ? $_GET['name'] : '';
$student_score = isset($_GET['score']) ? $_GET['score'] : '';


$student_grade = "";
$grade_remark = "";


if ($student_name !== '' && $student_score !== '') {
   
    if (is_numeric($student_score) && $student_score >= 0 && $student_score <= 100) {

       
        if ($student_score >= 95) {
            $student_grade = "A (Excellent)";
            $grade_remark = "Outstanding Performance!";
        } elseif ($student_score >= 90) {
            $student_grade = "B (Very Good)";
            $grade_remark = "Great Job!";
        } elseif ($student_score >= 85) {
            $student_grade = "C (Good)";
            $grade_remark = "Good effort, keep it up!";
        } elseif ($student_score >= 75) {
            $student_grade = "D (Needs Improvement)";
            $grade_remark = "Work harder next time.";
        } else {
            $student_grade = "F (Failed)";
            $grade_remark = "You need to improve.";
        }

    } else {
        $student_grade = "Invalid Score";
        $grade_remark = "Please enter a number between 0 and 100.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f5;
            margin: 0;
            padding: 0;
        }

        .box {
            background-color: white;
            width: 500px;
            margin: 80px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        h2 {
            color: #1a73e8;
            text-align: center;
        }

        p {
            font-size: 16px;
            margin: 12px 0;
        }

        .label {
            font-weight: bold;
            color: #333;
        }

        .message {
            margin-top: 25px;
            background-color: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #1a73e8;
            border-radius: 5px;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }

        code {
            background: #f2f2f2;
            padding: 2px 4px;
            border-radius: 4px;
            font-family: monospace;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Student Grade Checker</h2>

    <?php if ($student_name === '' || $student_score === ''): ?>
        <div class="error">
            Please provide both <code>name</code> and <code>score</code> in the URL.<br><br>
            Example: <code>?name=Maria%20Santos&score=85</code>
        </div>
    <?php else: ?>
        <div class="message">
            <p><span class="label">Name:</span> <?php echo htmlspecialchars($student_name); ?></p>
            <p><span class="label">Score:</span> <?php echo htmlspecialchars($student_score); ?></p>
            <p><span class="label">Grade:</span> <?php echo $student_grade; ?></p>
            <p><span class="label">Remark:</span> <?php echo $grade_remark; ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
