<?php


    if($_SESSION['access'] == '3')
    {
        echo "Admin";
    }

    if($_SESSION['access'] == '1')
    {
        echo "Uczeń";
    }

    if($_SESSION['access'] == '2')
    {
        echo "Nauczyciel";
    }
    
?>