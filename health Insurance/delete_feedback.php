<?php
require 'config.php';


if (isset($_GET['id']) && !empty($_GET['id'])) {

    $stmt = $dat->prepare("DELETE FROM feedbak WHERE id = ?");
    $stmt->bind_param("i", $id);

  
    $id = $_GET['id'];
    
    if ($stmt->execute()) {
       
        header("Location: userhome.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
}


$dat->close();
?>
