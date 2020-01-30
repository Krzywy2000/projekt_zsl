<main>
    <div class="container"><br/><br/>
        <H2 class="headline">Wiadomości odebrane</H2>
        <div class="messages__bar">
            <button>Nowa wiadomość</button>
            <button>Kosz</button>
            <button>Wysłane</button>
        </div><br/>
        
        <?php
            require_once("./scripts/php/db_connect.php");
            $connect = new mysqli($host, $db_user, $db_password, $db_name);

            if ($result = @$connect->query("SELECT * FROM `messages`"))
                {
                    echo "<table>
                    <tr class='main'>
                        <td>Temat</td>
                        <td>Nadawca</td>
                        <td>Data</td>
                        <td>Przeczytana</td>
                        <td>Usuń</td>
                    </tr>";
                    $users = $result->num_rows;
                    if($users>0)
                    {
                        while($row = $result->fetch_array())
                        {
                            echo "<tr>
                                <td>".$row['subject']."</td>
                                <td>".$row['from_mess']."</td>
                                <td>".$row['data_mess']."</td>
                                <td>".$row['readed']."</td>
                            </tr>";
                        }
                    }
                    echo "</table>";
                }
            $connect->close();
?>
    </div>
</main>