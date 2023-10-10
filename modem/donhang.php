<?php
function loadall_donhang(){
    $sql = "SELECT * FROM `bill` join `cart` where `bill`.`id` = `cart`.`idbill` order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function loadall_thongke()
{
    $sql = "select danhmuc.id as id, danhmuc.tendanhmuc as name, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql .= " from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>