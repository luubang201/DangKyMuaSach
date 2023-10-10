<?php
 if(is_array($taikhoan)){
    extract($taikhoan);
}
?>
<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
<form action="index.php?act=edit_tk" method="post">
            <h1>Tên đăng nhâp</h1>
            <input type="text" name="user" id="user" value="<?=$user?>">
            <h1>Tên khách hàng</h1>
            <input type="text" name="name" id="name" value="<?=$name?>">
            <h1>Mật Khẩu</h1>
            <input type="text" name="pass" id="pass" value="<?=$pass?>">
            <h1>Địa chỉ</h1>
            <input type="text" name="diachi" id="" value="<?=$diachi?>">
            <h1>Email</h1>
            <input type="text" name="email" id="email" value="<?=$email?>">
            <h1>Số điện thoại</h1>
            <input type="text" name='phone' value="<?=$phone?>">
            <br>
            <input type="hidden" name="id" value="<?=$id?>">
           <input type="submit" name="capnhat" id="" value=" Cập nhật " class="p-2 bg-blue-300 rounded">
            <br>
 </form>