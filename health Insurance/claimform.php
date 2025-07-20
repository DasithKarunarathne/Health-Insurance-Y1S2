<?php
require 'config.php';

if(isset($_POST['submit'])){

    $Name=$_POST['name'];
    $EmailAddress=$_POST['Email'];
    $phonenumber=$_POST['PN'];
    $Address=$_POST['address'];
    $date=$_POST['date'];
    $subject=$_POST['subject'];
    $description=$_POST['description'];
    


    $sql="INSERT INTO claim(Name,Date,subject,phonenumber,Email,description,Address)
          values( '$Name',$date,'$subject','$phonenumber','$EmailAddress','$description','$Address')";

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
    </head>
    <body>
    <?php include 'header.php';  ?>

            <fieldset class="ka">
            <h1 class="ch">claim form </h1>
                <div class="ja">
                <form class="form" method="POST" enctpe="multipart/form-data">
               Name: <input type="text" name="name" placeholder="Name" class="fn" required> 
               <br>
               <br>
               EmailAddress:<input type="email" name="Email" placeholder="SPants@gmail.com" required>
               <br>
               <br>
               phone number:<input type="phone number" name="PN" placehoder="phone number" required>
               <br>
               <br>
               Address<input type="address" class="Address" name="address" required>
               <br>
               <br>
               date<input type="date" name="date">
               <br>
               <br>
             <textarea rows="1" cols="80" placeholder="subject" name="subject"></textarea required>
               <br>
               <br>
               <textarea  name="description" rows="4" cols="100" placeholder="Breif description about your claim"></textarea required>
          
               <br>
               <br>
               <button type="upload" name="submit" class="up"><a href="userclaimpag.php">submit</button>
                </form>
                </fieldset>

                <?php include 'footer.php';  ?>
           
       
    </body>
</html>