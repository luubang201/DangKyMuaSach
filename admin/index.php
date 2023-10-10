<?php
include '../modem/pdo.php';
include 'header.php';
include '../modem/danhmuc.php';
include '../modem/sanpham.php';
include '../modem/taikhoan.php';
include '../modem/binhluan.php';
include '../modem/donhang.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendanhmuc = $_POST['adddanhmuc'];
                insert_dm($tendanhmuc);
                $thongbao = "Thêm Thành công";
            }
            include 'danhmuc/add.php';
            break;
        case 'ldm':
            $listdm = loadall_dm();
            include 'danhmuc/list.php';
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_dm($_GET['id']);
            }

            $listdm = loadall_dm();
            include 'danhmuc/list.php';
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $dm = loadone_dm(($_GET['id']));
            }
            include './danhmuc/update.php';
            break;
        case 'update_dm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tendanhmuc = $_POST['adddanhmuc'];
                $id = $_POST['id'];
                update_dm($id, $tendanhmuc);
                $thongbao = "Cập nhật Thành công";
            }

            $listdm = loadall_dm();
            include 'danhmuc/list.php';
            break;
        //Sanpham 
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensanpham'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }

                insert_sp($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "Thêm Thành công";
            }
            $listdm = loadall_dm();
            include 'sanpham/add.php';
            break;
        case 'lsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdm = loadall_dm();
            $listsp = loadall_sp($kyw, $iddm);
            include 'sanpham/list.php';
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_sp($_GET['id']);
            }

            $listsp = loadall_sp($kyw = '', $iddm = 0);
            include 'sanpham/list.php';
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $sanpham = loadone_sp(($_GET['id']));
            }
            $listdm = loadall_dm();
            include './sanpham/update.php';
            break;
        case 'update_sp':
            if (isset($_POST['update']) && isset($_GET['id'])) {
                $id = $_GET['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['gia'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                updatesp($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật Thành công";
            }

            $listdm = loadall_dm();
            $listsp = loadall_sp_home();
            include 'sanpham/list.php';
            break;
        //khách hàng
        case 'dskh':
            $listtk = loadall_tk();
            include 'taikhoan/list.php';
            break;
        case 'addtk':
            if (isset($_POST['dangki']) && ($_POST['dangki'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                insert_taikhoan($user, $pass, $email);
                $thongbao = "Thêm Thành công";
            }
            $listtk = loadall_tk();
            include 'taikhoan/addtk.php';
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_tk($_GET['id']);
            }
            $listtk = loadall_tk();
            include 'taikhoan/list.php';
            break;
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $taikhoan = loadone_tk();
            }
            include './taikhoan/edittk.php';
            break;
        case 'edit_tk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                update_taikhoan($user, $pass, $name, $phone, $diachi, $email, $id);
                $thongbao = "Cập nhật Thành công";
            }
            $listtk = loadall_tk();
            include 'taikhoan/list.php';
            break;
        //bình luận    
        case 'lbl':
            $listbl = loadall_binhluan();
            include 'binhluan/list.php';
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_bl($_GET['id']);
            }
            $listbl = loadall_binhluan();
            include 'binhluan/list.php';
            break;
        case 'donhang':
            $listdh = loadall_donhang();
            include 'donhang/list.php';
            break;
        case 'thongke':

            $listhongke = loadall_thongke();
            include "thongke/list.php";
            break;
        default:
            include 'home.php';
            break;
    }
} else
    include 'home.php';

include 'footer.php';
?>