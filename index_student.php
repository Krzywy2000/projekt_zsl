<?php
    include("./layout/header.php");
    include("./layout/navbar.php");
    $toInclude = isset($_GET['page']) ? $_GET['page']:"main";
    include("./pages/admin/{$toInclude}.php");
    include("./layout/footer.php");
?>