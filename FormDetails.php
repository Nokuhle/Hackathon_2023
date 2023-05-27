<?php
require("Database.php");

$tableName = "Biographical";  
$sql = "CREATE TABLE $tableName (
    UserID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(30) NOT NULL,
    Initials VARCHAR(30) NOT NULL,
    First_Name VARCHAR(30) NOT NULL,
    Citizenship VARCHAR(30) NOT NULL,
    ID_Type VARCHAR(30) NOT NULL,
    ID/Passport_Number INTEGER(30) NOT NULL,
    Citizenship VARCHAR(30) NOT NULL,
    ORCID_ID_Number INTEGER(30) NOT NULL,
    Race VARCHAR(30) NOT NULL,
    Gender VARCHAR(30) NOT NULL,
    Ref_No INTEGER(30) NOT NULL,
    DOB VARCHAR(30) NOT NULL,
    Phd_Date DATE(30) NOT NULL,
    Phd_Institution VARCHAR(30) NOT NULL,
    Home_Language VARCHAR(30) NOT NULL,
    NextOfKin_Name VARCHAR(30) NOT NULL,
    NextOfKin_contact INTEGER(30) NOT NULL,
    Disability VARCHAR(30) NOT NULL,
    Disability_Description VARCHAR(50) NOT NULL,

)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$tableName = "$UserContact";  
$sql = "CREATE TABLE $tableName (
    UserID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    First_Name VARCHAR(30) NOT NULL,
    Initials VARCHAR(30) NOT NULL,
    Postodctoral_Fellow VARCHAR(30) NOT NULL,
    Department VARCHAR(30) NOT NULL,
    Faculty VARCHAR(30) NOT NULL,
    Physical_Address VARCHAR(30) NOT NULL,
    City VARCHAR(30) NOT NULL,
    Primary_Tel_Num VARCHAR(30) NOT NULL,
    Fax_Num VARCHAR(30) NOT NULL,
    Mobile_Number INTEGER(30) NOT NULL,
    Primary_Email VARCHAR(30) NOT NULL,
    Alt_Primary_Email VARCHAR(30) NOT NULL,
    Web_Address VARCHAR(30) NOT NULL,
    Country VARCHAR(30) NOT NULL,
    Province VARCHAR(30) NOT NULL,
    Date_Signed DATE(30) NOT NULL,

)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


?>