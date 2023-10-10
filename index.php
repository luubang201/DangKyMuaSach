<?php
session_start();
include './modem/pdo.php';
include './modem/sanpham.php';
include './modem/danhmuc.php';
include './view/header.php';
include 'global.php';
include './modem/taikhoan.php';
include './modem/cart.php';

$dmm = loadall_dm();
$spnew = loadall_sp_home();
$dstop10 = load_sp_top10();
if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];
if (isset($_GET['act']) && ($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gt':
            include './view/gioithieu.php';
            break;
        case 'lh':
            include './view/lienhe.php';
            break;
        case 'hd':
            include './view/hoidap.php';
            break;

        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw']) !='') {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm']) > 1) {
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;
            }
            $dssp = loadall_sp($kyw, $iddm);
            $namedm = load_ten_dm($iddm);
            include './view/sanpham.php';
            break;
        case 'gy':
            include './view/gopy.php';
            break;
        case 'ctsp':
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id = $_GET['id'];
                $onesp = loadone_sp($id);
                extract($onesp);
                $sp_cung_loai = sp_cung_loai($id, $iddm);
                include './view/chitiet.php';
            } else {
                include './view/home.php';
            }
            break;

        case 'quenmk':
            if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                $email = $_POST['email'];

                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $thongbao = "Mật khẩu của bạn là :" . $check_email['pass'];
                } else {
                    $thongbao = "Email này không tồn tại";
                }
            }
            include './view/taikhoan/doimk.php';
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
                $_SESSION['user'] = check_user($user, $pass);
                $thongbao = "Update thành công";
            }
            include './view/taikhoan/edit_tk.php';
            break;
        case 'dangki':
            if (isset($_POST['dangki']) && ($_POST['dangki'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                insert_taikhoan($user, $pass, $email, );
                $thongbao = "Đăng kí thành công";
            }
            include './view/taikhoan/dangki.php';
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = check_user($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    $yourURL = "index.php";
                    echo ("<script>location.href =' $yourURL '</script>");
                } else {
                    $thongbao = "Không tìm thấy tài khoản";
                    $yourURL = "index.php";
                    echo ("<script>location.href = ' $yourURL '</script>");
                }

            }
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $price * $soluong;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include './view/cart/viewcart.php';
            break;
        case 'gh':
            include './view/cart/viewcart.php';
            break;
        case 'delete_cart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location:index.php?act=gh');
            break;
        case 'dathang':
            include './view/cart/bill.php';
            break;
        case 'billcomfirm':
            if (isset($_POST['dathang']) && $_POST['dathang']) {
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $tel = $_POST['phone'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('d/m/Y');
                $total = tongdonhang();
                $idbill = insert_bill($name, $address, $tel, $email, $pttt, $ngaydathang, $total);


                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }

                $_SESSION['cart']=[];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include './view/cart/billcomfirm.php';
            break;
        case 'thoat':
            session_unset();
            header('location:index.php');
            break;
        default:
            include './view/home.php';
            break;
    }
} else {
    include './view/home.php';
}
include './view/phai.php';

include './view/footer.php';
?>