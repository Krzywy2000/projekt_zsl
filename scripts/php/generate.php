<?php

    function passwordGenerator($length) {
        $uppercase = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'W', 'Y', 'Z');
        $lowercase = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'w', 'y', 'z');
        $number = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

        $password = NULL;

        for ($i = 0; $i < $length; $i++) {
            $password .= $uppercase[rand(0, count($uppercase) - 1)];
            $password .= $lowercase[rand(0, count($lowercase) - 1)];
            $password .= $number[rand(0, count($number) - 1)];
        }

        return substr($password, 0, $length);
    }

    $myPassword = passwordGenerator(8);
    echo '<p>Moje wygenerowane hasło: <strong>' . $myPassword . '</strong></p>' . "\n"

    $_POST['generate_pass'] = $myPassword;

?>