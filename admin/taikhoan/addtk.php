<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
<form action="index.php?act=addtk" method="POST">
        <div class=" max-w-2xl mx-auto ml-[300px]">
            <h1>Tên đăng nhâp</h1>
            <input type="text" name="user" id="user" class="border rounded">
            <h1>Mật Khẩu</h1>
            <input type="text" name="pass" id="pass" class="border rounded">
            <h1>Email</h1>
            <input type="text" name="email" id="email " class="border rounded">
            <br>
            
            <br>
            <input type="submit" name="dangki" id="" value=" Đăng kí " class="p-2 bg-blue-300 rounded">
            <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?act=dskh">Danh sách tài khoản</a></button>
            <?php
            if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
        ?>
        </div>
    </form>