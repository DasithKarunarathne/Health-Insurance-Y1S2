<?php
require 'config.php';

$fnam = $_POST["frist_name"];
$lname = $_POST["last_name"];
$Pnmber = $_POST["phone_number"];
$gender = $_POST["gender"];
$brithd = $_POST["dob"];
$address = $_POST["address"];
$emil = $_POST["email"];
$uname = $_POST["user_name"];
$pw = $_POST["passw"];
$repw = $_POST["re_passw"];

$sql = "INSERT INTO admin (FristName, LastName, PhoneNumber, Gender, DateofBirth, Address, Email, UserName, Password) 
        VALUES ('$fnam', '$lname', '$Pnmber', '$gender', '$brithd', '$address', '$emil', '$uname', '$pw')";

if ($dat->query($sql)) {
    header("Location:home.php"); 
} else {
    echo "Error: " . $dat->error;
}

$dat->close();
?>
