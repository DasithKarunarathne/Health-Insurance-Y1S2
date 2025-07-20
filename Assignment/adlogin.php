<?php
require 'config.php';

if (isset($_POST["login"])) {
    if (isset($_POST["email"]) && isset($_POST["password"])) { 
        $email = mysqli_real_escape_string($dat, $_POST['email']); 
        $password = mysqli_real_escape_string($dat, $_POST['password']); 

        if (empty($email) || empty($password)) {
            header("Location: admlogin.php?error=Please fill in all fields");
            exit();
        } else {
            $sql = "SELECT * FROM admin WHERE email = '$email' AND Password ='$password'";
            $result = $dat->query($sql);

            if ($result->num_rows > 0) {
                
                header("Location: ");
                exit();
            } else {
                
                header("Location: admlogin.php?error=Invalid email or password");
                exit();
            }
        }
    }
}
?>