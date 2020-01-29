<html>
    <head>
        <title>eDziennik</title>

        <!--Links!-->
        <link rel="stylesheet" type="text/css" href="./styles/style_main.css">
        <link rel="stylesheet" type="text/css" href="./styles/style_logpg.css">
        <link rel="stylesheet" type="text/css" href="./styles/bootstrap/bootstrap.min.css">

        <!--Scripts!-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/6a2e60bfe6.js"></script>
    </head>
    <body>
        <div class="main_block">
            <div class="container">
                <div class="col-md-12 log__page">
                    <header class="col-md-12">
                        <p>eDziennik</p>
                    </header>
                    <form method="post" action="scripts/php/login.php">
                        <br/><br/>
                        <i class="fas fa-user"></i><a> </a><input type="text" name="user" placeholder="Użytkownik:"><br/><br/>
                        <i class="fas fa-lock"></i><a> </a><input type="password" name="password" placeholder="Hasło:"/><br/><br/>
                        <input type="submit" value="Zaloguj!" name="logon"/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>