<?php

require 'config.php';

$cName=$_POST["name"];
$cEmail=$_POST["email"];
$cAddress=$_POST["address"];
$ctelNo=$_POST["telno"];
$cMsg=$_POST["message"];

$sql="INSERT INTO contact VALUES ('','$cName','$cEmail','$cAddress','$ctelNo','$cMsg')";

if($con->query($sql)){
    //should redirect to the homepage connect homepage here
    echo"Insert Successful";

}
else{
    echo "Error".$conn->error;
}

$con->close();

?>