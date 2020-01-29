<?php
    
        require_once('db_connect.php');

        $connect = new mysqli($host, $db_user, $db_password, $db_name);
        $ip = $_SERVER['REMOTE_ADDR'];   
        //mysqli_query("UPDATE users SET ip = '$ip' WHERE id = '$_SESSION[id]'");

    session_unset();
        session_destroy();

    header('Location: ../../index.php');
?>