<?php
require 'config.php';
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Fn = $_POST["frist_name"];
    $ln = $_POST["last_name"];
    $pn = $_POST["phone_number"];
    $gen = $_POST["gender"];
    $dob = $_POST["dob"];
    $add = $_POST["address"];
    $email = $_POST["email"];
    $us = $_POST["user_name"];

    if (empty($Fn) || empty($ln) || empty($pn) || empty($gen) || empty($dob) || empty($add) || empty($email) || empty($us)) {
        echo "All fields are required.";
    } else {
        if (isset($_SESSION['email'])) {
            $user_email = $_SESSION['email'];

            $sqli = "UPDATE admin SET FristName ='$Fn', LastName='$ln', PhoneNumber='$pn', Gender='$gen', DateOfBirth='$dob', Address='$add', Email='$email', UserName='$us' WHERE Email = '$user_email'";
            
            if ($dat->query($sqli)) {
                header("Location:admlogin.php");
                exit(); 
            } else {
                echo "Error updating profile: " . $dat->error;
            }
        }
    }
    $dat->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Profile Update</title>
<link rel="stylesheet" href="upda.css">
</head>
<body> 
    
    <div class="navdiv">
        <div class="logo"><a href=""><img src="./kisspng-health-care-public-health-medicine-hospital-cupped-hands-5b5bed5c876c37.1058234415327511965547.png"></a></div>
        <nav class="navbar">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Claims</a></li>
                <li><a href="">Pay Online</a></li> 
                <li><a href="">Our Service</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us </a></li>
                
            </ul>
        </nav>
    </div>

    <div class="maindiv">
        <div class="container">    
            <h2>User Profile Update</h2>
            <form method="post">
                <div class="form-group">
                    <div class="form-group">
                        <label for="frist-name">First Name</label><br>
                        <input type="text" id="frist-name" name="frist_name" placeholder="Enter your first name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label><br>
                        <input type="text" id="last-name" name="last_name" placeholder="Enter your last name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone-number">Phone Number</label><br>
                    <input type="number" id="phone-number" name="phone_number" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label><br>
                    <select name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label><br>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label><br>
                    <textarea id="address" name="address" placeholder="Enter your Address " required></textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="user-name">User Name</label><br>
                    <input type="text" id="user-name" name="user_name" placeholder="Enter your user name" required>
                </div>
                <div class="form-group">
                    <button type="submit" id="but" onclick="alert('Profile updated successfully')">Update</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div style="height:250px; width: 360px; float:left;">
                <table class="table">
                    <tr>
                        <td><a href=""><img src="./img/3.png" title="visit our instagram page"></a></td>
                        <td><a href=""><img src="./img/1.png" title="visit our facebook page"></a></td>
                        <td><a href=""><img src="./img/2.png" title="visit our twitter page"></a></td>
                        <td><img src="./img/4.png" title="Contact us through Whatsapp : +94(76) 441 4442"></td>
                    </tr>
                </table>
            </div>
            <div style="height:250px; width: 600px; float:left; align-content: center;">
                <a href="home.html"><img class="ing" src="./kisspng-health-care-public-health-medicine-hospital-cupped-hands-5b5bed5c876c37.1058234415327511965547.png" style="width: 150; height:100px; margin-left: 34%; "></a>
                <p style="margin-left: 19%; color: rgb(0, 0, 0);">©2024 WeInsurence . All Rights Reserved</p>
            </div>
            <div class="fotnumbr">
                <ul type="none">
                    <li>✆ +94(76) 251 2142</li>
                    <li>✆ +94(76) 485 5343</li>
                    <li>☏ +94(11) 258 9638</li>
                    <li>✉ info@WeInsurence.com</li>
                    <li>www.WeInsurence.com</li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
