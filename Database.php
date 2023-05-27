<?php
// Database connection details
$servername = "localhost";    
$username = "root";  
$password = "";  

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Create a new database
$databaseName = "HACK2023";  
// $sql = "CREATE DATABASE $databaseName";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

// Select the database
$conn->select_db($databaseName);

// // Create a new table
// $tableName = "userdetails";  
// $sql = "CREATE TABLE $tableName (
//     UserID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     StudentNumber INTEGER(30) NOT NULL,
//     Email VARCHAR(30) NOT NULL,
//     password VARCHAR(50)
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

?>