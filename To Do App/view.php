<?php
$conn = mysqli_connect("localhost", "root","","Post_Method");

if ($conn->connect_error) {
    die  ("connection failed" . $conn->connect_error);
}

$sql = "SELECT * FROM info";

$res = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{
        background: linear-gradient(125deg, #ff2a0e 0%, #fecfef 90%);
        background-repeat: no-repeat;
        background-size: cover;
    }
    h1{
        display: flex;
        justify-content: center;
        color: purple;
        font-family: sans-serif;
    }
    table{
        margin-left: 15%;
        width: 70%;
        height: 200px;
        background-color: #121212; color: #F5F5F5;
    }
    thead{
        height: 40px;
        width: 50%;
        text-align: center;
    }
    .head{
        font-size: 20px;
        font-family: sans-serif;
        background-color: purple;
        color: white;
        font-weight: bold;
    }
    tbody,tr td{
        text-align: center;
        font-family: sans-serif;
    }
    a{
        margin-left: 76%;
        font-family: sans-serif;
        color: blue;
        font-weight: bold;
    }
    a:hover{
        color: orangered;
    }
</style>
</head>
<body>
    <h1>USER RECORD</h1>
    <table border="1">
        <thead>
            <tr class="head">
                <td>ID</td>
                <td>Title</td>
                <td>Email</td>
                <td>Start-Date</td>
                <td>End-Date</td>
                <td>Description</td> 
            </tr>
            <tbody>
                <?php
                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_assoc()) {
                        echo   "<tr>
                               <td>{$row['ID']}</td>
                               <td>{$row['Title']}</td>
                               <td>{$row['Email']}</td>
                               <td>{$row['Start_Date']}</td>
                               <td>{$row['End_Date']}</td>
                               <td>{$row['Description']}</td>
                              </tr>";
                    } 
                    } else{
                        echo "<tr><td colspan ='3'>NO Record Founds!</td></tr>";
                    }
                
                ?>
            </tbody>
        </thead>
    </table>
    <a href="form.php">ADD TO LIST</a>
</body>
</html>



