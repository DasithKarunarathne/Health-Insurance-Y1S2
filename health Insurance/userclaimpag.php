<?php
require 'config.php';

?>
<html>
    <head>
 <link rel="stylesheet" href="userclaimpagenew.css">
 <style>
  table,th,td{ border: 1px solid rebeccapurple;
           }
  </style>
    </head>
    <body>
    <?php include 'header.php';  ?>

      <section class="image">
        <div class="heading">
        <h2>Claim Your Insurance Instantly</h2>
      
        <h3> Right here!Right now!</h>
        </div>
        
      </section>

      <div class="headingtop">
        
        <h2>claim histroy</h2>
      </div>
            <table style="width:80%;" class="table">
                <tr>
                <th>claim_no</th>
                <th>name</th>
                <th>Email</th>
                <th style>date</th>
                <th>subject</th>
                <th>phone number</th>
                <th>description</th>
                <th>position</th>
                
                
                </tr>
                  <?php
                  $sql="select * from claim";
                  $result=mysqli_query($dat,$sql);
                  if($result){
                    while($row=mysqli_fetch_assoc($result)){
                           $claim_no=$row['claim_no'];
                            $name=$row['Name'];
                            $date=$row['Date'];
                            $subject=$row['subject'];
                            $phonenumber=$row['phonenumber'];
                            $email=$row['Email'];
                            $description=$row['description'];
                            $Address=$row['Address'];
                            
                            echo'<tr>
                            <td>'.$claim_no.'</td>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$date.'</td>
                            <td>'.$subject.'</td>
                            <td>'.$phonenumber.'</td>
                            <td>'.$description.'</td>
                            
                             <td>
                            <button><a href="deletejani.php?deleteclaim_no='.$claim_no.'">delete</a></button>
                            <button><a href="updatejani.php?updateclaim_no='.$claim_no.'">update</a></button>
                            </td>  
                            </tr>';
                           }
                      } 
             ?>
             <button class="claim"><a href="claimform.php">file a claim</a></button>
            
    </body>
    
</html>
