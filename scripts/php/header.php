<?php


    if($_SESSION['access'] == 'admin')
    {
        echo "Admin";
    }

    if($_SESSION['access'] == 'uczen')
    {
        echo "Uczeń";
    }

    if($_SESSION['access'] == 'nauczyciel')
    {
        echo "Nauczyciel";
    }
    
?>