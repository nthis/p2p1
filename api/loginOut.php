<?php
    header("Content-Type:text/html;charset=utf-8;");
    session_start();
    session_destroy();
    echo '<script> alert("退出登陆");location.href="../login.php" </script>';
?>