<div class="flex mt-2">
    <div class="sanpham max-w-5xl mr-2">
        <div class="img mb-2">
            <img class="rounded" src="../img/ahMaDme.jpeg" alt="">

        </div> <input type="hidden" name="" id="">

        <div class="grid grid-cols-3 gap-2 w-[1000px]">
            
            <?php

foreach ($spnew as $spn) {
    extract($spn);
    $hinh = $img_pad . $img;
    $ctsp = "index.php?act=ctsp&id=" . $id;
    echo '
        <div class="sp border border-slate-800">
            <a href="'.$ctsp.'"><img class="mx-auto w-[200px] h-[220px] mt-2" src="' . $hinh . '" alt=""></a>
            <a href="'.$ctsp.'"><h1 class="text-center text-[18px] font-bold">' . $name . '</h1></a>
            <h1 class="text-center text-[18px] font-bold text-orange-400">' . $price . ' $</h1>
            <button class="ml-[80px] bg-blue-300 p-[3px] rounded mb-[10px] text-white hover:bg-sky-700 hover:text-orange-400"><a href="index.php?act=thanhtoan">Mua</a></button> 
            <button class="ml-[10px] bg-blue-300 p-[3px] rounded mb-[10px] text-white hover:bg-sky-700 hover:text-orange-400">Thêm Giỏ hàng</button>
        </div>';
}
?>
        </div>
    </div>
 