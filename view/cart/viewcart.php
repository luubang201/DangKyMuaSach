<div class="flex">
    <div class="mt-2 w-[990px] m-1 rounded bg-white ">
        <h1 class='p-3 text-[30px]'>Giỏ hàng</h1>
        <table class="ml-2 border ">
            <?php
viewcart(1)
    ?>

        </table>
        <a href="index.php?act=dathang"><input class="p-2 bg-blue-200 rounded ml-3 mt-2 text-black " type="button"
                value="Đặt hàng"></a>
        <a href="index.php?act=delete_cart"><input class="p-2 bg-blue-200 rounded ml-3 mt-2 text-black " type="button"
                value="Xóa giỏ hàng"></a>
    </div>