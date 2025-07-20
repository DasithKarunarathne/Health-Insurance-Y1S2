<?php
require 'config.php';
$email=$_POST['email'];
$newpwd=$_POST['Npwd'];
$Confirmpwd=$_POST['cPwd'];

If (empty($email)){
    $checkEmail = "FALSE";
    header('location:forgotpasswordform.php?errorEmail=Invalid Email');
    exit();    
    
}else {
    $checkEmail = "TRUE";
    
}


If (empty($newpwd)){
    $checknewpwd = "FALSE";
    header('location:forgotpasswordform.php?errorNPwd=Invalid New Password');
    exit(); 
    
}else {
    $checknewpwd = "TRUE";
}


If (empty($Confirmpwd)){
    $checkConfirmpwd = "FALSE";
    header('location:forgotpasswordform.php?errorCNP=Invalid Cnfirm Password');

   
    
}else {
    $checkConfirmpwd = "TRUE";
}

if ($checknewpwd == "TRUE" && $checkConfirmpwd == "TRUE"){

    
    If ($newpwd == $Confirmpwd){
        $valid = "TRUE";
      
    }
    else{
        $valid = "FALSE";
        header('location:forgotpasswordform.php?errorm=Passwords dont match');
        
    }
}else{
    $valid = "FALSE";
}


IF ($valid == "TRUE")
{



$sql="select * from register where Email=" . "'". $email ."'";


if($dat->query($sql))
{
    $result=$dat->query($sql);
    $numofrows=$result->num_rows;
    
    if($numofrows==1)
    {

       
           $Updsql="update register
                    set Password=" ."'".$newpwd."'";
                    if($dat->query($Updsql))
                    {
                        header('location:userclaimpag.php');
                        
                    } 
                    else{
                        echo"wrong email";
                       
                    }           

        
    }
    else{
      
    }
}
else {
       
        }

        
    }else{
    }
    


$dat->close();


?>