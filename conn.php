<?php
    
    $db_user = "root";
    $db_pwd = "Yuanjie520.";
    $db_name = "food";
    $conn = new mysqli("localhost", $db_user, $db_pwd, $db_name);
    $conn->set_charset("utf8");
    if($conn->connect_error) {
        die("连接失败：" . $conn->connect_errno);
    }
?> 