<?php

function insert_sp($tensp, $giasp, $hinh, $mota, $iddm)
{
    $sql = "INSERT INTO `sanpham`(`name`,`price`,`img`,`mota`,`iddm`) values ('$tensp', '$giasp', '$hinh', '$mota', '$iddm')";
    pdo_execute($sql);
}
function delete_sp($id)
{
    $sql = "DELETE FROM `sanpham` WHERE id = " . $_GET['id'];
    pdo_execute($sql);
}

function loadall_sp_home()
{
    $sql = "SELECT * FROM `sanpham` ";
    $listspm = pdo_query($sql);
    return $listspm;
}
function loadall_sp($kyw = '', $iddm)
{
    $sql = "SELECT * FROM `sanpham` where 1 ";
    if ($kyw != '') {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= "order by id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadall_sp_cungloai($iddm)
{
    $sql = "SELECT * FROM `sanpham` where iddm ='" . $iddm . "'";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadone_sp($id)
{
    $sql = "SELECT * FROM `sanpham` WHERE id=" . $_GET['id'];
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_ten_dm($iddm)
{
    if($iddm>0){
    $sql = "SELECT * FROM `danhmuc` WHERE id=" . $iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $tendanhmuc;
}else
{
    return "";
}
}
function updatesp($id, $iddm, $tensp, $giasp, $mota, $hinh)
{
    if ($hinh !="") {
        $sql = "UPDATE `sanpham` set `name` = '" .$tensp. "', `price` = '" .$giasp. "',`img` ='" .$hinh. "',`mota` = '" .$mota. "', `iddm` = '" . $iddm . "' WHERE `sanpham`.`id` = '{$id}'" ;
    }
    else {
        $sql = "UPDATE `sanpham` set `name` = '" .$tensp. "', price = '" .$giasp. "',mota = '" .$mota. "', iddm = '" .$iddm. "' WHERE `sanpham`.`id`='{$id}'" ;
    }
    pdo_execute($sql);
}
function sp_cung_loai($id, $iddm)
{
    $sql = " SELECT * from  sanpham WHERE iddm = " . $iddm . " AND id <>" . $id;
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_sp_top10()
{
    $sql = "SELECT * FROM `sanpham` where 1 order by view desc limit 0,10";
    $listsp = pdo_query($sql);
    return $listsp;
}
?>