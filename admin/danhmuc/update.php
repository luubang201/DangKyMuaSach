<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
<div class="mt-4 mx-auto max-w-7xl">
    <form action="index.php?act=update_dm" method="POST">
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Tên danh mục</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="adddanhmuc"  value="<?php if(isset($tendanhmuc)&&($tendanhmuc!='')) echo $tendanhmuc?>" >
        <br>
        <input class="bg-sky-400 rounded p-1 text-white" type="submit" name="capnhat" value="Cập nhật">
        <input type="hidden" name="id" value="<?php  if(isset($id)&&($id>0)) echo $id?>">
        <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?act=ldm">Danh sách sản phẩm</a></button>
        <?php
            if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
        ?>
    </form>
    </div>
</div>
