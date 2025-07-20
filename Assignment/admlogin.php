<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="admlogin.css">
</head>
<body>
    <form action="adlogin.php" method="post">
        <h2> ADMIN LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Email</label> 
        <input type="text" name="email" placeholder="Email"><br> 

        <label>Password</label> 
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit" name="login">Login</button> 
    </form>
</body>
</html>
