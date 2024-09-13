<?php
$host = 'localhost';
$user = 'root';  
$password = '';  
$database = 'Post_Method';  

$conn = mysqli_connect($host, $user, $password, $database); 

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else {
    echo "connection successfully!";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email'])) {
        $title = $_POST["title"];
        $email = $_POST["email"];
        $start = $_POST["start_date"];
        $end = $_POST["end_date"];
        $description = $_POST["description"];

        $sql = "INSERT INTO info(Title, Email, Start_Date, End_Date,Description) Values ('$title', '$email', '$start', '$end', 'descripton')";
        $res = $conn->query($sql);

    }

   

    else {
        echo "something went to wrong";
    }
    header("location:view.php");
}  
?>