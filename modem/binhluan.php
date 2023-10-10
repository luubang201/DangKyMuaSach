<?php 
function insert_binhluan($noidung,$idtk,$idpro,$ngaybinhluan){
    $sql = "INSERT INTO `binhluan`(`noidung`,`idtk`,`idpro`,`ngaybinhluan`) value ('$noidung','$idtk','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan(){
    $sql = "SELECT * FROM `binhluan` order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_bl($id){
    $sql = "DELETE FROM `binhluan` WHERE id = " . $_GET['id'];
    pdo_execute($sql);
}
?>