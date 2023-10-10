<div class="flex">
    <div class="thongtin w-[990px] m-2">
        <h1 class="bg-blue-200 pl-2 mt-2 mb-2 text-[30px] font-semibold rounded-[10px]">Chi tiết sản phẩm</h1>

        <?php
extract($onesp);
$hinh = $img_pad . $img;
echo '  
        
<div class="grid grid-cols-2 bg-white rounded">
        <div class="mx-auto"><img src="' . $hinh . '" class="w-[400px] mx-auto m-2"></div>
        <div class="mt-10">
            <h1 class=" mb-2 pl-2 font-semibold rounded-[30px] text-[30px]">' . $name . '</h1>
            <h1 class="bg-blue-200 pl-2 rounded-[30px]">' . $mota . '</h1>
            <div class="mt-5">
                <form action="index.php?act=addtocart" method="POST">
                    <input type="hidden" name="id" value="' . $id . '">
                    <input type="hidden" name="name" value="' . $name . '">
                    <input type="hidden" name="img" value="' . $img . '">
                    <input type="hidden" name="price" value="' . $price . '">
                    <button class="ml-[80px] bg-blue-300 p-[3px] rounded mb-[10px] text-white hover:bg-sky-700
                        hover:text-orange-400">Mua</button>
                    <input type="submit" class="ml-[10px] bg-blue-300 p-[3px] rounded mb-[10px] text-white
                        hover:bg-sky-700 hover:text-orange-400" name="addtocart" value="Thêm Giỏ hàng">
                </form>
            </div>
        </div>
    </div>';
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#binhluan").load("view/binhluan/binhluanform.php", { idpro:<?=  $id  ?>});
        });

    </script>
    <div id="binhluan" class="rounded">

    </div>
    <h1>Sản phẩm cùng loại </h1>
    <div class="">
        <?php
foreach ($sp_cung_loai as $sp_cung_loai) {
    extract($sp_cung_loai);
    $linksp = "index.php?act=ctsp&&id=" . $id;

    echo '<li><a href="' . $linksp . '"> ' . $name . '</a></li>';
        }
        ?>
    </div>
</div>
</div>