<?php

require 'config.php';
$claim_no=$_GET['updateclaim_no'];
if(isset($_POST['upload'])){
    $Name=$_POST['name'];
    $EmailAddress=$_POST['Email'];
    $phonenumber=$_POST['PN'];
    $Address=$_POST['address'];
    $date=$_POST['date'];
    $subject=$_POST['subject'];
    $description=$_POST['description'];

    $sql="UPDATE claim set claim_no=$claim_no,Name='$Name',Date='$date',subject='$subject',phonenumber='$phonenumber',Email='$EmailAddress',description='$description',Address='$Address'
          WHERE claim_no=$claim_no";

     $result=mysqli_query($dat,$sql);
        if($result){
            
            
           header('location:userclaimpag.php');



        }
        else{
            die(mysqli_error($dat));
        }
     
  }
?>











<html>
    <head>
        <title>claim a form</title>
     <link rel="stylesheet" href="claimform.css">
     <script>

        </script>
    </head>
    <body>
        
        <h1>update claim form </h1>
            <fieldset class="ka">
               
                <div class="ja">
                <form class="form" method="POST" action="">
               Name: <input type="text" name="name" placeholder="Name" class="fn" required> 
               <br>
               <br>
               EmailAddress:<input type="email" name="Email" placeholder="SPants@gmail.com" required>
               <br>
               <br>
               phone number:<input type="phone number" name="PN" placehoder="phone number"required>
               <br>
               <br>
               Address<input type="address" class="Address" name="address"required>
               <br>
               <br>
               date<input type="date" name="date"required>
               <br>
               <br>
             <textarea rows="1" cols="80" placeholder="subject" name="subject" required></textarea>
               <br>
               <br>
               <textarea  name="description" rows="4" cols="100" placeholder="Breif description about your claim" required></textarea>

               <div class="upload">
               <button type="upload" name="upload" class="up">upload</button>
                </div>

                </form>
                </fieldset>

            
           
       
    </body>
</html>






?>