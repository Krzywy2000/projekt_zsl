<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $login = $_POST['login'];
    $pass = $_POST['generate_pass'];
    $email = $_POST['email'];
    $access = $_POST[$access];

    require_once('db_connect.php');
    $connect = new mysqli($host, $db_user, $db_password, $db_name);

    $connect->query("INSERT INTO users (user, pass, email, access, name, surname) VALUES ('$login','$pass','$email','$access','$name','$surname')");

    header("Location: ../../index_admin.php?page=new_user");
?>