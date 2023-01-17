<?php  
    session_start();
       include "../model/config.php";

        if(isset($_SESSION['name'])){
            unset($_SESSION['name']);
            unset($_SESSION['avata']);
            unset($_SESSION['giohang']);
               header("location: ../controller/index.php?act=login");
        }
 
?>