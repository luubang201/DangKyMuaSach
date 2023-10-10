<?php

function    insert_taikhoan($user, $pass, $email){
    $sql = "INSERT INTO `taikhoan`(`user`,`pass`,`email`) values ('$user', '$pass', '$email')";
    pdo_execute($sql);
}
function check_user($user,$pass){
    $sql = "SELECT * FROM `taikhoan` WHERE user='".$user."' AND pass= '".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function check_email($email){
    $sql = "SELECT * FROM `taikhoan` WHERE email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function  update_taikhoan($user , $pass,$name, $phone,$diachi,$email,$id){
    $sql = "UPDATE `taikhoan` set user  = '".$user."',name = '".$name."', pass = '".$pass."',phone = '".$phone."', diachi = '".$diachi."', email = '".$email."' WHERE id = " .$id;
    pdo_execute($sql);
}
function loadall_tk(){
    $sql = "SELECT * FROM `taikhoan`";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadone_tk(){
    $sql = "SELECT * FROM `taikhoan` WHERE id=" . $_GET['id'];
    $tk = pdo_query_one($sql);
    return $tk;
}
function delete_tk($id){
    $sql = "DELETE FROM `taikhoan` WHERE id = " . $_GET['id'];
    pdo_execute($sql);
}