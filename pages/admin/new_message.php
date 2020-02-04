<main>
    <div class="container"><br/>
            <H3 class="headline">Nowa wiadomość</H3>
            <div class="messages__bar">
                <button onClick="location.href='index_admin.php?page=messages'">Wiadomości</button>
                <button>Kosz</button>
                <button>Wysłane</button>
            </div><br/>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <a>Temat:</a>
                    <input type="text"/><br/><br/>
                    <a>Treść:</a>
                    <textarea class="messages__bar" rows=8 cols=50/></textarea><br/>
                </form>
            </div>
            <div class="col-md-6">
                <?php
                    require_once("./scripts/php/db_connect.php");
                    $connect = new mysqli($host, $db_user, $db_password, $db_name);

                    echo "<select>";

                    if($result = @$connect->query("SELECT * FROM `access`"))
                    {
                        $users = $result->num_rows;
                        while($row = $result->fetch_array())
                        {
                            echo "<option>".$row['name']."</option>";
                        }
                    }

                    echo "</select>";

                    echo "<form>";
                    echo "<select multiple='multiple' size='15'>";
                    if($result2 = @$connect->query("SELECT * FROM `users`"))
                    {
                        $users2 = $result2->num_rows;
                        while($row2 = $result2->fetch_array())
                        {
                            echo "<option>".$row2['name']." ".$row2['surname']."</option>";
                        }
                    }
                    echo "</select>
                    </form>";

                    $connect->close();
                ?>
            </div>
        </div>
    </div>
</main>