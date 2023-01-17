<?php
    session_start();

    if(isset($_SESSION['name'])){
        echo 'ton tai';
    } else{
        echo'khong ton tai';
    }
?>