<main>
    <?php 
        require_once("scripts/php/db_connect.php");
        $connect = new mysqli($host, $db_user, $db_password, $db_name);
    ?>
    <div class="container"><br/><br/>
        <H2 class="headline">Lista użytkowników</H2>
        <div class="messages__bar__left">
            <form method="POST" action="index_admin.php?page=user_list">
                <input type="text" name="search" placeholder="Znajdź użytkownika"/>
                <button type="submit">Znajdź</button>
            </form>
        </div>
        <div class="messages__bar">
            <button class="button" onClick="new_user.php">Dodaj nowego użytkownika</button></br>
        </div><br/>
        <?php
        
            $search = @$_POST['search'];

            if($search == EMPTY($search)) {
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
                                <td><button class='button'>Zmień dane</button></td>
                            </tr>";
                        }
                    }
                    echo "</table>";
                }
            } else {
                if ($result = @$connect->query("SELECT * FROM `users` where `name` like '%$search%' or `surname` like '%$search%'"))
                {
                    echo "<table>
                    <tr class='main'>
                        <td>Imie</td>
                        <td>Nazwisko</td>
                        <td>e-mail</td>
                        <td>Ostatnie logowanie</td>
                        <td>Ostatni adres IP</td>
                        <td>Dostęp</td>
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
                                <td><button class='button'>Zmień dane</button></td>
                            </tr>";
                        }
                    }
                    echo "</table>";
                }
            }
            $connect->close();
        ?>        
    <br/><br/></div>
</main>