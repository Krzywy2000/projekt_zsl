<main>
    <?php 
        require_once("scripts/php/db_connect.php");
        $connect = new mysqli($host, $db_user, $db_password, $db_name);
    ?>
    <div class="pop-up_hidden">

    </div>
    <div class="container"><br/><br/>
        <H2 class="headline">Lista użytkowników</H2>
        <div class="messages__bar__left">
            <form id="form">
                <input type="text" id="search" name="search" placeholder="Znajdź użytkownika"/>
            </form>
        </div>
        <div class="messages__bar">
            <button class="button" onClick="new_user.php">Dodaj nowego użytkownika</button></br>
        </div><br/>
        <div id="result" class="result">
            <?php
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
                                    <td><button class='button' id='edit'>Edytuj</button></td>
                                </tr>";
                            }
                        }
                        echo "</table>";
                    }
                ?>    
        </div>        
    <br/><br/></div>
    <script src="scripts/js/search.js"></script>
    <script src="scripts/js/pop_up.js"></script>
</main>