<!DOCTYPE html>
<html>
<head>
    <title>Bio-Data Form</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 700px; margin: auto; border: 1px solid black; padding: 20px; }
        .header { text-align: center; font-size: 22px; font-weight: bold; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 5px; vertical-align: top; }
        .section-title { background: black; color: white; padding: 5px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">BIO-DATA</div>

        <form action="direct.php" method="POST" enctype="multipart/form-data">
            <label>Upload Image:</label><br>
            <input type="file" name="photo" required><br><br>

            
            <div class="section-title">PERSONAL DATA</div>
            Position Desired: <input type="text" name="position"><br>
            Name: <input type="text" name="name"><br>
            Gender: <input type="text" name="gender"><br>
            City Address: <input type="text" name="city"><br>
            Provincial Address: <input type="text" name="provincial"><br>
            Telephone: <input type="text" name="telephone"><br>
            Cellphone: <input type="text" name="cellphone"><br>
            Email: <input type="email" name="email"><br>
            Date of Birth: <input type="date" name="dob"><br>
            Birth Place: <input type="text" name="birthplace"><br>
            Citizenship: <input type="text" name="citizenship"><br>
            Height: <input type="text" name="height"><br>
            Weight: <input type="text" name="weight"><br>
            Religion: <input type="text" name="religion"><br>
            Civil Status: <input type="text" name="civil"><br>
            Spouse: <input type="text" name="spouse"><br>
            Name of Children: <input type="text" name="children"><br>
            Father’s Name: <input type="text" name="father"><br>
            Mother’s Name: <input type="text" name="mother"><br>
            Language: <input type="text" name="language"><br>
            Person to contact in emergency: <input type="text" name="emergency"><br><br>

           
            <div class="section-title">EDUCATIONAL BACKGROUND</div>
            Elementary: <input type="text" name="elementary"> Year Graduated: <input type="text" name="elem_year"><br>
            High School: <input type="text" name="highschool"> Year Graduated: <input type="text" name="hs_year"><br>
            College: <input type="text" name="college"> Year Graduated: <input type="text" name="college_year"><br>
            Degree: <input type="text" name="degree"><br>
            Special Skills: <input type="text" name="skills"><br><br>

        
            <div class="section-title">EMPLOYMENT RECORD</div>
            Company Name: <input type="text" name="company1"> Position: <input type="text" name="position1"> From: <input type="text" name="from1"> To: <input type="text" name="to1"><br>
            Company Name: <input type="text" name="company2"> Position: <input type="text" name="position2"> From: <input type="text" name="from2"> To: <input type="text" name="to2"><br><br>

         
            <div class="section-title">CHARACTER REFERENCE</div>
            Name: <input type="text" name="ref1"> Position: <input type="text" name="refpos1"> Company: <input type="text" name="refcomp1"> Contact: <input type="text" name="refcon1"><br>
            Name: <input type="text" name="ref2"> Position: <input type="text" name="refpos2"> Company: <input type="text" name="refcomp2"> Contact: <input type="text" name="refcon2"><br><br>

            <input type="submit" value="Generate Bio-Data">
        </form>
    </div>
</body>
</html>
