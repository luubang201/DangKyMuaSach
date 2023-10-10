<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
<div class="mt-4 mx-auto max-w-7xl">
    <form action="index.php?act=adddm" method="POST">
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Tên danh mục</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="adddanhmuc" id="adddanhmuc" value="Tên Danh mục" >
        <br>
        <input class="bg-sky-400 rounded p-1 text-white" type="submit" name="themmoi" value="Thêm mới">
        <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?act=ldm">Danh sách danh mục</a></button>
        <?php
            if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
        ?>
    </form>
    </div>
</div>
