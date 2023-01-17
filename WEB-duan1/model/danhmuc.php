<?php

    function danhmuc_showAll(){
        $sql = "SELECT*FROM danhmuc";
        return pdo_query($sql);
    }
    function danhmuc_showId($id){
        $sql = "SELECT*FROM danhmuc WHERE iddanhmuc=?";
        return pdo_query_one($sql,$id);
    }

    function danhmuc_insert($iddanhmuc,$name){
        $sql = "INSERT INTO danhmuc(iddanhmuc,tendanhmuc) VALUES(?,?)";
        pdo_execute($sql, $iddanhmuc,$name);
    }

    function danhmuc_update($tendanhmuc, $id){
        $sql = "UPDATE danhmuc SET tendanhmuc=? WHERE iddanhmuc=?";
        pdo_execute($sql, $tendanhmuc,$id);
    }

    function danhmuc_delete($iddanhmuc){
        $sql = "DELETE FROM danhmuc WHERE iddanhmuc=?";
        pdo_execute($sql, $iddanhmuc);
    }
?>

