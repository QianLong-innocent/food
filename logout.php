<?php
    if($_COOKIE['is_login']){
        setcookie("is_login", 0, time()-3600);
        setcookie("username", "", time()-3600);
        echo "<script>alert('注销成功');window.location.href='index.php';</script>";
    }
?>