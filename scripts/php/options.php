<?php

    if($_SESSION['access'] == 'admin')
    {
        echo '<a class="dropdown-item" href="#">Panel</a>';
        echo '<a class="dropdown-item" href="index_admin.php?page=messages">Wiadomości</a>';
        echo '<a class="dropdown-item" href="index_admin.php?page=user_list">Lista użytkowników</a>';
        echo '<a class="dropdown-item" href="index_admin.php?page=new_user">Dodaj nowego użytkonika</a>';
        echo '<a class="dropdown-item" href="index_admin.php?page=options">Ustawienia</a>';
        echo '<a class="dropdown-item" href="./scripts/php/logoff.php">Wyloguj</a>';
    }

    if($_SESSION['access'] == 'uczen')
    {
        echo '<a>'.$_SESSION['name'].' '.$_SESSION['surname'].'</a>';
        echo '<a class="dropdown-item" href="#">Panel</a>';
        echo '<a class="dropdown-item" href="#">Lista Użytkowników</a>';
        echo '<a class="dropdown-item" href="#">Ustawienia</a>';
        echo '<a class="dropdown-item" href="./scripts/php/logoff.php">Wyloguj</a>';
    }

?>