<?php

    function login($username){
        $sql = "SELECT * FROM user WHERE username=? ";
        return pdo_query($sql, $username);
    }

    function login_Show(){
        $sql = "SELECT * FROM user";
        return pdo_query($sql);
    }
?>