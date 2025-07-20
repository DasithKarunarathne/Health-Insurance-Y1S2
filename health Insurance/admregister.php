<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="admregister.css">
</head>
<body>
    <div class="lok">
        <div class="regis">
            <h1>Admin Sign up</h1>
            <form class="from" method="post" action="adregister.php">
                <div class="setall">
                    <div class="name">
                        <div class="frist">
                            <label for="frist-name">Frist Name</label><br>
                            <input type="text" id="frist-name" name="frist_name" placeholder="Enteryour frist name" required>
                        </div>
                        <div class="last">
                            <label for="last-name">Last Name</label><br>
                            <input type="text" id="last-name" name="last_name" placeholder="Enter your last name" required>
                        </div>
                    </div>
                    <div class="phone">
                        <label for="phone-number">Phone Number</label><br>
                        <input type="number" id="phone-number" name="phone_number" placeholder="Enter your phone number" required>
                    </div>
                    <div class="gender">
                        <label for="gender">Gender</label><br>
                        <select name="gender" id="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option></select>
                    </div>
                    <div class="date">
                        <label for="dob">Date of Birth</label><br>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                    <div class="address">
                        <label for="address">Address</label><br>
                        <textarea id="address" name="address" placeholder="Enter your Address " required></textarea>
                    </div>
                    <div class="email">
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="user">
                        <label for="user-name">User Name</label><br>
                        <input type="text" id="user-name" name="user_name" placeholder="Enter your user name" required>
                    </div>
                    <div class="pass">
                        <label for="passw">Password</label><br>
                        <input type="password" id="passw" name="passw" placeholder="Enter your password" required>
                    </div>
                    <div class="repass">
                        <label for="re-passw">Re-enter Password</label><br>
                        <input type="password" id="re-passw" name="re_passw" placeholder="Re-enter your password" required>
                    </div>
                    
                    <div class="button">
                        <button type="submit" id="submit">Register</button><br>
                    </div>
                    <div class="link">
                        <label for="acoount">Already have an acoount</label>
                        <a href="admlogin.php">Login agin</a>
                        
                    </div>
                    <div class="pnp">
                        <label>I am user<label>
                        <a href="register.php">User register<a><div>
                </div>
                 n
                    
            </form>
        </div>
    </div>
    
</body>
</html>