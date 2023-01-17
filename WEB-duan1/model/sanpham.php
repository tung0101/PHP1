<?php

function sanpham_showAll(){
    $sql = "SELECT*FROM sanpham";
    return pdo_query($sql);
}

function sanpham_showId_1(){
    $sql = "SELECT*FROM sanpham WHERE iddanhmuc=1 ORDER BY id DESC";
    return pdo_query($sql);
}
function sanpham_showId_2(){
    $sql = "SELECT*FROM sanpham WHERE iddanhmuc=2 ORDER BY id DESC";
    return pdo_query($sql);
}
function sanpham_showId_3(){
    $sql = "SELECT*FROM sanpham WHERE iddanhmuc=3 ORDER BY id DESC";
    return pdo_query($sql);
}

function sanpham_showId($id){
    $sql = "SELECT*FROM sanpham WHERE iddanhmuc=? ORDER BY id DESC";
    return pdo_query($sql, $id);
}

function sanpham_showChiTiet($id){
    $sql = "SELECT*FROM sanpham WHERE id=?";
    return pdo_query_one($sql, $id);
}

function sanpham_insert($tensp,$avata,$gia,$danhmuc){
    $sql = "INSERT INTO sanpham(tensp, hinh, gia, iddanhmuc) VALUES(?,?,?,?)";
    pdo_execute($sql, $tensp,$avata,$gia,$danhmuc);
}

function sanpham_update($tensp,$hinh,$gia,$danhmuc, $id){
    $sql = "UPDATE  sanpham SET tensp=?, hinh=?, gia=?, iddanhmuc=? WHERE id=?";
    pdo_execute($sql, $tensp,$hinh,$gia,$danhmuc, $id);
}

function sanpham_delete($id){
    $sql = "DELETE FROM sanpham WHERE id=?";
    pdo_execute($sql, $id);
}

function sanpham_seach($name){
    $sql = "SELECT*FROM sanpham WHERE sanpham.tensp LIKE '%' ? '%'";
    return pdo_query($sql, $name);
}

?>