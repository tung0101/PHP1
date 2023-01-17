<?php

    function regiter_query($username){
        $sql = "SELECT * FROM user WHERE username=? ";
        return pdo_query($sql, $username);
    }
    function regiter_add($user,$password,$name,$email,$avata){
        $sql = "INSERT INTO user (username,password,name,email,avata) VALUES(?,?,?,?,?)";
        pdo_execute($sql, $user,$password,$name,$email,$avata);
    }
?>