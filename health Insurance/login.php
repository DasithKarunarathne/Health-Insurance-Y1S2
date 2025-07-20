<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <style>
    body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
    background: url(./img/loh.jpg);
    background-repeat: no-repeat;
  background-size:100% 100%;
}

* {
    font-family: sans-serif;
    box-sizing: border-box;
}

form {
    width: 500px;
    border: 2px solid #ccc;
    padding: 30px;
    background:transparent;
    border-radius: 15px;
    backdrop-filter: blur(20px);
}

h2 {
    text-align: center;
    margin-bottom: 40px;
}

input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}

label {
    color: #000000;
    font-size: 18px;
    padding: 10px;
}

button {
    float: right;
    background: #2361e6;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}

button:hover {
    opacity: .7;
}

.error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
}

h1 {
    text-align: center;
    color: #fff;
}

.p {
    float: right;
    background: #2594fc;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
    text-decoration: none;
}

p:hover {
    opacity: .9;
}
.login-register{
    font-size: .9em;
    color: #d3d3d3;
    text-align: left;
    font-weight: 500;
    margin: 25px 0 10px;
  }
  .login-register p a {
    color: #ffffff;
    text-decoration: none;
    font-weight: 600;
    
  }
  .login-register p a:hover {
    text-decoration: underline;
  }
  </style>

  
</head>
<body>
    <form action="read.php" method="post" >
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Email</label> 
        <input type="text" name="email" placeholder="Email"><br> 

        <label>Password</label> 
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit" name="login">Login</button> 
        <a href="emailform.php" class="register-link">forget password</a>
        
        
        <div class="login-register">
                <p>Don't have an account?
                    <a href="register.php" class="register-link">Register</a>
                    
                </p>
                <div class="login-register">
                <p>Staff Member
                    <a href="admlogin.php" class="register-link">Login</a>
                    
                </p>
            </div>
            </div>
            

    </form>
    
    
</body>
</html>
