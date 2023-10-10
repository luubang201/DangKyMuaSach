<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
<div class="mt-4 mx-auto max-w-7xl">
    <form action="index.php?act=addsp" enctype="multipart/form-data" method="POST">
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Danh Muc</h1>
        <select name="iddm" id="">
            <?php
            foreach($listdm as $dm){
                extract($dm);
                echo'<option value="'.$id.'">'.$tendanhmuc.'</option>';
            }
            ?>
        </select>
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Tên sản phẩm</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="tensanpham" value="Tên sản phẩm" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Giá</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="giasp" value="Giá sản phẩm" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Hình</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="file" name="hinh" value="Hình sản phẩm" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Mô tả</h1>
        <textarea name="mota" id="" cols="30" rows="10"></textarea>
        <br>
        <input class="bg-sky-400 rounded p-1 text-white" type="submit" name="themmoi" value="Thêm mới">
        <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?act=lsp">Danh sách sản phẩm</a></button>
        <?php
            if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
        ?>
    </form>
    </div>
</div>
