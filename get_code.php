<?php
session_start();

        $type = $_GET['type'];
        if (!$type=="") {
            $_SESSION['filter']['type'] = $type;
        }
        

        header("Location: code.php");

        $conn->close();
       

?>        