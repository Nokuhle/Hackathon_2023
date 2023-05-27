<?php
require("Database.php");

// SignUp Page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $StudentNumber = $_POST['student_no'];
    $Email = $_POST['email'];
    $password = $_POST['password'];
    $conpassword = $_POST['confirmpassword'];

    if ($password === $conpassword) {
        $query = "INSERT INTO `userdetails`(`studentNumber`, `email`, `password`) VALUES ('$StudentNumber','$Email','$password')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "Error: " . mysqli_error($conn);
        } else {
            echo "Data submitted successfully.";
        }
    } else {
        echo "Verify you have the same passwords";
    }
} else {
    echo "Hello";
}



?>