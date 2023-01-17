<?php
    function show_user(){
        $sql = "SELECT*FROM user";
        return pdo_query($sql);
    }

    function show_user_id($id){
        $sql = "SELECT*FROM user WHERE id=?";
        return pdo_query_one($sql, $id);
    }
    function add_user($username,$password,$name,$email, $avata){
        $sql = "INSERT INTO user(username, password, name, email,  avata) 
        VALUES(?,?,?,?,?)";
         pdo_execute($sql, $username,$password,$name,$email, $avata);
    }
    function update_user_avata($username,$password,$name, $avata,$email,$id){
        $sql = "UPDATE  user SET username=?, password=?, name=?, avata=?, email=? WHERE id=?";
         pdo_execute($sql, $username,$password,$name, $avata,$email,$id);
    }

    function update_user($username,$password,$name, $email,$id){
        $sql = "UPDATE  user SET username=?, password=?, name=?, email=? WHERE id=?";
         pdo_execute($sql, $username,$password,$name, $email,$id);
    }
    function delete_user($id){
        $sql = "DELETE FROM user WHERE id=?";
        pdo_execute($sql, $id);
    }
?>