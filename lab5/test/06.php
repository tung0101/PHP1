<?php
    session_start();
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    if(isset($_SESSION['name'])){
        $_SESSION['age']=30;
    } else{
        $_SESSION['age']=20;
    }
?>