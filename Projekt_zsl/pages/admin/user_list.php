<main>
    <?php 
        require_once("scripts/php/db_connect.php");
        $connect = new mysqli($host, $db_user, $db_password, $db_name);
    ?>
    <div class="container"><br/><br/>
        <H2 class="headline">Lista użytkowników</H2>
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
                        </tr>";
                        }
                    }
                    echo "</table>";
                }
            $connect->close();
        ?>        
    <br/><br/></div>
</main>