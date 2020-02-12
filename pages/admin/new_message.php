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
                <div id="add_receiver">
                    <a>Odbiorcy:</a>
                </div>

                <form action="../scripts/php/new_message.php">
                    <a>Temat:</a>
                    <input type="text"/><br/><br/>
                    <a>Treść:</a>
                    <textarea class="messages__bar" rows=8 cols=50/></textarea><br/><br/>
                    <button>Wyślij!</button>
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

                        echo "<form name='form_mess' id='form_mess'>";
                            if($result = @$connect->query("SELECT * FROM `users`"))
                            {
                                $i = 0;
                                $users = $result->num_rows;
                                while($row = $result->fetch_array())
                                {                                    
                                    $i++;
                                    echo "<br/><input type='checkbox' id='receiver[".$i."]' name='receiver' value='".$row['name']."_".$row['surname']."'>".$row['name']." ".$row['surname']."<br/>";
                                }
                                echo $receiver[$i];
                            }
                    
                        echo "</form>";
                    ?>
                </div><br/><br/>
            </div>
        </div>
    </div>
    <script src="scripts/js/search_mess.js"></script>
</main>