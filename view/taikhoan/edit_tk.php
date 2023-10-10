<div class="flex ">
    <div class="thongtin max-w-5xl w-full ">
    <div class="max-w-6xl w-[1000px]  mt-6 bg-gray-300 rounded-[30px]">
        <h1 class="text-center text-[30px] font-bold text-blue-600 pt-[30px]">Thông tin tài khoản</h1>
        
        <div class=" max-w-2xl mx-auto ml-[300px]">
        <?php 
        if(isset($_SESSION['user'])&& (is_array($_SESSION['user']))){
            extract($_SESSION['user']);
        }
        ?>
        <form action="index.php?act=edit_tk" method="post">
            <h1>Tên đăng nhâp</h1>
            <input type="text" name="user" id="user" value="<?=$user?>">
            <h1>Tên Khách hàng</h1>
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
        <h1 class="bg-red-300">
        <?php 
      
        if(isset($thongbao)&&($thongbao!='')){
            echo $thongbao;
        }
        ?>
        </h1>
       </div>
    </div>
    </div>
       
    

