<?php

require("Database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $StudentNumber = $_POST['studentnumber'];
         $password = $_POST['password'];
    $sql = "SELECT * FROM userdetails WHERE studentNumber = '$StudentNumber'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if ($password === $row['password']) {
            echo "Login successful!";
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "Invalid username!";
    }
}
?>