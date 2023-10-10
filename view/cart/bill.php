<div class="flex">
    <div class="mt-2 w-[990px] m-1 rounded bg-white ">
        <h1 class="text-[16px] bg-gray-200 rounded p-1">Thông tin đặt hàng</h1>
        <form action="index.php?act=billcomfirm" method="POST">
            <div class="thongtinkhachhang">
<?php   
if(isset($_SESSION['user'])){
    $name = $_SESSION['user']['name'];
    $address = $_SESSION['user']['diachi'];
    $email = $_SESSION['user']['email'];
    $phone = $_SESSION['user']['phone'];
}
else{
    $name ='';
    $address ='';
    $email ='';
    $phone ='';
}
?>
            <h1 class="text-[20px] pl-2">Người đặt hàng</h1>
            <input type="text" name="name" class="border ml-2" value="<?=$name?>" id="">
            <h1 class="text-[20px] pl-2">Địa chỉ</h1>
            <input type="text" name="address" class="border ml-2" value="<?=$address?> ">
            <h1 class="text-[20px] pl-2">Email</h1>
            <input type="text" name="email" class="border ml-2" value="<?=$email?> ">
            <h1 class="text-[20px] pl-2">Số điện thoại</h1>
            <input type="text" name="phone"  class="border ml-2" value="<?=$phone?>">
            </div>
            <div class="phuongthuc border bg-gray-300 rounded mt-4">
                <input type="radio" name="pttt" checked value="Thanh toán online">Thanh toán online
                <input type="radio" name="pttt"  value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng
            </div>
            <div class="thongtinbill w-[1000px]">
               <table>

              <div class="ml-2">
              <?php
             viewcart(0);
               ?>
              </div>
               </table>
            </div>
            <div class="dathang">
                <input type="submit" class="m-3 p-2 bg-blue-200 rounded" name="dathang" value="Xác nhận đặt hàng">
            </div>
    </form>
    </div>