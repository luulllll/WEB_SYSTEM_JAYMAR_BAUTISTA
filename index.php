<?php
// JAYMAR PERSONAL INFO
$name = "Jaymar Bautista";
$title = "Web Developer";
$phone = "09064790211";
$email = "jaymarbautista623@email.com";
$linkedin = "https://www.linkedin.com/in/jaymar-bautista-859574381/";
$gitlab = "N/A";
$address = "Alipangpang, Pozorrubio, Pangasinan";
$dob = "30 September 2004";
$gender = "Male";
$nationality = "Filipino";

// MY HIGHSCHOOL
$edu1_years = "2017–2022";
$edu1_degree = "High School Diploma";
$edu1_institution = "Benigno V. Aldana National High School";
$edu1_score = "CBSE: 88%";
$edu1_activity1 = "N/A";
$edu1_activity2 = "N/A";

// COLLEGE LIFE
$edu2_years = "2023–2026";
$edu2_degree = "Bachelor of Information Technology";
$edu2_institution = "San Vicente , Urdaneta, Philippines";
$edu2_score = "CGPA: N/A";
$edu2_specialization = "Web & Mobile Application Development";

// EXPERIENCE
$exp_date = "Present";
$exp_info = "N/A";


// MY SKILLS
$skill1 = "HTML, CSS, PHP";
$skill2 = "C#, Javascript ";
$skill3 = "Java";
$skill4 = "MySQL";
?>

<!DOCTYPE html>
<html>
<head>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #fff;
        }
        .header {
            background: #0c4c8a;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
        }
        .header img {
            height: 150px;
            border-radius: 1px;
            margin-right: 20px;
        }
        .info {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
            font-size: 14px;
        }
        .info div {
            width: 50%;
            margin-top: 5px;
        }
        .section {
            padding: 20px 30px;
        }
        .section h2 {
            color: #0c4c8a;
            border-bottom: 2px solid #0c4c8a;
            padding-bottom: 5px;
            margin-top: 30px;
        }
        .education, .experience, .skills {
            margin-top: 15px;
        }
        .edu-entry, .exp-entry {
            margin-bottom: 20px;
        }
        .edu-entry p, .exp-entry p, ul {
            margin: 5px 0;
        }
        ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>

<div class="header">
    <img src="jaymarbautista.jpg" alt="Profile Picture">
    <div>
        <h1><?php echo $name; ?></h1>
        <h3><?php echo $title; ?></h3>
        <div class="info">
            <div><strong>Phone:</strong> <?php echo $phone; ?></div>
            <div><strong>Address:</strong> <?php echo $address; ?></div>
            <div><strong>Email:</strong> <?php echo $email; ?></div>
            <div><strong>Date of birth:</strong> <?php echo $dob; ?></div>
            <div><strong>LinkedIn:</strong> <?php echo $linkedin; ?></div>
            <div><strong>Gender:</strong> <?php echo $gender; ?></div>
            <div><strong>GitLab:</strong> <?php echo $gitlab; ?></div>
            <div><strong>Nationality:</strong> <?php echo $nationality; ?></div>
        </div>
    </div>
</div>

<div class="section">
    <p>Aspiring Web & Mobile Developer and highly motivated IT student with a solid academic foundation in Web Development. Eager to apply problem-solving skills and a passion for technology to contribute to innovative projects and gain practical experience in a dynamic professional environment.</p>
</div>

<div class="section">
    <h2>Education</h2>
    <div class="education">
        <div class="edu-entry">
            <strong><?php echo $edu1_years; ?></strong><br>
            <em><?php echo $edu1_degree; ?></em><br>
            <?php echo $edu1_institution; ?><br>
         
            Activities:
            <ul>
                <li><?php echo $edu1_activity1; ?></li>
                <li><?php echo $edu1_activity2; ?></li>
            </ul>
        </div>

        <div class="edu-entry">
            <strong><?php echo $edu2_years; ?></strong><br>
            <em><?php echo $edu2_degree; ?></em><br>
            <?php echo $edu2_institution; ?><br>
            Specialization:
            <ul>
                <li><?php echo $edu2_specialization; ?></li>
            </ul>
        </div>
    </div>
</div>

<div class="section">
    <h2>Experience</h2>
    <div class="experience">
        <div class="exp-entry">
            <strong><?php echo $exp_date; ?></strong><br>
            <?php echo $exp_info; ?><br>
            </ul>
        </div>
    </div>
</div>

<div class="section">
    <h2>Skills</h2>
    <ul class="skills">
        <li><?php echo $skill1; ?></li>
        <li><?php echo $skill2; ?></li>
        <li><?php echo $skill3; ?></li>
        <li><?php echo $skill4; ?></li>
    </ul>
</div>

</body>
</html>
