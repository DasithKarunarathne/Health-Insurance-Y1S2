<?php

require 'config.php';

$cName=$_POST["name"];
$cEmail=$_POST["email"];
$cAddress=$_POST["address"];
$ctelNo=$_POST["telno"];
$cMsg=$_POST["message"];

$sql="INSERT INTO contact VALUES ('','$cName','$cEmail','$cAddress','$ctelNo','$cMsg')";

if($dat->query($sql)){
   
    header("Location: userhome.php");

}
else{
    echo "Error".$dat->error;
}

$dat->close();

?>