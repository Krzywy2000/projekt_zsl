<main>
    <div class="container"><br/>
        <H2>Dodaj nowego użytkownika</H2>
        <form method="POST" action="./scripts/php/new_user.php">
            <a>Imię:</a>
            <input type="text" name="name"/><br/><br/>
            <a>Nazwisko:</a>
            <input type="text" name="surname"/><br/><br/>
            <a>Login:</a>
            <input type="text" name="login"/><br/><br/>
            <a>Hasło:</a>
            <input type="text" name="generate_pass""><br/><br/>
            <a>E-mail:</a>
            <input type="text" name="email"/><br/><br/>
            <a>Dostęp:</a>
            <select name="access">
                <?php
                    require_once('./scripts/php/db_connect.php');
                    $connect = new mysqli($host, $db_user, $db_password, $db_name);

                    if ($result = @$connect->query("SELECT name FROM access"))
                        {
                            $option = $result->num_rows;
                            if($option>0)
                            {
                                while($row = $result->fetch_array())
                                {
                                    echo "<option>".$row['name']."</option>";
                                }

                                if($row['name'] == "Uczen")
                                    $access = 1;
                                
                                if($row['name'] == "Nauczyciel")
                                    $access = 2;
                                
                                if($row['name'] == "Admin")
                                    $access = 3;

                                if($row['name'] == "Rodzic")
                                    $access = 4;
                            }
                        }
                    $connect->close();
                ?>
            </select><br/><br/>
            <input type="submit" value="Dodaj" name="Add"/>
        </form>
    </div>
</main>