<?php
        require_once("config.php");
        
        $code = $_POST['code'];
        $type = $_POST['type'];

        $conn = new mysqli(servername,username,password,dbname);
        $sql = "SELECT * FROM code WHERE code='$code'";
        $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()){
            echo 'Code đã tồn tại!';
            header("Location: code.php");
        }
        else {
            $sql_add = "INSERT INTO code(loaicode, code) VALUES ('$type','$code')";
            $rtl = $conn->query($sql_add);
            header("Location: code.php");
        }
        $conn->close();
       

?>        