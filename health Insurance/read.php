<?php
require 'config.php';
session_start();

if (isset($_POST["login"])) {
    if (isset($_POST["email"]) && isset($_POST["password"])) { 
        $email = mysqli_real_escape_string($dat, $_POST['email']); 
        $password = mysqli_real_escape_string($dat, $_POST['password']); 

        if (empty($email) || empty($password)) { 
            header("Location: login.php?error=Please fill in all fields");
            exit();
        } else {
            $sql = "SELECT * FROM register WHERE email = '$email' AND Password ='$password'";
            $result = $dat->query($sql);

            if ($result->num_rows > 0) {

                $row = $result->fetch_assoc();
                $_SESSION['Email'] = $row['Email']; 
                $_SESSION['password'] = $row['Password'];
                
                header("Location: userhome.php"); 
                exit();
            } else {
                
                header("Location: login.php?error=Invalid email or password"); 
                exit();
            }
        }
    }
}
?>
