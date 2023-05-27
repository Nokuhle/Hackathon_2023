<?php
require("Database.php");

//SignUp Page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $StudentNumber = $_POST['studentnumber'];
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

//Login Page
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