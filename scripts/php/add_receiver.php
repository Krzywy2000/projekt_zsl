<?php
    require_once("db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    
    $receiver = $_GET["receiver"];
    
    echo "<a>Odbiorcy:</a><br/>";
    while($receiver[$i] > 5) {
        echo "<a>".$receiver[$i]."</a>";
    }
?>