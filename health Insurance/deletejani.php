<?php
 require 'config.php';
if(isset($_GET['deleteclaim_no'])){
    $claim_no=$_GET['deleteclaim_no'];

    $sql="delete from claim
    where claim_no=$claim_no";
    $result=mysqli_query($dat,$sql);
    if($result){
        
        header('location:userclaimpag.php');
    }


}
?>