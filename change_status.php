<?php
        require_once("config.php");
        
        $action = $_GET['action'];
        $id = $_GET['id'];

        $conn = new mysqli(servername,username,password,dbname);
        $sql = "UPDATE code SET tinhtrang='$action' WHERE id='$id'";
        $result = $conn->query($sql);  
        header("Location: code.php");
        $conn->close();
       

?>        