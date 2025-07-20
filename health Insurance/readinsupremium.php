<?php

require 'config.php';


if (isset($_POST["subbtn"])) {

    $packname = $_POST['insutype'];
    $owner = $_POST['ownername'];
    $iemail = $_POST['insuranceemail'];
    $insuNo = $_POST['insurancecontact'];
    $nicorpass = $_POST['identity'];
    $enteredno = $_POST['idtype'];
    $amountinsu = $_POST['howmuch'];

    $reins="SELECT * FROM packageinfo WHERE packname='$packname' AND name='$owner' AND 	email='$iemail' AND contactno='$insuNo' AND identitytype='$nicorpass' AND identityno='$enteredno'";
    $result=$dat->query($reins);

    if ($result->num_rows > 0){
        
        header('Location: portal.php');






    }
    else{
        echo "<script>alert('Invalid details. Please enter correct information and try again.');</script>";
    }
  
    $dat->close();
    }


?>