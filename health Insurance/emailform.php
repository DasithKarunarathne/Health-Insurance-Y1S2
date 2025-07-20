<?php

require 'config.php';



if(isset($_POST['submit'])){
    
    $email=$_POST['email'];
    $sql="select * from register
    where Email='$email'";
    $result=mysqli_query($dat,$sql);
    if($result){
        if($result->num_rows==1){
        header('location:forgotpasswordform.php');
        }else{
            echo"not found";   
         }
    }
    else{
        echo"email wrong";
        mysqli_error($dat);
    }
    }

?>

<html>
    <head>
        <link rel="stylesheet" href="emailform.css">
        
</head>
<body>
    <div class="email">
        <feildset>
    <form class="form" method="POST">
        <label class="la" id="email-label"> Email</label>
   <input type="email" name="email" placeholder="email" class="ka" id="ka" onkeyup="validateEmail()">
   <br>
   <span id="email-error" style="font-size:10px;color:red;">invaild email</span>
   <br>
   <br>
    <button type="submit" name="submit" class="up">submit</button>

       </form>
     </feildset>
    </div>
    <script>
        var emailField=document.getElementById('ka');
        var emailLabel=document.getElementById('email-label');
        var emailError=document.getElementById('email-error');
        
        function validateEmail(){
            emailLabel.style.bottom="45px";
            if(!emailField.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
                emailError.innerHTML="please enter a valid email";
                emailField.style.borderBottomcolor="red";
                emailError.style.top="120%";
                return flase;

            }
            emailError.innerHTML="";
            emailField.style.borderBottomcolor="green";
            emailError.style.top="100%";
            return true;
        }

    </script>
</body>
</html>