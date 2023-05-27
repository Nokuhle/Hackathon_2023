<?php

require("SignupDetails.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page1.css">
    <title>Sign Up Page</title>
</head>
<body>
    <form action="SignupDetails.php" method="POST">
        <img src=" ">
        <span>
        <h2>Sign Up</h2>
        <br>
        <label for="studentnumber">Student Number</label>
        <br>
        <input id="number" type="text" name="studentnumber" title="Please enter your student number" required maxlength="9">
        <br>
        <label for="email">Email</label>
        <br>
        <input id="email" type="email" name="email">
        <br>
        <label for="password">Password</label>
        <br>
        <input id="password" type="password" name="password">
        <br>
        <label for="conpassword">Confirm Password</label>
        <br>
        <input id="confirmpassword" type="password" name="confirmpassword">
        <br>
        <input id="button" type="submit" value="Submit">
        <br>
        
        <a href="Login.html">LOG IN</a>
      </form>


      
</body>
</html>