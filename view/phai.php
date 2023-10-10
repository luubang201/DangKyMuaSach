<div class="thongtin w-[280px] ">
    <div class="acount border rounded w-full">
        <?php
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
?>
        <h1 class="bg-blue-200 pl-2">Xin chao
            <?= $user?>
        </h1>
        <ul class="">
            <li class="p-2 hover:bg-white hover:rounded-[20px] hover:font-bold"><a href="index.php?act=doimk">Đổi mật
                    khẩu </a> </li>
            <li class="p-2 hover:bg-white hover:rounded-[20px] hover:font-bold"><a href="index.php?act=edit_tk">Thông
                    tin tài khoản</a></li>
            <?php
    if ($rol == 1) {
?>
            <li class="p-2 hover:bg-white hover:rounded-[20px] hover:font-bold">
                <a href="admin/index.php">Quản trị trang web</a>
            </li>

            <?php
    }
?>
            <li class="p-2 hover:bg-white hover:rounded-[20px] hover:font-bold"><a href="index.php?act=thoat">Đăng
                    xuất</a></li>
        </ul>

        <?php
}
else {
?>
        <form action="index.php?act=dangnhap" method="post">
            <h1 class="bg-blue-200 pl-2">Tài Khoản</h1>
            <h1 class="pl-1">Tài khoản</h1>
            <input class="border w-[220px] ml-[3px]" type="text" name="user" id="">
            <h1 class="pl-1">Mật khẩu</h1>
            <input class="border w-[220px] ml-[3px]" type="password" name="pass" id="">
            <br>
            <input type="checkbox" name="checkbox" id="checkbox"> Ghi nhớ tài khoản
            <br>
            <input type="submit" name="dangnhap" value="Đăng nhập" class="p-2 bg-blue-300 rounded ml-2">
            <br>
        </form>
        <a class="pl-1" href="index.php?act=quenmk">Quyên mật khẩu</a>
        <br>
        <a class="pl-1" href="index.php?act=dangki">Đăng kí tài khoản</a>
        <?php
}


?>
        <?php

?>
    </div>
    <div class="danhmuc border mt-3">
        <h1 class=" bg-gray-100 p-3">Danh mục</h1>
        <ul>
            <?php
foreach ($dmm as $dm) {
    extract($dm);
    $linkdm = "index.php?act=sanpham&iddm=" . $id;
    echo '<li class="p-1 border-b text-[15px] hover:bg-gray-500 hover:text-white"><a href="' . $linkdm . '">' . $tendanhmuc . '</a></li>';
}
?>
        </ul>
        <div class="search border-t bg-gray-300 ">
            <h1 class=" p-3">Tìm Kiếm</h1>
            <form action="index.php?act=sanpham" method="post">
                <input class="ml-2 w-[220px]" type="text" name="kyw" placeholder="Nhập gì đó đi">
                <input type="submit" class="bg-yellow-200 text-brow-200 ml-[70px] mt-[10px] mb-[10px] p-1 rounded hover:bg-red-300 hover:text-white"  name="search" value="Tìm kiếm">
            </form>
        </div>

    </div>
    <div class="top10 border mt-3 rounded-[10px]">
        <h1 class="bg-emerald-400 p-2">Top 10 sản phẩm bán chạy nhất</h1>

        <?php
foreach ($dstop10 as $spn) {
    extract($spn);
    $hinh = $img_pad . $img;
    $ctsp = "index.php?act=ctsp&id=" . $id;
    echo '
                    <div class="danhsach flex border-t pt-[10px] pb-[10px]">
                        <img class="w-[30px] ml-4" src="' . $hinh . '" alt="">
                        <span class="p-2 text-[16px]"><a href="' . $ctsp . '">' . $name . '</a></p>
                    </div>';
}
?>

    </div>
</div>