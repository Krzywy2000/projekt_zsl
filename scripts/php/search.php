<?php
    require_once("db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    
    $search = $_GET["search"];
    
    if($search == "") {
        if ($result = @$connect->query("SELECT * FROM `users`"))
            {
                echo "<table>
                <tr class='main'>
                    <td>Imie</td>
                    <td>Nazwisko</td>
                    <td>e-mail</td>
                    <td>Ostatnie logowanie</td>
                    <td>Ostatni adres IP</td>
                    <td>Dostęp</td>
                    <td>Zmień Dane</td>
                </tr>";
                $users = $result->num_rows;
                if($users>0)
                {
                    while($row = $result->fetch_array())
                    {
                        echo "<tr>
                            <td>".$row['name']."</td>
                            <td>".$row['surname']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['last_login']."</td>
                            <td>".$row['ip']."</td>
                            <td>".$row['access']."</td>
                            <td><button class='button'>Edytuj</button></td>
                        </tr>";
                    }
                }
                echo "</table>";
            }
    } else {
        if ($result = @$connect->query("SELECT * FROM `users` WHERE `name` LIKE '".$search."%' or `surname` LIKE '".$search."%'"))
            {
                echo "<table>
                <tr class='main'>
                    <td>Imie</td>
                    <td>Nazwisko</td>
                    <td>e-mail</td>
                    <td>Ostatnie logowanie</td>
                    <td>Ostatni adres IP</td>
                    <td>Dostęp</td>
                    <td>Zmień Dane</td>
                </tr>";

                $users = $result->num_rows;
                if($users>0)
                {
                    while($row = $result->fetch_array()) {
                        echo "<tr>
                            <td>".$row['name']."</td>
                            <td>".$row['surname']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['last_login']."</td>
                            <td>".$row['ip']."</td>
                            <td>".$row['access']."</td>
                            <td><button class='button'>Edytuj</button></td>
                        </tr>";
                    }
                }
                echo "</table>";
            }
    }
    mysqli_free_result($result);
    mysqli_close($connect);
?>