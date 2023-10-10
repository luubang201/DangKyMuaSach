<div class="flex">
    <div class="thongtin w-[1000px]">
        <h1 class="bg-blue-200 pl-2 text-[40px] mt-3 mr-2 rounded"> Sản phẩm
            <?php echo $namedm ?>
        </h1>
        <div class="flex mr-2 bg-white p-3">
            <?php
foreach ($dssp as $sp) {
    extract($sp);
    $linksp = " index.php?act=ctsp&id=" . $id;
    $hinh = $img_pad . $img;
    echo '
    <div class="sp border border-slate-800 p-3 rounded mr-2 mt-2">
            <a href="' . $linksp . '"><img class="mx-auto w-[200px] h-[220px] mt-2" src="' . $hinh . '" alt=""></a>
            <a href="' . $linksp . '">
                <h1 class="text-center text-[18px] font-bold">' . $name . '</h1>
            </a>
            <h1 class="text-center text-[18px] font-bold text-orange-400">' . $price . ' $</h1>
            <button class="ml-[20px] bg-blue-300 p-[3px] rounded mb-[10px] text-white hover:bg-sky-700
                hover:text-orange-400"><a href="index.php?act=thanhtoan">Mua</a></button>
            <button class="ml-[10px] bg-blue-300 p-[3px] rounded mb-[10px] text-white hover:bg-sky-700
                hover:text-orange-400">Thêm Giỏ hàng</button>
        </div>
        ';
        }

        ?>
    </div>
</div>