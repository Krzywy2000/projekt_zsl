<main>
    <?php 
        require_once("scripts/php/db_connect.php");
        $connect = new mysqli($host, $db_user, $db_password, $db_name);
    ?>
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

                    echo "<form id='form'>
                    <select id='option'>
                        <option value='5'>All</option>
                        <option value='1'>Uczniowie</option>
                        <option value='2'>Nauczyciele</option>
                        <option value='4'>Rodzice</option>
                        <option value='3'>Administratorzy</option>
                    </select>
                    </form>";
                    ?>
                <div id="result" class="mess_users">
                    <?php
                            if($result = @$connect->query("SELECT * FROM `users`"))
                            {
                                $users = $result->num_rows;
                                while($row = $result->fetch_array())
                                {
                                    echo "<br/><input type='checkbox'>".$row['name']." ".$row['surname']."<br/>";
                                }
                            }
                    
                        echo "</form>";
                    ?>
                </div><br/><br/>
            </div>
        </div>
    </div>
    <script src="scripts/js/search_mess.js"></script>
</main>