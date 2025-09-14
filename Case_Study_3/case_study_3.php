<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multiplication Table</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f7fa;
      margin: 0;
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      margin-bottom: 20px;
      color: #333;
    }

    form {
      background: #fff;
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
      margin-bottom: 30px;
    }

    form input[type="text"] {
      padding: 8px;
      margin: 5px 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      width: 80px;
      font-size: 14px;
    }

    form input[type="submit"] {
      padding: 10px 20px;
      background: #4CAF50;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
    }

    form input[type="submit"]:hover {
      background: #45a049;
    }

    table {
      border-collapse: collapse;
      margin-top: 20px;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
    }

    td, th {
      border: 1px solid #ddd;
      padding: 15px 20px;
      text-align: center;
      font-size: 14px;
    }

    th {
      background: #f0f0f0;
    }

    tr:nth-child(even) td {
      background: #fafafa;
    }

    td:hover {
      background: #f9f9d1;
    }
  </style>
</head>
<body>


  <form method="post">
    Enter row: <input type="text" id="row" name="row">
    Enter column: <input type="text" id="col" name="col">
    <input type="submit" name="submit" value="Create Table">
  </form>

  
    <?php



     $row = "";
     $col = "";

     if(isset($_POST['submit'])){
        
            $row = $_POST['row'];
            $col = $_POST['col'];
        
        if($row == ''){
            echo 'Enter row number!';
        }
        if($col == ''){
            echo 'Enter column number!';
        } 
        else {
           
            echo "<table>";
            echo "<tr><th>X</th>";

            for ($c = 1 ; $c <= $col ; $c++){
                if($c % 2 !== 0){
                    echo "<th style ='background-color: yellow; font-weight: bold;'>" . $c ."</th>";
                } else {
                    echo "<th>". $c ."</th>";
                }
            }
            echo "</tr>";

            for($r = 1 ; $r <= $row ; $r++){
                if ($r % 2 !== 0){
                    echo "<tr><th style='background-color:yellow; font-weight:bold'>". $r ."</th>";
                }else {
                    echo "<tr><th>". $r ."</th>";
                }

             for($c = 1; $c <= $col ; $c++){
                $value = $r * $c;
                if ($value % 2 !== 0){
                    echo"<td style='background-color:yellow; font-weight:bold;'>". $value."</td>";
                } else{
                    echo"<td>". $value."</td>";

                }
            }
            echo "</tr>";
        }
        echo"</table>";
     }
    }
    
    ?>
      