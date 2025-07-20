<?php
require 'config.php';
session_start(); 

if(isset($_SESSION['email'])) {
    $user_email = $_SESSION['email'];
   
    $sqlq = "SELECT UserName, Email, Address FROM admin WHERE Email = '$user_email'";
    $result = $dat->query($sqlq);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>User Information Form</title>
<link rel="stylesheet" href="user.css">
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
                <li><a href="">Contact Us</a></li>
                <a href=""><img class="search-icon" src="./img/pngegg.png" title="User profile"></a>
            </ul>
        </nav>
    </div>
    <div class="maindiv"> 
        <div class="container">
            <h2>User Information </h2>
            <form method="post">
                <div class="form-group">
                    <label for="username">User Name:</label>
                    <input type="text" id="username" name="username" value="<?php echo $row['UserName']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['Email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address" required><?php echo $row['Address']; ?></textarea>
                </div>
                <div class="link">
                    <a href="admZdelet.php" target="_blank" class="B1" onclick="return confirm('Are you sure you want to delete your account')">Delete</a>
                    <a href="update1hariadm.php" target="_blank" class="B1">Update</a>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="logo1">
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
                <a href="userhome.php"><img class="ing" src="./kisspng-health-care-public-health-medicine-hospital-cupped-hands-5b5bed5c876c37.1058234415327511965547.png"></a>
                <p style="margin-left: 45%; color: rgb(0, 0, 0);">©2024 WeInsurence . All Rights Reserved</p>
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

<?php
        }
    } else {
        echo "No user details found.";
    }
} else {
    header("Location: login.php");
    exit();
}

$dat->close();
?>
