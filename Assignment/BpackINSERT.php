<?php

require 'config.php';

$pname = $_POST['insutype'];
$Oname = $_POST['ownername'];
$emailbuy = $_POST['insuranceemail'];
$buycont = $_POST['insurancecontact'];
$buynic = $_POST['identity'];
$nonic = $_POST['idtype'];
$buyamount = $_POST['howmuch'];


$sql="INSERT INTO packageinfo  VALUES ('','$pname','$Oname','$buycont','$buynic','$nonic','$buyamount','$emailbuy')";

if($con->query($sql)){
    //should redirect to the homepage connect homepage here
    echo"Insert Successful";

}
else{
    echo "Error".$conn->error;
}

$con->close();

?>

