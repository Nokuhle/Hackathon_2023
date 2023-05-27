<?php
$servername = "localhost";  
$username = "root";  
$password = "";  

$connection = new mysqli($servername, $username, $password);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$databaseName = "my_database"; 
$sql = "CREATE DATABASE STARTRACK";
if ($connection->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $connection->error;
}

$connection->select_db($databaseName);

$tableName = "my_table"; 



$sql = "CREATE TABLE UserDetails (
    UserID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    StudentNumber VARCHAR(30) NOT NULL,
    EmailAddress VARCHAR(30) NOT NULL,
    Password VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($connection->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $connection->error;
}



$sql = "CREATE TABLE VisaApplicants (
    UserID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Full_Name VARCHAR(30) NOT NULL,
    VisaType VARCHAR(30) NOT NULL,
    Passport_Number VARCHAR(30) NOT NULL,
    Appt_Date DATE(30) NOT NULL,
    Appt_Time TIME(30) NOT NULL,
    Visa_Fee VARCHAR(30) NOT NULL,
    Payment_Method VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($connection->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $connection->error;
}



$sql = "CREATE TABLE Postdoctoral_Research_Fellowship_Application (
    UserID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(30) NOT NULL,
    Surname VARCHAR(30) NOT NULL,
    Initials VARCHAR(30) NOT NULL,
    First_Name VARCHAR(30) NOT NULL,
    Citizenship VARCHAR(30) NOT NULL,
    ID_type VARCHAR(30) NOT NULL,
    ID_Passport_Number INTEGER(30) NOT NULL,
    ORCID_ID_Number INTEGER(30) NOT NULL,
    Race VARCHAR(30) NOT NULL,
    Ref_no INTEGER(30) NOT NULL,
    DOB VARCHAR(30) NOT NULL,
    PHD_Date VARCHAR(30) NOT NULL,
    PHD_Institute VARCHAR(30) NOT NULL,
    Home_Language VARCHAR(30) NOT NULL,
    Next_Of_Kin_Name VARCHAR(30) NOT NULL,
    Next_Of_Kin_Contact INTEGER(30) NOT NULL,
    DAY_SIGNED DATE(30)NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($connection->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $connection->error;
}


?>