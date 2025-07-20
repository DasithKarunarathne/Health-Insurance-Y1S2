<?php
require 'config.php';
session_start(); 

if(isset($_SESSION['email'])) {
    $user_id = $_SESSION['email'];

    $sqli="DELETE FROM admin WHERE Email ='$user_id'";

    if($dat->query($sqli))
    {
        header("Location: admregister.php");
    }
    else
    {
        echo "not succes";
    }


}
?>