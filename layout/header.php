<?php
    session_start();
?>

<html>
    <head>
        <title>eDziennik</title>

        <!--Links!-->
        <link rel="stylesheet" type="text/css" href="./styles/style_main.css">
        <link rel="stylesheet" type="text/css" href="./styles/style_pages.css">
        <link rel="stylesheet" type="text/css" href="./styles/bootstrap/bootstrap.min.css">

        <!--Scripts!-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/6a2e60bfe6.js"></script>
        <script src="./scripts/bootstrap/bootstrap.bundle.min.js"></script>

        <!--Meta_tags!-->
        <meta author="Wiktor Wiese">

    </head>
    <body>
        <header>
            <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar-dark">
                    <a class="navbar-brand" href="<?php
                        if($_SESSION['access']=="admin")
                        {
                            echo "index_admin.php";
                        }

                        if($_SESSION['access'] == "uczen")
                        {
                            echo "index_student.php";
                        }
                    ?>">eDziennik</a>
                    <span class="navbar text">
                    <?php
                        if(date("m") < "09")
                        {
                            $date = date("Y");
                            echo $date-1 ."/".$date;
                        }

                        if(date("m") > "09")
                        {
                            $date = date("Y");
                            echo $date ."/".$date+1;
                        }
                    ?>
                    </span>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">
                                <?php
                                    require_once('./scripts/php/header.php');
                                ?>
                                <span class="caret"></span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <?php
                                        require_once('./scripts/php/options.php')
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>