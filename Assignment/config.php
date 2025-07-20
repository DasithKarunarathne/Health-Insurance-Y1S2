
<?php

$con=new mysqli("localhost","root","","assignment");

if($con->connect_error)
{
    die("Connection failed".$con->connect_error);

}
else{
    echo "Successful";

}



?>