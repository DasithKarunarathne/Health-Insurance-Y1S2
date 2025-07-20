<?php
require 'config.php';
session_start(); 

if(isset($_SESSION['Email'])) {
    $user_id = $_SESSION['Email'];

    $sqli="DELETE FROM register WHERE Email ='$user_id'";

    if($dat->query($sqli))
    {
        header("Location: register.php");
    }
    else
    {
        echo "not succes";
    }


}
?>