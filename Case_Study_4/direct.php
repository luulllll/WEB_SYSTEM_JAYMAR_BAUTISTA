<!DOCTYPE html>
<html>
<head>
    <title>Bio-Data Output</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 700px; margin: auto; border: 1px solid black; padding: 20px; }
        .header { text-align: center; font-size: 22px; font-weight: bold; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 5px; vertical-align: top; }
        .section-title { background: black; color: white; padding: 5px; font-weight: bold; }
        .photo { float: right; width: 120px; height: 120px; border: 1px solid black; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">BIO-DATA</div>

       
        <?php
        if(isset($_FILES['photo'])){
            $photo = "uploads/" . basename($_FILES["photo"]["name"]);
            move_uploaded_file($_FILES["photo"]["tmp_name"], $photo);
            echo "<img src='$photo' class='photo'>";
        }
        ?>

       
        <div class="section-title">PERSONAL DATA</div>
        <p><b>Position Desired:</b> <?= $_POST['position'] ?></p>
        <p><b>Name:</b> <?= $_POST['name'] ?> &nbsp;&nbsp; <b>Gender:</b> <?= $_POST['gender'] ?></p>
        <p><b>City Address:</b> <?= $_POST['city'] ?></p>
        <p><b>Provincial Address:</b> <?= $_POST['provincial'] ?></p>
        <p><b>Telephone:</b> <?= $_POST['telephone'] ?> &nbsp;&nbsp; <b>Cellphone:</b> <?= $_POST['cellphone'] ?></p>
        <p><b>Email:</b> <?= $_POST['email'] ?></p>
        <p><b>Date of Birth:</b> <?= $_POST['dob'] ?> &nbsp;&nbsp; <b>Birth Place:</b> <?= $_POST['birthplace'] ?></p>
        <p><b>Citizenship:</b> <?= $_POST['citizenship'] ?> &nbsp;&nbsp; <b>Civil Status:</b> <?= $_POST['civil'] ?></p>
        <p><b>Height:</b> <?= $_POST['height'] ?> &nbsp;&nbsp; <b>Weight:</b> <?= $_POST['weight'] ?></p>
        <p><b>Religion:</b> <?= $_POST['religion'] ?></p>
        <p><b>Spouse:</b> <?= $_POST['spouse'] ?> &nbsp;&nbsp; <b>Children:</b> <?= $_POST['children'] ?></p>
        <p><b>Father’s Name:</b> <?= $_POST['father'] ?> &nbsp;&nbsp; <b>Mother’s Name:</b> <?= $_POST['mother'] ?></p>
        <p><b>Language:</b> <?= $_POST['language'] ?></p>
        <p><b>Emergency Contact:</b> <?= $_POST['emergency'] ?></p>

       
        <div class="section-title">EDUCATIONAL BACKGROUND</div>
        <p><b>Elementary:</b> <?= $_POST['elementary'] ?> (<?= $_POST['elem_year'] ?>)</p>
        <p><b>High School:</b> <?= $_POST['highschool'] ?> (<?= $_POST['hs_year'] ?>)</p>
        <p><b>College:</b> <?= $_POST['college'] ?> (<?= $_POST['college_year'] ?>)</p>
        <p><b>Degree:</b> <?= $_POST['degree'] ?></p>
        <p><b>Special Skills:</b> <?= $_POST['skills'] ?></p>

       
        <div class="section-title">EMPLOYMENT RECORD</div>
        <p><b>Company 1:</b> <?= $_POST['company1'] ?> | Position: <?= $_POST['position1'] ?> (<?= $_POST['from1'] ?> - <?= $_POST['to1'] ?>)</p>
        <p><b>Company 2:</b> <?= $_POST['company2'] ?> | Position: <?= $_POST['position2'] ?> (<?= $_POST['from2'] ?> - <?= $_POST['to2'] ?>)</p>

        
        <div class="section-title">CHARACTER REFERENCE</div>
        <p><b><?= $_POST['ref1'] ?></b> | <?= $_POST['refpos1'] ?> | <?= $_POST['refcomp1'] ?> | <?= $_POST['refcon1'] ?></p>
        <p><b><?= $_POST['ref2'] ?></b> | <?= $_POST['refpos2'] ?> | <?= $_POST['refcomp2'] ?> | <?= $_POST['refcon2'] ?></p>

     
    </div>
</body>
</html>
