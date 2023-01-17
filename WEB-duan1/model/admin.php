<?php
    function admin_query($user){
        $sql = "SELECT*FROM admin WHERE username=?";
        return pdo_query($sql, $user);
    }

    function show_admin_id($id){
        $sql = "SELECT * FROM admin where id=?";
        return pdo_query($sql, $id);
    }
    function show_admin_id_one($id){
        $sql = "SELECT * FROM admin where id=?";
        return pdo_query_one($sql, $id);
    }

    function update_admin_user($id,$user){
        $sql = "UPDATE  admin SET  username=? WHERE id=?";
        pdo_execute($sql, $user,$id);
    }

    function update_admin_pass($id,$pass){
        $sql = "UPDATE  admin SET  password=? WHERE id=?";
        pdo_execute($sql, $pass,$id);
    }
?>