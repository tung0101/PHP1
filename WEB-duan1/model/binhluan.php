<?php
function binhluan_showall(){
    $sql = "SELECT*FROM binhluan";
    return pdo_query($sql);
}
function binhluan_showChiTiet($idsp){
    $sql = "SELECT * FROM binhluan WHERE idsp =?";
    return pdo_query($sql, $idsp);
}
function add_binhluan($iduser,$idsp,$noidung,$hinh, $date, $name){
    $sql = "INSERT INTO binhluan(iduser,idsp,noidung,hinh, postdate,name) VALUES(?, ?, ?, ?, ?,?)";
    pdo_execute($sql, $iduser,$idsp,$noidung,$hinh, $date, $name);
}

function binhluan_delete($id){
    $sql = "DELETE FROM binhluan WHERE id= ?";
    pdo_execute($sql, $id);
}
?>