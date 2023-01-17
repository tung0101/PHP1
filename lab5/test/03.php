<?php
    setcookie('name','this is a test',time() + 10);
    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';
    echo $_COOKIE['name'];

    setcookie('name','this is a test',time() +10);

    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';
    echo $_COOKIE['name'];
?>