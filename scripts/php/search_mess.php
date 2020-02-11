<?php
    require_once("db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    
    $search = $_GET["search_mess"];
    
    if($search < 5)
    {
        if($result = @$connect->query("SELECT * FROM `users` WHERE `access`=".$search.""))
        {
            $users = $result->num_rows;
            while($row = $result->fetch_array())
            {
                echo "<br/><input type='checkbox'>".$row['name']." ".$row['surname']."<br/>";
            }
        }
    } else {
        if($result = @$connect->query("SELECT * FROM `users`"))
        {
            $users = $result->num_rows;
            while($row = $result->fetch_array())
            {
                echo "<br/><input type='checkbox'>".$row['name']." ".$row['surname']."<br/>";
            }
        }
    }

    echo "</form>";
    mysqli_free_result($result);
    mysqli_close($connect);
?>