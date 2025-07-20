

<html>
    <head>
     <link rel="stylesheet" href="forgotpassword.css">

    </head>
    <body>
        <fieldset class="border">
        <h1 class="fpS">forgot passsword</h1>
        
        <div class="container">
            
                <form method="POST" action="readjni.php">
                  <div class="user-details">
                    <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="SPants@gamil.com" >
                    <?php 
                     if(isset($_GET['errorEmail'])){
                        ?>
                            <h5 style="background-color:#F2DEDE;color:red;">

                            <?php
                            echo $_GET['errorEmail'];
                            ?>
                            </h5>

                       <?php 
                     }
                    ?>
                </div>
                <br>

                <div class="input-box">
                    <span class="details"> New password </span>
                    <input type="password" name="Npwd" placeholder="Enter new password" >
                    <?php 
                     if(isset($_GET['errorNPwd'])){
                        ?>
                            <h5 style="background-color:#F2DEDE;color:red;">

                            <?php
                            echo $_GET['errorNPwd'];
                            ?>
                            </h5>

                       <?php 
                     }
                    ?>
                </div>
                <br>

                <div class="input-box">
                    <span class="details">Confirm password</span>
                    <input type="password" name="cPwd" placeholder="confirm password" >
                </div>
                <?php 
                     if(isset($_GET['errorCNP'])){
                        ?>
                            <h5 style="background-color:#F2DEDE;color:red;">

                            <?php
                            echo $_GET['errorCNP'];
                            ?>
                            </h5>

                       <?php 
                     }
                    ?>

                   <?php 
                     if(isset($_GET['errorm'])){
                        ?>
                            <h5 style="background-color:#F2DEDE;color:red;">

                            <?php
                            echo $_GET['errorm'];
                            ?>
                            </h5>

                       <?php 
                     }
                    ?>

                    <?php 
                     if(isset($_GET['errorc'])){
                        ?>
                            <h5 style="background-color:#F2DEDE;color:red;">

                            <?php
                            echo $_GET['errorc'];
                            ?>
                            </h5>

                       <?php 
                     }
                    ?>

                <div>
                    <br>
                    <br>
                    <button type="submit" class="submit">submit</button>
                </div>
            </form>
        </div>
 
                
