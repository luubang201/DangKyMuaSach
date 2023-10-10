<?php
function viewcart($del)
{
    global $img_pad;
    $tong = 0;
    $stt = 0;
    if ($del == 1) {
        $xoasp_th = '<td class="w-[90px]">Chức năng</td>';
$xoasp_td = '<td><a href="index.php?act=delete_cart&idcart=' . $stt . '">Xóa</a></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td = '';
    }
    echo ' <tr>
    <td class="w-[10px]">Stt</td>
    <td class="w-[80px]">Hình</td>
    <td class="w-[90px]">Sản phẩm </td>
    <td class="w-[400px]">Đơn giá</td>
    <td class="w-[80px]">Số lượng</td>
    <td class="w-[90px]">Thành tiền</td>
    ' . $xoasp_th . '
</tr> ';

    foreach ($_SESSION['mycart'] as $cart) {

$hinh = $img_pad . $cart[2];
$ttien = $cart[3] * $cart[4];
$tong += $ttien;
        echo '
<tr>
    <td>' . $stt . '</td>
    <td><img src="' . $hinh . '" class="w-[60px] h-auto" alt=""></td>
    <td>' . $cart[1] . '</td>
    <td>' . $cart[3] . '</td>
    <td>' . $cart[4] . '</td>
    <td>' . $ttien . '</td>
    ' . $xoasp_td . '
</tr>
';
$stt += 1;
    }
    echo '
<tr class="border">
    <td colspan="5"> Tổng tiền</td>
    <td>' . $tong . '</td>
</tr>
';
}
function show_bill_ct($listbill)
{
    global $img_pad;
    $tong = 0;
    $stt = 0;
    
    echo ' <tr>
    <td class="w-[10px]">Stt</td>
    <td class="w-[80px]">Hình</td>
    <td class="w-[90px]">Sản phẩm </td>
    <td class="w-[400px]">Đơn giá</td>
    <td class="w-[80px]">Số lượng</td>
    <td class="w-[90px]">Thành tiền</td>
    
</tr> ';

    foreach ($listbill as $cart) {
$hinh = $img_pad.$cart['img'];
$tong += $cart['thanhtien'];
        echo '
<tr>
    <td>' . $stt . '</td>
    <td><img src="'.$hinh.'" class="w-[60px] h-auto" alt=""></td>
    <td>' . $cart['name'] . '</td>
    <td>' . $cart['price'] . '</td>
    <td>' . $cart['soluong'] . '</td>
    <td>' . $cart['thanhtien'] . '</td>
    
</tr>
';
$stt += 1;
    }
    echo '
<tr class="border">
    <td colspan="5"> Tổng tiền</td>
    <td>' . $tong . '</td>
</tr>
';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($name, $address, $tel, $email,$pttt, $ngaydathang, $total)
{
    $sql = "INSERT INTO `bill`(name,address,tel,email,pttt,ngaydathang,total) value
('$name', '$address', '$tel', '$email','$pttt', '$ngaydathang', '$total')";
    return pdo_execute_return_lastInsertId($sql);
}function insert_cart($iduser, $idpro, $img, $name,$price, $soluong, $thanhtien,$idbill)
{
    $sql = "INSERT INTO `cart`(iduser,idpro,img,name,price,soluong,thanhtien,idbill) value
('$iduser', '$idpro',' $img', '$name','$price', '$soluong',' $thanhtien','$idbill')";
    pdo_execute($sql);
}
function loadone_bill($id){
    $sql = "SELECT * FROM `bill` WHERE id=".$id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill){
    $sql = "SELECT * FROM `cart` WHERE id=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
?>