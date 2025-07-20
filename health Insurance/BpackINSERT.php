<?php

require 'config.php';

$pname = $_POST['insutype'];
$Oname = $_POST['ownername'];
$emailbuy = $_POST['insuranceemail'];
$buycont = $_POST['insurancecontact'];
$buynic = $_POST['identity'];
$nonic = $_POST['idtype'];
$buyamount = $_POST['howmuch'];


$sql="INSERT INTO packageinfo  VALUES ('','$pname','$Oname','$buycont','$buynic','$buyamount','$nonic','$emailbuy')";

if($dat->query($sql)){
    
    header("Location: our sevice.php");
}
else{
    echo "Error".$dat->error;
}

$dat->close();

?>

