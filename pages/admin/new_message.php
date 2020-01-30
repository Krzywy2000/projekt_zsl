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

                    $connect->close();
                ?>
            </div>
        </div>
    </div>
</main>