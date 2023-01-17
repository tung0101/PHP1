<?php
        session_start();
        include "../model/config.php";

        if(isset($_SESSION['idAdmin'])){
            unset($_SESSION['idAdmin']);
        }
        header("location: ../controller/indexadmin.php");
