<?php

function insert_dm($tendanhmuc){
    $sql = "INSERT INTO `danhmuc`(`tendanhmuc`) value ('$tendanhmuc')";
    pdo_execute($sql);
}
function delete_dm($id){
    $sql = "DELETE FROM `danhmuc` WHERE id = " . $_GET['id'];
    pdo_execute($sql);
}
function loadall_dm(){
    $sql = "SELECT * FROM `danhmuc`";
    $listdm = pdo_query($sql);
    return $listdm;
}
function loadone_dm($id){
    $sql = "SELECT * FROM `danhmuc` WHERE id=" . $_GET['id'];
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_dm($id,$tendanhmuc){
    $sql = "UPDATE `danhmuc` set tendanhmuc='".$tendanhmuc."' WHERE id=".$id;
    pdo_execute($sql);
}
?>