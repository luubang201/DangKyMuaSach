<div class="flex">
    <div class="thongtin max-w-5xl w-full ">
        
<div class="mt-6 bg-gray-300 rounded-[30px] w-[1000px] ">
    <h1 class="text-center text-[30px] font-bold text-blue-600 pt-[30px]">Đăng kí tài khoản</h1>
    <form action="index.php?act=dangki" method="POST">
        <div class=" max-w-2xl mx-auto ml-[300px]">
            <h1>Tên đăng nhâp</h1>
            <input type="text" name="user" id="user">
            <h1>Mật Khẩu</h1>
            <input type="text" name="pass" id="pass">
            <h1>Nhập lại mật khẩu</h1>
            <input type="text" name="repass" id="repass">
            <h1>Email</h1>
            <input type="text" name="email" id="email">
            <br>
            <input type="checkbox" name="check" id="check"> Điều khoản khách hàng
            <br>
            <input type="submit" name="dangki" id="" value=" Đăng kí " class="p-2 bg-blue-300 rounded">
            <br>
            <a href="index.php">Đã có tài khoản</a>


        </div>
    </form>
    <h1 class="bg-red-300">
        <?php

if (isset($thongbao) && ($thongbao != '')) {
    echo $thongbao;
}
?>
    </h1>
</div>

    </div>

    