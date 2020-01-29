<main>
    <div class="container">
        <div class="col-md-6">
            <form method="POST" action="../scripts/php/admin/messages.php">
                <select>
                    <option name=admin>
                        Administrator
                    </option>
                    <option name=director>
                        Dyrekcja
                    </option>
                    <option name=teacher>
                        Nauczyciele
                    </option>
                </select>
                    <?php
                        require_once "./scripts/php/db_connect.php";

                        $connect = new mysqli($host, $db_user, $db_password, $db_name);
                        $id = $_POST['admin'];
                        if($id == true)
                        {
                            $result = @$connect->query("SELECT imie,nazwisko FROM users WHERE access = 'admin'");
                            $users = $result->num_rows;
                            if($users>0)
                            {
                                while($row = $result->fetch_array())
                                {
                                    echo "<input type='radio'>".$row['name']." ".$row['surname']."/>";
                                }
                            }
                        }
                    ?>
            </form>
        </div>
    </div>
</main>